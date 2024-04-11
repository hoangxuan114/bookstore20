@EXTENDS('admin.main')
 
@section('content')
 
    <!-- DataTales Example -->
    <div CLASS="card shadow mb-4">
        <div CLASS="card-header py-3">
          <h6 CLASS="m-0 font-weight-bold text-primary">Quản lý tài sản phẩm</h6>
        </div>
            <div CLASS="card-body">
              <div CLASS="table-responsive">
                <table id="tb1" CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Ảnh</th>
                      <th>Tên</th>
                      <th>Thể loại</th>
                      <th>Tác giả</th>
                      <th>Giới thiệu</th>
                      <th>Giá</th>
                      <th></th>
               
                    </tr>
                  </thead>
 
                  <tbody>
                    <?php foreach ($product as $pd): ?>
                    <tr>
                      
                        <td>{{$pd->id}}</td>
                        <td><img src="{{asset("bst/img/product/{$pd['image']}")}}" style="width: 54px;height: 64px"></td>
                        <td>{{$pd->name}}</td>
                        <td>{{$pd->id_type}}</td>
                        <td>{{$pd->author}}</td>
                        <td>{{$pd->description}}</td>
                        <td>{{$pd->promotion_price}} / {{$pd->unit_price}}</td>
                        <td><a href="{{route('deproduct',$pd->id)}}" onclick="confirm('Xóa một sản phẩm')">xóa</a></td>
                    </tr>
                   <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
 
@endsection