<?php
    if(is_array($taikhoan)&&isset($taikhoan)){
        extract($taikhoan);
    }
    $hinhpath="../views/Admin/quanlytaikhoan/anhtaikhoan/".$img_tai_khoan;
    if(is_file($hinhpath)){
        $hinh="<img src= '".$hinhpath."' width='100px' height='100px'>";
    }else{
        $hinh="No file img!";
    }
  ?>
 
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa thông tin tài khoản</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="AdminController.php?act=updatetaikhoan" method="post" enctype="multipart/form-data">
            <div class="card-body">
            <div class="form-group">

                <input type="hidden" id="inputName" class="form-control" value="<?php if(isset($id_tai_khoan)&&($id_tai_khoan>0)) echo $id_tai_khoan;?> " name="idtaikhoan">
              </div>
              <div class="form-group">
                <label for="inputName">Tên đăng nhập</label>
                <input type="text" id="inputName" class="form-control" value="<?php if(isset($ten_dang_nhap)&&($ten_dang_nhap!="")) echo $ten_dang_nhap;?>"name="tendangnhap">
              </div>
              <div class="form-group">
                <label for="inputStatus">Mật khẩu</label>
                <input type="text" id="inputName" class="form-control" value="<?php if(isset($mat_khau)&&($mat_khau!="")) echo $mat_khau;?>"name="matkhau">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Số điện thoại</label>
                <input type="text" id="inputClientCompany" class="form-control" value="<?php if(isset($sdt)&&($sdt!="")) echo $sdt;?>"name="sdt">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Email</label>
                <input type="text" id="inputClientCompany" class="form-control" value="<?php if(isset($email)&&($email!="")) echo $email;?>"name="email">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Địa chỉ</label>
                <input type="text" id="inputClientCompany" class="form-control" value="<?php if(isset($address)&&($address!="")) echo $address;?>"name="address">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Ảnh</label>
                <?php echo $hinh?>
                <input type="file" id="inputClientCompany" class="form-control" name="img_tai_khoan">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Tên tài khoản</label>
                <input type="text" id="inputClientCompany" class="form-control" value="<?php if(isset($ten_tai_khoan)&&($ten_tai_khoan!="")) echo $ten_tai_khoan;?>" name="ten_tai_khoan">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Chức vụ</label>
                <select id="inputStatus" class="form-control custom-select" name="id_chuc_vu">
                <?php
                  $dschucvu = loadall_chuc_vu();
                  foreach ($dschucvu as $cv) {
                 ?>
                <option value="<?= $cv['id_chuc_vu'] ?>">
                  <?= $cv['ten_chuc_vu'] ?>
                </option>
            <?php
          }
          ?>           
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Trạng thái</label>
                <select id="inputStatus" class="form-control custom-select" name="trangthai">
                <option disabled>Chọn 1</option>
                  <option value="Sử dụng">Sử dụng</option>
                  <option value="Không sử dụng">không sử dụng</option>             
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" name="capnhat" value="Cập nhật">
            </div>

            </form>

            <!-- /.card-body -->
            <?php
if (isset($thongbao) && $thongbao != "") {
  echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>
          </div>