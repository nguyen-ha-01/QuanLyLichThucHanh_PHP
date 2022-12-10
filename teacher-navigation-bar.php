<!-- Navbar -->
<nav class="navbar navbar-expand-xxl navbar-dark sticky-top" style="background-color: #282a35;">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand mt-2 mt-lg-0" href="teacher-index.php?act=teacher-profile">
      <img src="../image/haui-logo.jpg" alt="HaUI Logo" height="40" class="rounded" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="teacher-index.php?act=teacher-home">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="teacher-index.php?act=xemphongmay">Xem thông tin phòng máy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="teacher-index.php?act=dangkylich">Đăng ký lịch thực hành</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex">
      <!-- Avatar -->
      <div class="dropdown">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff; text-decoration: none;">
              <img src="../image/character-avatar.jpg" class="rounded-circle" type="button" height="40" alt="Avatar" loading="lazy">&ensp;
              Nguyễn Văn A
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
              <li>
                <a class="dropdown-item" href="teacher-index.php?act=teacher-profile">Trang cá nhân</a>
              </li>
              <li>
                <a class="dropdown-item" href="teacher-index.php?act=doimatkhau">Đổi mật khẩu</a>
              </li>
              <li>
                <a class="dropdown-item" href="teacher-index.php?act=logout">Đăng xuất</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->