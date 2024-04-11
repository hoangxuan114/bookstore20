
@EXTENDS('admin.main')
 
@section('content')
 
    <!-- DataTales Example -->
    <div CLASS="card shadow mb-4">
        <div CLASS="card-header py-3">
          <h6 CLASS="m-0 font-weight-bold text-primary">Trang chủ</h6>
        </div>
            <div CLASS="card-body">
              <div CLASS="table-responsive">
                <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Số danh mục</th>
                      <th>Tổng số sản phẩm</th>
                      <th>Các đơn hàng đã đặt</th>
                      <th>Số người dùng</th>
                    </tr>
                  </thead>
 
                  <tbody>
                    <tr>
                      <td>{{sizeof($ProductType)}}</td>
                      <td>{{sizeof($Product)}}</td>
                      <td>{{sizeof($Bill)}}</td>
                      <td>{{sizeof($User)}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
 
@endsection