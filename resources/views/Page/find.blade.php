@extends('master')
@section('content')
<main class="main-container">
	<section class="men_area pt-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9">

					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-10">
							<p class="control-label" style="font-size: 18px;">Tìm thấy: {{ sizeof($products) }} sản phẩm</p>
						</div>
					</div>

					<div id="shop-all" class="row">
						@forelse($products as $product)
						<div class="col-xs-12 col-sm-6 col-md-4 product-item filter-best" style="width: 290px;height: 500px;">
							<div class="product-img">
								<img src="bst/img/product/{{ $product->image }}" style="width: 260px; height: 343px;" alt="product">
								<div class="product-hover">
									<div class="product-cart">
										<a class="btn btn-secondary btn-block" href="{{ route('themgiohang', $product->id) }}">Mua ngay</a>
									</div>
								</div>
							</div>
							<div class="product-bio">
								<h4>
									<a href="{{ route('chitietsp', $product->id) }}" style="width:290px;height: 40px;">{{ $product->name }}</a>
								</h4>
								<p class="product-price" style="float: right;"><span>{{ $product->unit_price }}</span>{{ $product->promotion_price }} đ</p>
								<!-- Hiển thị các thông tin khác của sản phẩm tại đây -->
							</div>
						</div>
						@empty
						<p>Không tìm thấy sản phẩm nào.</p>
						@endforelse
					</div>
					<div class="shopping-pagination pull-right">
						{{ $products->links() }}
					</div>

				</div>

				<aside class="col-md-3 sidebar">
					<div class="widget category-widget">
						<h3>Thể loại sách</h3>
						<ul id="category-widget">
							<li><a href="#">Sách mới</a></li>
							<li><a href="#">Sách bán chạy</a></li>
							<?php foreach ($category as $ct): ?>
									<a class="entry" href="{{route('dmsanpham',$ct->tid)}}"><span><i class="fa fa-angle-right"></i>{{$ct->tname}}</span></a>
							<?php endforeach ?>

						</ul>
					</div>
				</aside>

			</div>
		</div>
	</section>

	<div class="clearfix"></div>
</main>
@endsection