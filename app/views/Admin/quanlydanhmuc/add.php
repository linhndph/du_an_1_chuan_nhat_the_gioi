<h2>Thêm danh mục:</h2>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Thêm danh mục</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <form action="AdminController.php?act=themdanhmuc" method="POST">
      <div class="form-group">
        <!-- <label for="inputName">Mã danh mục</label> -->
        <input type="hidden" id="iddanhmuc" name="iddanhmuc" placeholder="Nhập vào mã danh mục" class="form-control">
      </div>
      <div class="form-group">
        <label for="inputName">Tên danh mục</label>
        <input type="text" id="tendanhmuc" name="tendanhmuc" placeholder="Nhập vào tên" class="form-control" value="">
      </div>
      <button type="submit" class="btn btn-outline-danger" name="themmoi" value="THÊM MỚI" required>Thêm danh
        mục</button>
    </form>
  </div>
  <!-- /.card-body -->
</div>

<?php
if (isset($thongbao) && $thongbao != "") {
  echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>