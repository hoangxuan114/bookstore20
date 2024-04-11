@extends('master')
@section('content')
<section id="content-block" class="slider_area">
		<div class="container">
			<div class="content-push">
				<div class="row">
					
					<div class="col-md-3 col-md-push-9">
						<div class="sidebar-navigation">
							<div class="title">Thể loại sách<i class="fa fa-angle-down"></i></div>
							<div class="list">
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Sách mới</span></a>
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Sách bán chạy</span></a>
								<?php foreach ($category as $ct): ?>
									<a class="entry" href="{{route('dmsanpham',$ct->tid)}}"><span><i class="fa fa-angle-right"></i>{{$ct->tname}}</span></a>
								<?php endforeach ?>
							</div>
						</div>
						<div class="clear"></div>
					</div>
                    
					<div class="col-md-9 col-md-pull-3">

						<div class="header_slider">
							<article class="boss_slider">
								<div class="tp-banner-container">
									<div class="tp-banner tp-banner0">
										<ul>
											<?php foreach ($slide as $sl): ?>
												
											
											<!-- SLIDE  -->
											<li data-link="#" data-target="_self" data-transition="flyin" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
												<!-- MAIN IMAGE --><img src="bst/img/slide/{{$sl->image}}" alt="slidebg1" data-lazyload="bst/img/slide/{{$sl->image}}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
													<!-- LAYER NR. 1
												<div class="tp-caption very_big_white fade customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div> -->
												<!-- LAYER NR. 2 
												<div class="tp-caption very_large_white_text fade customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div> -->
												<!-- LAYER NR. 3 
												<div class="tp-caption large_white_text fade customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div> -->

											</li>
											<?php endforeach ?>
										</ul>
										<div class="slideshow_control"></div>
									</div><!-- /.tp-banner -->
								</div>
							</article>
						</div><!-- /.header_slider -->
                       
						<div class="clear"></div>

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- end new collection directory -->



<section id="popular-product" class="ecommerce">
	<div class="container">
		<!-- Shopping items content -->
		<div class="shopping-content">

			<!-- Block heading two -->
			<div class="block-heading-two">
				<h3><span>Tất cả sản phẩm </span></h3>
			</div>

			<div class="row">
				<?php foreach ($product as $new): ?>
					<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item" style="height: 430px;width: 250px;">
						<!-- Image -->
						<a href="{{route('chitietsp',$new->id)}}"><img class="img-responsive" src="bst/img/product/{{$new->image}}" alt="" style="width: 270px;height: 249px;" /></a>
						<!-- Shopping item name / Heading -->
						<h4><a href="{{route('chitietsp',$new->id)}}" >{{$new->name}}</a><span class="color pull-right">Giá :{{$new->promotion_price}} đ</span><br></h4>
						<div class="clearfix"></div>
						<!-- Buy now button -->
						<div class="visible-xs">
							<a id="btnb" class="btn btn-color btn-sm" href="{{route('themgiohang',$new->id)}}">Mua ngay</a>
                            
						</div>
						<!-- Shopping item hover block & link -->
						<div class="item-hover bg-color hidden-xs">
							<a id="btnb" href="{{route('themgiohang',$new->id)}}">Mua ngay</a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				
			</div>
			<!-- Pagination -->
			<?php 

			 ?>
			<div class="shopping-pagination pull-right">
				<ul class="pagination">
					{{$product->links()}};
				</ul>
			</div>
			<!-- Pagination end-->
		</div>
	</div>
</section>
<main class="main-container">

	<!-- new collection directory -->
	<!-- @yield('content'), -->


	<!-- Start Our Shop Items -->

	<!-- Recent items Starts -->
	

	<!-- Recent items Ends -->
    <!--

	<div class="bt-block-home-parallax" style="background-image: url(bst/img/resource/parallax2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="lookbook-product">
						<h2><a href="#" title="">Collection 2016 </a></h2>
						<ul class="simple-cat-style">
							<li><a href="#" title="">Dresses</a></li>
							<li><a href="#" title="">Coats & Jackets</a></li>
							<li><a href="#" title="">Jeans</a></li>
						</ul>
						<a href="#" title="">read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
     -->
    <!-- /.bt-block-home-parallax -->

	<!-- Start Our Clients -->

	<section id="Clients" class="light-wrapper">
		<div class="container inner">
			<div class="row">
				<div class="Last-items-shop col-md-3 col-sm-6">

					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Đề xuất</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Special Offer</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<?php foreach ($pran as $ran): ?>
								<li style="width: 266px;height: 120px;">
								<a href="#"><img src="bst/img/product/{{$ran->image}}" alt=""></a>
								<h6><a href="#">{{$ran->name}}</a></h6>
								<span class="sale-date">{{$ran->promotion_price}} đ</span>
							</li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3 col-sm-6">
					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Bán chạy</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Best Sellers</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{asset('bst/img/product/nghigiaulamgiau.jfif')}}" alt=""></a>
								<h6><a href="#">Nghĩ giàu làm giàu</a></h6>
								<span class="sale-date">78000đ</span>
							</li>
							<li>
								<a href="#"><img src="{{asset('bst/img/product/tuduynhanhcham.jfif')}}" alt=""></a>
								<h6><a href="#">Tư duy nhanh và chậm</a></h6>
								<span class="sale-date">98000đ</span>
							</li>
							<li>
								<a href="#"><img src="{{asset('bst/img/product/bimattuduytrieuphu.jfif')}}" alt=""></a>
								<h6><a href="#">Bí mật tư duy triệu phú</a></h6>
								<span class="sale-date">104000đ</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3 col-sm-6">
					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Xem nhiều</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Featured</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{asset('bst/img/product/hieuvetraitim.jfif')}}" alt=""></a>
								<h6><a href="#">Hiểu về trái tim</a></h6>
								<span class="sale-date">930000đ</span>
							</li>
							<li>
								<a href="#"><img src="{{asset('bst/img/product/dungviec.jfif')}}" alt=""></a>
								<h6><a href="#">Đúng việc</a></h6>
								<span class="sale-date">80000đ</span>
							</li>
							<li>
								<a href="#"><img src="{{asset('bst/img/product/tuduyphanbien.jfif')}}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3 col-sm-6">
					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Giảm giá</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Sales</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<?php foreach ($psale as $sale): ?>
								<li style="width: 266px;height: 120px;">
								<a href="#"><img src="bst/img/product/{{$sale->image}}" alt=""></a>
								<h6><a href="#">{{$sale->name}}</a></h6>
								<span class="sale-date">{{$sale->promotion_price}} đ</span>
							</li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- End Our Clients  -->
   
</main>
@endsection