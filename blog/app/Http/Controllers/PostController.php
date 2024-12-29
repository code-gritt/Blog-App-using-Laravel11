<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "<h1>Welcome to laravel</h1>";
    }

    public function detail()
    {
        return "<h1>Welcome to laravel detail</h1>";
    }
}
