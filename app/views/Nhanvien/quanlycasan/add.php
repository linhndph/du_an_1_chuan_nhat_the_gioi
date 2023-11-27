<h2>Thêm ca sân:</h2>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Thêm ca sân</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <form action="AdminController.php?act=themcasan" method="POST">
      <div class="form-group">
        <!-- <label for="inputName">Số thứ tự ca sân</label> -->
        <!-- <input type="hidden" id="idcasa" name="idcasan" placeholder="Nhập vào mã ca sân" class="form-control" value=""> -->
      </div>
      <div class="form-group">
        <label for="inputName">Tên ca sân</label>
        <input type="text" id="tenca" name="tenca" placeholder="Nhập vào tên ca sân" class="form-control" value="">
      </div>

      <div class="form-group">
        <label for="inputStatus">Thời gian bắt đầu</label>
        <input type="time" id="thoigianbd" name="thoigianbd" placeholder="Nhập vào thời gian bắt đầu"
          class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="inputClientCompany">Thời gian kết thúc</label>
        <input type="time" id="thoigiankt" name="thoigiankt" placeholder="Nhập vào thời gian kết thúc"
          class="form-control" value="">
      </div>


      <button type="submit" class="btn btn-outline-danger" name="themcasan" value="THÊM CA SÂN" required>Thêm ca sân</button>
    </form>
  </div>
  <!-- /.card-body -->
</div>
<?php
if (isset($thongbao) && $thongbao != "") {
  echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>