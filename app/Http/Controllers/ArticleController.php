<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Like;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->limit(6)->get();
        return view('articles.index', ['article' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->name = $request->input('name');
        $article->text = $request->input('text');
        $article->tag = $request->input('tag');
        $article->save();

        return redirect('/');
    }

    public function show_all()
    {
        $articles = Article::latest()->filter(request(['tag']))->paginate(10);
        return view('articles.show-all', ['article' => $articles]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {

        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
