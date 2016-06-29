<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use Session;
use App\Subscriber;
use Mail;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and save all blog p[ost in that
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        ////return a view and pass in the above variable
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'title'         => 'required|max:255',
            'slug'          => 'required|alpha-dash|min:5|max:255|unique:posts,slug',
            'category_id'   => 'required|integer',
            'body'          => 'required',
            'image_path'    => 'image'
        ));

        //store in the database
        $post = new Post;
        $post->title       = $request->title;
        $post->slug        = $request->slug;
        $post->category_id = $request->category_id;
        $post->body        = $request->body;
        if( $request->hasFile('image') ) {
            $file = $request->file('image');
            $imageName = $request->slug . '.' . $file->getClientOriginalExtension();
            $file->move(base_path() . '/public/images/post/', $imageName);
            $post->image_path  = "/images/post/" . $imageName;
        }
        $post->save();

        $subscribers = Subscriber::all();

        Mail::send('emails.subscribe',
            array(
                    'title' => $post->title,
                    'slug' => $post->slug,
                    'category_id' => $post->category_id,
                    'body' => $post->body,
                    'created_at' => $post->created_at,
                    'category' => $post->category->name,
                    'image_path' => url('/') . "{$post->image_path}"

                ), 
                function($message) use($subscribers, $post)
                {   
                    foreach ($subscribers as $subscriber) {
                        $message->from('noreply@tnineblog.com');
                        $message->to($subscriber->email);
                        $message->subject("New Post : {$post->title}");
                    }

                });

        Session::flash('success', 'The Blog post has been successfully created!');

        //redirect to another page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as a var
        $post       = Post::findOrFail($id);
        $categories = Category::all();
        $cats       = [];
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        //reurn the view and pass in the var created previously
        return view('posts.edit')->with('post', $post)->with('categories', $cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        //Validate the data
        if ($request->input('slug') == $post->slug) {
            $this->validate($request, array(
                'title'       => 'required|max:255',
                'category_id' => 'required|integer',
                'body'        => 'required',
                'image_path'  => 'image|dimensions:min_width=400,min_height=600'
            ));
        } else {
            $this->validate($request, array(
                'title'       => 'required|max:255',
                'slug'        => 'required|alpha-dash|min:5|max:255|unique:posts,slug',
                'category_id' => 'required|integer',
                'body'        => 'required',
            ));
        }

        //Save the data to the database
        $post->title       = $request->input('title');
        $post->slug        = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body        = $request->input('body');

        $post->save();

        //set flash data with the success message
        Session::flash('success', 'The post has been successfully updated!');

        //redirect with flash message to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
