@extends('app')

@section('title', '記事一覧')

@section('content')
  @include('nav')
 <div class="container">
   <div class="card-body">
     @if (session('status'))
      <div class="alert alert-success" role="alert">
       {{ session('status') }}
     </div>
        @endif
         <form method="GET" action="" class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" name="search" type="search" placeholder="タイトルを入力" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
        </form>
   </div>

   @foreach($articles as $article)
   <div class="card mt-3">
        <div class="card-body pt-0 pb-2">
          <h3 class="h3 card-title">
            {{ $article->title }}
          </h3>
        </div>
        <div class="card-body d-flex flex-row">
          <div class="card-like">
            {{ $article->content }}
           </div>
        </div>
        <div class="card-body d-flex flex-row">
          <div class="card-like">
            {{ $article->created_at }}
          </div>
        </div>
   </div>
   @endforeach
   {{ $articles->links() }}
@endsection