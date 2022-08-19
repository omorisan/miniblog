@extends('layouts.app')
@section('content')
@include('commons.errors')
<h1 class="page-heading">マイページ</h1>
<p>ようこそ、{{ Auth::user()->name }}さん</p>
<p>{{$user_id}}</p>
{{Auth::user()->bookmark_articles}}
<div>
    @foreach($articles as $article)
    <ul>
        <li>{{$article['title']}}</li>
        <li>{{$article['body']}}</li>
    </ul>
    @endforeach
</div>
<p><a href="{{ route('articles.index') }}">記事一覧へ</a></p>
<form action="{{ route('logout') }}" method="post">
    @csrf 
    <button type="submit">ログアウト</button>
</form>
@endsection()