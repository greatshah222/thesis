<?php

use Illuminate\Database\Seeder;
use App\User;
use App\ForumModel\Fcategory;
use App\ForumModel\Question;
use App\ForumModel\Reply;
use App\ForumModel\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(SettingsTableSeeder::class);
        factory(User::class, 1)->create();
        factory(Fcategory::class, 5)->create();
        factory(Question::class, 10)->create();
        factory(Reply::class, 10)->create()->each(function ($reply) {
            return $reply->like()->save(factory(Like::class)->make());
        });
    }
}
