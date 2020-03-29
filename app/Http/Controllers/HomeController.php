<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Image;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home', [
            'users'         => User::count(),
            'tags'          => Tag::count(),
            'articles'      => Article::count(),
            'images'        => Image::count(),
            'categories'    => Category::count(),
        ]);
    }
}
