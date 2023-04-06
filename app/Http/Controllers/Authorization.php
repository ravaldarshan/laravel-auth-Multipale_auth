<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class Authorization extends Controller
{
    public function show()
    {
        return 'it work bro.';
    }

    public function edit()
    {
        return 'it work bro.';
    }
    public function index()
    {
        $posts  =post::all();

        return view('policy.index',compact('posts'));
    }
    
}
