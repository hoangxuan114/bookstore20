@EXTENDS('admin.main')
 
@section('content')
 
    <!-- DataTales Example -->
    <div CLASS="card shadow mb-4">
        <div CLASS="card-header py-3">
          <h6 CLASS="m-0 font-weight-bold text-primary">Đơn hàng {{$num}}</h6>
          <h6></h6>
        </div>
            <div CLASS="card-body">
              <div CLASS="table-responsive">
                <table id="tb1" CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID sách</th>
                      <th>Tên sách</th>
                      <th>Số lượng</th>
                      <th>Đơn giá</th>
                    </tr>
                  </thead>
 
                  <tbody>
                    <?php foreach ($bill as $b): ?>
                    <tr>
                        <td>{{$b->id}}</td>
                        <td>{{$b->name}}</td>
                        <td>{{$b->quantity}}</td>
                        <td>{{$b->promotion_price}}  đ</td>         
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
 
@endsection