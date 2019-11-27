<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'display_name' => 'Admin',
                'description' => 'Admin',
            ],
            [
                'name' => 'User',
                'display_name' => 'User',
                'description' => 'User',
            ],
        ]);
    }
}
