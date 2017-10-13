@extends('layouts.site')

@section('order')
    <section id="order">
        <div class="container">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1 class="text-center">Оформление поездки <small style="color: white">{{$direction->name}}</small></h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>Введите ваши данные:</h4></div>
                                    <div class="panel-body">
                                        <?php
                                        if(!$direction->phoneForm){
                                            $contactType = 'E-mail';
                                            $contactIcon = 'glyphicon glyphicon-envelope';
                                            $contactText = 'E-Mail';
                                        }else{
                                            $contactType = 'номер телефона';
                                            $contactIcon = 'glyphicon glyphicon-earphone';
                                            $contactText = 'телефонный номер';
                                        }
                                        ?>
                                        <div class="form" >
                                            <!-- todo добавить проыерку формы JS-->
                                            <form action="{{route('order', ['alias'=>$direction->alias])}}" name="order" class="form-horizontal" role="form" method="post">
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                                                    <input class="form-control input-sm" type="text" name="orderAddress" placeholder="Введите адрес в San Diego" value="{{ old('orderAddress') }}">
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    <input class="form-control input-sm" name="orderDate" placeholder="Укажите дату поездки" data-provide="datepicker" value="{{ old('orderDate') }}">
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
                                                    <input class="form-control input-sm" type="text" placeholder="Введите кол-во пассажиров" name="orderCountPeople" value="{{ old('orderCountPeople') }}">
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                    <input class="form-control input-sm" placeholder="Введите ваше имя" id="orderName" type="text" name="orderName" value="{{ old('orderName') }}">
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="<?php echo $contactIcon    ?>"></span></span>
                                                    <input class="form-control input-sm" placeholder="Введите ваш <?php echo $contactType?>" type="text" name="orderContact" value="{{ old('orderContact') }}">
                                                </div>
                                                <div class="form-group input-group">
                                                    <input class="btn btn-danger" type="submit" value="Бронировать">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>Предварительные данные:</h4></div>
                                    <table class="table table-responsive">
                                        <tr>
                                            <td class="text-center" colspan="2"><strong>Посадка</strong></td>
                                        </tr>
                                        <tr class="info">
                                            <td>Время:</td>
                                            <td>{{$direction->depTime}}</td>
                                        </tr>
                                        <tr class="info ">
                                            <td>Адрес:</td>
                                            <td>{{$direction->depAdd}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" colspan="2"><strong>Высадка</strong></td>
                                        </tr>
                                        <tr class="success">
                                            <td>Время:</td>
                                            <td>{{$direction->arrTime}}</td>
                                        </tr>
                                        <tr class="success">
                                            <td>Адрес:</td>
                                            <td>{{$direction->arrAdd}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr class="active">
                                            <td>Автомобиль:</td>
                                            <td>Легковой</td>
                                        </tr>
                                        <tr class="active">
                                            <td><strong>Стоимость:</strong></td>
                                            <td><strong>{{$direction->price}}$</strong>  (за 1 пассажира)</td>
                                        </tr>
                                        <tr class="active">
                                            <td><strong>Предоплата:</strong></td>
                                            <td><strong>0$</strong>  (Оплата при посадке в авто)</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            {!! $direction->description!!}
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="floating-panel">
                                                <ul class="list-inline">
                                                    <li><a id="lax" class="activeRoute">Посадка в Шаттл</a></li>
                                                    <li><a id="shuttle">Маршрут Шаттла</a></li>
                                                    <li><a id="alamotocar">Маршрут до машины</a></li>
                                                </ul>
                                            </div>
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                    <div class="panel-footer text-center">Более подробная инструкция придет на ваш <?php echo $contactText ?> после оформления заказа.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection