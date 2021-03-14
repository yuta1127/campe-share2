@extends('app')

@section('title', '記事投稿')

@include('navafterlogin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            <div class="card-text">
              <form method="POST" action="{{route('articles.store')}}">
              @csrf
                <div class="md-form">
                <label>タイトル</label>
                <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
                </div>
                <div class="form-group">
                <label></label>
                <textarea name="content" required class="form-control" rows="16" placeholder="本文">{{ old('content') }}</textarea>
                </div>
                <input class="btn btn-info" type="submit" value="投稿する"></input>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection