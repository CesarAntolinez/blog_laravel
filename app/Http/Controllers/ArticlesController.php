<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Image;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.articles.index', ['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('admin.articles.create', ['categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $name = 'blog_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('/img/articles');
            $file->move($path, $name);
        }

        //Crear Articulo
        $article = new Article($request->all());
        $article->user_id = Auth::id();
        $article->save();

        //Agergar los tags a article_tags
        $article->tags()->sync($request->tags);

        //Crear imagen
        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article->id);
        $image->save();

        flash('Se ha creado el articulo ' . $article->title)->success();

        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
