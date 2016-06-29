<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'content' => 'required'
            ));
        $comment = new Comment();
        $post = Post::where('id', '=', $id)->first();
        $comment->name = $request->name;
        $comment->content = $request->content;
        $comment->post_id = $post->id;

        $comment->save();
        $post->increment('post_comment_count');

        return redirect()->route('blog.single', $post->slug);
    }
}
