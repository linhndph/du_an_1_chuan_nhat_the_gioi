<?php
    if(is_array($ds)&&isset($ds)){
        extract($ds);
    }
  ?>
<h2>Sửa biến thể:</h2>
<form action="AdminController.php?act=updatebienthe" method="post" enctype="multipart/form-data">
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa thông tin biến thể</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
              <input type="hidden" name="idbienthe" value="<?php if(isset($id_bien_the)&&($id_bien_the>0)) echo $id_bien_the;?>">
              </div>
              <div class="form-group">
                <label for="inputName">Tên biến thể</label>
                <input type="text" id="inputName" class="form-control" name="tenbienthe" value="<?php if(isset($ten_bien_the)&&($ten_bien_the!="")) echo $ten_bien_the;?>">
              </div>           
              <div class="form-group">
                <label for="inputStatus">Giá biến thể</label>
                <input type="text" id="inputName" class="form-control" name="gia" value="<?php if(isset($gia)&&($gia!="")) echo $gia;?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Số lượng</label>
                <input type="text" id="inputClientCompany" class="form-control" name="soluong" value="<?php if(isset($so_luong)&&($so_luong!="")) echo $so_luong;?>">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Trạng thái</label>
                <select id="inputStatus" class="form-control custom-select" name="trangthai">
                  <option disabled>Chọn 1</option>
                  <option value="Còn sân">Còn sân</option>
                  <option value="Hết sân">Hết sân</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" value="Sửa biến thể" name="capnhat">
            </div>
            <!-- /.card-body -->
            <?php
           if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
           }
           ?>
          </div>

</form>