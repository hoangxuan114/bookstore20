@extends('master')
@section('content')
<main class="main-container">
<section class="men_area pt-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9">

				<div class="product-filter">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2" style="">
							<p class="control-label" style="font-size: 18px;">Sort By:</p>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4">
							<select name="price-type" id="input-sort" class="form-control">
								<option value="">Default</option>
								<option value="">Name (A - Z)</option>
								<option value="">Name (Z - A)</option>
								<option value="">Price (Low > High)</option>
								<option value="">Price (High > Low)</option>
								<option value="">Rating (Lowest)</option>
							</select>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2">
							<p class="control-label" style="font-size: 18px;">Show:</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2">
							<select name="value" id="input-sort-name" class="form-control">
								<option value="">6</option>
								<option value="">25</option>
								<option value="">30</option>
								<option value="">40</option>
								<option value="">20</option>
								<option value="">28</option>
							</select>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-2">
							<div class="button-view">
								<a  href="#"><i class="fa fa-th-list"></i></a>
								<a class="special_color" href="#"><i class="fa fa-th"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10" style="">
							<p class="control-label" style="font-size: 18px;">Có: {{$product->total()}} sản phẩm</p>
						</div>
				</div>

				<div id="shop-all" class="row">
					<!-- Product Item #1 -->
					<?php foreach ($product as $pd): ?>
						<div class="col-xs-12 col-sm-6 col-md-4 product-item filter-best" style="width: 290px;height: 500px;">
						<div class="product-img">
							<img src="bst/img/product/{{$pd->image}}" style="width: 260px; height: 343px;" alt="product">
							<div class="product-hover">
								<div class="product-cart">
									<a class="btn btn-secondary btn-block" href="{{route('themgiohang',$pd->id)}}">Mua ngay</a>
								</div>
							</div>
						</div>
						<!-- .product-img end -->
						<div class="product-bio">
							<h4>
								<a href="{{route('chitietsp',$pd->id)}}" style="width:290px;height: 40px;">{{$pd->name}}</a>
							</h4>
							<p class="product-price" style="float: right;"><span>{{$pd->unit_price}}</span>{{$pd->promotion_price}} đ</p>
						</div>
						<!-- .product-bio end -->

					</div>
					<?php endforeach ?>
					<!-- .product-item end -->

					<!-- .product-item end -->
				</div>
				<div class="shopping-pagination pull-right">
				<ul class="pagination">
					{{$product->links()}};
				</ul>
			</div>




			</div>

			<aside class="col-md-3 sidebar">

				<div class="widget category-widget">

					<h3>Thể loại sách</h3>

					<ul id="category-widget">
						<li><a href="#">Sách mới</a></li>
						<li><a href="#">Sách bán chạy</a></li>
						<?php foreach ($category as $ct): ?>
							<li><a href="{{route('dmsanpham',$ct->tid)}}">{{$ct->tname}}</a></li>
						<?php endforeach ?>
					</ul>
				</div>
				<!-- /.category widget -->

				<div class="widget">

					<div class="accordion" id="sidebar-collapse-filter">

						<div class="accordion-group panel">

							<div class="accordion-title">Color Filter
								<a class="accordion-btn open" data-toggle="collapse" href="#color-filter"></a>
							</div>

							<div class="accordion-body collapse in" id="color-filter">

								<div class="accordion-body-wrapper">

									<div class="filter-color-container">

										<div class="row">
											<a href="#" data-bgcolor="#ffffff" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#f5edb2" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#f4e6ca" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#f7ce91" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#d5fefd" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#c5c8f4" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#8a9ad6" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#c1a6c9" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#93d0da" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#8fdfa6" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#d8ea9f" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#79a762" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#fed5d4" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#fe8482" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#fe84ab" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#bebfc2" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#a99986" class="filter-color-box"></a>
											<a href="#" data-bgcolor="#5d5954" class="filter-color-box"></a>
										</div>
									</div>
									<!-- /.filter-color-container -->
								</div>
								<!-- /.accordion-body-wrapper -->
							</div>
							<!-- /.accordion-body -->
						</div>
						<!-- /.accordion-group -->


						<div class="accordion-group panel">

							<div class="accordion-title">
								Size Filter
								<a class="accordion-btn open" data-toggle="collapse" href="#size-filter"></a>
							</div>

							<div class="accordion-body collapse in" id="size-filter">

								<div class="accordion-body-wrapper">

									<div class="filter-color-container">

										<div class="row">
											<a href="#" class="filter-size-box active">6</a>
											<a href="#" class="filter-size-box">8</a>
											<a href="#" class="filter-size-box">10</a>
											<a href="#" class="filter-size-box">12</a>
											<a href="#" class="filter-size-box">14</a>
											<a href="#" class="filter-size-box">16</a>
											<a href="#" class="filter-size-box">xs</a>
											<a href="#" class="filter-size-box">s</a>
											<a href="#" class="filter-size-box">m</a>
											<a href="#" class="filter-size-box">ml</a>
											<a href="#" class="filter-size-box">l</a>
											<a href="#" class="filter-size-box">xl</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.accordion-group -->

						<div class="accordion-group panel">

							<div class="accordion-title">Price Filter
								<a class="accordion-btn open" data-toggle="collapse" href="#price-filter"></a>
							</div>

							<div class="accordion-body collapse in" id="price-filter">

								<div class="accordion-body-wrapper">

									<div class="filter-price">

										<div id="price-range"></div>

										<div id="filter-range-details" class="row">

											<div class="col-xs-6">

												<div class="filter-price-label">from
												</div>
												<input type="text" id="price-range-low" class="form-control">
											</div>

											<div class="col-xs-6">

												<div class="filter-price-label">to</div>
												<input type="text" id="price-range-high" class="form-control">
											</div>
										</div>

										<div class="filter-price-action">
											<a href="#" class="btn btn-custom-6 min-width-xss">Ok</a>
											<a href="#" class="btn btn-custom-6 min-width-xs">Clear</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.accordion-group -->
					</div>
					<!-- /.accordion -->
				</div>
				<!-- /.widget -->

				<div class="information-entry">
					<div class="information-blocks">
						<a class="sale-entry vertical" href="#">
							<span class="hot-mark yellow">hot</span>
							<span class="sale-price"><span>-40%</span> Valentine <br> Underwear Sale</span>
							<span class="sale-description">Lorem ipsum dolor sitamet, conse adipisc sed do eiusmod tempor.</span>
							<img style="height: 120px" class="sale-image" src="bst/img/text-widget-image-5.jpg" alt="">
						</a>
					</div>
				</div>


				<!-- /.widget -->

			</aside>
			<!-- /.col-md-3 -->
		</div>
	</div>
</section>

	<section class="block gray no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content-box no-margin go-simple">
						<div class="mini-service-sec">
							<div class="row">
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-paper-plane"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-medkit"></i>
										<div class="mini-service-info">
											<h3>Friendly Stuff</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>24/h Support</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
							</div>
						</div><!-- Mini Service Sec -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
</main>
@endsection