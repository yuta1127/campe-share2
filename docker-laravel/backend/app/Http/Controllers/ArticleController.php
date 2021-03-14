<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request,Article $article)
    {
        $articles = $article->search($request);


        return view('articles.index',compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request,Article $article)
    {
        $article->user_id = Auth::id();
        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->save();
        return redirect('articles');
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit',['article' => $article]);
    }

    public function update(Request $request,$id)
    {
        $article = Article::find($id);

        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();
        return redirect('articles');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('articles');
    }

    public function like(Article $article)
    {
        $id = Auth::id();
        $article->likes()->attach($id);

        return [
            'id' => $article->id,
            'countLikes' => $article->count_likes,
        ];
    }

    public function unlike(Article $article)
    {
        $id = Auth::id();
        $article->likes()->detach($id);

        return [
            'id' => $article->id,
            'countLikes' => $article->count_likes,
        ];
    }
}
