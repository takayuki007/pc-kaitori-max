<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','TOP') | PC買取</title>
    <meta name="description" content="@yield('description','PC買取は、PCを売りたい人のための買取情報記載の掲示板です。お住まいの地域の買取店舗を検索いただけます。')">
    <meta name="keywords" content="@yield('keywords', 'PC買取')">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!--全体を包む-->
    <div id="app" class="l-wrapper">
        <!--ヘッダー始まり-->
        <header class="l-header">
            <p class="l-logo"><a href="{{ route('top.show')}}" class="l-a">PC買取</a></p>
            <ul class="l-ul">
                @guest
                    <li class="l-li">
                        <a href="{{ route('login')}}" class="l-a">ログイン</a>
                    </li>
                    <li class="l-li">
                        <a href="{{ route('register')}}" class="l-a">ユーザー登録</a>
                    </li>
                @else
                    <li class="l-li">
                        <a href="{{ route('home')}}" class="l-a">マイページ</a>
                    </li>
                    <li class="l-li">
                        <a href="{{ route('logout') }}" class="l-a" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">ログアウト</a>
                    </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            </ul>
        </header>
        <!--ヘッダー終わり-->
<!--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">-->
<!--            <div class="container">-->
<!--                <a class="navbar-brand" href="{{ url('/') }}">-->
<!--                    {{ config('app.name', 'Laravel') }}-->
<!--                </a>-->
<!--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">-->
<!--                    <span class="navbar-toggler-icon"></span>-->
<!--                </button>-->
<!---->
<!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    <!-- Left Side Of Navbar -->
<!--                    <ul class="navbar-nav mr-auto">-->
<!---->
<!--                    </ul>-->
<!---->
                    <!-- Right Side Of Navbar -->
<!--                    <ul class="navbar-nav ml-auto">-->
                        <!-- Authentication Links -->
<!--                        @guest-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>-->
<!--                            </li>-->
<!--                            @if (Route::has('register'))-->
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>-->
<!--                                </li>-->
<!--                            @endif-->
<!--                        @else-->
<!--                            <li class="nav-item dropdown">-->
<!--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>-->
<!--                                    {{ Auth::user()->name }} <span class="caret"></span>-->
<!--                                </a>-->
<!---->
<!--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
<!--                                    <a class="dropdown-item" href="{{ route('logout') }}"-->
<!--                                       onclick="event.preventDefault();-->
<!--                                                     document.getElementById('logout-form').submit();">-->
<!--                                        {{ __('Logout') }}-->
<!--                                    </a>-->
<!---->
<!--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
<!--                                        @csrf-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        @endguest-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </nav>-->
        <!--メイン始まり-->
        <main class="l-main">
            @yield('content')
        </main>
        <!--メイン終わり-->
        <!--フッター始まり-->
        <footer class="l-footer">
            <div class="l-footer-wrap">
                <p class="l-footer-logo"><a href="{{ route('top.show')}}" class="l-a">PC買取</a></p>
                <ul class="l-footer-ul">
                    <li class="l-footer-li">
                        <a href="{{ route('info.show')}}" class="l-footer-a">店舗掲載について</a>
                    </li>
                    <li class="l-footer-li">
                        <a href="{{ route('rule.show')}}" class="l-footer-a">利用規約</a>
                    </li>
                    <li class="l-footer-li">
                        <a href="{{ route('privacy.show')}}" class="l-footer-a">プライバシーポリシー</a>
                    </li>
                    <li class="l-footer-li">
                        <a href="{{ route('transaction.show')}}" class="l-footer-a">特定商取引法に基づく表記</a>
                    </li>
                    <li class="l-footer-li">
                        <a href="{{ route('contact.show')}}" class="l-footer-a">お問合せ</a>
                    </li>
                </ul>
            </div>
            <p class="l-text">Copyright © PC買取. All Rights Reserved</p>
        </footer>
        <!--フッター終わり-->
    </div>
    <!--全体を包む終わり-->
</body>
</html>
