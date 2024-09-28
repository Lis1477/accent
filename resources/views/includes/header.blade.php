<header class="header">
    <div class="navigation">
        <ul>
            <li><a href="{{ route('main-page') }}">Главная страница</a></li>
            <li><a href="{{ route('about') }}">О нас</a></li>
            <li><a href="{{ route('news') }}">Новости</a></li>
        </ul>
    </div>
    <div class="city">
        @if(\Request::route()->getName() == 'main-page')
            {{ (isset($current_city)) ? $current_city['name'] : '' }}
        @else
            {{ (Cookie::get('current_city')) ? json_decode(Cookie::get('current_city'))->name : '' }}
        @endif
    </div>
</header>
