<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'nis' => '12345',
                'name' => 'Siswa Teladan',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'nis' => '67890',
                'name' => 'Siswa Berandalan',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ]
        ]);
    }
}
