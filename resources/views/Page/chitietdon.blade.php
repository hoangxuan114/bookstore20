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
                <span>1. Chi tiết đơn hàng {{$id}}
                                </span> <a class="accordion-btn open" data-toggle="collapse" href="#collapse-five"></a></h2>
                                <?php if (sizeof($bill)>0): ?>
						        	<div class="accordion-body collapse in" id="collapse-five">

										<div class="row accordion-body-wrapper">
                                            
											<div class="col-md-12">
												<table class="table checkout-table">
													<thead>
													<tr>
														<th class="table-title">Tên sách
														</th>
														<th class="table-title">Số lượng
														</th>
														<th class="table-title">Đơn giá
														</th>
														
													</tr>
													</thead>
													<tbody>
													<?php foreach ($bill as $b): ?>
													<tr style="align:center">
														
														<td class="product-price-col" >
															<h4 class="product-name">{{$b->name}}</h4>
															
														</td>
														<td class="product-price-col">

                                                                    <span class="product-price-special">
                                                                    {{$b->quantity}}
                                                                    </span>
														</td>
														<td class="product-name-col">
 
                                                                    <span class="product-price-special">
                                                                    	{{$b->promotion_price}}
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