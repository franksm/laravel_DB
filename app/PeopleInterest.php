<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleInterest extends Model
{
    protected $table = 'people_interest';

    protected $fillable = [
        'people_id',
        'interest_id'
    ];
}
