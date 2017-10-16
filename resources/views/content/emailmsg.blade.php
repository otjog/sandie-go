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
                                <td>{{$data['contactName']}}</td>
                            </tr>
                            <tr class="warning">
                                <td>E-Mail:</td>
                                <td>{{$data['contactEmail']}}</td>
                            </tr>
                            <tr class="warning">
                                <td>Имя:</td>
                                <td>{{$data['contactMessage']}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>