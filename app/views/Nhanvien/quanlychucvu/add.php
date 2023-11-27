<h2>Thêm chức vụ:</h2>
<form action="AdminController.php?act=themchucvu" method="post">
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm chức vụ</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <input type="hidden" id="inputName" class="form-control" value="" name="id_chuc_vu">
              </div>
              <div class="form-group">
                <label for="inputName">Tên chức vụ</label>
                <input type="text" id="inputName" class="form-control" value="" name="ten_chuc_vu">
              </div>
            
              <div class="form-group">
                <label for="inputStatus">Phân quyền</label>
                <input type="text" id="inputName" class="form-control" value="" name="role">
              </div>
              <input type="submit" class="btn btn-outline-danger" name="themchucvu" value="Thêm chức vụ">
            </div>
            <?php if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
           }
           ?>
            <!-- /.card-body -->
            
          </div>
          </form>