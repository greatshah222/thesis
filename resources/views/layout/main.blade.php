
        <!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Village dev</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Befriend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('main/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />

    <link href="{{asset('main/css/lsb.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('main/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('main/css/font-awesome.css')}}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


</head>
<body>
@include('_includes.navbar.head')
<br>

@yield('value')
@include('_includes.navbar.footer')


<!-- header -->

<!-- //header -->


<!-- js -->
<script type="text/javascript" src="{{asset('main/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('main/js/numscroller-1.0.js')}}"></script>
<script src="{{asset('main/js/lsb.min.js')}}"></script>
<script>
    $(window).load(function() {
        $.fn.lightspeedBox();
    });
</script>
<!-- //js -->
<script type="text/javascript" src="{{asset('main/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('main/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<script src="{{asset('main/js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>

<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 2,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint:991,
                    visibleItems: 1
                }
            }
        });

    });
</script>
<script type="text/javascript" src="{{asset('main/js/jquery.flexisel.js')}}"></script>
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{asset('main/js/bootstrap.js')}}"></script>
</body>
</html>