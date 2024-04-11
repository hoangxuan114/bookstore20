@extends('master')
@section('content')
<main class="main-container">
<!--Checkout Area Start-->
<section class="checkout-area area-padding ptb-40">
	<!-- Begin checkout -->
	<div class="ld-subpage-content">

		<div class="checkout-content">

			<!-- Begin checkout section -->
			<section class="checkout">



				<section class="checkout-section">

					<div class="ld-checkout-inner">

						<div class="xs-margin"></div>
						<div class="accordion" id="collapse">

							<div class="accordion-group panel darkerbg">
							<div class="container">
									<h2 class="accordion-title mb-0">
                <span>1. Xác nhận đơn hàng 
                                </span> <a class="accordion-btn open" data-toggle="collapse" href="#collapse-five"></a></h2>
                                <?php if (Session::has('cart')): ?>
						        	<div class="accordion-body collapse in" id="collapse-five">

										<div class="row accordion-body-wrapper">
                                            
											<div class="col-md-12">
												<table class="table checkout-table">
													<thead>
													<tr>
														<th class="table-title">Tên sách
														</th>
														<th class="table-title">Giá sách
														</th>
														<th class="table-title">Số lượng
														</th>
														<th class="table-title">Tổng cộng
														</th>
														<th>

                                                                    <span class="close-button disabled">
                </span>
														</th>
													</tr>
													</thead>
													<tbody>
													<?php foreach (Session::get('cart')->items as $product): ?>
													<tr>
														<td class="product-name-col">
															<figure>
																<a href="{{route('chitietsp',$product['item']['id'])}}"><img src="{{asset("bst/img/product/{$product['item']['image']}")}}" alt="{{$product['item']['name']}}"></a>
															</figure>
															<h4 class="product-name"><a href="{{route('chitietsp',$product['item']['id'])}}">{{$product['item']['name']}}</a></h4>
														</td>
														<td class="product-price-col">

                                                                    <span class="product-price-special">{{$product['item']['promotion_price']}} đ
                </span>
														</td>
														<td>
                                                            <form class="variations_form cart" method="POST" action="{{route('themgiohangMs',$product['item']['id'])}}">
                                                            	@csrf
                                                            	<div class="custom-quantity-input">
																<input type="number" name="quantity" value="{{$product['qty']}}" min="1" step="1">
															    <span>
															    <button type="submit" ">
															    	<i style="font-size:24px" class="fa">&#xf021;</i>
															    </button>
															    </span>
															    </div>
                                                            </form>
                                                            	
                                                            
															
														</td>
														<td class="product-total-col">

                                                                    <span class="product-price-special">{{$product['item']['promotion_price']*$product['qty']}} đ
                </span>
														</td>
														<td>
															<a href="{{route('xoagiohang',$product['item']['id'])}}" style="color: #008CBA;">
																<i class="fa fa-close" style="font-size: 24px"></i>
															</a>
														</td>
													</tr>	
													<?php endforeach ?>
													</tbody>
													<tfoot>
													<tr>
														<td class="checkout-total-title" colspan="3">

                                                                    <span>Tất cả:
                </span>
														</td>
														<td class="checkout-total-price cart-total" colspan="2">
														<?php if (Session::has('cart')): ?>
				                                 		{{Session('cart')->totalPrice}} đ<?php else: ?> 0đ
			                                    		<?php endif ?></a>
														</td>
													</tr>
													</tfoot>
												</table>

												<div class="md-margin half">
												</div>

												<div class="text-right"><a href="
												 {{route('thanhtoan')}}
												" class="btn btn-custom-6 btn-lger min-width-slg">Cập nhật giỏ hàng</a>
												</div>
											</div>
										</div>
									</div>


						        <?php else: ?> <h2>Giỏ hàng trống</h2>
				             	<?php endif ?>
								

								<?php if (Session::has('cart')): ?>
                                      <div class="container">
									<h2 class="accordion-title">

                <span>2. Xác nhận thông tin
                </span> <a class="accordion-btn open" data-toggle="collapse" href="#collapse-two"></a></h2>

									<div class="accordion-body collapse in" id="collapse-two">

										<div class="row accordion-body-wrapper">

											<form action="{{route('muahang')}}" method="POST">
                                            @csrf
												<div class="col-sm-6 padding-right-md">
													<h3 class="subtitle">Thông tin cá nhân</h3>

													<div class="xs-margin half">
													</div>
													<div class="form-group">
														<label for="lastname" class="form-label">Họ và tên
                                                                <span class="required">*</span>
														</label>
														<input type="text" name="name" id="name" class="form-control input-lg"
														value="{{Auth::user()->full_name}}" required readonly>
													</div>
													<div class="form-group">
														<label for="email" class="form-label">Email
                                                                <span class="required">*</span>
														</label>
														<input type="email" name="email" id="email" class="form-control input-lg" 
														value="{{Auth::user()->email}}" required readonly>
													</div>

													<div class="form-group">
														<label for="telephone" class="form-label">Số điện thoại
                                                                <span class="required">*</span>
														</label>
														<input type="text" name="telephone" id="telephone" class="form-control input-lg" min="0" step="1" maxlength="10" value="{{Auth::user()->phone}}"required readonly>
													</div>
												</div>

												<div class="md-margin visible-xs clearfix">
												</div>

												<div class="col-sm-6 padding-left-md">
													<h3 class="subtitle">Thông tin giao hàng</h3>

													<div class="xs-margin half">
													</div>

													<div class="form-group">
														<label for="address1" class="form-label">Địa chỉ giao hàng
															<span class="required">*</span>
														</label>
														<input type="text" name="address" id="address" class="form-control input-lg" value="{{Auth::user()->address}}"required readonly>
													</div>

													

													
													<div class="form-group">
														<label for="postcode" class="form-label">Ghi chú
														</label>
														<br>
														<textarea id="postcode" name="postcode" rows="6" cols="71">
														</textarea>
													</div>

													<div class="form-group custom-checkbox-wrapper">
														<label for="postcode" class="form-label">Phương thức thanh toán</label>
														<span class="required">*</span>
														<br>
														<input type="radio" name="payment" value="COD" checked>
														Thanh toán tiền mặt khi nhận hàng
														<br>
														<input type="radio" name="payment" value="ATM">
														Chuyển khoản
													</div>

													<div class="xs-margin">
													</div>
													<input type="submit" class="btn btn-custom btn-lg min-width-md" value="Đặt hàng">
												</div>
											</form>
										</div>
									</div>
								</div>
								 <?php endif ?>
							</div>

							<div class="accordion-group panel">


								</div>
							</div>
						</div>

						<div class="xlg-margin">
						</div>

					</div>

				</section>


			</section>
			<!-- End checkout section -->


		</div>
		<!-- /.checkout-content -->
	</div>
	<!-- /.ld-subpage-content -->
	<!-- End checkout -->
</section>
<!--End of Checkout Area-->


</main>
@endsection