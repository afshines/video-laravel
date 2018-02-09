<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model{

    protected $table = 'city';
    protected $primaryKey = 'city_id';
    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo('App\State','state_id');
    }

    public function permission()
    {
        return $this->morphMany(\App\Permission::class, 'permissionable');
    }

}
