<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
    
    protected $fillable = [
        "User",
        "Post"
    ];

    
    public function comment(){

        return $this->hasMany(Comment::class, 'post_id', 'id');

    }
}
