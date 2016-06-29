<?php 

namespace App\Http\Controllers;

use App\Post;
use App\Category;

/**
* 
*/
class PagesController extends Controller
{
	public function getIndex()
	{
		$posts = Post::orderBy('id', 'desc')->paginate(3);
		$categories = Category::all();
		$popular_posts = Post::orderBy('post_view_count', 'desc')->take(5)->get();
		
		return view('pages.welcome')->with('posts', $posts)->with('categories', $categories)->with('popular_posts', $popular_posts);
	}
}