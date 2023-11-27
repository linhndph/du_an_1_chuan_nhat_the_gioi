<?php
include "../models/pdo.php";
include "../models/bienthe.php";
include "../models/tintuc.php";
include "../models/chucvu.php";
include "../models/casan.php";
include "../models/danhmuc.php";
include "../models/ql_san.php";
include "../models/taikhoan.php";
include "../models/quanlyhethong.php";
include "../models/lienhe.php";
include "../models/binhluan.php";
include "../models/khuyenmai.php";
?>
<?
include "../models/AdminModel.php";
?>
<?php 
include "../views/Nhanvien/layout/header.php";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php 
include "../views/Nhanvien/layout/nav3.php";
?>
 
<?php 
include "../views/Nhanvien/layout/boxleft.php";
?>
<div class="content-wrapper">
<?php

if (isset($_GET['act']) && ($_GET['act']!= "")) {
    $act = $_GET['act'];
    switch ($act) {
        //Quản lý biến thể sân bóng
        case 'dsbienthe':
            
            $dsbienthe=loadall_bienthe();
            include '../views/Nhanvien/quanlybienthe/danhsachbienthe.php';
            break;

      



        //Quản lý bình luận
        case 'dsbinhluan':
            $listbl=loadAllBL();
            $listtk=ds_bl_inner();
            include '../views/Nhanvien/quanlybinhluan/danhsachbinhluan.php';
            break;

        // case 'xoabinhluan':
        //     include '../views/Nhanvien/quanlybinhluan/danhsachbinhluan.php';
        //     break;

        //Quản lý ca sân
        case 'dscasan':
            $listcasan = loadAllCASAN();
            include '../views/Nhanvien/quanlycasan/danhsachcasan.php';
            break;

    
        
        //Quản lý danh mục
        case 'dsdanhmuc':
            $listdanhmuc = loadAll();
            include '../views/Nhanvien/quanlydanhmuc/danhsachdanhmuc.php';
            break;

       

        //Quản lý đặt sân
        case 'dsdatsan':
            include '../views/Nhanvien/quanlydatsan/danhsachdatsan.php';
            break;
       

        //Quản lý khuyến mãi
        case 'dskhuyenmai':
            $listkm=loadAllKM();
            $list_joinkm=ds_km_inner();
            include '../views/Nhanvien/quanlykhuyenmai/danhsachkhuyenmai.php';
            break;

       

        //Quản lý liên hệ
        case 'dslienhe':
            $listlh=loadAllLH();
            $listlienhe=ds_lh_inner();
            include '../views/Nhanvien/quanlylienhe/danhsachlienhe.php';
            break;
     

        //Quản lý sân:
        case 'dssan':
            if (isset($_POST['listok'])) {
                $tukhoa = $_POST['tukhoa'];
                $id_danh_muc = $_POST['id_danh_muc'];
                $listsan = loadAll_san($tukhoa, $id_danh_muc);
                $listdanhmuc = loadAll();
                include '../views/Nhanvien/quanlysan/danhsachsan.php';
                break;
            }
            else {
                $tukhoa = "";
                $id_danh_muc = 0;
            }
            
            $listsan = ds_san_inner();
            $listdanhmuc = loadAll();
            include '../views/Nhanvien/quanlysan/danhsachsan.php';
            break;

      

       // quản lý tài khoản:
        case 'dstaikhoan':
            $listtk = loadAll_tai_khoan();
            $listchucvu = ds_tk_inner();
            include '../views/Nhanvien/quanlytaikhoan/danhsachtaikhoan.php';
            break;

        


       

        //Quản lý tin tức
        case 'dstintuc':
            if (isset($_POST['listok'])) {
                $tukhoa = $_POST['tukhoa'];
                $dstintuc = loadAll_tintuchaha($tukhoa);
                include '../views/Nhanvien/quanlytintuc/danhsachtintuc.php';
                break;
            }
            $dstintuc = loadall_tintuc();
            include '../views/Nhanvien/quanlytintuc/danhsachtintuc.php';
            break;     
       
        //   //Quản lý chức vụ
        //   case 'dschucvu':
        //     $dschucvu=loadall_chuc_vu();
        //     include '../views/Nhanvien/quanlychucvu/danhsachchucvu.php';
        //     break;
       

        //Quản lý hệ thống
        case 'dsquanlyhethong':
            $dsht=loadall_hethong();     
            include '../views/Nhanvien/quanlyhethong/danhsachquanlyhethong.php';
            break; 

       



        default:
            include "../views/Nhanvien/layout/noidung.php";
            break;
    }
}
else{
    include "../views/Nhanvien/layout/noidung.php";
}

?>
  </div>


<?php 
include "../views/Nhanvien/layout/footer.php";
?>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php 
include "../views/Nhanvien/layout/linkjs.php";
?>