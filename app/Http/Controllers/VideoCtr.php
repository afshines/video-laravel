<?php

namespace App\Http\Controllers;


use App\Video;
use App\Permission;
use App\City;
use App\User;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Yajra\DataTables\Facades\DataTables;

class VideoCtr extends Controller implements Restful
{

    public function __construct()
    {
        $this->middleware('admin', ['except' => ['show', 'index','_final']]);
    }

    public function  _final()
    {
        return Video::find(1);
    }
    public function getDataTable()
    {
        $model = Video::query();

        return DataTables::eloquent($model)
            ->editColumn('pic', function (Video $video) {
                if ($video->pic != null)
                    return '/uploads/pics/' . $video->pic;
                else
                    return '/img/no-picture.png';
            })
            ->editColumn('url', function (Video $video) {
                return '/uploads/videos/' . $video->url;
            })
            ->editColumn('created_at', function (Video $video) {
                return \Morilog\Jalali\jDateTime::strftime('Y/m/d H:i:s', strtotime($video->created_at));
            })
            ->editColumn('expire', function (Video $video) {
                if(null != $video->expire)
                    return \Morilog\Jalali\jDateTime::strftime('Y/m/d', strtotime($video->expire));
                else
                    return 'بدون محدودیت';
            })
            ->toJson();
    }

    public function index(Request $request, $id = null)
    {
        if(null == $id)
            return Video::all();
        else
            return $this->show($id);
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:100',
            'pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'url' => 'required|mimes:mov,wmv,avi,mpeg,flv,3gp,mp4|max:1024000',
        ]);

        $video = new Video();

        $pic =null;

        if (Input::file('pic')!=null && Input::file('pic')->isValid()) {
            $pic = time().rand(1, 9999).'.'.Input::file('pic')->getClientOriginalExtension();
            Input::file('pic')->move(public_path('uploads/pics'), $pic);
        }

        $url =null;

        if (Input::file('url')!=null && Input::file('url')->isValid()) {
            $url = time().rand(1, 9999).'.'.Input::file('url')->getClientOriginalExtension();
            Input::file('url')->move(public_path('uploads/videos'), $url);



            if($request->has('expire') && $request->expire != ""){
                $carbon = new Carbon();
                $carbon->timezone = new DateTimeZone(Config::get('app.timezone'));

                $carbon->timestamp = ((integer)$request->expire);
                $video->expire = $carbon->toDateTimeString();
            }

            if($request->has('startDate') && $request->startDate != ""){
                $carbon = new Carbon();
                $carbon->timezone = new DateTimeZone(Config::get('app.timezone'));

                $carbon->timestamp = ((integer)$request->startDate);
                $video->startDate = $carbon->toDateTimeString();
            }



            $video->title = $request->get('title');

            $video->pic = $pic;
            $video->url = $url;


             $video->save();


             //users
            if($request->has('users'))
                $this->sync($request->users,$video->videoId,'App\User');

            //cities
            if($request->has('cities'))
                $this->sync($request->cities,$video->videoId,'App\City');


             if($request->has('api'))
             return $video;
        }

        if($request->has('api'))
              return json_encode(array('status'=>0));
        else
              return redirect('/admin/videos');

    }

    public function show($id)
    {
        return Video::find($id);
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function sync_city(Request $request)
    {
        $ids = $request->ids;
        $id = $request->id;

        return $this->sync($ids,$id,'App\City');
    }

    public function sync_user(Request $request)
    {
        $ids = $request->ids;
        $id = $request->id;

        return $this->sync($ids,$id,'App\User');
    }

    private function sync($ids,$id,$type)
    {
        Permission::where('videoId',$id)->where('permissionable_type',$type)->delete();

        foreach ($ids as $i)
        {
            switch ($type)
            {
                case 'App\City':
                    City::find($i)->permission()->create(array('videoId'=>$id));
                    break;

                case 'App\User':
                    User::find($i)->permission()->create(array('videoId'=>$id));
                    break;
            }

        }

        return 1;
    }
}