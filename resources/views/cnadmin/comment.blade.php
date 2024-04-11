@EXTENDS('admin.main')
 
@section('content')
    <!-- DataTales Example -->
    <div CLASS="card shadow mb-4">
        <div CLASS="card-header py-3">
          <h6 CLASS="m-0 font-weight-bold text-primary">Quản lý bình luận</h6>

        </div>
        <div CLASS="card-header py-3" style="margin-right: 0 auto">
        </div>
            <div CLASS="card-body">
              <div CLASS="table-responsive">
                <table id="tb1" CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>ID sản phẩm</th>
                      <th>ID người dùng</th>
                      <th>Ngày bình luận</th>
                      <th>Nội dung</th>
                      <th></th>
                    </tr>
                  </thead>
 
                  <tbody>
                    <?php foreach ($comment as $b): ?>
                    <tr>
                        
                        <td>{{$b->id}}</td>
                        <td>{{$b->id_product}}</td>
                        <td>{{$b->id_customer}}</td>
                        <td>{{date('h:i A -d/m/Y', strtotime($b->date))}}</td>
                        <td>{{$b->comment}}</td>
                        <td><form style="display: inline;" method="POST" action="{{route('decomment')}}">
                          @csrf
                           <input name="id" value="{{$b->tid}}" style="display:none"></input>
                                 <button class="btn btn-outline-danger" type="submit btn-secondary">Xóa</button>
                        </form></td>
                                              
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
    
 
@endsection