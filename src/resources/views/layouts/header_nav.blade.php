<nav>
    <ul class="header-nav__content">
        @auth
        <li class="header-nav__item">
            <form action="/logout" class="header-nav__form" method="post">
                @csrf
                <button class="header-nav__btn">ログアウト</button>
            </form>
        </li>
        <li class="header-nav__item">
            <a href="{{ route('mypage') }}" class="header-nav__btn">マイページ</a>
        </li>
        <li class="header-nav__item">
            <a href="/post" class="post-btn">レシピ投稿</a>
        </li>
        @endauth

        @guest
        <li class="header-nav__item">
            <a href="{{ route('login') }}" class="header-nav__btn">ログイン</a>
        </li>
        @endguest
    </ul>
</nav>