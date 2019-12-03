<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);

    }


    public function index()
    {

        /*$allPosts = Post::latest();

        if ($month = request('month')) {
            $allPosts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')) {
            $allPosts->whereYear('created_at', $year);
        }

        $allPosts = $allPosts->get(); or nicher ta */

        $allPosts = Post::latest()->filter(request()->only(['month', 'year']))->get();

        //temporary
        /*$archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();


    	return view('posts.index', compact('allPosts', 'archives'));  or nicher 2 tar jekono ekta */

        /*$archives = Post::archives();

        return view('posts.index', compact('allPosts', 'archives')); or nicher ta */

        return view('posts.index', compact('allPosts'));

    }//end of index()



    public function show(Post $post){

    	return view('posts.show', compact('post'));

    }//end of show()



    public function create(){

    	return view('posts.create');

    }//end of create()



    public function store(){

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'

        ]);

        auth()->user()->publish(

            new Post(request(['title', 'body']))
        );

    	/*Post::create([
            'title' => request('title'),

            'body' => request('body'),

            'user_id' => auth()->id() //or auth()->user()->id

        ]);*/

        session()->flash('message', 'Your post has just been published!');

    	return redirect('/');

    }//end of store()
}
