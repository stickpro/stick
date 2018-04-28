<!DOCTYPE HTML>
<html lang=ru>

<head>
    <meta charset=UTF-8>
    <title>Stick - креативный web разработчик</title>
    <meta name=viewport content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name=robots content="index, follow" />
    <meta name=keywords content="Создание сайтов в Ставрополе, Влад Булгаков, Владислав Булгаков, разработка сайтов, создание сайтов, Ставрополь, заказать сайт, веб студия, создать сайт, создание интернет сайтов, разработка интернет магазинов, создание веб сайтов, web Разработчик, нанять разработчика сайтов, купить сайт в Ставрополе" />
    <meta name=description content="Профессиональное создание и разработка сайтов в Ставрополе, разработка интернет магазинов, создание сайтов на OpenCart, создание качественных сайтов." />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href={{asset ('assets/images/favi.ico')}}>
</head>

<body onLoad=initialize()>
    <div id=main>
    	<!--header -->
       @yield('header')
       <!-- end -->
       <!--content -->
       @yield('content')
       <!-- end content -->
    </div>
    <link rel=stylesheet property=stylesheet type=text/css href={{asset ('assets/css/font-awesome.min.css')}}>
    <link rel=stylesheet property=stylesheet type=text/css href={{asset ('assets/css/reset.css')}}>
    <link rel=stylesheet property=stylesheet type=text/css href={{asset ('assets/css/bootstrap.css')}} media=all>
    <link rel=stylesheet property=stylesheet type=text/css href={{asset ('assets/css/owl.carousel.css')}} media=screen>
    <link rel=stylesheet property=stylesheet type=text/css href={{asset ('assets/css/idangerous.swiper.css')}}>
    <link rel=stylesheet property=stylesheet type=text/css href={{asset ('assets/css/magnific-popup.css')}} media=all>
    <link rel=stylesheet property=stylesheet type=text/css href={{asset ('assets/css/YTPlayer.css')}} media=screen>
    <link rel=stylesheet property=stylesheet type=text/css href={{asset ('assets/css/style.css')}}>
    <link rel=stylesheet property=stylesheet type=text/css href={{asset ('assets/css/color.css')}}>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' property=stylesheet rel=stylesheet type=text/css>
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,300,600,800' property=stylesheet rel=stylesheet type=text/css>
    <script src={{asset ('assets/js/jquery.min.js')}}></script>
    <script src={{asset ('assets/js/jpreloader.min.js')}}></script>
    <script src={{asset ('assets/js/plugins.js')}}></script>
    <script src={{asset ('assets/js/YTPlayer.js')}}></script>
    <script src={{asset ('assets/js/scripts.js')}}></script>
    <script src={{asset ('assets/js/initplayer.js')}}></script>
</body>

</html>