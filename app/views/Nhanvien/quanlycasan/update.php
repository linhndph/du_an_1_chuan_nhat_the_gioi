<?php
if (isset($cs) && is_array($cs)) {
  extract($cs);
}
?>
<h2>Sửa ca sân:</h2>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Sửa ca sân</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <form action="AdminController.php?act=updatecasan" method="POST">
      <div class="form-group">
        <input type="hidden" name="idcasan" value="<?= isset($id_ca) ? $id_ca : '' ?>">
        <!-- <label for="inputName">Số thứ tự ca sân</label> -->
        <!-- <input type="hidden" id="idcasa" name="idcasan" placeholder="Nhập vào mã ca sân" class="form-control" value=""> -->
      </div>
      <div class="form-group">
        <label for="inputName">Tên ca sân</label>
        <input type="text" id="tenca" name="tenca" value="<?= isset($ten_ca) ? $ten_ca : '' ?>" class="form-control">
      </div>

      <div class="form-group">
        <label for="inputStatus">Thời gian bắt đầu</label>
        <input type="time" id="thoigianbd" name="thoigianbd" value="<?= isset($thoi_gian_bd) ? $thoi_gian_bd : '' ?>"
          class="form-control">
      </div>
      <div class="form-group">
        <label for="inputClientCompany">Thời gian kết thúc</label>
        <input type="time" id="thoigiankt" name="thoigiankt" value="<?= isset($thoi_gian_kt) ? $thoi_gian_kt : '' ?>"
          class="form-control">
      </div>


      <button type="submit" class="btn btn-outline-danger" name="capnhat" value="CẬP NHẬT" required>Cập Nhật
        ca sân</button>
    </form>
    <!-- /.card-body -->
  </div>