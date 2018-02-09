<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class State extends Model
{
    protected $table = 'state';
    protected $primaryKey = 'state_id';
    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany('App\City','state_id');
    }
}