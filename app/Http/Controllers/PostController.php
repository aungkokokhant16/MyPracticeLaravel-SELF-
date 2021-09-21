<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()

    {
        //create
        // $post = new Post();
        // $post->title = "this is title";
        // $post->description = "this is description";
        // $post->save();

        // Post::create([
        //     'title' => 'my practice',
        //     'description' => 'my web practice'
        // ]);
        // return "success";

        //update
        // Post::where('id', 2)->update([
        //     'title' => 'my design',
        //     'description' => 'my learning'
        // ]);

        // $post = Post::find(2);
        // $post->title = "this is my first practice";
        // $post->description = "this is my first crud";
        // $post->save();

        //Delete
        // Post::where('id', 2)->delete();

        // $post = Post::find(1);
        // $post->delete();
        $post = Post::all();
            // foreach($post as $p){
            //     Post::where('id',$p->id)->delete();
            // }
        return view('Home',compact('post'));
    }

    public function about()
    {
        return view('About');
    }
}
