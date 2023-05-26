<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($num = 9)
    {
        $posts =  Post::orderBy('created_at', 'asc')->paginate($num);
        return view('posts.index')->with('posts', $posts);
    }

    //last minute feature, could have reporposed index to be less repetitive
    public static function showXArticles($num = 3)
    {
        $posts =  Post::orderBy('created_at', 'asc')->paginate($num);
        return $posts;
    }

    public function randomArticle()
    {
        if (Post::inRandomOrder()->count() > 0) {
            $random = Post::inRandomOrder()->limit(1)->get();
            $post = $random[0];
            return view('posts.randomArticle')->with('post', $post);
        } else {
            $post = null;
            return view('posts.randomArticle')->with('post', $post);
        }
    }

    public function search(Request $request){
        $searchTerm = $request->search;

        //copied this from https://www.codegrepper.com/code-examples/php/search+keyword+in+laravel+query
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $searchTerm = str_replace($reservedSymbols, ' ', $searchTerm);

        $searchValues = preg_split('/\s+/', $searchTerm, -1, PREG_SPLIT_NO_EMPTY);

        $posts = Post::where(function ($q) use ($searchValues) {
            foreach ($searchValues as $value) {
            $q->orWhere('title', 'like', "%{$value}%");
            $q->orWhere('body', 'like', "%{$value}%");
            }})->orderBy('created_at', 'asc')->paginate(9);

        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
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
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


//USEFUL queries - used throught project as reference.
//$posts =  Post::all();
//$posts =  Post::orderBy('title', 'desc')->get();
//$posts =  Post::orderBy('title', 'desc')->paginate();
//$posts =  Post::orderBy('title', 'desc')->take(1)->get();
//return Post::where('title', 'Post Two')->get();
//$posts =  DB::select('SELECT * FROM posts');