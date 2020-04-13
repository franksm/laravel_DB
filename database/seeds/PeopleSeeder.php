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
        People::truncate();
        factory(People::class,10)->create();
    }
}
