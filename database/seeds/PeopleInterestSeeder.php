<?php

use App\PeopleInterest;
use App\People;
use App\Interest;
use Illuminate\Database\Seeder;

class PeopleInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeopleInterest::truncate();
        $interest = Interest::all();
        People::all()->each(function ($people) use ($interest) {
            $people->interest()->attach(
                $interest->random(rand(1, $interest->count()))->pluck('id')->toArray()
            );
        });
    }
}
