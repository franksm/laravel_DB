<?php

use App\People;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newPeople = new People();
        $newPeople->name = 'frank';
        $newPeople->age='25';
        $newPeople->born='1995/04/29';
        $newPeople->save();
    }
}
