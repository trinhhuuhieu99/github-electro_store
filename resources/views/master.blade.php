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
<script src="{{asset('source/pages/js/jquery.mycart.js')}}"></script>




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

{{-- <!-- cart-js -->
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
<!-- //cart-js --> --}}

{{-- cart-test --}}
{{-- <script>
    $(document).ready(function () {
        $("#add_cart").click(function (e) { 
            e.preventDefault();
            alert('d');
            
        });

        $(".w3view-cart").click(function (e) { 
            e.preventDefault();
            alert("view cart");
        });
    });
</script> --}}
{{-- cart-test --}}

<script>
    $(document).ready(function () {
        $('#hide_alert').delay(2000);
        $('#hide_alert').hide(1300);
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab1').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>

{{-- add_Cart --}}

<script>
    $(document).ready(function () {
        var shoppingCart = (function() {
        // =============================
        // Private methods and propeties
        // =============================
        cart = [];
        
        // Constructor
        function Item(id, name, image, price, count) 
        {
            this.id = id;
            this.name = name;
            this.image = image;
            this.price = price;
            this.count = count;
        }
        
        // Save cart
        function saveCart() {
            localStorage.setItem('shoppingCart', JSON.stringify(cart));
        }
        
            // Load cart
        function loadCart() {
            cart = JSON.parse(localStorage.getItem('shoppingCart'));
        }
        if (localStorage.getItem("shoppingCart") != null) {
            loadCart();
        }
        

        // =============================
        // Public methods and propeties
        // =============================
        var obj = {};
        
        // Add to cart
        obj.addItemToCart = function(id, name, image, price, count) {
            for(var item in cart) {
            if(cart[item].name === name) {
                cart[item].count ++;
                saveCart();
                return;
            }
            }
            var item = new Item(id, name, image, price, count);
            cart.push(item);
            saveCart();
        }
        // Set count from item
        obj.setCountForItem = function(name, count) {
            for(var i in cart) {
            if (cart[i].name === name) {
                cart[i].count = count;
                break;
            }
            }
        };
        // Remove item from cart
        obj.removeItemFromCart = function(id, name, image, price, count) {
            for(var item in cart) {
                if(cart[item].name === name) {
                cart[item].count --;
                if(cart[item].count === 0) {
                    cart.splice(item, 1);
                }
                break;
                }
            }
            saveCart();
        }

        // Remove all items from cart
        obj.removeItemFromCartAll = function(name) {
            for(var item in cart) {
            if(cart[item].name === name) {
                cart.splice(item, 1);
                break;
            }
            }
            saveCart();
        }

        // Clear cart
        obj.clearCart = function() {
            cart = [];
            saveCart();
        }

        // Count cart 
        obj.totalCount = function() {
            var totalCount = 0;
            for(var item in cart) {
            totalCount += cart[item].count;
            }
            return totalCount;
        }

        // Total cart
        obj.totalCart = function() {
            var totalCart = 0;
            for(var item in cart) {
            totalCart += cart[item].price * cart[item].count;
            }
            return Number(totalCart);
        }

        // List cart
        obj.listCart = function() {
            var cartCopy = [];
            for(i in cart) {
            item = cart[i];
            itemCopy = {};
            for(p in item) {
                itemCopy[p] = item[p];

            }
            itemCopy.total = Number(item.price * item.count);
            cartCopy.push(itemCopy)
            }
            return cartCopy;
        }

        // cart : Array
        // Item : Object/Class
        // addItemToCart : Function
        // removeItemFromCart : Function
        // removeItemFromCartAll : Function
        // clearCart : Function
        // countCart : Function
        // totalCart : Function
        // listCart : Function
        // saveCart : Function
        // loadCart : Function
        return obj;
        })();
        // Add item
        $('.w3ls-cart').click(function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            var name = $(this).data('name');
            var image = $(this).data('image');
            if ($(this).data('promotion_price') != 0) {
                var price = Number($(this).data('promotion_price'));
            } else {
                var price = Number($(this).data('unit_price'));
            }
                shoppingCart.addItemToCart(id, name, image, price, 1);
            displayCart();
            alert('đã thêm 1 sản phẩm');
        });

        // Clear items
        $('.clear-cart').click(function() {
            shoppingCart.clearCart();
            displayCart();
            alert('đã xóa toán bộ sản phẩm')
        });


        function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr class='tr-tbl' data-image='"+ cartArray[i].image +"' data-id='"+ cartArray[i].id +"' >"
        + "<td><b>" + cartArray[i].name + "</b></td>" 
        + "<td class='pro_price'> <span> " + new Intl.NumberFormat().format(cartArray[i].price) + " </span> <i>đ</i> </td>"
        + "<td><div class='form-inline'>"
        + "<button class='glyphicon glyphicon-minus btn btn-danger btn-minus'></button>" 
        + "<input type='number' class='item-count form-control  ' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>" 
        + "<button class='glyphicon glyphicon-plus  btn btn-success btn-plus'></button>" 
        + "</div></td>"
        + "<td><button class='delete-item glyphicon glyphicon-remove btn btn-danger' data-name='" + cartArray[i].name + "'></button></td>" 
        + "<td class='total-product'> <span>" + new Intl.NumberFormat().format(cartArray[i].total)  + "</span> <i>đ</i> </td>" 
    //   + "<td><i>đ</i></td>" 
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html( new Intl.NumberFormat().format(shoppingCart.totalCart())  );
  $('.total-count').html(  shoppingCart.totalCount());
  
    $('.btn-plus').on("click", function () {
            var count = parseInt($(this).parent().find('.item-count').val());
            count ++;
            $(this).parent().find('.item-count').val(count);
            var this_total = parseInt($(this).parents('.tr-tbl').find('.total-product').text())*count
            var set_this_total = parseInt($(this).parents('.tr-tbl').find('.total-product').html(this_total))
            $('.total-cart').html(  shoppingCart.totalCart());
            var name =$(this).parent().find('.item-count').data('name')
            var price = $(this).parents('.tr-tbl').find('.pro_price').text();
            var id = $(this).parents('.tr-tbl').data("id")
            var image = $(this).parents('.tr-tbl').data("image")
            console.log(id,price,name,image,count)
            shoppingCart.addItemToCart(id, name, image, price, count);
            displayCart();
        });

    
        $('.btn-minus').on("click", function () {
            var count = parseInt($(this).parent().find('.item-count').val());
            count --;
            $(this).parent().find('.item-count').val(count);
            var this_total = parseInt($(this).parents('.tr-tbl').find('.total-product').text())*count
            var set_this_total = parseInt($(this).parents('.tr-tbl').find('.total-product').html(this_total))
            $('.total-cart').html(  shoppingCart.totalCart());
            var name =$(this).parent().find('.item-count').data('name')
            var price = $(this).parents('.tr-tbl').find('.pro_price').text();
            var id = $(this).parents('.tr-tbl').data("id")
            var image = $(this).parents('.tr-tbl').data("image")
            console.log(id,price,name,image,count)
            shoppingCart.removeItemFromCart(id, name, image, price, count);
            displayCart();
        });

}

        // Delete item button
    
        $('.show-cart').on("click", ".delete-item", function(event) {
            var name = $(this).data('name')
            shoppingCart.removeItemFromCartAll(name);
            displayCart();
        })



        // // -1
        // $('.show-cart').on("click", ".btn-minus", function(event) {
        //     var name = $(this).data('name')
        //     shoppingCart.removeItemFromCart(name);
        //     displayCart();
        // })
        // // +1
        // $('.show-cart').on("click", ".btn-plus", function(event) {
        //     alert(222)
        //     var name = $(this).data('name')
        //     shoppingCart.addItemToCart(name);
        //     displayCart();
        // })

        // Item count input
        $('.show-cart').on("change", ".item-count", function(event) {
            var name = $(this).data('name');
            var count = Number($(this).val());
            shoppingCart.setCountForItem(name, count);
            displayCart();
        });

        displayCart();


    });
</script>

</body>
</html>