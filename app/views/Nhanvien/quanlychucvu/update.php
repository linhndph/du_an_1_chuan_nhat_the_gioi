<?php
    if(is_array($ds)&&isset($ds)){
        extract($ds);
    }
  ?>
<h2>Sửa chức vụ:</h2>
<form action="AdminController.php?act=updatechucvu" method="post">
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa chức vụ</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <input type="hidden" id="inputName" class="form-control" value="<?php if(isset($id_chuc_vu)&&($id_chuc_vu>0)) echo $id_chuc_vu;?>" name="id_chuc_vu">
              </div>
              <div class="form-group">
                <label for="inputName">Tên chức vụ</label>
                <input type="text" id="inputName" class="form-control" value="<?php if(isset($ten_chuc_vu)&&($ten_chuc_vu>0)) echo $ten_chuc_vu;?>" name="ten_chuc_vu">
              </div>
            
              <div class="form-group">
                <label for="inputStatus">Phân quyền</label>
                <input type="text" id="inputName" class="form-control" value="<?php if(isset($role)&&($role>0)) echo $role;?>" name="role">
              </div>
            
              

              <input type="submit" class="btn btn-outline-danger" value="Sửa chức vụ" name="capnhat">
            </div>
            <!-- /.card-body -->
            <?php
           if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
           }
           ?>
          </div>
  </form>