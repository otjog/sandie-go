<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Unique</title>
    <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/my-custom-style.css') }}" rel="stylesheet" type="text/css">
    <link href="" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/respond-1.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/js/html5element.js') }}"></script>
    <![endif]-->

</head>
<body>

    @yield('content')
    @yield('order')
    @yield('success_page')

    <footer class="footer">
        <div class="container">
            <p>
                <strong>ИП Новинкин О.В.</strong>
                <br>
                ИНН 310206674745
                <br>
                ОГРН 316312300117431
            </p>
        </div>
    </footer>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46207134 = new Ya.Metrika({ id:46207134, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46207134" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

<script type="text/javascript" src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>