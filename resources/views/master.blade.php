<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store </title>
<!-- Custom Theme files -->
<link href="source/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="source/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="source/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="source/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="source/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->

<link rel="stylesheet" href="source/css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='https://fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'> 
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> 
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->

<!-- //end-smooth-scrolling --> 
</head> 
<body>







<!-- for-mobile-apps -->
<script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!-- //for-mobile-apps -->
<script src="source/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="source/js/jquery.min.js"></script>
<script src="source/js/jquery.wmuSlider.js"></script> 
<script src="source/js/minicart.js"></script>
<script src="source/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="source/js/jquery.countdown.js"></script>
<script src="source/js/script.js"></script>
<script type="text/javascript" src="source/js/jquery.flexisel.js"></script>
<!-- for bootstrap working -->
<script type="text/javascript" src="source/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){		
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>

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
</body>
</html>