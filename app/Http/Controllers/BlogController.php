<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * View index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('blog.home', ['articles' => Article::orderBy('id', 'DESC')->paginate(5)]);
    }

    /**
     * view home list articles for category
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchCategory(Request $request)
    {
        $category = Category::searchName($request->name)->first();
        return view('blog.home', ['articles' => $category->articles()->paginate(5)]);
    }

    /**
     * view home list articles for tag
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchTags(Request $request)
    {
        $tag = Tag::search($request->name, true)->first();
        return view('blog.home', ['articles' => $tag->articles()->paginate(5)]);
    }
}
