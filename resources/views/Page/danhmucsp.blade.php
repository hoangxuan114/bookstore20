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
						<?php $name=$pd->name ?>
						<div class="col-xs-12 col-sm-6 col-md-4 product-item filter-best" style="width: 290px;height: 500px;">
						<div class="product-img">
						<img src="{{asset("bst/img/product/{$pd['image']}")}}" style="width: 260px; height: 343px;" alt="product">
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

			
				<div class="information-entry">
					<div class="information-blocks">
						<a class="sale-entry vertical" href="#">
							<span class="hot-mark yellow">hot</span>
							<span class="sale-price"><span>-33%</span>Sale cuối năm <br>12/12</span>
							<span class="sale-description">Chốt đơn ngay!</span>
							<img style="height: 120px" class="sale-image" src="{{asset('bst/img/sale.jfif')}}" alt="">
						</a>
					</div>
				</div>


				<!-- /.widget -->

			</aside>
			<!-- /.col-md-3 -->
		</div>
	</div>
</section>

	
	<div class="clearfix"></div>
</main>
@endsection