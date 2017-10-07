<section id="home" class="top_cont_outer page_section home">
    <div class="hero_wrapper">
        <div class="container">
            <div class="row hero_section">
                <div class="col-lg-9 center-block floatnone vcenter">
                    <h2 class="text-center">Ежедневные рейсы за 45$ </h2>
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
                                <select class="form-control input-lg" id="orderDirection" name="orderDirection" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                                    <option value="none"disabled selected>Выберите направление</option>
                                    <option value="from_la_to_sd">из Airport Los Angeles в San Diego</option>
                                    <option value="from_sd_to_la">из San Diego в Airport Los Angeles</option>
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
            </div>
        </div>
    </div>
</section>
