@extends('master')
@section('content')
<main class="main-container">
<!-- contact content -->


	<!-- Start Contact Us -->

	<div id="Contact" class="light-wrapper">
		<div class="container inner">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="Contact-Form">
							<form class="leave-comment contact-form" method="post" action="#" id="cform" autocomplete="on">
								<div class="Contact-us">
									<div class="form-input col-md-4">
										<input type="text" name="name" placeholder="Tên của bạn" required>
									</div>
									<div class="form-input col-md-4">
										<input type="email" name="email" placeholder="Email" required>
									</div>
									<div class="form-input col-md-4">
										<input type="text" name="contact_phone" placeholder="Số điện thoại">
									</div>
									<div class="form-input col-md-12">
										<textarea class="txt-box textArea" name="message" cols="40" rows="7" id="messageTxt" placeholder="Message" spellcheck="true" required></textarea>
									</div>
									<div class="form-submit col-md-12">
										<input type="submit" class="btn btn-custom-6" value="Gửi">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">

					<div class="Contact-Info">
						<h4>Thông tin liên hệ</h4>
						<div class="tex-contact">
							<p>Hỗ trợ tận tình, dịch vụ 24/7</p>
						</div>
						<div class="Block-Contact col-md-6">
							<p>Số điện thoại :</p>
							<ul>
								<li>
									<i class="fa fa-phone"></i>
									<span>0348791105</span>
								</li>
							</ul>
						</div>
						<div class="Block-Contact col-md-6">
							<p>Email :</p>
							<ul>
								<li>
									<i class="fa fa-envelope"></i>
									<span>hoangxthang46@gmail.com</span>
								</li>
							</ul>
						</div>
						<div class="Block-Contact col-md-12">
							<p>Địa chỉ :</p>
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									<span>470 Trần Đại Nghĩa, quận Ngũ Hành Sơn, phường Hòa Quý, Đà Nẵng</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Contact Us -->
<!-- end contact content -->

</main>
@endsection