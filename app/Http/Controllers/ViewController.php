<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('Pages.Home', [
            'title' => 'Home'
        ]);
    }

    public function show()
    {
        return view('Pages.Post',[
            'title' => 'Post'
        ]);
    }

    public function search()
    {
        return view('Pages.SearchResult',[
            'title' => 'Search'
        ]);
    }
}
