<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>San Diego - Los Angeles</title>
    <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">
    <link href="{{ asset('assets/css/paper-bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/my-custom-style.css') }}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/respond-1.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/js/html5element.js') }}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('assets/js/google-maps.js')}}"></script>

</head>
<body>

    @yield('header')
    @yield('content')
    @yield('footer')

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46207134 = new Ya.Metrika({ id:46207134, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46207134" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Api Maps Google -->
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzy4Bx5gHQSf4kHFQMo_mFhKlfeL_3lU8&callback=initMap">
    </script>
    <!-- /Api Maps Google -->

<script type="text/javascript" src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap-datepicker.ru.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/my-script.js')}}"></script>

</body>
</html>