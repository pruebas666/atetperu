<header class="header" id="header">

    <div class="nav__logo">

        <img src={{asset('img/logo-minedu.png')}} />
        <img src={{asset('img/logo-cbd.png')}} />

    </div>
    <hr class="line">

    <nav class="nav container">

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{route('inicio')}}" class="nav__link {{request()->routeIs('inicio') ? 'router-link-active' : ''}}">
                        <i class='bx bx-home-alt nav__icon'></i>
                        <span class="nav__name">Inicio</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{route('lenovo')}}" class="nav__link {{request()->routeIs('lenovo') ? 'router-link-active' : ''}}">
                        <i class='bx bx-tab nav__icon'></i>
                        <span class="nav__name">Lenovo</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{route('aoc')}}" class="nav__link {{request()->routeIs('aoc') ? 'router-link-active' : ''}}">
                        <i class='bx bx-tab nav__icon'></i>
                        <span class="nav__name">&nbsp;AOC&nbsp;</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{route('alldocube')}}" class="nav__link {{request()->routeIs('alldocube') ? 'router-link-active' : ''}}">
                        <i class='bx bx-tab nav__icon'></i>
                        <span class="nav__name">AllDocube</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{route('docs')}}" class="nav__link {{request()->routeIs('docs') ? 'router-link-active' : ''}}">
                        <i class='bx bxs-file-pdf nav__icon'></i>
                        <span class="nav__name">Docs</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{route('colabora')}}" class="nav__link {{request()->routeIs('colabora') ? 'router-link-active' : ''}}">
                        <i class='bx bx-heart bx-tada nav__icon'></i>
                        <span class="nav__name">Colabora</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
