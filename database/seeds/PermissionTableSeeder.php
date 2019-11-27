<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('permissions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('permissions')->insert([
            [
                'name' => 'comment-post',
                'display_name' => 'Comment post',
                'description' => 'Allow user comment in post',
            ],
            [
                'name' => 'post-create',
                'display_name' => 'Create a new post',
                'description' => 'Allow admin create a new post',

            ],
            [
                'name' => 'post-update',
                'display_name' => 'Update a post',
                'description' => 'Allow admin update a post',
            ],
            [
                'name' => 'post-delete',
                'display_name' => 'Delete post',
                'description' => 'Allow admin delete a post',
            ],
            [
                'name' => 'update-info',
                'display_name' => 'Update info',
                'description' => 'Allow user and admin update info',
            ],
            [
                'name' => 'forgot-password',
                'display_name' => 'Forgot password',
                'description' => 'Allow user forgot password',
            ],
        ]);
    }
}
