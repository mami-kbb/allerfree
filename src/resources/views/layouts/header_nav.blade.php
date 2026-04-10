<nav>
    <ul class="header-nav__content">
        @auth
        <li class="header-nav__item">
            <a href="{{ route('mypage') }}" class="header-btn header-btn--light">マイページ</a>
        </li>
        <li class="header-nav__item">
            <a href="/post" class="header-btn header-btn--light">レシピ投稿</a>
        </li>
        <li class="header-nav__item">
            <form action="/logout" class="header-nav__form" method="post">
                @csrf
                <button class="header-btn header-btn--dark">ログアウト</button>
            </form>
        </li>
        @endauth

        @guest
        <li class="header-nav__item">
            <a href="{{ route('login') }}" class="header-btn header-btn--dark">ログイン</a>
        </li>
        @endguest
    </ul>
</nav>