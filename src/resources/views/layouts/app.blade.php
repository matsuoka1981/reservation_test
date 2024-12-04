<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__wrap-icon-title">
            <a href="{{ Auth::check() ? '#mm2' : '#mm' }}">
                <div class="header__icon">
                    <div class="header__icon-bar-top"></div>
                    <div class="header__icon-bar-middle"></div>
                    <div class="header__icon-bar-bottom"></div>
                </div>
            </a>
            <h1 class="header__title">Rese</h1>
        </div>
        @yield('header_search')
    </header>
    <main>
        <div class="content">
            @yield('content')
        </div>

        @if (Auth::check())
        <!-- ログイン済みのとき -->
        <div id=mm2 class="mm2">
            <a href="#!">
                <div class="mm-1">✕</div>
            </a>
            <a href="/">
                <p class="mm-2">Home</p>
            </a>

            <form class="mm-2" action="/logout" method="POST">
                @csrf
                <button type="submit" class="mm-2-1">
                    Logout
                </button>
            </form>

            <!-- <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="mm-2">
                    Logout
                </button>
            </form> -->

            <!-- <a href="/login">
                <p class="mm-2">Logout</p>
            </a> -->


            <a href="/mypage">
                <p class="mm-2">Mypage</p>
            </a>
        </div>

        @else
        <!-- 未ログインのとき -->
        <div id=mm class="mm">
            <a href="#!">
                <div class="mm-1">✕</div>
            </a>
            <a href="/">
                <p class="mm-2">Home</p>
            </a>
            <a href="/register">
                <p class="mm-2">Registration</p>
            </a>
            <a href="/login">
                <p class="mm-2">Login</p>
            </a>
        </div>
        @endif




    </main>
</body>

</html>