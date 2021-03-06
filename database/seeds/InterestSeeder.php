<?php

use App\Interest;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interest::truncate();
        $newInterest = new Interest();
        $newInterest->interest = 'Play Computer';
        $newInterest->save();

        $newInterest = new Interest();
        $newInterest->interest = 'Coding';
        $newInterest->save();

        $newInterest = new Interest();
        $newInterest->interest = 'Shopping';
        $newInterest->save();
    }
}
