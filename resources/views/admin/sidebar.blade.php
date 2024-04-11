<!-- Sidebar -->
<ul CLASS="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
  <!-- Sidebar - Brand -->
  <a CLASS="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div CLASS="sidebar-brand-icon rotate-n-15">
      <i CLASS="fas fa-cogs"></i>
    </div>
    <div CLASS="sidebar-brand-text mx-3">Quản trị website</div>
  </a>
 
  <!-- Divider -->
  <hr CLASS="sidebar-divider">
 
  <!-- Heading -->
  <div CLASS="sidebar-heading" style="display: none;">
    Interface
  </div>
 
  <!-- Nav Item - Pages Collapse Menu -->
  <li CLASS="nav-item">
  <a CLASS="nav-link collapsed" href="{{route('trang-chu')}}" >
      <i CLASS="fas fa-home"></i>
      <span>Trang chủ</span>
    </a>
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i CLASS="fas fa-fw fa-cog"></i>
      <span>Quản lý đơn hàng</span>
    </a>
    <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <a CLASS="collapse-item" href="{{route('bill')}}">Tất cả</a>
        <a CLASS="collapse-item" href="{{route('bills',0)}}">Chờ xác nhận</a>
        <a CLASS="collapse-item" href="{{route('bills2',1)}}">Đang giao hàng</a>
        <a CLASS="collapse-item" href="{{route('bills',2)}}">Đã giao hàng</a>
      </div>
    </div>

    <a CLASS="nav-link collapsed" href="{{route('danhmuc')}}" >
      <i CLASS="fas fa-edit"></i>
      <span>Danh mục sản phẩm</span>
    </a>

    <a CLASS="nav-link collapsed" href="{{route('lproduct')}}">
      <i CLASS="fas fa-edit"></i>
      <span>Tất cả sản phẩm</span>
    </a>

    <a CLASS="nav-link collapsed" href="{{route('qtaikhoan')}}">
      <i CLASS="fas fa-edit"></i>
      <span>Quản lý tài khoản</span>
    </a>
    <a CLASS="nav-link collapsed" href="{{route('qcomment')}}">
      <i CLASS="fas fa-edit"></i>
      <span>Quản lý bình luận</span>
    </a>
    <a CLASS="nav-link collapsed" href="#">
      <i CLASS="fas fa-edit"></i>
      <span>Quản lý slide</span>
    </a>
  </li>
 
</ul>
<!-- End of Sidebar -->