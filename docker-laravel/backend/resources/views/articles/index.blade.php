@extends('app')

@section('title', '記事一覧')

@section('content')
  @include('navafterlogin')
 <div class="container">
   <div class="card-body">
     @if (session('status'))
      <div class="alert alert-success" role="alert">
       {{ session('status') }}
     </div>
        @endif
        <form method="GET" action="{{ route('articles.create') }}" class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">新規投稿</button>
        </form>
        <form method="GET" action="{{ route('articles.index') }}" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="タイトルを入力" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
        </form>
   </div>

   @foreach($articles as $article)
   <div class="card mt-3">
        <div class="card-body pt-0 pb-2">
          <h3 class="h3 card-title">
          <a class="text-dark" href="{{ route('articles.show',[$article->id]) }}">
          {{ $article->title }}
          </a>
          </h3>
        </div>
        <div class="card-body d-flex flex-row">
          <div class="card-like">
            {{ $article->content }}
           </div>
        </div>
        <div class="d-flex justify-content-start">
          <div class="card-body d-flex flex-row">
            <div class="p-2">
              <article-like  :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
              :initial-count-likes='@json($article->count_likes)'
              :authorized='@json(Auth::check())'
              endpoint="{{ route('articles.like', ['article' => $article]) }}"
              >
              </article-like>
            </div>
          </div>
          <div class="card-body d-flex flex-row">
            <div class="p-2">
              {{ $article->created_at }}
            </div>
          </div>
        </div>
   </div>
   @endforeach
   {{ $articles->links() }}
@endsection