<?php
if (isset($dm) && is_array($dm)) {
    extract($dm);
}

?>
<h2>Sửa danh mục:</h2>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Sửa danh mục</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <form action="AdminController.php?act=updatedanhmuc" method="POST">
      <div class="form-group">
        <input type="hidden" name="iddanhmuc" value="<?= isset($id_danh_muc) ? $id_danh_muc : '' ?>">     
      </div>
      <div class="form-group">
        <label for="inputName">Tên danh mục</label>
        <input type="text" id="tendanhmuc" name="tendanhmuc" value="<?= isset($ten_danh_muc) ? $ten_danh_muc : '' ?>"
          placeholder="Nhập vào tên" class="form-control" value="">
      </div>
      <button type="submit" class="btn btn-outline-danger" name="capnhat" value="CẬP NHẬT" required>Cập Nhật Danh
        Mục</button>
    </form>
  </div>
  <!-- /.card-body -->
</div>