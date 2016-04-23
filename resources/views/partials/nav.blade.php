<nav class="Nav">
    <a href="/" class="Logo">G<span class="Logo__middle-letter">Y</span><span class="Logo__last-letter">M</span></a>
    <ul class="Nav__list">
        <li class="Nav__item Search">
            <input type="text" class="Search__input" placeholder="search">
            <span class="glyphicon glyphicon-search Search__button" aria-hidden="true"></span>
        </li>
        @if (Auth::check())
            <li class="Nav__item"><a href="/profile" class="Nav__link"><span>My profile</span></a></li>
            <li class="Nav__item"><a href="/logout" class="Nav__link"><span>Logout</span></a></li>
        @else
            <li class="Nav__item Nav__item--modal" data-type="login"><a href="#" class="Nav__link"><span>Log In</span></a></li>
            <li class="Nav__item Nav__item--modal" data-type="register"><a href="#" class="Nav__link"><span>Sign Up</span></a></li>
        @endif
    </ul>
    <li class="Nav__item Nav__item--hamburger">
        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
    </li>
</nav>
