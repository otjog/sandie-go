<style>

</style>
<section id="order">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Данные вашего заказа:</h4>
                        <table class="table table-responsive">
                            <tr>
                                <td class="text-center" colspan="2"><strong>Контактная информация</strong></td>
                            </tr>
                            <tr class="warning">
                                <td>Имя:</td>
                                <td>{{$order['name']}}</td>
                            </tr>
                            <tr class="warning">
                                @if($order['direction'] === 'from_sd_to_la')
                                    <td>Телефон:
                                    <td>{{$order['phone']}}</td>
                                @elseif($order['direction'] === 'from_la_to_sd')
                                    <td>E-Mail:</td>
                                    <td>{{$order['email']}}</td>
                                @endif
                            </tr>
                            <tr>
                                <td class="text-center" colspan="2"><strong>Посадка</strong></td>
                            </tr>
                            <tr class="info">
                                <td>Время:</td>
                                <td>{{$direction['depTime']}}</td>
                            </tr>
                            <tr class="info ">
                                <td>Адрес:</td>
                                @if($order['direction'] === 'from_la_to_sd')
                                    <td>{{$direction['depAdd']}}</td>
                                @elseif($order['direction'] === 'from_sd_to_la')
                                    <td>{{$order['address']}}</td>
                                @endif
                            </tr>
                            <tr>
                                <td class="text-center" colspan="2"><strong>Высадка</strong></td>
                            </tr>
                            <tr class="success">
                                <td>Время:</td>
                                <td>{{$direction['arrTime']}}</td>
                            </tr>
                            <tr class="success">
                                <td>Адрес:</td>
                                @if($order['direction'] === 'from_sd_to_la')
                                    <td>{{$direction['arrAdd']}}</td>
                                @elseif($order['direction'] === 'from_la_to_sd')
                                    <td>{{$order['address']}}</td>
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
                                <td><strong>{{$order['count']}}</strong>
                                    @if($order['count'] > 3)
                                        (в нескольких автомобилях)
                                    @endif
                                </td>
                            </tr>
                            <tr class="active">
                                <td><strong>Стоимость:</strong></td>
                                <td><strong>{{$order['count'] * $direction['price']}}$</strong> (Наличными, при посадке)</td>
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