@INCLUDE('admin.head')
<body class="bg-gradient-primary">
  <div class="row justify-content-center">

	<div class="col-lg-4" style="margin: 0 auto;" >
    <div class="p-5" style="width:400px">
                 <form class="user" action="{{route('dangnhapad')}}" method="POST">
                  @csrf
                 <div class="text-center">
                                        <h4 style="color: white">Đăng nhập Admin</h4>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                         id="exampleInputEmail" aria-describedby="emailHelp"
                                         name="name" 
                                                placeholder="Nhập tên Admin">
                                    </div>
                                    <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                    name="password" 
                                           id="exampleInputPassword" placeholder="Mật khẩu">
                                    </div>
                                    <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                   </div>
                            </div>
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Đăng nhập
                              </button>
                              <hr>
                 </form>
     </div>

  </div>
  </div>
</body>