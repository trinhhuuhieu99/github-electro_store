<div class="navigation">
    @if (session('status'))
    <div class="alert alert-info" id="hide_alert" >
        <div class="text">
            <h3>Thông báo</h3>
            <span>{{session('status')}}</span>
        </div>
    </div>
    @endif
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> 
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li><a href="{{route ('Trang-chu')}}" >Trang chủ</a></li>		
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Mobiles</h6>
                                        @foreach($mobile_type as $mbtype )
                                        <li><a href="{{route ('sản phẩm điện thoại', $mbtype->id )}}">{{$mbtype->name}}</a></li> 
                                        @endforeach
                                        <li><a href="products.html">Popular Models <span>New</span> </a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Computer </h6>
                                        @foreach ($computer_type as $cptype)
                                        <li><a href="{{route ('sản phẩm máy tính', $cptype->id )}}">{{$cptype->name}}</a></li>
                                        @endforeach
                                        <li><a href="products1.html"><i>Summer Store</i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Home</h6>
                                        @foreach ($home_type as $hmtype)
                                        <li><a href="{{route ('sản phẩm gia đình', $hmtype->id )}}">{{$hmtype->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <a  href="https://www.facebook.com/" >
                                    <div class="col-sm-3" id="anh_link">
                                        <div class="w3ls_products_pos">
                                            <h4>30%<i>Off/-</i></h4>
                                            <img src="{{asset('source/pages/images/1.jpg')}}" alt=" " class="img-responsive" />
                                        </div>
                                    </div>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                <li><a href="{{route('Thong-tin')}}">Thông tin</a></li> 
                <li><a href="{{route('Gửi-mail')}}">Mail </a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>


