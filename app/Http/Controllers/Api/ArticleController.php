<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\ArticleCollection;

class ArticleController extends Controller
{
    /**
     * @param Article $article
     * @return ArticleResource
     */
    public function show(Article $article): ArticleResource
    {
        return ArticleResource::make($article);
    }

    /**
     * @return ArticleCollection
     */
    public function index(): ArticleCollection
    {
        return ArticleCollection::make(Article::all());
    }
}