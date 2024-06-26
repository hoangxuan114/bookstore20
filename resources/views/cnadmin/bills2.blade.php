@EXTENDS('admin.main')
 
@section('content')
 
    <!-- DataTales Example -->
    <div CLASS="card shadow mb-4">
        <div CLASS="card-header py-3">
          <h6 CLASS="m-0 font-weight-bold text-primary"></h6>
        </div>
            <div CLASS="card-body">
              <div CLASS="table-responsive">
                <table id="tb1" CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID đơn hàng</th>
                      <th>Ngày đặt hàng</th>
                      <th>Tổng tiền</th>
                      <th>Trạng thái</th>
                    </tr>
                  </thead>
 
                  <tbody>
                    <?php foreach ($bill as $b): ?>
                    <tr>
                      
                        <td><a href="{{route('billd',$b->id)}}">{{$b->id}}</a></td>
                        <td>{{date('d-m-Y h:i:s', strtotime($b->date_order))}}</td>
                        <td>{{$b->total}} đ</td>
                        <td><form style="display: inline;" method="POST" action="{{route('changest2')}}">
                          @csrf
                           <input name="id" value="{{$b->id}}" style="display:none"></input>
                           <input value="{{$b->status}}" readonly></input>
                           <?php if ($num!=2): ?>
                                 <button type="submit" class="btn btn-outline-info">Thay đổi</button>
                           <?php endif ?>
                        </form></td>
                      
                    </tr>
                   <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
 
@endsection