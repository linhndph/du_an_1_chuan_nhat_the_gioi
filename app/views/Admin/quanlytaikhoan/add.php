
<form action="AdminController.php?act=themtaikhoan" method="post" enctype="multipart/form-data">
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm thông tin tài khoản</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <input type="hidden" id="inputName" class="form-control" name="id_khachhang" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Tên đăng nhập</label>
                <input type="text" id="inputName" class="form-control" name="ten_dang_nhap" value="">
              </div>
              <div class="form-group">
                <label for="inputStatus">Mật khẩu</label>
                <input type="text" id="inputName" class="form-control" name="mat_khau" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Số điện thoại</label>
                <input type="text" id="inputClientCompany" class="form-control" name="sdt" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Email</label>
                <input type="text" id="inputClientCompany" class="form-control" name="email" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Địa chỉ</label>
                <input type="text" id="inputClientCompany" class="form-control" name="address" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Ảnh</label>
                <input type="file" id="inputClientCompany" class="form-control" name="img_tai_khoan" value="">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Tên</label>
                <input type="text" id="inputClientCompany" class="form-control" name="ten_tai_khoan" value="">
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
                <label for="inputProjectLeader" >Trạng thái</label>
                <select id="inputStatus" class="form-control custom-select" name="trang_thai">
                  <option disabled>Chọn 1</option>
                  <option value="Sử dụng">Sử dụng</option>
                  <option value="Không sử dụng">không sử dụng</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" name="themtaikhoan" value="Thêm tài khoản">
            </div>
            <?php if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
           }
           ?>
            <!-- /.card-body -->
          </div>
</form>