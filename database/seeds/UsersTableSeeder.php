<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Nur Rizqoh',
                'email' => 'rizqoh@mail.com',
                'password' => bcrypt('rizqoh'),
                'remember_token' => str_random(10),
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'name' => 'Eka Putra',
                'email' => 'eka@mail.com',
                'password' => bcrypt('eka'),
                'remember_token' => str_random(10),
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ]
        ]);
    }
}
