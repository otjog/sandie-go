<section id="home" class="top_cont_outer page_section home">
    <div class="hero_wrapper">
        <div class="container">
            <div class="row hero_section">
                <div class="col-lg-9 center-block floatnone vcenter">
                    <h1 class="text-center" style="color: white">Ежедневные рейсы</h1>
                    <h2 class="text-center" style="color: white"> San Diego - Los Angeles - San Diego</h2>
                </div>
                <div class="col-lg-9 center-block floatnone">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form">
                        <form action="{{route('home')}}" class="form-horizontal" role="form" method="post">
                            <div class="form-group">
                                <select class="form-control input-lg" id="orderDirection" name="orderDirection">
                                    <option value="none" disabled selected>Выберите направление</option>
                                    <option value="from_la_to_sd">из Аэропорта Лос-Анджелес в Сан Диего</option>
                                    <option value="from_sd_to_la">из Сан Диего в Аэропорт Лос-Анджелеса</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Продолжить</button>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9 center-block floatnone vcenter">
                    <p class="text-justify">Мы совершаем ежедневные поездки из San Diego (California) в основной аэропорт Los Angeles LAX и обратно на легковых авто и микроавтобусах.</p>
                    <br>
                    <p class="text-justify">Выезд из аэропорта Los Angeles LAX в San Diego осуществляется до указанного вами адреса, в течение 2.5 часов после прибытия рейса Аэрофлота SU106, прибывающий в Los Angeles LAX ежедневно в 14:05. В случае задержки рейса, 2.5 часа отсчитываеются с момента фактической посадки рейса.</p>
                    <br>
                    <p class="text-justify">Выезд из San Diego осуществляется  от указанного вами адреса в диапазоне c 10:00 до 11:00 утра, для того, чтобы вы могли прибыть в аэропорт Los Angeles LAX в комфортное время для регистрации и посадки на рейс Аэрофлота SU107, отправляющийся ежедневно в Москву в 16:05.</p>
                </div>
            </div>
        </div>
    </div>
</section>
