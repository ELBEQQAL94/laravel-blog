<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();

        // How many user, post we're going to create
       $usersQuantity = 50;
       $postsQuantity = 100;

       // create our seeds into database
       factory(User::class, $usersQuantity)->create();

       factory(Post::class, $postsQuantity)->create();

    }
}
