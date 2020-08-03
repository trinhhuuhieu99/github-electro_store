@extends('master')
@section('content')

	<!-- banner -->
	<div class="banner banner2">
		<div class="container">
			<h2>Top Selling <span>Gadgets</span> Flat <i>25% Discount</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="{{route ('Trang-chu')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Products1</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-4 w3ls_mobiles_grid_left">
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Categories</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>New Arrivals
									</a>
								  </h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body panel_text">
									<ul>
										<li><a href="products.html">Mobiles</a></li>
										<li><a href="products1.html">Laptop</a></li>
										<li><a href="products2.html">Tv</a></li>
										<li><a href="products.html">Wearables</a></li>
										<li><a href="products2.html">Refrigerator</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Accessories
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
										<li><a href="products2.html">Grinder</a></li>
										<li><a href="products2.html">Heater</a></li>
										<li><a href="products2.html">Kid's Toys</a></li>
										<li><a href="products2.html">Filters</a></li>
										<li><a href="products2.html">AC</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							</div>
							<ul class="panel_bottom">
								<li><a href="products.html">Summer Store</a></li>
								<li><a href="products.html">Featured Brands</a></li>
								<li><a href="products.html">Today's Deals</a></li>
								<li><a href="products.html">Latest Watches</a></li>
							</ul>
						</div>
					</div>
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Color</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="ecommerce_color">
								<ul>
									<li><a href="#"><i></i> Red(5)</a></li>
									<li><a href="#"><i></i> Brown(2)</a></li>
									<li><a href="#"><i></i> Yellow(3)</a></li>
									<li><a href="#"><i></i> Violet(6)</a></li>
									<li><a href="#"><i></i> Orange(2)</a></li>
									<li><a href="#"><i></i> Blue(1)</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Price</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="ecommerce_color ecommerce_size">
								<ul>
									<li><a href="#">Below $ 100</a></li>
									<li><a href="#">$ 100-500</a></li>
									<li><a href="#">$ 1k-10k</a></li>
									<li><a href="#">$ 10k-20k</a></li>
									<li><a href="#">$ Above 20k</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="{{asset('source/pages/images/48.jpg')}}" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>Attractive<span> New</span> Wrist Watches</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="{{asset('source/pages/images/49.jpg')}}" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos"> 
								<h3>Best Prices On<span> Laptop</span>Upto 50% Off</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_mobiles_grid_right_grid3">
						@foreach($pr_type_computer as $prtyco)
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">

								<div class="hs-wrapper hs-wrapper2" >
									@if($prtyco->promotion_price!=0)
									<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<img src="{{ asset('source/pages/images/'.$prtyco['image']) }}" alt=" " id="img-size" class="img-responsive" />
								</div>								
							<h5><a href="{{route ('Chi tiết sản phẩm', $prtyco->id )}}">{{$prtyco->name}}</a></h5> 
								<div class="simpleCart_shelfItem">									
									@if($prtyco->promotion_price==0)
									<p><i class="item_price">{{ number_format($prtyco->unit_price)}}đ</i></p>
									@else
									<p><span>{{ number_format($prtyco->unit_price)}}đ</span> <i class="item_price">{{ number_format($prtyco->promotion_price)}}đ</i></p>	
									@endif
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="Smart Phone" /> 
										<input type="hidden" name="amount" value="245.00"/>   
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</form>
								</div> 

							</div>
							
						</div>
						@endforeach
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
	<!-- Related Products -->
	<div class="w3l_related_products">
		<div class="container">
			<h3>Sản phẩm khác</h3>
			<ul id="flexiselDemo2">			
				@foreach($pr_other_computer as $protco)
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left mobiles_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="{{ asset('source/pages/images/'.$protco['image']) }}" alt=" " class="img-responsive" id="img-slide-size" />
							</div>
							<h5><a href="{{route ('Chi tiết sản phẩm', $protco->id )}}">{{$protco->name}}</a></h5>
							<div class="simpleCart_shelfItem">
								@if($protco->promotion_price==0)
								<p><i class="item_price">{{ number_format($protco->unit_price)}}đ</i></p>
								@else
								<p><span>{{ number_format($protco->unit_price)}}đ</span> <i class="item_price">{{ number_format($protco->promotion_price)}}đ</i></p>	
								@endif
								<button type="button" data-id="{{$protco->id}}"  data-name="{{$protco->name}}" data-image="{{$protco->image}}" data-promotion_price="{{$protco->promotion_price}}" data-unit_price="{{$protco->unit_price}}" class="w3ls-cart">Add to cart</button>							 
							</div> 

							@if($protco->new==1)
							<div class="mobiles_grid_pos">
								<h6>New</h6>
							</div>
							@endif

						</div> 
					</div>
				</li>
				@endforeach
			</ul>
			
				
		</div>
	</div>
	<!-- //Related Products -->

@endsection