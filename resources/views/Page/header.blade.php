<?php

use Illuminate\Support\Facades\Session as Session;
use Illuminate\Support\Facades\Auth;
?>
<header>

	<!-- Top bar starts -->
	<div class="top-bar">
		<div class="container">

			<!-- Contact starts -->
			<div class="tb-contact pull-left">
				<!-- Email -->
				<i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:hoangxthang46@gmail.com">hoangxthang46@gmail.com</a>
				&nbsp;&nbsp;
				<!-- Phone -->
				<i class="fa fa-phone color"></i> &nbsp; 0348791105
				<!--Facebook-->
				<a href="https://www.facebook.com/xnthang.hoang/" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
			</div>
			<!-- Contact ends -->

			<!-- Shopping kart starts -->
			<div class="tb-shopping-cart pull-right">
				<!-- Link with badge -->
				<a href="#" class="btn btn-white btn-xs b-dropdown"><i class="fa fa-shopping-cart"></i> <i class="fa fa-angle-down color"></i> <span class="badge badge-color">
						<?php if (Session::has('cart')) : ?>
							{{Session('cart')->totalQty}} <?php else : ?> 0
						<?php endif ?>
					</span></a>
				<!-- Dropdown content with item details -->
				<?php if (Session::has('cart')) : ?>
					<div class="b-dropdown-block">
						<!-- Heading -->

						<ul class="list-unstyled">
							<!-- Item 1 -->

							<?php foreach (Session::get('cart')->items as $product) : ?>
								<li>
									<!-- Item image -->
									<div class="cart-img">
										<a class="cart-item-delete" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-times"></i></a>
										<a href="#"><img src="{{asset("bst/img/product/{$product['item']['image']}")}}" alt="" class="img-responsive" style="width: 51px;height: 64px;" /></a>
									</div>
									<!-- Item heading and price -->
									<div class="cart-title">
										<p><a href="#" style="width: 220px;">{{$product['item']['name']}}</a></p>
										<!-- Item price -->
										<span><a href="#">Số lượng: {{$product['qty']}}</a></span>
										<span class="label label-color label-sm">Giá: {{$product['item']['promotion_price']}}đ</span>
									</div>
									<div class="clearfix"></div>
								</li>
							<?php endforeach ?>


							<!-- Item 2 -->
						</ul>

						<a href="#" class="row">Tổng tiền: <?php if (Session::has('cart')) : ?>
								{{Session('cart')->totalPrice}} <?php else : ?> 0
							<?php endif ?> đ</a>
						<a href="{{route('thanhtoan')}}" class="btn btn-color btn-sm">Đặt hàng</a>

					</div>
				<?php endif ?>
			</div>
			<!-- Shopping kart ends -->

			<!-- Search section for responsive design -->
<div class="tb-search pull-left">
    <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
    <div class="b-dropdown-block">
        <form method="POST" action="{{ route('search') }}">
            @csrf
            <!-- Input Group -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm tên sách" name="key">
                <span class="input-group-btn">
                    <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
                </span>
            </div>
        </form>
    </div>
</div>
<!-- Search section ends -->


			<!-- Social media starts -->
			<div class="tb-social pull-right">
				<div class="brand-bg text-right">
					<!-- Brand Icons -->
					
					<?php if (Auth::check()) : ?>
						<a href="{{route('edac')}}" class=""><i class="fa fa-user square-2 rounded-1"></i>Chào bạn {{Auth::user()->full_name}}</a>
						<a href="{{route('dangxuat')}}" class="">| Đăng xuất</a>
					<?php else : ?>
						<a href="{{route('dangnhap')}}" class=""><i class="fa fa-user square-2 rounded-1"></i>Đăng nhập</a>
					<?php endif ?>

				</div>
			</div>
			<!-- Social media ends -->

			<div class="clearfix"></div>

		</div>
	</div>

	<!-- Top bar ends -->

	<!-- Header One Starts -->
	<div class="header-1">

		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<!-- Logo section -->
					<div class="logo">
						<h1><a href="{{route('trang-chu')}}"><img src="{{asset('bst/img/Admin/book.png')}}" alt="" width="45" height="45">Bookstore</a></h1>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
					<!-- Search Form -->
					<div class="header-search">
						<form method="POST" action="{{route('search')}}">
							@csrf
							<!-- Input Group -->
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Tìm tên sách" name="key">
								<span class="input-group-btn">
									<button class="btn btn-color" type="submit">Tìm kiếm</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Navigation starts -->

		<div class="navi">
			<div class="container">
				<div class="navy">
					<ul>
						<!-- Main menu -->
						<!--
						<li><a href="#">Home</a>
							<!-- Submenu -->
						<!--
							<ul>

								<li><a href="index.html">Home 1</a></li>
								<li><a href="index-2.html"><span>Home 2</span></a></li>
								<li><a href="index-3.html"><span>Home 3</span></a></li>

							</ul>
						</li>
				        	-->
						<li><a href="#">Thể loại</a>
							<ul>
								<?php foreach ($category as $lsp) : ?>
									<li><a href="{{route('dmsanpham',$lsp->tid)}}">{{$lsp->tname}}</a></li>
								<?php endforeach ?>

							</ul>
						</li>
						<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
						<li><a href="{{route('sanpham')}}">Kho sách</a></li>



						<li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
						<li><a href="{{route('lienhe')}}">Liên hệ</a></li>
					</ul>
				</div>
			</div>
		</div>
		@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{{ $message }}</strong>
		</div>
		@endif
		@if ($message = Session::get('fail'))
		<div class="alert alert-danger alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{{ $message }}</strong>
		</div>
		@endif
		<!-- Navigation ends -->

	</div>

	<!-- Header one ends -->

</header>