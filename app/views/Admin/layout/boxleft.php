<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="AdminController.php" class="brand-link">
      <img src="../..//public/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Nhóm 1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="image">
          <img src="../..//public/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- tìm kiếm admin -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<?php
include "../views/Admin/quanlydanhmuc/navitem.php";
?>
<?php
include "../views/Admin/quanlydatsan/navitem.php";
?>
<?php
include "../views/Admin/quanlysan/navitem.php";
?>
<?php
include "../views/Admin/quanlycasan/navitem.php";
?>
<?php
include "../views/Admin/quanlykhuyenmai/navitem.php";
?>

<?php
include "../views/Admin/quanlybienthe/navitem.php";
?>

<?php
include "../views/Admin/quanlybinhluan/navitem.php";
?>

<?php
include "../views/Admin/quanlylienhe/navitem.php";
?>

<?php
include "../views/Admin/quanlytintuc/navitem.php";
?>
<?php
include "../views/Admin/quanlytaikhoan/navitem.php";
?>
<?php
include "../views/Admin/quanlychucvu/navitem.php";
?>
<?php
include "../views/Admin/quanlyhethong/navitem.php";
?>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>