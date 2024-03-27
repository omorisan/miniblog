@extends('layouts.app')
@section('content')
<div class="welcome">
    <h1>何かしようかな</h1>
    {{--@auth
    <a class="btn" href="{{ route('home') }}">マイページ</a>
    <a class="btn" href="{{ route('articles.index') }}">ブログを見る</a>
    <a class="btn" href="{{ route('register') }}">会員登録</a>
    @else
    
    <a class="btn" href="{{ route('login') }}">ログイン</a>
    @endauth--}}
</div>
@endsection()