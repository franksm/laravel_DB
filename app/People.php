<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'name',
        'age',
        'born'
    ];

    public function interest()
    {
        return $this->belongsToMany('App\Interest','people_interest');
    }
}
