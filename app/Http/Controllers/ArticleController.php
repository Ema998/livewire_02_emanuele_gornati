<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController
{
    public function create()
    {
        return view('articles.create');
    }

    public function index()
    {
        return view('articles.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }
}
