<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $table = "interest";
    
    protected $fillable = [
        'interest'
    ];

    public function people()
    {
        return $this->belongsToMany('App\People','people_interest');
    }
}
