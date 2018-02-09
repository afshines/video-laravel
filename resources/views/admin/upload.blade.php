@extends('admin.layout.auth')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ثبت ویدیو جدید
            <small>پنل مدیریت</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
            <li class="active">ثبت ویدیو</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">فرم ثبت ویدیو</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{route('video.upload')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>عنوان</label>
                                        <input name="title" type="text" class="form-control" placeholder="عنوان" required>
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="form-group {{ $errors->has('url') ? ' has-error' : '' }}">
                                        <label for="InputFile">آپلود ویدیو</label>
                                        <input type="file" name="url" id="InputFile" required>
                                        @if ($errors->has('url'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('url') }}</strong>
                                            </span>
                                        @endif
                                        <p class="help-block">ویدیو استاندارد</p>
                                    </div>

                                    <div class="form-group {{ $errors->has('pic') ? ' has-error' : '' }}">
                                        <label for="InputFile">عکس شاخص</label>
                                        <input type="file" name="pic" id="InputImage">
                                        @if ($errors->has('pic'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('pic') }}</strong>
                                            </span>
                                        @endif
                                        <p class="help-block">تصویر استاندارد</p>
                                    </div>

                                    <div class="form-group ">
                                        <label> تاریخ شروع  <span id="selectstartDate"> ( انتخاب نشده )</span></label>
                                        <input id="startDate" type="hidden" name="startDate">
                                        <div  class="date-picker2" ></div>
                                    </div>
                                </div>
                                <div class="col-md-6">


                                    <div>
                                        <p>اگر میخواهید محدودیت بذارید مشخص کنید</p>

                                        <div class="form-group">
                                            <label>نمایندگی ها</label>
                                            @php
                                                $u = new App\User();
                                            @endphp
                                            <select name="users[]" class="form-control select2" multiple="multiple" data-placeholder="یک یا چند مورد را انتخاب نمایید" style="width: 100%;">
                                                @foreach($u->all() as $user)
                                                    <option value="{{$user->id}}">{{$user->name}} {{$user->lname}}</option>
                                                @endforeach
                                            </select>
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                        <label>شهر ها</label>
                                        @php
                                             $c = new App\City();
                                        @endphp
                                        <select name="cities[]" class="form-control select2" multiple="multiple" data-placeholder="یک یا چند مورد را انتخاب نمایید" style="width: 100%;">
                                        @foreach($c->all() as $city)
                                            <option value="{{$city->city_id}}">{{$city->city_name}}</option>
                                        @endforeach
                                        </select>
                                    </div><!-- /.form-group -->
                                    </div>


                                    <div class="form-group ">
                                        <label> تاریخ اتمام  <span id="selectDate"> ( انتخاب نشده )</span></label>
                                        <input id="expire" type="hidden" name="expire">
                                        <div  class="date-picker" ></div>
                                    </div>
                                </div>
                            </div>




                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">ثبت اطلاعات</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Config;

$carbon = new Carbon();
$carbon->timezone = new DateTimeZone(Config::get('app.timezone'));
$carbon->startOfDay();
$yesterday = $carbon->yesterday();
?>

<script type="text/javascript">

    $(document).ready(function() {
        var yesterday = '{{$yesterday->timestamp*1000}}';
        window.timestamp = '{{$carbon->timestamp}}';

        $(".select2").select2({ dir: "rtl"});

        $(".date-picker").pDatepicker({
            maxDate: parseInt(yesterday),
            onSelect:function (timestamp) {

                window.timestamp = (''+timestamp).substring(0,(''+timestamp).length-3);
                $('#expire').val( window.timestamp);
                $('#selectDate').html(' ( انتخاب شده )');
            }
        });

        $(".date-picker2").pDatepicker({
            maxDate: parseInt(yesterday),
            onSelect:function (timestamp) {

                window.timestamp = (''+timestamp).substring(0,(''+timestamp).length-3);
                $('#startDate').val( window.timestamp);
                $('#startDate').html(' ( انتخاب شده )');
            }
        });
      //  $('#expire').val( window.timestamp);

    });


</script>

@endsection
