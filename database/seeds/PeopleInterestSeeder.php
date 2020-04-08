<?php

use App\PeopleInterest;
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
        $newTag = new PeopleInterest();
        $newTag->people_id = 1;
        $newTag->interest_id = 1;
        $newTag->save();

        $newTag = new PeopleInterest();
        $newTag->people_id = 1;
        $newTag->interest_id = 2;
        $newTag->save();
    }
}
