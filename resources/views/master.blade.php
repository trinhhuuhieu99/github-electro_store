<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="{{asset('source/pages/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('source/pages/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('source/pages/css/fasthover.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('source/pages/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('source/pages/css/flexslider.css')}}" type="text/css" media="screen" />

<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="{{asset('source/pages/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="{{asset('source/pages/js/jquery.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('source/pages/css/jquery.countdown.css')}}" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='https://fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'> 
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> 
<!-- //web fonts -->  
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('source/pages/js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){		
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>

    @include('header')
    @include('nav')
    @yield('content')
    @include('footer')
    

<script src="{{asset('source/pages/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<!-- flexslider -->
<script defer src="{{asset('source/pages/js/jquery.flexslider.js')}}"></script>
<script>
// Can also be used with $(document).ready()
$(document).ready(function() {
    $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
    });
});
</script>
<!-- flexslider -->
<!-- zooming-effect -->
<script src="{{asset('source/pages/js/imagezoom.js')}}"></script>
<!-- //zooming-effect -->

<script src="{{asset('source/pages/js/jquery.wmuSlider.js')}}"></script> 
<script src="{{asset('source/pages/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
<script src="{{asset('source/pages/js/jquery.countdown.js')}}"></script>
<script src="{{asset('source/pages/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('source/pages/js/jquery.flexisel.js')}}"></script>
<script src="{{asset('source/pages/js/minicart.js')}}"></script>




<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo2").flexisel({
            visibleItems:4,
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
                    visibleItems:2
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
        
    });
</script>

<!--quantity-->
<script>
    $('.value-plus1').on('click', function(){
        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
        divUpd.text(newVal);
    });

    $('.value-minus1').on('click', function(){
        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
        if(newVal>=1) divUpd.text(newVal);
    });
</script>
<!--quantity-->

<script>
    $('.example1').wmuSlider();         
</script> 

<script>
    $(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });
                                                                    
    });
</script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
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
                    visibleItems:2
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
        
    });
</script>

<!-- cart-js -->
<script>
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) { 
            }
        }
    });
</script>  
<!-- //cart-js -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab1').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
</body>
</html>