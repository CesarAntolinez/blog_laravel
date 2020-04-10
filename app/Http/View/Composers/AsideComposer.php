<?php

namespace App\Http\View\Composers;

use App\Category;
use App\Tag;
use Illuminate\View\View;

class AsideComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();
        $view->with('categories', $categories);
        $view->with('tags', $tags);
    }
}
