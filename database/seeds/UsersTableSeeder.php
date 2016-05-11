<?php

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
        factory(App\User::class, 3)->create()->each(
            function($user) {
              factory(App\Article::class)->create(['user_id' => $user->id]);
            }
        );
    }
}
