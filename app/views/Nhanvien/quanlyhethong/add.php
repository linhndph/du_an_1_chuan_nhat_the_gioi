<h2>Thêm quản lý hệ thống:</h2>
<form action="AdminController.php?act=themquanlyhethong" method="post" enctype="multipart/form-data" >
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm thông tin quản lý</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên ảnh</label>
                <input type="text" id="inputName" class="form-control" value="" name="ten_img">
              </div>
              <div class="form-group">
                <label for="inputDescription">Ảnh</label>
                <input type="file" name="img">
              </div>
              <input type="submit" class="btn btn-outline-danger" name="themhethong" value="Thêm">
            </div>
            <!-- /.card-body -->
          </div>
          <?php if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
           }
           ?>
</form>