<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Comment;
use App\Category;

class BlogController extends Controller
{
    public function getIndex()
    {
    	$posts = Post::orderBy('id', 'desc')->paginate(9);
    	return view('blog.index')->with('posts', $posts);
    }

    public function getSingle($slug)
    {
    	//fetch from the DB based on the slug
    	$post = Post::where('slug', '=', $slug)->first();
        $comments = Comment::where('post_id', '=', $post->id)->orderBy('id', 'desc')->paginate(10);
        $categories = Category::all();
        $previous = Post::where('id', '=', $post->id + 1)->first();
        $next = Post::where('id', '=', $post->id - 1)->first();
        $post->increment('post_view_count');
        $popular_posts = Post::orderBy('post_view_count', 'desc')->take(5)->get();

    	//return the view and pass in the post object
    	return view('blog.single')->with('post', $post)->with('comments', $comments)->with('categories', $categories)->with('next', $next)->with('previous', $previous)->with('popular_posts', $popular_posts);

    }
}
