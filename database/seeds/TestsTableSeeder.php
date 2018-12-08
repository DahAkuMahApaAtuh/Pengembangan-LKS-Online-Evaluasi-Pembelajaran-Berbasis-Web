<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            [
                'name' => 'Matematika',
                'duration' => 60,
                'end_date'  => Carbon::now()->addDays(3),
            ],
            [
                'name' => 'Bhs. Inggris',
                'duration' => 45,
                'end_date'  => Carbon::now()->addDays(3),
            ]
        ]);
    }
}
