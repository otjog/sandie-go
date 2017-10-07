@extends('layouts.site')

@section('success_page')
    <section id="order">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="text-center">Спасибо за заказ</h1>
                        </div>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    <ul>
                                        {{ session('status') }}
                                    </ul>
                                </div>
                            @endif
                            <h4>Данные вашего заказа:</h4>
                            <table class="table table-responsive">
                                <tr>
                                    <th>#</th>
                                    <th>Время</th>
                                    <th>Адрес</th>
                                </tr>
                                <tr>
                                    <td>Посадка</td>
                                    <td>{{$direction->depTime}}</td>
                                    @if($direction->alias === 'from_la_to_sd')
                                        <td>{{$direction->depAdd}}</td>
                                    @elseif($direction->alias === 'from_sd_to_la')
                                        <td>{{$order->address}}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Высадка</td>
                                    <td>{{$direction->arrTime}}</td>
                                    @if($direction->alias === 'from_sd_to_la')
                                        <td>{{$direction->arrAdd}}</td>
                                    @elseif($direction->alias === 'from_la_to_sd')
                                        <td>{{$order->address}}</td>
                                    @endif
                                </tr>
                                <tr class="active">
                                    <td></td>
                                    <td>Кол-во пассажиров::</td>
                                    <td><b>{{$order->count}}</b></td>
                                </tr>
                                <tr class="active">
                                    <td></td>
                                    <td>Итоговая стоимость:</td>
                                    <td><b>{{$order->count * $direction->price}}$ (Наличными, при посадке)</b></td>
                                </tr>
                                <tr class="active">
                                    <td></td>
                                    <td>Предоплата:</td>
                                    <td><b>0$</b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection