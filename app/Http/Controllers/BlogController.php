<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.home', ['articles' => Article::orderBy('id', 'DESC')->paginate(5)]);
    }
}
