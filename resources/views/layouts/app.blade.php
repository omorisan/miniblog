<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Denryu.site</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <a href="/" class="site-title">Denryu.site</a>
        <nav class="tab">
            <div>こんちゃ！</div>
            {{---
            <ul>
                @if (Auth::check())
                <li><a class="tab-item{{ Request::is('home') ? ' active' : ''}}" href="{{ route('home') }}">マイページ</a></li>
                <li><a class="tab-item{{ Request::is('articles') ? ' active' : ''}}" href="{{ route('articles.index') }}">記事検索</a></li>
                <li><a class="tab-item{{ Request::is('bookmarks') ? ' active' : ''}}" href="{{ route('bookmarks') }}">ブックマーク</a></li>           
                <li>
                    <form on-submit="return confirm('ログアウトしますか？')" action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">ログアウト</button>
                    </form>
                </li>
                <li><a href="{{ route('register') }}">会員登録</a></li>
                @else 
                <li><a href="{{ route('login') }}">ログイン</a></li>
                
                @endif
            </ul>--}}
        </nav>
    </header>
    <main class="container">

        @yield('content')

    </main>
    <footer>
        &copy; Denryu
    </footer>
</body>
</html>