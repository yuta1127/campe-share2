<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function search(Request $request,Article $article)
    {
        $articles = $article->search($request);

        //viewに渡す
        return view('top',compact('articles'));
    }
}