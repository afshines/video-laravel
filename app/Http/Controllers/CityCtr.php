<?php

namespace App\Http\Controllers;


use App\State;
use App\City;

class CityCtr extends Controller
{
    public function index($id)
    {
       $state = State::find($id);
       return $state->cities()->get(array('city_id','city_name'));
    }

    public  function getState($id)
    {
        $city = City::find($id);
        return $city->state()->get(array('state_id','state_name'));
    }


    public function cities()
    {
        return State::get(array('state_id','state_name'));
    }
}