<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="sticky-top mb-4">
        <nav class="navbar navbar-expand navbar-dark bg-dark"> 
            <a class="navbar-brand" href="/">Storage Manager</a>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">予約</a></li>
                <li class="nav-item"><a href="#" class="nav-link">ストレージ</a></li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">関連案件情報</a>
                    <div class="dropdown-menu">
                        <a href="/opportunity_relations" class="dropdown-item">関連案件情報一覧</a>
                        <a href="/opportunity_relations/create" class="dropdown-item">関連案件情報新規作成</a>
                    </div>
                </li>

                <li class="nav-item dropdown active">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ユーザー</a>
                    <div class="dropdown-menu">
                        <a href="/users" class="dropdown-item">ユーザー一覧</a>
                        <a href="/users/create" class="dropdown-item">ユーザー新規作成</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">マイメニュー</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">マイページ</a>
                        <a href="#" class="dropdown-item">ログアウト</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>



    <div class="container">

        @include('commons.success_messages')
        @include('commons.error_messages')

        @yield('content')
    </div>



    <footer class="text-center p-3 border-top bg-dark text-light">
        2020 Kosuke Systems.
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
