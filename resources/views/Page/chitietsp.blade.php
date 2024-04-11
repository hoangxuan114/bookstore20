@extends('master')
@section('content')
<main class="main-container">
<section class="product_content_area pt-40">
	<!-- start of page content -->

	<div class="lookcare-product-single container">

		<div class="row">

			<div class="main col-xs-12" role="main">
				<?php foreach ($product as $pd): ?>
					<div class=" product">

					<div class="row">

						<div class="col-md-5 col-sm-6 summary-before ">

							<div class="product-slider product-shop">
								<span class="onsale">Sale!</span>
								<ul class="slides">
									<li data-thumb="{{asset("bst/img/product/{$pd['image']}")}}" style="width: 305px;height: 466px;">
										<a src="{{asset("bst/img/product/{$pd['image']}")}}"" data-imagelightbox="gallery" class="hoodie_7_back" style="width: 305px;height: 466px">
											<img src="{{asset("bst/img/product/{$pd['image']}")}}" class="attachment-shop_single" alt="image" style="width: 305px;height: 466px">
										</a>
									</li>

								</ul>
							</div>
						</div>

						<div class="col-sm-6 col-md-7 product-review entry-summary">

							<h1 class="product_title">{{$pd->name}}</h1>
                             <div class="product_meta">
                                	<span class="posted_in">Tác giả: {{$pd->author}}</span>

							</div>
							<div class="woocommerce-product-rating">
								<div class="star-rating" title="Rated 4.00 out of 5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a href="#reviews" class="woocommerce-review-link">(<span class="count">3</span> customer reviews)</a>
							</div>

							<div>
								<p class="price"><del><span class="amount">{{$pd->unit_price}} đ</span></del>
									<ins><span class="amount">{{$pd->promotion_price}} đ</span></ins></p>
							</div>
                            <p>Giới thiệu sách</p>
							<p>{{$pd->description}}</p>

                            
							<form class="variations_form cart" method="POST" action="{{route('themgiohangM',$pd->id)}}">
							@csrf
								<div class="quantity">
									<input type="number" step="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" min="1" id="quantity">
								</div>
                               <button type="submit" class="btn btn-light" href="">Mua ngay</button>
                                 
								

							</form>
							<div class="product_meta">
                                	<span class="posted_in"><a href="{{route('dmsanpham',$pd->id_type)}}">Tag: {{$pd->tname}}</a></span>

							</div>

							<div class="share-social-icons">

								<a href="#" target="_blank" title="Share on Facebook">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="#" target="_blank" title="Share on Twitter">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#" target="_blank" title="Pin on Pinterest">
									<i class="fa fa-pinterest"></i>
								</a>
								<a href="#" target="_blank" title="Share on Google+">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>

						</div>
						<!-- .summary -->

					</div>

					<div class="wrapper-description">

						<ul class="tabs-nav clearfix">
							<li class="list-group-item active">Bình luận({{sizeof($comment)}})</li>
							<li class="list-group-item ">Giới thiệu thể loại</li>
							
						</ul>
						<div class="tabs-container product-comments">

							


							<div class="tab-content">
								<div class="panel entry-content">

									<h2>Bình luận</h2> 
								</div>

								<div class="panel entry-content">

									<div id="reviews">
										<div class="row">
											<div class="col-md-6">
												<div id="comments">
													<?php if (sizeof($comment)>0): ?>
														<h3>Có {{sizeof($comment)}} bình luận cho sản phẩm này</h3>
													<?php else: ?>
														<h3>Chưa có bình luận cho sản phẩm này</h3>
													<?php endif ?>
													

													<ol class="commentlist">
														
														
														<!-- #comment-## -->
														<?php foreach ($comment as $cm): ?>
															<li class="comment depth-1">

															<div class="comment_container">

																<div class="comment-text">



                                
																	<p class="meta">
																		<strong>{{$cm->full_name}}</strong>
																		 - 
																		<time datetime="2013-06-07T13:03:29+00:00">{{date('h:i A -d/m/Y', strtotime($cm->date))}}</time>
																		
																	</p>

																	<div class="description">
																		<p>{{$cm->comment}}</p>
																	</div>
																</div>
															</div>
														</li>
														<?php endforeach ?>
														<!-- #comment-## -->
													</ol>


												</div>

											</div>
											<div class="col-md-6">
												<div id="review_form_wrapper">
													<div id="review_form">
														<?php if (Auth::check()): ?>
															<div id="respond" class="comment-respond">
															<h3 class="comment-reply-title">Thêm bình luận </h3>
															<form action="{{route('sendcm')}}" method="post" id="commentform" class="comment-form">
															@csrf
															<p style="display: none"><input type="text" name="id_pd" readonly value="{{$pd->id}}"></p>
															<p style="display: none"><input type="text" name="id_us" readonly value="{{Auth::user()->id}}"></p>
																<p class="comment-form-author"><label for="author">Tên <span class="required">*</span></label> <input value="{{Auth::user()->full_name}}" id="author" name="author" type="text" readonly></p>
																<p class="comment-form-comment"><label for="comment">Bình luận</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>
																<p class="form-submit">
																	<button type="submit" class="btn btn-outline-dark">Gửi</button>
																</p>
															</form>
														    </div>
														<?php endif ?>
                                                       
														
														<!-- #respond -->
													</div>
												</div>
											</div>
										</div>

										<div class="clear"></div>
									</div>
								</div>
							</div>

                            <div class="tab-content">
								<section class="related-products">


									<p>
										
											{{$pd->tname}} {{$pd->tdescription}}

									</p>

								</section>
							</div>

						</div>

					</div>





				</div>
				<?php endforeach ?>
				<!-- #product-293 -->



			</div>
			<!-- end of main -->

		</div>
		<!-- end of .row -->

	</div>

	<!-- end of page content -->
</section>

<!-- service area -->
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
<!-- end service area -->
</main>

@endsection