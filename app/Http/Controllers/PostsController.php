<?php


namespace App\Http\Controllers;


use http\Message\Body;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($name)
    {
        //$post = \DB::table('posts')->where('slug', $slug)->first();
        // select where 'slug'(column) is equal to $slug(URI)

        $post = Post::where('name', $name)->firstOrFail();

        return view
        (
            'post',['tablePost'=>$post]
        );
    }
    public function view()
    {
        return view('welcome');
    }
}
