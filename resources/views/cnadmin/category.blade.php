@EXTENDS('admin.main')
 
@section('content')
    <!-- DataTales Example -->
    <div CLASS="card shadow mb-4">
        <div CLASS="card-header py-3">
          <h6 CLASS="m-0 font-weight-bold text-primary">Thể loại sách</h6>

        </div>
            <form style="display: inline;" method="POST" action="{{route('addcate')}}">
              @csrf
            <input name="name"></input>
            <button type="submit" class="btn btn-outline-info">Thêm thể loại</button>
          </form>
        </div>
            <div CLASS="card-body">
              <div CLASS="table-responsive">
                <table id="tb1" CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên</th>
                      <th></th>
                    </tr>
                  </thead>
 
                  <tbody>
                    <?php foreach ($type as $b): ?>
                    <tr>
                        
                        <td>{{$b->tid}}</td>
                        <td><form style="display: inline;" method="POST" action="{{route('ccate1')}}">
                          @csrf
                           <input name="id" value="{{$b->tid}}" style="display:none"></input>
                            <input value="{{$b->tname}}" name="name"></input>
                                 <button type="submit" class="btn btn-outline-primary">Cập nhật</button>
                        </form></td>
                        <td><form style="display: inline;" method="POST" action="{{route('ccate2')}}">
                          @csrf
                           <input name="id" value="{{$b->tid}}" style="display:none"></input>
                                 <button class="btn btn-outline-danger" type="submit btn-secondary" onclick="confirm('Xóa một danh mục sẽ xóa luôn tất cả sản phẩm thuộc danh mục đó')">Xóa</button>
                        </form></td>
                                              
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
    
 
@endsection