
@extends('master')
@section('content')
	

	<!-- banner -->
	<div class="banner">
		<div class="container">
			<h3>Electronic Store, <span>Special Offers</span></h3>
		</div>
	</div>
	<!-- //banner --> 
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div> 
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>
					</div>
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Mobiles</a></li>
						<li role="presentation"><a href="#Laptop" role="tab" id="laptop-tab" data-toggle="tab" aria-controls="laptop">Laptop</a></li>
						<li role="presentation"><a href="#Tablet" role="tab" id="Tablet-tab" data-toggle="tab" aria-controls="Tablet">Tablet</a></li>						
						<li role="presentation"><a href="#Watch" role="tab" id="Watch-tab" data-toggle="tab" aria-controls="Watch">Watch</a></li>
						<li role="presentation"><a href="#Camera" role="tab" id="Camera-tab" data-toggle="tab" aria-controls="Camera">Camera</a></li>
						<li role="presentation"><a href="#House" role="tab" id="House-tab" data-toggle="tab" aria-controls="tv">Household</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								@foreach ($mobiles_tab as $mb_tab)
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										@if($mb_tab->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<img src="source/pages/images/{{$mb_tab->image}}" alt=" " class="img-responsive" />
									</div> 
									<h5><a href="{{route ('Chi tiết sản phẩm', $mb_tab->id )}}">{{$mb_tab->name}}</a></h5>
									<div class="simpleCart_shelfItem">
										@if($mb_tab->promotion_price==0)
										<p><i class="item_price">{{ number_format($mb_tab->unit_price)}}đ</i></p>
										@else
										<p><span>{{ number_format($mb_tab->unit_price)}}đ</span> <i class="item_price">{{ number_format($mb_tab->promotion_price)}}đ</i></p>	
										@endif
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</div>
								</div>
								@endforeach
								<div class="clearfix"> </div>

							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Laptop" aria-labelledby="Laptop-tab">
							<div class="agile_ecommerce_tabs">
								@foreach ($laptop_tab as $lptab)
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										@if($lptab->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<img src="source/pages/images/{{$lptab->image}}" alt=" " class="img-responsive" />
									</div>
									<h5><a href="{{route ('Chi tiết sản phẩm', $lptab->id )}}">{{$lptab->name}}</a></h5>
									<div class="simpleCart_shelfItem">
										@if($lptab->promotion_price==0)
										<p><i class="item_price">{{ number_format($lptab->unit_price)}}đ</i></p>
										@else
										<p><span>{{ number_format($lptab->unit_price)}}đ</span> <i class="item_price"> {{ number_format($lptab->promotion_price)}}đ</i></p>	
										@endif
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Laptop" /> 
											<input type="hidden" name="amount" value="850.00" />   
											<button type="submit"   class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								@endforeach
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Tablet" aria-labelledby="Tablet-tab">
							<div class="agile_ecommerce_tabs">
								@foreach ($tablet_tab as $tbltab)
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										@if($tbltab->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<img src="source/pages/images/{{$tbltab->image}}" alt=" " class="img-responsive" />
									</div>
									<h5><a href="{{route ('Chi tiết sản phẩm', $tbltab->id )}}">{{$tbltab->name}}</a></h5>
									<div class="simpleCart_shelfItem">
										@if($tbltab->promotion_price==0)
										<p><i class="item_price">{{ number_format($tbltab->unit_price)}}đ</i></p>
										@else
										<p><span>{{ number_format($tbltab->unit_price)}}đ</span> <i class="item_price"> {{ number_format($tbltab->promotion_price)}}đ</i></p>	
										@endif
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Laptop" /> 
											<input type="hidden" name="amount" value="850.00" />   
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								@endforeach
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Watch" aria-labelledby="Watch-tab">
							<div class="agile_ecommerce_tabs">
								@foreach ($watch_tab as $wtab)
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										@if($wtab->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<img src="source/pages/images/{{$wtab->image}}" alt=" " class="img-responsive" />
									</div> 
									<h5><a href="{{route ('Chi tiết sản phẩm', $wtab->id )}}">{{$wtab->name}}</a></h5>
									<div class="simpleCart_shelfItem">
										@if($wtab->promotion_price==0)
										<p><i class="item_price">{{ number_format($wtab->unit_price)}}đ</i></p>
										@else
										<p><span>{{ number_format($wtab->unit_price)}}đ</span> <i class="item_price">{{ number_format($wtab->promotion_price)}}đ</i></p>	
										@endif
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Mobile Phone1" /> 
											<input type="hidden" name="amount" value="350.00" />   
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>  
									</div>
								</div>
								@endforeach
								<div class="clearfix"> </div>

							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Camera" aria-labelledby="Camera-tab">
							<div class="agile_ecommerce_tabs">
								@foreach ($camera_tab as $cmtab)
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										@if($cmtab->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<img src="source/pages/images/{{$cmtab->image}}" alt=" " class="img-responsive" />
									</div> 
									<h5><a href="{{route ('Chi tiết sản phẩm', $cmtab->id )}}">{{$cmtab->name}}</a></h5>
									<div class="simpleCart_shelfItem">
										@if($cmtab->promotion_price==0)
										<p><i class="item_price">{{ number_format($cmtab->unit_price)}}đ</i></p>
										@else
										<p><span>{{ number_format($cmtab->unit_price)}}đ</span> <i class="item_price">{{ number_format($cmtab->promotion_price)}}đ</i></p>	
										@endif
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Mobile Phone1" /> 
											<input type="hidden" name="amount" value="350.00" />   
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>  
									</div>
								</div>
								@endforeach
								<div class="clearfix"> </div>

							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="House" aria-labelledby="House-tab">
							<div class="agile_ecommerce_tabs">
								@foreach ($house_tab as $hstab)
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										@if($hstab->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<img src="source/pages/images/{{$hstab->image}}" alt=" " class="img-responsive" />
									</div> 
									<h5><a href="{{route ('Chi tiết sản phẩm', $hstab->id )}}">{{$hstab->name}}</a></h5>
									<div class="simpleCart_shelfItem">
										@if($hstab->promotion_price==0)
										<p><i class="item_price">{{ number_format($hstab->unit_price)}}đ</i></p>
										@else
										<p><span>{{ number_format($hstab->unit_price)}}đ</span> <i class="item_price">{{ number_format($hstab->promotion_price)}}đ</i></p>	
										@endif
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Mobile Phone1" /> 
											<input type="hidden" name="amount" value="350.00" />   
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>  
									</div>
								</div>
								@endforeach
								<div class="clearfix"> </div>

							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom --> 
	{{-- <!-- modal-video -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="source/pages/images/3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Mobile Phone 3GB</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							<div class="rating">
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$380</span> <i class="item_price">$350</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Mobile Phone1"> 
									<input type="hidden" name="amount" value="350.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="source/pages/images/9.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Multimedia Home Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$180</span> <i class="item_price">$150</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Headphones"> 
									<input type="hidden" name="amount" value="150.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="source/pages/images/11.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Quad Core Colorful Laptop</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia  deserunt.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$880</span> <i class="item_price">$850</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Laptop"> 
									<input type="hidden" name="amount" value="850.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="source/pages/images/14.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Cool Single Door Refrigerator </h4>
							<p>Duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$950</span> <i class="item_price">$820</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Mobile Phone1"> 
									<input type="hidden" name="amount" value="820.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="source/pages/images/17.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>New Model Mixer Grinder</h4>
							<p>Excepteur sint occaecat laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$460</span> <i class="item_price">$450</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Mobile Phone1"> 
									<input type="hidden" name="amount" value="450.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="source/pages/images/36.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Dry Vacuum Cleaner</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$960</span> <i class="item_price">$920</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Vacuum Cleaner"> 
									<input type="hidden" name="amount" value="920.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="source/pages/images/37.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Watch & Dining Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="source/pages/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$280</span> <i class="item_price">$250</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Induction Stove"> 
									<input type="hidden" name="amount" value="250.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //modal-video --> --}}
	<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
				<a href="products.html">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom1 --> 
	<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="source/pages/images/21.jpg" alt=" " class="img-responsive" />
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Off/-</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4>We Offer <span>Best Products</span></h4>
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="source/pages/images/Annotation.jpg" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Trình Hữu Hiếu</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="source/pages/images/21731145_498199777196933_8748847657412284194_n.jpg" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Phạm Tiến Việt</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="source/pages/images/83516525_1572833009558639_4395811743673420378_n.jpg" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Cung Minh Phong</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="source/pages/images/20.jpg" alt=" " class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Women's <span>Special</span></h4>
						<h5>save up <span>to</span> 30%</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //special-deals -->
	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
			<div class="agileinfo_new_products_grids">
				@foreach($new_product as $new)
				<div class="col-md-3 agileinfo_new_products_grid" id="space_img" >
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							@if($new->promotion_price!=0)
							<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
							@endif
							<img src="source/pages/images/{{$new->image}}" alt=" " class="img-responsive" id="img_bottom" />
						</div>
						<h5><a href="{{route ('Chi tiết sản phẩm', $new->id )}}">{{$new->name}}</a></h5>
						<div class="simpleCart_shelfItem">
							@if($new->promotion_price==0)
							<p><i class="item_price">{{ number_format($new->unit_price)}}đ</i></p>
							@else
							<p><span>{{ number_format($new->unit_price)}}đ</span> <i class="item_price">{{ number_format($new->promotion_price)}}đ</i></p>	
							@endif					 
								<button data-id="{{$new->id}}"  data-proname="{{$new->name}}" data-proimage="{{$new->image}}" data-promotion_price="{{$new->promotion_price}}" data-unit_price="{{$new->unit_price}}" data-proamount= 1 class="w3ls-cart">Add to cart</button>							
						</div>
					</div>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function () {
			$(".w3ls-cart").mouseenter(function () { 
				var dt_id = $(this).attr('data-id')
				var dt_name= $(this).attr('data-proname')
				var dt_img= $(this).attr('data-proimage')
				var dt_pro_price= $(this).attr('data-promotion_price')
				var dt_unit_price= $(this).attr('data-unit_price')
				var dt_amount= $(this).attr('data-proamount')
				const product =
				{
					id: dt_id,
					name: dt_name,
					image: dt_img,
					pro_price: dt_pro_price,
					unit_price: dt_unit_price,
					amount: dt_amount,	
				}
				localStorage.setItem('products', JSON.stringify(product))

				// localStorage.setItem('product', JSON.stringify(product));
				console.log("111111111111111111", product )
				// const divParent = $(this).parents('.agile_ecommerce_tab_left');
				// const aElm = divParent.find('a')
				// console.log('xxxxxxxxxxxxxxxxxxxxxxx', aElm.text())
			});
		});

	</script>

	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="source/pages/images/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="source/pages/images/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="source/pages/images/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="source/pages/images/tb4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="source/pages/images/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //top-brands --> 
@endsection
