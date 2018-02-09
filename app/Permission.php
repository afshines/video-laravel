<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model{

    protected $table = 'permissions';
    protected $primaryKey = 'permissible_id';
    public $timestamps = false;

    protected $fillable = ['videoId','allowed'];

    public function permissionable()
    {
        return $this->morphTo();
    }

    public function scopeActive($query)
    {
        return $query->where('allowed', 1);
    }
}