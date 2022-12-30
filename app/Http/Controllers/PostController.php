<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Query\Builder;


class PostController extends Controller
{
    public function posts(Request $request){
        $show_list = [];
        $postebi = Post::select('id' , 'User', 'Post')->get();
        foreach($postebi as $each){
            array_push($show_list, $each);
        }

        
        return view('welcome', ['postebi' => $postebi]);
    }

    public function comment(Request $request, $id){
        $id = base64_decode($id);
        $posti = Post::select('id' ,'User', 'Post')->where('id', '=', $id)->get();
        $comment = Post::find($id)->comment()->get();

        if ($request->user != null){
            $useri = $request->user;
            $commenti = $request->comment;
            
            Comment::create([
                        "post_id"=> $id,
                        "User_name"=> $useri,
                        "comment"=> $commenti
                    ]);
            return redirect('/');
        }
        
        

        return view('comment', ['comment' => $comment, 'posti' => $posti]);
        
    }

    public function admin(Request $request){
        $show_list = [];
        $postebi = Post::select('id' , 'User', 'Post')->get();
        foreach($postebi as $each){
            array_push($show_list, $each);
        }

        if ($request->input('delete') != ''){
            $delete = $request->input('delete');
            Post::where('id', '=', $delete)->delete();
            Comment::where('post_id', '=', $delete)->delete();
            return redirect('http://admin.localhost:8000/posts');
            
        }

        if ($request->input('plus') != ''){
            Post::create([
                "User"=> $request->input('user'),
                "Post"=> $request->input('post')
            ]);
            return redirect('http://admin.localhost:8000/posts');
        }

        
        return view('admin', ['postebi' => $postebi]);
    }

    public function admin_comment(Request $request, $id){
        $id = base64_decode($id);
        $posti = Post::select('id' ,'User', 'Post')->where('id', '=', $id)->get();
        $comment = Post::find($id)->comment()->get();

        

        if ($request->input('delete_c') != ''){
            $delete = $request->input('delete_c');
            Comment::where('id', '=', $delete)->delete();
            return redirect('http://admin.localhost:8000/posts');
            
        }
        return view('admin_comment', ['comment' => $comment, 'posti' => $posti]);
    }

}
