<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            "post_id" => '1',
            "User_name" => 'vaxo',
            "comment" => 'vaaaaaaaaaa'
        ]);

        Comment::create([
            "post_id" => '1',
            "User_name" => 'tristani',
            "comment" => 'ooooooooo'
        ]);

        Comment::create([
            "post_id" => '2',
            "User_name" => 'jumberi',
            "comment" => 'appppppppppppa'
        ]);

        Comment::create([
            "post_id" => '2',
            "User_name" => 'kombala',
            "comment" => 'ki'
        ]);
    }
}
