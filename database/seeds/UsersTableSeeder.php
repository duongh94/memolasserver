<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::table('users')->insert([

            [
                'name' => 'Test1',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('123456'),
                'role_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Sakuraiya',
                'email' => 'sakuraiya@jupiter.jcom.co.jp',
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Watanabego',
                'email' => 'watanabego@jupiter.jcom.co.jp',
                'password' => Hash::make('J(9tAr.z'),
                'role_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Okuboto',
                'email' => 'okuboto@jupiter.jcom.co.jp',
                'password' => Hash::make('F.6r$hG*'),
                'role_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Kanai',
                'email' => 'kanai@ab-alba.com',
                'password' => Hash::make('Jalba0402#'),
                'role_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
