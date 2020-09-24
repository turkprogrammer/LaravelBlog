<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function index(){
        $pages = Page::paginate(3);
        return view('page_list', compact('pages'));
    }
    
    public function page($slug){
         $page = Page::where('slug', '=', $slug)->firstorFail();
        return view('page', compact('page'));
    }
}
