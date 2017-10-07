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
                            <div class="col-lg-12">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <h4>Предварительные данные:</h4>
                                <table class="table table-responsive">
                                    <tr>
                                        <th>#</th>
                                        <th>Время</th>
                                        <th>Адрес</th>
                                    </tr>
                                    <tr>
                                        <td>Посадка</td>
                                        <td>{{$direction->depTime}}</td>
                                        <td>{{$direction->depAdd}}</td>
                                    </tr>
                                    <tr>
                                        <td>Высадка</td>
                                        <td>{{$direction->arrTime}}</td>
                                        <td>{{$direction->arrAdd}}</td>
                                    </tr>
                                    <tr class="active">
                                        <td></td>
                                        <td>Автомобиль:</td>
                                        <td>Легковой</td>
                                    </tr>
                                    <tr class="active">
                                        <td></td>
                                        <td>Стоимость за 1 пассажира:</td>
                                        <td>{{$direction->price}}$ (Наличными, при посадке)</td>
                                    </tr>
                                    <tr class="active">
                                        <td></td>
                                        <td>Предоплата:</td>
                                        <td>0$</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="panel panel-danger">
                                    <div class="panel-body">
                                        <h4>Введите ваши данные:</h4>
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
                                        <div class="form">
                                            <form action="{{route('order', ['alias'=>$direction->alias])}}" name="order" class="form-horizontal" role="form" method="post">
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                                                    <input class="form-control input-sm" type="text" name="orderAddress" placeholder="Введите адрес в San Diego" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    <input class="form-control input-sm" name="orderDate" placeholder="Укажите дату поездки" data-provide="datepicker" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
                                                    <input class="form-control input-sm" type="text" placeholder="Введите кол-во пассажиров" name="orderCountPeople" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                    <input class="form-control" placeholder="Введите ваше имя" id="orderName" type="text" name="orderName" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><span class="<?php echo $contactIcon    ?>"></span></span>
                                                    <input class="form-control input-sm" placeholder="Введите ваш <?php echo $contactType?>" type="text" name="orderContact" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                                                </div>
                                                <div class="form-group">
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
                                    <div class="panel-body">
                                        {!! $direction->description!!}
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