<nav class="Nav">
    <a href="/" class="Logo"><span class="Logo__first-letter"></span>G<span class="Logo__middle-letter">Y</span><span class="Logo__last-letter"></span>M</a>
    <ul class="Nav__list">
         <li class="Nav__item"><a href="/motivation" class="Nav__link {{ Request::is('motivation*') ? 'Nav__link--active' :  '' }}"><span>Motivation</span></a></li>
        <li class="Nav__item"><a href="/pages/learn" class="Nav__link {{ Request::is('pages/learn*') ? 'Nav__link--active' :  '' }}"><span>Learn</span></a></li>
        <li class="Nav__item"><a href="/nutrition" class="Nav__link {{ Request::is('nutrition*') ? 'Nav__link--active' :  '' }}"><span>Nutrition</span></a></li>
        <li class="Nav__item"><a href="/pages/diet" class="Nav__link {{ Request::is('pages/diet*') ? 'Nav__link--active' :  '' }}"><span>Diet</span></a></li>
        <li class="Nav__item"><a href="/workout" class="Nav__link {{ Request::is('workout*') ? 'Nav__link--active' :  '' }}"><span>Workout</span></a></li>
        <li class="Nav__item"><a href="/metrics" class="Nav__link {{ Request::is('metrics*') ? 'Nav__link--active' :  '' }}"><span>Metrics</span></a></li>
         <li class="Nav__item Search">
            <input type="text" class="Search__input" placeholder="search">
            <span class="glyphicon glyphicon-search Search__button" aria-hidden="true"></span>
        </li>
        @if (Auth::check())
            <li class="Nav__item"><a href="/profile" class="Nav__link {{ Request::is('profile*') ? 'Nav__link--active' :  '' }}"><span>My profile</span></a></li>
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
