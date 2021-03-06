<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AthleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('athletes')->insert([
            'first_name' => "Mehrdad",
            'last_name' => "Mirsamie",
            'phone' => '09159879890',
            'users_id' => 1,
            'role_id' => 1
        ]);
        DB::table('athletes')->insert([
            'first_name' => "maryam",
            'last_name' => "khodaparast",
            'phone' => '09189098765',
            'users_id' => 2,
            'role_id' => 1
        ]);
        DB::table('athletes')->insert([
            'first_name' => "sara",
            'last_name' => "alemi",
            'phone' => '09223478909',
            'users_id' => 3,
            'role_id' => 1
        ]);
        DB::table('athletes')->insert([
            'first_name' => "sonia",
            'last_name' => "salehi",
            'phone' => '09124356789',
            'users_id' => 4,
            'role_id' => 1
        ]);
        DB::table('athletes')->insert([
            'first_name' => "mona",
            'last_name' => "khakpash",
            'phone' => '09134567632',
            'users_id' => 5,
            'role_id' => 1
        ]);
        DB::table('athletes')->insert([
            'first_name' => "admin",
            'last_name' => "1",
            'phone' => '09184567632',
            'users_id' => 6,
            'role_id' => 2
        ]);

    }
}
