<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

@extends('layout.main')

@section('contact')
<!DOCTYPE HTML>
<html lang="zxx">
<head>
    <title>Handout a Society Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Handout Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- css files -->
    <link href="{{asset('footer/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
    <link href="{{asset('footer/css/style.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS -->

    <!-- //css files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->
    <!-- js files -->
    <script src="{{asset('footer/js/modernizr.js')}}"></script>
    <!-- /js files -->
</head>
<body>

<!-- About -->

<!-- Contact-form -->
<div class="w3layouts_mail_grid_right">
    <div class="container">
        <form action="#" method="post">
            <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                <input type="text" name="Name" placeholder="Name" required="">
                <input type="email" name="Email" placeholder="Email" required="">
            </div>
            <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                <input type="text" name="Telephone" placeholder="Telephone" required="">
                <input type="text" name="Subject" placeholder="Subject" required="">
            </div>
            <div class="clearfix"> </div>
            <textarea name="Message" placeholder="Message..." required=""></textarea>
            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
        </form>
    </div>
</div>
<!-- //Contact-form -->
<!-- footer -->
<!-- //footer -->

<!-- js files -->
<!-- js -->
<script type="text/javascript" src="{{asset('footer/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('footer/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->
<!-- js for banner -->


<!-- //Gallery -->
<!-- Numscroller -->
<script type="text/javascript" src="{{asset('footer/js/numscroller-1.0.js')}}"></script>
<!-- //Numscroller -->
<!-- Owl-Carousel-JavaScript -->

<!-- //Owl-Carousel-JavaScript -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('footer/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('footer/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
<script src="{{asset('footer/js/SmoothScroll.min.js')}}"></script>
<!-- //smooth scrolling -->

<!-- //js files -->
</body>
</html>
@endsection