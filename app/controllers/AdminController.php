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
include "../views/Admin/layout/header.php";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php 
include "../views/Admin/layout/nav3.php";
?>
 
<?php 
include "../views/Admin/layout/boxleft.php";
?>
<div class="content-wrapper">
<?php

if (isset($_GET['act']) && ($_GET['act']!= "")) {
    $act = $_GET['act'];
    switch ($act) {
        //Quản lý biến thể sân bóng
        case 'dsbienthe':
            
            $dsbienthe=loadall_bienthe();
            include '../views/Admin/quanlybienthe/danhsachbienthe.php';
            break;

        case 'thembienthe':
            if(isset($_POST['thembienthe'])&&($_POST['thembienthe'])){
                $ten_bien_the=$_POST['tenbienthe'];
                $so_luong=$_POST['soluong'];
                $gia=$_POST['gia'];
                $trang_thai=$_POST['trangthai'];
                insert_bien_the($ten_bien_the, $so_luong, $gia, $trang_thai);
                $thongbao="Thêm thành công";
            }
                include '../views/Admin/quanlybienthe/add.php';
                break;

        case 'suabienthe':
            if(isset($_GET['id_bien_the'])&&($_GET['id_bien_the']>0)){
                $id_bien_the=$_GET['id_bien_the'];
                $ds=loadone_bien_the($id_bien_the);
            }
            include '../views/Admin/quanlybienthe/update.php';
            break;

        case 'updatebienthe':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id_bien_the = $_POST['idbienthe'];
                $ten_bien_the = $_POST['tenbienthe'];
                $so_luong = $_POST['soluong'];
                $gia = $_POST['gia'];
                $trang_thai = $_POST['trangthai'];

                update_bienthe($id_bien_the,$ten_bien_the,$so_luong,$gia,$trang_thai);
                $thongbao="Cập nhật thành công";
            }
            $dsbienthe=loadall_bienthe();
            include '../views/Admin/quanlybienthe/danhsachbienthe.php';
            break;

        case 'xoabienthe':
            if(isset($_GET['id_bien_the'])&&($_GET['id_bien_the']>0)){
                delete_bien_the($_GET['id_bien_the']);
            }
            $dsbienthe=loadall_bienthe();
                include '../views/Admin/quanlybienthe/danhsachbienthe.php';
                break;



        //Quản lý bình luận
        case 'dsbinhluan':
            $listbl=loadAllBL();
            $listtk=ds_bl_inner();
            include '../views/Admin/quanlybinhluan/danhsachbinhluan.php';
            break;

        // case 'xoabinhluan':
        //     include '../views/Admin/quanlybinhluan/danhsachbinhluan.php';
        //     break;

        //Quản lý ca sân
        case 'dscasan':
            $listcasan = loadAllCASAN();
            include '../views/Admin/quanlycasan/danhsachcasan.php';
            break;

        case 'themcasan':
            if (isset($_POST['themcasan'])) {
                $ten_ca = $_POST['tenca'];
                $thoi_gian_bd = $_POST['thoigianbd'];
                $thoi_gian_kt = $_POST['thoigiankt'];
                insert_casan($ten_ca, $thoi_gian_bd, $thoi_gian_kt);
                $thongbao = "Thêm thành công";
            }
            include '../views/Admin/quanlycasan/add.php';
            break;

        case 'suacasan':
            if (isset($_GET["id_ca"]) && $_GET["id_ca"] > 0) {
                $id_ca = $_GET["id_ca"];
                $cs = loadOneCASAN($id_ca);
            }
            include '../views/Admin/quanlycasan/update.php';
            break;
        case 'updatecasan':
            if (isset($_POST['capnhat'])) {
                $id_ca = $_POST["idcasan"];
                $ten_ca = $_POST['tenca'];
                $thoi_gian_bd = $_POST['thoigianbd'];
                $thoi_gian_kt = $_POST['thoigiankt'];
                update_casan($id_ca, $ten_ca, $thoi_gian_bd, $thoi_gian_kt);
                $thongbao = "Cập nhật thành công";
            }

            $listcasan = loadAllCASAN();
            include '../views/Admin/quanlycasan/danhsachcasan.php';
            break;
        case 'xoacasan':
            if (isset($_GET["id_ca"]) && $_GET["id_ca"] > 0) {
                $id_ca = $_GET["id_ca"];
                delete_casan($id_ca);
            }
            $listcasan = loadAllCASAN();
            include '../views/Admin/quanlycasan/danhsachcasan.php';
            break;
        
        //Quản lý danh mục
        case 'dsdanhmuc':
            $listdanhmuc = loadAll();
            include '../views/Admin/quanlydanhmuc/danhsachdanhmuc.php';
            break;

        case 'themdanhmuc':
            if (isset($_POST['themmoi'])) {
                $tendanhmuc = $_POST['tendanhmuc'];
                insert_danhmuc($tendanhmuc);
                $thongbao = "Thêm thành công";
            }
            include '../views/Admin/quanlydanhmuc/add.php';
            break;

        case 'suadanhmuc':
            if (isset($_GET["id_danh_muc"]) && $_GET["id_danh_muc"] > 0) {
                $id_danh_muc = $_GET["id_danh_muc"];
                $dm = loadOne($id_danh_muc);
            }
            include '../views/Admin/quanlydanhmuc/update.php';
            break;
        case 'updatedanhmuc':
            if (isset($_POST['capnhat'])) {
                $id_danh_muc = $_POST["iddanhmuc"];
                $ten_danh_muc = $_POST['tendanhmuc'];
                update_danhmuc($id_danh_muc, $ten_danh_muc);
                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadAll();
            include '../views/Admin/quanlydanhmuc/danhsachdanhmuc.php';
            break;
        case 'xoadanhmuc':
            if (isset($_GET["id_danh_muc"]) && $_GET["id_danh_muc"] > 0) {
                $id_danh_muc = $_GET["id_danh_muc"];
                delete_danhmuc($id_danh_muc);
            }
            $listdanhmuc = loadAll();
            include '../views/Admin/quanlydanhmuc/danhsachdanhmuc.php';
            break;

        //Quản lý đặt sân
        case 'dsdatsan':
            include '../views/Admin/quanlydatsan/danhsachdatsan.php';
            break;
        case 'suadsdatsan':
                include '../views/Admin/quanlydatsan/update.php';
                break;
        case 'xoadsdatsan':
                    include '../views/Admin/quanlydatsan/delete.php';
                    break;

        //Quản lý khuyến mãi
        case 'dskhuyenmai':
            $listkm=loadAllKM();
            $list_joinkm=ds_km_inner();
            include '../views/Admin/quanlykhuyenmai/danhsachkhuyenmai.php';
            break;

        case 'themkhuyenmai':
            if(isset($_POST['themkm'])&&($_POST['themkm'])){
                $id_san=$_POST['id_san'];
                $ma_khuyen_mai=$_POST['ma_khuyen_mai'];
                $ngay_bat_dau=$_POST['ngay_bat_dau'];
                $ngay_ket_thuc=$_POST['ngay_ket_thuc'];
                $gia_giam=$_POST['gia_giam'];
                $mo_ta=$_POST['mo_ta'];
                insert_khuyen_mai($id_san,$ma_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$gia_giam,$mo_ta);
                $thongbao="Thêm thành công";
            }
            include '../views/Admin/quanlykhuyenmai/add.php';
            break;

        case 'suakhuyenmai':
            if (isset($_GET['id_khuyen_mai']) && $_GET['id_khuyen_mai'] > 0) {
                $id_khuyen_mai = $_GET["id_khuyen_mai"];
                $onekm=loadone_khuyen_mai($id_khuyen_mai);
            }
            $listkm=loadAllKM();
            $list_joinkm=ds_km_inner();
            include '../views/Admin/quanlykhuyenmai/update.php';
            break;
        case 'updatekhuyenmai':
            if(isset($_POST['updatekm'])&&($_POST['updatekm'])){
                $id_khuyen_mai = $_POST['id_khuyen_mai'];
                $id_san=$_POST['id_san'];
                $ma_khuyen_mai=$_POST['ma_khuyen_mai'];
                $ngay_bat_dau=$_POST['ngay_bat_dau'];
                $ngay_ket_thuc=$_POST['ngay_ket_thuc'];
                $gia_giam=$_POST['gia_giam'];
                $mo_ta=$_POST['mo_ta'];
                update_khuyen_mai($id_khuyen_mai,$id_san,$ma_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$gia_giam,$mo_ta);
                $thongbao="Thêm thành công";
            }
            $listkm=loadAllKM();
            $list_joinkm=ds_km_inner();
                include '../views/Admin/quanlykhuyenmai/danhsachkhuyenmai.php';
                break;

        case 'xoakhuyenmai':
            if (isset($_GET['id_khuyen_mai']) && $_GET['id_khuyen_mai'] > 0) {
                $id_khuyen_mai = $_GET["id_khuyen_mai"];
                delete_khuyen_mai($id_khuyen_mai);
            }
            $listkm=loadAllKM();
            $list_joinkm=ds_km_inner();
            include '../views/Admin/quanlykhuyenmai/danhsachkhuyenmai.php';
             break;

        //Quản lý liên hệ
        case 'dslienhe':
            $listlh=loadAllLH();
            $listlienhe=ds_lh_inner();
            include '../views/Admin/quanlylienhe/danhsachlienhe.php';
            break;
        case 'phanhoi':
            $listlienhe=ds_lh_inner();
            if(isset($_GET['id_lien_he']) && ($_GET['id_lien_he']) > 0) {
                $trang_thai_lh="Đã phản hồi";
                $id_lien_he=$_GET['id_lien_he'];
                update_lien_he($id_lien_he,$trang_thai_lh);
            }
            include '../views/Admin/quanlylienhe/danhsachlienhe.php';
            break;
        case 'xoalienhe':
            if (isset($_GET["id_lien_he"]) && $_GET["id_lien_he"] > 0) {
                $id_lien_he = $_GET["id_lien_he"];
                delete_lien_he($id_lien_he);
            }
            $listlienhe=ds_lh_inner();
            $listlh = loadAllLH();
            include '../views/Admin/quanlylienhe/danhsachlienhe.php';
            break;

        //Quản lý sân:
        case 'dssan':
            if (isset($_POST['listok'])) {
                $tukhoa = $_POST['tukhoa'];
                $id_danh_muc = $_POST['id_danh_muc'];
                $listsan = loadAll_san($tukhoa, $id_danh_muc);
                $listdanhmuc = loadAll();
                include '../views/Admin/quanlysan/danhsachsan.php';
                break;
            }
            else {
                $tukhoa = "";
                $id_danh_muc = 0;
            }
            
            $listsan = ds_san_inner();
            $listdanhmuc = loadAll();
            include '../views/Admin/quanlysan/danhsachsan.php';
            break;

        case 'themsan':
            if (isset($_POST['themsan'])) {
                $ten_danh_muc = $_POST['id_danh_muc'];
                $ten_bien_the=$_POST['id_bien_the'];
                $ten_san = $_POST['tensan'];
                $img_san = $_FILES['img_san']['name'];
                $target_dir ="../views/Admin/quanlysan/anhsan/";
                $target_file = $target_dir.basename($_FILES['img_san']['name']);
                if(move_uploaded_file($_FILES['img_san']['tmp_name'], $target_file)){
                    echo "Bạn đã upload ảnh thành công";
                }
                else{
                    echo "upload ảnh không thành công";
                }

                insert_san($ten_bien_the,$ten_danh_muc,$ten_san,$img_san);
                $thongbao = "Thêm thành công";
                
            }
            include '../views/Admin/quanlysan/add.php';
            break;

        case 'suasan':
            if(isset($_GET['id_san'])&&($_GET['id_san']>0)){
                $id_san=$_GET['id_san'];
                $san=loadone_SAN($id_san);
            }
            include '../views/Admin/quanlysan/update.php';
            break;

        case 'updatesan':
            $listbienthe = ds_san_inner();
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id_san=$_POST['idsan'];
                $ten_danh_muc = $_POST['id_danh_muc'];
                $ten_bien_the=$_POST['id_bien_the'];
                $ten_san = $_POST['tensan'];
                $img_san = $_FILES['img_san']['name'];
                $target_dir ="../views/Admin/quanlysan/anhsan/";
                $target_file = $target_dir.basename($_FILES['img_san']['name']);
                if(move_uploaded_file($_FILES['img_san']['tmp_name'], $target_file)){
                    echo "Bạn đã upload ảnh thành công";
                }
                else{
                    echo "upload ảnh không thành công";
                }

                update_san($id_san,$ten_bien_the,$ten_danh_muc,$ten_san,$img_san);
                
                $thongbao = "Cập nhật thành công";
            }
            $listsan = loadAllSAN();
            $listsan = ds_san_inner();
            include '../views/Admin/quanlysan/danhsachsan.php';
            break;

        case 'xoasan':
            if (isset($_GET["id_san"]) && $_GET["id_san"] > 0) {
                $id_san = $_GET["id_san"];
                delete_san($id_san);
            }
            $listsan = loadAllSAN();
            $listsan = ds_san_inner();
            include '../views/Admin/quanlysan/danhsachsan.php';
            break;

       // quản lý tài khoản:
        case 'dstaikhoan':
            $listtk = loadAll_tai_khoan();
            $listchucvu = ds_tk_inner();
            include '../views/Admin/quanlytaikhoan/danhsachtaikhoan.php';
            break;

        case 'themtaikhoan':
            
            if(isset($_POST['themtaikhoan'])&&($_POST['themtaikhoan'])){
                $ten_dang_nhap=$_POST['ten_dang_nhap'];
                $mat_khau=$_POST['mat_khau'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $id_chuc_vu=$_POST['id_chuc_vu'];
                $trang_thai=$_POST['trang_thai'];

                $img_tai_khoan=$_FILES['img_tai_khoan']['name'];
                $target_dir ="../views/Admin/quanlytaikhoan/anhtaikhoan/";
                $target_file = $target_dir.basename($_FILES['img_tai_khoan']['name']);
                if(move_uploaded_file($_FILES['img_tai_khoan']['tmp_name'], $target_file)){
                    echo "Bạn đã upload ảnh thành công";
                }
                else{
                    echo "upload ảnh không thành công";
                }
                $ten_tai_khoan=$_POST['ten_tai_khoan'];
    
                insert_tai_khoan($ten_dang_nhap, $mat_khau, $sdt, $email,$address,$id_chuc_vu,$trang_thai,$img_tai_khoan,$ten_tai_khoan);
                $thongbao="Thêm thành công";
            }
                include '../views/Admin/quanlytaikhoan/add.php';
                break;

        case 'suataikhoan':
                if(isset($_GET['id_tai_khoan'])&&($_GET['id_tai_khoan']>0)){
                    $id_tai_khoan= $_GET['id_tai_khoan'];
                    $taikhoan = loadone_tk($id_tai_khoan);
                }
                include '../views/Admin/quanlytaikhoan/update.php';
                break;

        case 'updatetaikhoan':
            $listchucvu = ds_tk_inner();
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id_tai_khoan= $_POST['idtaikhoan'];
                $ten_dang_nhap= $_POST['tendangnhap'];
                $mat_khau= $_POST['matkhau'];
                $sdt= $_POST['sdt'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $id_chuc_vu=$_POST['id_chuc_vu'];
                $trang_thai=$_POST['trangthai'];
                $img_tai_khoan=$_FILES['img_tai_khoan']['name'];
                $target_dir ="../views/Admin/quanlytaikhoan/anhtaikhoan/";
                $target_file = $target_dir.basename($_FILES['img_tai_khoan']['name']);
                if(move_uploaded_file($_FILES['img_tai_khoan']['tmp_name'], $target_file)){
                    echo "Bạn đã upload ảnh thành công";
                }
                else{
                    echo "upload ảnh không thành công";
                }
                $ten_tai_khoan=$_POST['ten_tai_khoan'];
    
                update_tai_khoan($id_tai_khoan,$ten_dang_nhap,$mat_khau,$sdt,$email,$address,$id_chuc_vu,$trang_thai,$img_tai_khoan,$ten_tai_khoan);
                $thongbao="Cập nhật thành công";
            }
            $listtk = loadAll_tai_khoan();
            include '../views/Admin/quanlytaikhoan/danhsachtaikhoan.php';
            break;


        case 'xoataikhoan':
            $listchucvu = ds_tk_inner();
            if(isset($_GET['id_tai_khoan'])&&($_GET['id_tai_khoan']>0)){
                    $id_tai_khoan=$_GET['id_tai_khoan'];
                    delete_tk($id_tai_khoan);
                }
                $listtk= loadAll_tai_khoan();
                include '../views/Admin/quanlytaikhoan/danhsachtaikhoan.php';
                break;

        //Quản lý tin tức
        case 'dstintuc':
            if (isset($_POST['listok'])) {
                $tukhoa = $_POST['tukhoa'];
                $dstintuc = loadAll_tintuchaha($tukhoa);
                include '../views/Admin/quanlytintuc/danhsachtintuc.php';
                break;
            }
            $dstintuc = loadall_tintuc();
            include '../views/Admin/quanlytintuc/danhsachtintuc.php';
            break;     
        case 'themtintuc':
            if(isset($_POST['themtintuc'])&&($_POST['themtintuc'])){
                $tieu_de=$_POST['tieude'];
                $noi_dung=$_POST['noidung'];
                $img_tin_tuc = $_FILES['img_tin_tuc']['name'];
 
                $target_dir = "../views/Admin/quanlytintuc/anhtintuc/";
                $target_file = $target_dir.basename($_FILES['img_tin_tuc']['name']);

                if(move_uploaded_file($_FILES['img_tin_tuc']['tmp_name'], $target_file)){
                   echo "Bạn đã upload ảnh thành công";
                }else{
                   echo "Upload ảnh không thành công";
                }
                $ngay_dang=$_POST['ngaydang'];
                insert_tin_tuc($tieu_de, $noi_dung, $img_tin_tuc, $ngay_dang);
                $thongbao="Thêm thành công";
            }
            include '../views/Admin/quanlytintuc/add.php';
            break;

        case 'suatintuc':
            if(isset($_GET['id_tin_tuc'])&&($_GET['id_tin_tuc']>0)){
                $id_tin_tuc=$_GET['id_tin_tuc'];
                $tt=loadone_tin_tuc($id_tin_tuc);
            }
            include '../views/Admin/quanlytintuc/update.php';
            break;

        case 'xoatintuc':
            if(isset($_GET['id_tin_tuc'])&&($_GET['id_tin_tuc']>0)){
                delete_tin_tuc($_GET['id_tin_tuc']);
            }
            $dstintuc=loadall_tintuc();
            include '../views/Admin/quanlytintuc/danhsachtintuc.php';
            break;
        case 'updatetintuc':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id_tin_tuc = $_POST['idtintuc'];
                    $tieu_de = $_POST['tieude'];
                    $noi_dung = $_POST['noidung'];
                    $img_tin_tuc = $_FILES['img_tin_tuc']['name'];
 
                    $target_dir = "../views/Admin/quanlytintuc/anhtintuc/";
                    $target_file = $target_dir.basename($_FILES['img_tin_tuc']['name']);
    
                    if(move_uploaded_file($_FILES['img_tin_tuc']['tmp_name'], $target_file)){
                       echo "Bạn đã upload ảnh thành công";
                    }else{
                       echo "Upload ảnh không thành công";
                    }
                    $ngay_dang = $_POST['ngay_dang'];
                    
    
                    update_tin_tuc($id_tin_tuc,$tieu_de,$noi_dung,$img_tin_tuc,$ngay_dang);
                    $thongbao="Cập nhật thành công";
                }
                $dstintuc=loadall_tintuc();
                include '../views/Admin/quanlytintuc/danhsachtintuc.php';
                break;
          //Quản lý chức vụ
          case 'dschucvu':
            $dschucvu=loadall_chuc_vu();
            include '../views/Admin/quanlychucvu/danhsachchucvu.php';
            break;
        case 'themchucvu':          
            if(isset($_POST['themchucvu'])&&($_POST['themchucvu'])){
                $id_chuc_vu=$_POST['id_chuc_vu'];
                $ten_chuc_vu=$_POST['ten_chuc_vu'];
                $role=$_POST['role'];
                insert_chuc_vu($id_chuc_vu,$ten_chuc_vu);
                $thongbao="Thêm thành công";
            }
            include '../views/Admin/quanlychucvu/add.php';
            break;
        case 'suachucvu':
            if(isset($_GET['id_chuc_vu'])&&($_GET['id_chuc_vu']>0)){
                $id_chuc_vu=$_GET['id_chuc_vu'];
                $ds=loadone_chuc_vu($id_chuc_vu);
            }
            include '../views/Admin/quanlychucvu/update.php';
            break;
        case 'updatechucvu':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id_chuc_vu = $_POST['id_chuc_vu'];
                    $ten_chuc_vu = $_POST['ten_chuc_vu'];
                    $role = $_POST['role'];
 
    
                    update_chuc_vu($id_chuc_vu,$ten_chuc_vu);
                    $thongbao="Cập nhật thành công";
                }
                $dschucvu=loadall_chuc_vu();
                include '../views/Admin/quanlychucvu/danhsachchucvu.php';
                break;   
        case 'xoachucvu':
            if(isset($_GET['id_chuc_vu'])&&($_GET['id_chuc_vu']>0)){
                delete_chuc_vu($_GET['id_chuc_vu']);
            }
            $dschucvu=loadall_chuc_vu();
            include '../views/Admin/quanlychucvu/danhsachchucvu.php';
            break;

        //Quản lý hệ thống
        case 'dsquanlyhethong':
            $dsht=loadall_hethong();     
            include '../views/Admin/quanlyhethong/danhsachquanlyhethong.php';
            break; 

        case 'themquanlyhethong':
            if(isset($_POST['themhethong'])&&($_POST['themhethong'])){
                $ten_img=$_POST['ten_img'];
                $img = $_FILES['img']['name'];
 
                $target_dir = "../views/Admin/quanlyhethong/anhhethong/";
                $target_file = $target_dir.basename($_FILES['img']['name']);

                if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
                   echo "Bạn đã upload ảnh thành công";
                }else{
                   echo "Upload ảnh không thành công";
                }            
                insert_hethong($ten_img, $img);
                $thongbao="Thêm thành công";
            }
            include '../views/Admin/quanlyhethong/add.php';
            break;

        case 'suaquanlyhethong':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $ht=loadone_hethong($id);
            }
            include '../views/Admin/quanlyhethong/update.php';
            break;

        case 'updatequanlyhethong':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $ten_img = $_POST['ten_img'];
                    $img = $_POST['img']; 
                    
                    update_hethong($id,$ten_img,$img);
                    $thongbao="Cập nhật thành công";
                }
                $dsht=loadall_hethong();
                include '../views/Admin/quanlyhethong/danhsachquanlyhethong.php';
                break;

        case 'xoaquanlyhethong':
           if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_hethong($_GET['id']);
            }
            $dsht=loadall_hethong();
            include '../views/Admin/quanlyhethong/danhsachquanlyhethong.php';
            break;



        default:
            include "../views/Admin/layout/noidung.php";
            break;
    }
}
else{
    include "../views/Admin/layout/noidung.php";
}

?>
  </div>


<?php 
include "../views/Admin/layout/footer.php";
?>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php 
include "../views/Admin/layout/linkjs.php";
?>