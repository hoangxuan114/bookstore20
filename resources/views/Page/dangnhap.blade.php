@extends('master')
@section('content')
<main class="container">
	<section>

		<div class="signinpanel">
            <center>
            	<div class="row" style="width:400px;margin: 0 auto;">
              
				
					<form method="post" action="{{route('postdangnhap')}}">
					  @csrf
						<h4 class="nomargin">Đăng nhập</h4>

						<input type="email" class="form-control uname" placeholder="Email" name="email"/>
						<input type="password" class="form-control pword" placeholder="Mật khẩu" name="password"/>
						<a href="#"><small>Quên mật khẩu?</small></a>
						<button class="btn btn-info" style="width: 340px">Đăng nhập</button>
						<p class="mt5 mb20">Chưa có tài khoản? <a href="{{route('dangky')}}" style="color: blue;">Đăng ký</a></p>
					</form>

			</div><!-- row -->
            </center>
			
             

		</div><!-- signin -->
        <center>
        	
        </center>
	</section>
</main>
@endsection
