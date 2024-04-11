<!-- Topbar -->
<nav CLASS="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" CLASS="btn btn-link d-md-none rounded-circle mr-3">
    <i CLASS="fa fa-bars"></i>
  </button>
 
  <!-- Topbar Search -->
   
    <div CLASS="input-group">
      <input type="text" CLASS="form-control bg-light border-0 small" placeholder="Tìm kiếm" aria-label="Search" aria-describedby="basic-addon2">
      <div CLASS="input-group-append">
        <button CLASS="btn btn-primary" type="button">
          <i CLASS="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
   
 
  <!-- Topbar Navbar -->
  <ul CLASS="navbar-nav ml-auto">
 
    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li CLASS="nav-item dropdown no-arrow d-sm-none">
      <a CLASS="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i CLASS="fas fa-search fa-fw"></i>
      </a>
      <!-- Dropdown - Messages -->
      <div CLASS="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
        <form CLASS="form-inline mr-auto w-100 navbar-search">
          <div CLASS="input-group">
            <input type="text" CLASS="form-control bg-light border-0 small" placeholder="Tìm kiếm" aria-label="Search" aria-describedby="basic-addon2">
            <div CLASS="input-group-append">
              <button CLASS="btn btn-primary" type="button">
                <i CLASS="fas fa-search fa-s"m></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>
 
    <!-- Nav Item - Alerts -->
    <li CLASS="nav-item dropdown no-arrow mx-1">
      <a CLASS="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i CLASS="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <span CLASS="badge badge-danger badge-counter">3+</span>
      </a>
      <!-- Dropdown - Alerts -->
      <div CLASS="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 CLASS="dropdown-header">
          Trung tâm thông báo
        </h6>
        <a CLASS="dropdown-item d-flex align-items-center" href="#">
          <div CLASS="mr-3">
            <div CLASS="icon-circle bg-primary">
              <i CLASS="fas fa-file-alt text-white"></i>
            </div>
          </div>
          <div>
            <div CLASS="small text-gray-500">11/11/2023</div>
            <span CLASS="font-weight-bold">Báo cáo hàng tháng đã sẵn sàng để tải xuống</span>
          </div>
        </a>
 
        <a CLASS="dropdown-item text-center small text-gray-500" href="#">Hiển thị tất cả thông báo</a>
      </div>
    </li>
 
    <!-- Nav Item - Messages -->
    <li CLASS="nav-item dropdown no-arrow mx-1">
      <a CLASS="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i CLASS="fas fa-envelope fa-fw"></i>
        <!-- Counter - Messages -->
        <span CLASS="badge badge-danger badge-counter">7</span>
      </a>
      <!-- Dropdown - Messages -->
      <div CLASS="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
        <h6 CLASS="dropdown-header">
          Trung tâm tin nhắn
        </h6>
        <a CLASS="dropdown-item d-flex align-items-center" href="#">
          <div CLASS="dropdown-list-image mr-3">
            <img CLASS="rounded-circle" src="{{URL::to('bst/img/Admin/man.png')}}" alt="">
            <div CLASS="status-indicator bg-success"></div>
          </div>
          <div CLASS="font-weight-bold">
            <div CLASS="text-truncate">Sách Hiểu về trái tim hay không vậy Shop ơi?</div>
            <div CLASS="small text-gray-500">Tâm tỉnh táo · 58m</div>
          </div>
        </a>
        <a CLASS="dropdown-item d-flex align-items-center" href="#">
          <div CLASS="dropdown-list-image mr-3">
            <img CLASS="rounded-circle" src="{{URL::to('bst/img/Admin/human.png')}}" alt="">
            <div CLASS="status-indicator"></div>
          </div>
          <div>
            <div CLASS="text-truncate">Bên mình có sách nào về quản trị cảm xúc hay không ạ?</div>
            <div CLASS="small text-gray-500">Trang lan man · 1d</div>
          </div>
        </a>
 
        <a CLASS="dropdown-item text-center small text-gray-500" href="#">Xem thêm...</a>
      </div>
    </li>
 
    <div CLASS="topbar-divider d-none d-sm-block"></div>
 
    <!-- Nav Item - User Information -->
    <li CLASS="nav-item dropdown no-arrow">
      <a CLASS="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span CLASS="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
        <img CLASS="img-profile rounded-circle" src="{{URL::to('bst/img/Admin/profile.png')}}">
      </a>
      <!-- Dropdown - User Information -->
      <div CLASS="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a CLASS="dropdown-item" href="{{route('getAdmin')}}">
          <i CLASS="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Thông tin cá nhân
        </a>
        <a CLASS="dropdown-item" href="#">
          <i CLASS="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Thiết lập
        </a>
        <a CLASS="dropdown-item" href="#">
          <i CLASS="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
          Lịch sử hoạt động
        </a>
        <div CLASS="dropdown-divider"></div>
        <a CLASS="dropdown-item" href="{{route('logOut')}}">
          <i CLASS="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Đăng xuấ<template></template>
        </a>
      </div>
    </li>
 
  </ul>
 
</nav>
<!-- End of Topbar -->