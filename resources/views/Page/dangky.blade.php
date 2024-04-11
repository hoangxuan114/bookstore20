@extends('master')
@section('content')
<main class="container">
	<section>

		<div class="signinpanel">
              	<div class="row" style="width:600px; margin: 0 auto;">
              		 @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                 <form method="post" action="{{route('postdangky')}}">
                 @csrf
                        <center>
                        	<h3 class="nomargin">Đăng ký</h3>
                        </center>
						
						<p class="mt5 mb20">Bạn đã có tài khoản ? <a href="{{route('dangnhap')}}"><strong>Đăng nhập</strong></a></p>


						<div class="mb10">
							<label class="control-label">Tên người dùng</label>
							<input type="text" name="name" class="form-control" accept-charset="utf-8" required/>
						</div>

						<div class="mb10">
							<label class="control-label">Email</label>
							<input type="text" name="email" class="form-control" required/>
						</div>

						<div class="mb10">
							<label class="control-label">Số điện thoại</label>
							<input type="text" name="telephone" class="form-control input-lg" min="0" step="1"required/>
						</div>

						<div>
							<label class="control-label">Địa chỉ(Thông tin nhận hàng)</label>
							<input accept-charset="utf-8" type="text" name="address" class="form-control" required/>
						</div>
                        
                        <div class="mb10">
							<label class="control-label">Mật khẩu</label>
							<input type="password" name="password" class="form-control" required>
						</div>

						<div class="mb10">
							<label class="control-label">Nhập lại mật khẩu</label>
							<input type="password" name="password2" class="form-control" required>
						</div>
						

						
						<br />

						<button class="btn btn-info">Đăng ký </button>
					</form>
				

			</div><!-- row -->
			
             

		</div><!-- signin -->
	</section>
</main>
@endsection