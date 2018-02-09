<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'videoId';

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }


}