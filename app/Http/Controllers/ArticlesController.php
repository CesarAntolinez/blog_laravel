<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests\ArticleRequest;
use App\Image;
use App\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $articles = Article::search($request->search)->orderBy('id', 'DESC')->paginate(5);
        /*$articles->earch(function ($article){
            $article->category;
            $article->user;
        });
        dd($articles);*/
        return view('admin.articles.index', ['articles' => $articles]);
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
     * @param ArticleRequest $request
     * @return RedirectResponse
     */
    public function store(ArticleRequest $request)
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
     * @return \Illuminate\Contracts\View\Factory|RedirectResponse
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|RedirectResponse
     */
    public function edit($id)
    {
        $article = Article::find($id);
        if (isset($article))
        {
            $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
            $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');

            return view('admin.articles.edit', ['categories' => $categories, 'tags' => $tags, 'article' => $article]);
        }
        flash('No se encontro el artículo')->warning();
        return redirect()->route('admin.articles.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        $article->tags()->sync($request->tags);
        flash('Se a editado el artículo ' . $article->title)->success();
        return redirect()->route('admin.articles.index');
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
