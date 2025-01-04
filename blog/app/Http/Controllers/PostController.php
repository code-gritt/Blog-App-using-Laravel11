<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "<h1>Welcome to laravel</h1>";
    }

    public function detail($id)
    {
        return "<h1>Welcome to laravel detail $id</h1>";
    }

    public function oldUrl()
    {
        return redirect('/new-url');
    }

    public function newUrl()
    {
        return "<h1>Welcome to new url page</h1>";
    }
}
