<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mike Labahn | San Diego Christian Author and Speaker</title>
        <meta name="description" content="Bible Follower - Husband of Julie Ann - Father of Many and now Grandfather of one with many to come! Successful small business owner of 30 years.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicons/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicons/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicons/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicons/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicons/apple-touch-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon-180x180.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('img/favicons/android-chrome-192x192.png') }}" sizes="192x192">
        <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-96x96.png') }}" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-16x16.png') }}" sizes="16x16">
        <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="msapplication-TileImage" content="{{ asset('img/favicons/mstile-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7040154/612346/css/fonts.css" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!--<script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script> -->
    </head>
    <body ng-app="labahn">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="hamburger" ng-controller="HamburgerController" ng-click="change()" ng-class="{ 'open' : open }">
            <div class="patty"></div>
            <div class="patty"></div>
            <div class="patty"></div>
        </div>


        <div class="navigation" ng-controller="NavigationController" ng-class="{ 'open' : open }">

            <ul>

                <li class="active">Home Sweet</li>
                <li class="disabled">Buy Books</li>
                <li class="disabled">Meet Mike</li>
                <li class="disabled">Have Mike Speak</li>
                <li><a href="https://twitter.com/themikelabahn" target="_blank">Mike Tweets</a></li>
                <li><a href="https://www.facebook.com/themikelabahn" target="_blank">And Facebooks</a></li>
                <li><a href="mailto:author@mikelabahn.com">Email Mike</a></li>
                <li><a href="http://medium.com/@mikelabahn">Read on Medium</a></li>

            </ul>

        </div>

        @yield('content')

        <div class="footer">

            <div class="mobile-footer-content">

                <img class="mobile-logo" src="{{ asset('img/logo-mobile.png') }}">

                <ul>
                    <li>Mike Tweets</li>
                    <li>And Facebooks</li>
                    <li>Email Mike</li>
                </ul>

                <p class="copyrights">&copy; MikeLabahn. All Rights Reserved</p>

            </div>

           <div class="desktop-footer-content">

                <img class="desktop-logo" src="{{ asset('img/logo-desktop.png') }}">            

                <div class="clear"></div>

                <div class="desktop-footer-text">

                    <ul>
                        <li class="coming-soon">Buy Books</li>
                        <li class="coming-soon">Meet Mike</li>
                        <li class="coming-soon">Have Mike Speak</li>
                        <li><a href="http://medium.com/@mikelabahn">Medium</a></li>
                        <li><a href="https://twitter.com/themikelabahn" target="_blank">Twitter</a></li>
                        <li><a href="https://www.facebook.com/themikelabahn" target="_blank">Facebook</a></li>
                        <li><a href="mailto:author@mikelabahn.com">Email</a></li>
                    </ul>

                    <span class="copyrights">&copy; 2015 MikeLabahn - All Rights Reserved</span>

                    <div class="clear"></div>

                </div>

                <p class="credits"><a href="http://www.troyhollinger.com" target="_blank">Website Made By Troy</a></p>

           </div>

        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.2.min.js') }}"><\/script>')</script>
        <script src="{{ asset('bower_components/angular/angular.js') }}"></script>
        <script src="{{ asset('bower_components/angular-animate/angular-animate.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='//www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
