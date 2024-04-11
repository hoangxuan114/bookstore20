@EXTENDS('admin.main')
 
@section('content')
 
    <!-- DataTales Example -->
    <div CLASS="card shadow mb-4">
        <div CLASS="card-header py-3">
          <h6 CLASS="m-0 font-weight-bold text-primary">Quản lý tài khoản user</h6>
        </div>
            <div CLASS="card-body">
              <div CLASS="table-responsive">
                <table id="tb1" CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên</th>
                      <th>Số điện thoại</th>
                      <th>Email</th>
                      <th>Địa chỉ</th>
                      <th>Trạng thái</th>
                      <th></th>
                    </tr>
                  </thead>
 
                  <tbody>
                    <?php foreach ($account as $acc): ?>
                    <tr>
                      
                        <td>{{$acc->id}}</td>
                        <td>{{$acc->full_name}}</td>
                        <td>{{$acc->phone}}</td>
                        <td>{{$acc->email}}</td>
                        <td>{{$acc->address}}</td>
                        <td>
                            <input onclick="return false;" type="checkbox" name="check"
                            <?php 
                               if ($acc->status==0) {
                                 echo "checked";
                               }
                             ?>> | <button class="btn btn-outline-warning"><a href="{{route('changesta',$acc->id)}}">Thay đổi</a></button>                    
                        </td>
                        <td><button class="btn btn-outline-danger"><a href="{{route('deaccount',$acc->id)}}" onclick="confirm('Xóa một tài khoản sẽ xóa luôn tất cả đơn hàng của tài khoản đó')">Xóa</a></button></td>
                    </tr>
                   <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
 
@endsection