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
                                <ul class="text-center">
                                    {{ session('status') }}
                                </ul>
                            </div>
                        @endif
                        <h4>Данные вашего заказа:</h4>
                        <table class="table table-responsive">
                            <tr>
                                <td class="text-center" colspan="2"><strong>Контактная информация</strong></td>
                            </tr>
                            <tr class="success">
                                <td>Имя:</td>
                                <td>{{$order->name}}</td>
                            </tr>
                            <tr class="success">
                                @if($direction->alias === 'from_sd_to_la')
                                    <td>Телефон:</td>
                                    <td>{{$order->phone}}</td>
                                @elseif($direction->alias === 'from_la_to_sd')
                                    <td>E-Mail:</td>
                                    <td>{{$order->email}}</td>
                                @endif
                            </tr>
                            <tr>
                                <td class="text-center" colspan="2"><strong>Посадка</strong></td>
                            </tr>
                            <tr class="success">
                                <td>Время:</td>
                                <td>{{$direction->depTime}}</td>
                            </tr>
                            <tr class="success">
                                <td>Адрес:</td>
                                @if($direction->alias === 'from_la_to_sd')
                                    <td>{{$direction->depAdd}}</td>
                                @elseif($direction->alias === 'from_sd_to_la')
                                    <td>{{$order->address}}</td>
                                @endif
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
                                @if($direction->alias === 'from_sd_to_la')
                                    <td>{{$direction->arrAdd}}</td>
                                @elseif($direction->alias === 'from_la_to_sd')
                                    <td>{{$order->address}}</td>
                                @endif
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr class="active">
                                <td>Автомобиль:</td>
                                <td>Легковой</td>
                            </tr>
                            <tr class="active">
                                <td><strong>Кол-во пассажиров:</strong></td>
                                <td><strong>{{$order->count}}</strong>
                                    @if($order->count > 3)
                                        (в нескольких автомобилях)
                                    @endif
                                </td>
                            </tr>
                            <tr class="active">
                                <td><strong>Стоимость:</strong></td>
                                <td><strong>{{$order->count * $direction->price}}$</strong> (Наличными, при посадке)</td>
                            </tr>
                            <tr class="active">
                                <td><strong>Предоплата:</strong></td>
                                <td><strong>0$</strong>  (Оплата при посадке в авто)</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>