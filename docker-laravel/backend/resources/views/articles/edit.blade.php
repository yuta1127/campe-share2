@extends('app')

@section('title', '記事更新')

@include('navafterlogin')

@section('content')
<div class="container">
  <div class="card mt-3">

  <form method="POST" action="{{ route('articles.update', [$article->id]) }}">
    @method('PATCH')
    @csrf
    <div class="md-form">
         <label>タイトル</label>
         <br>
         <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
    </div>
    <div class="form-group">
      <label>本文</label>
      <textarea name="content" required class="form-control" rows="16" placeholder="本文">{{ $article->content ?? old('content') }}</textarea>
    </div>
      <input class="btn btn-info" type="submit" value="更新する"></input>
  </form>
@endsection
