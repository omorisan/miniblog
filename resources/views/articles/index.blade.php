@extends('layouts.app')
@section('content')
<h1 class="page-heading">記事検索</h1>
<p><a href="{{ route('articles.create') }}">記事を書く</a></p>
@foreach($articles as $article)
<p>{{$article->bookmark}}</p>
@endforeach
@include('articles.articles')
@endsection()