@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('navafterlogin')
  <div class="container">
  <div class="card mt-3">
  <div class="card-body pt-0">
    <h3 class="h4 card-title">
        {{ $article->title }}
    </h3>
    <div class="card-text">
        {{ $article->content }}
    </div>
  </div>
  <form method="GET" action="{{ route('articles.edit',[$article->id]) }}">
    @csrf
    <input class="btn btn-info" type="submit" value="変更する"></input>
  </form>

  <form method="POST" action="{{route('articles.destroy',[$article->id])}}" id="delete_{{$article->id}}">
     @csrf
     @method('DELETE')
    <a href="#" class="btn btn-danger" data-id="{{$article->id}}" onclick="deletePost(this);">削除する</a>
  </form>
</div>
</div>

<script>
function deletePost(e){
    'use strict';
    if (confirm('本当に削除していいですか？')){
        document.getElementById('delete_'+e.dataset.id).submit();
    }
}
</script>
@endsection