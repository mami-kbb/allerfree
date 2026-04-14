<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allerfree</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas:wght@400;700&display=swap" rel="stylesheet">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <a href="{{ route('recipes.list') }}" class="header__heading">allerfree</a>
            <div class="header__search">
                @yield('search')
            </div>
            <div class="header__nav">
                @yield('nav')
            </div>
        </div>
    </header>
    <main class="content">
        @yield('content')
    </main>
</body>
</html>