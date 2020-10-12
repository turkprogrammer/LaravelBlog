<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller {

    //
    public function index() {
        //$posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::paginate(3);

        return view('home', compact('posts'));
    }

    public function post($slug) {

        $post = Post::where('slug', '=', $slug)->firstorFail();
        //dd($post);
        return view('post', compact('post'));
    }
    
      
        public function search(Request $request){
            $s = $request->s;
            //dd($s);
            $posts = Post::where('title','LIKE', "%{$s}%")->orderBy('title')
                    ->paginate(5);
            return view('result', compact('posts'));
        }

}
