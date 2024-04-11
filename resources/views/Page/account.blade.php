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
                <span>1. Đơn hàng đã đặt
                                </span> <a class="accordion-btn open" data-toggle="collapse" href="#collapse-five"></a></h2>
                                <?php if (sizeof($bill)>0): ?>
						        	<div class="accordion-body collapse in" id="collapse-five">

										<div class="row accordion-body-wrapper">
                                            
											<div class="col-md-12">
												<table class="table checkout-table">
													<thead>
													<tr>
														<th>
															
														</th>
														<th class="table-title">Ngày đặt
														</th>
														<th class="table-title">Đơn giá 
														</th>
														<th class="table-title">Trạng thái
														</th> 
													</tr>
													</thead>
													<tbody>
													<?php foreach ($bill as $b): ?>
													<tr>
														<td class="product-price-col" style="border:1px solid #ccc">
															<h4 class="product-name"><a href="
																{{route('chitietdon',$b->id)}}"> {{$b->id}}</a></h4>
														</td>
														<td class="product-price-col" style="border:1px solid #ccc">
															<h4 class="product-name">{{date('h:i A d/m/Y', strtotime($b->date_order))}}</h4>
															
														</td>
														<td class="product-price-col" style="border:1px solid #ccc">

                                                                    <span class="product-price-special">
                                                                    {{$b->total}} đ
                                                                    </span>
														</td>
														<td class="product-name-col" style="border:1px solid #ccc">
 
                                                                    <span class="product-price-special">
                                                                    	{{date('h:i A -d/m/Y', strtotime($b->created_at))}} | {{$b->status}}
                                                                    </span>
														</td>
														
													</tr>	
													
													</tbody>
													<tfoot>
													<?php endforeach ?>
													</tfoot>
												</table>

												<div class="md-margin half">
												</div>
											</div>
										</div>
									</div>

                                
						        <?php else: ?> <h2>Bạn chưa từng mua hàng</h2>
				             	<?php endif ?>
								
                                      <div class="container">
									<h2 class="accordion-title">

                <span>2. Cập nhật thông tin
                </span> <a class="accordion-btn open" data-toggle="collapse" href="#collapse-two"></a></h2>

									<div class="accordion-body collapse in" id="collapse-two">

										<div class="row accordion-body-wrapper">

											<form action="{{route('updatein')}}" method="POST">
                                            @csrf
												<div class="col-sm-6 padding-right-md">
													<h3 class="subtitle">Thông tin giao hàng</h3>

													<div class="xs-margin half">
													</div>
													<div class="form-group">
														<label for="lastname" class="form-label">Họ và tên
                                                                <span class="required">*</span>
														</label>
														<input type="text" name="name" id="name" class="form-control input-lg"
														accept-charset="utf-8" value="{{Auth::user()->full_name}}" required>
													</div>
													 <div class="form-group">
														<label for="telephone" class="form-label">Số điện thoại
                                                                <span class="required">*</span>
														</label>
														<input type="text" name="telephone" id="telephone" class="form-control input-lg" min="0" step="1" maxlength="10" value="{{Auth::user()->phone}}"required>
													</div>
													<div class="form-group">
														<label for="address" class="form-label">Địa chỉ giao hàng
															<span class="required">*</span>
														</label>
														<input type="text" name="address" id="address" class="form-control input-lg" accept-charset="utf-8" value="{{Auth::user()->address}}"required>
													</div>
													<input type="submit" class="btn btn-custom btn-lg min-width-md" value="Cập nhật thông tin">
												</div>
													
												</div>
											</form>
										</div>
									</div>
								</div>
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