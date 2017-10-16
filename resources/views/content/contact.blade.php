<section id="contact">
    <div class="container">
        <div class="row">
            <div class="panel panel-primary col-lg-4">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Напишите нам:</h4></div>
                                <div class="panel-body">
                                    <div class="form">
                                        <form action="{{route('contact')}}" name="contact" class="form-horizontal" role="form" method="post">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                <input required class="form-control input-sm" placeholder="Введите ваше имя" type="text" name="contactName">
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                <input required class="form-control input-sm" placeholder="Введите ваш Email" type="text" name="contactEmail">
                                            </div>
                                            <div class="form-group input-group">
                                                <textarea required class="form-control input-sm" placeholder="Введите ваш вопрос" name="contactMessage" cols="100%" rows="5"></textarea>
                                            </div>
                                            <div class="form-group input-group">
                                                <input class="btn btn-danger" type="submit" value="Отправить" onclick="validate(this.form);">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success col-lg-7 col-lg-offset-1">
                    <ul class="text-center">
                        {{ session('status') }}
                    </ul>
                </div>
            @endif
        </div>
    </div>
</section>