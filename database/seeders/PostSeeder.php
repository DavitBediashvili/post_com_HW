<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::create([
            "User" => 'david',
            "Post" => 'first post try'
        ]);

        Post::create([
            "User" => 'dave',
            "Post" => 'second post try'
        ]);
    }

    
}
