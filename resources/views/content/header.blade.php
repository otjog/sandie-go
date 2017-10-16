<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid col-lg-9 block-center floatnone">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('assets/img/logo.jpg') }}" alt="SanDieGO!"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Выбрать направление <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('order', ['alias' => 'from_la_to_sd'])}}">из Аэропорта Лос-Анджелес в Сан Диего</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('order', ['alias' => 'from_sd_to_la'])}}">из Сан Диего в Аэропорт Лос-Анджелеса</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">Написать нам</a></li>
            </ul>
        </div>
    </div>
</nav>