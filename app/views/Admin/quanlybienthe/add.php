<h2>Thêm biến thể:</h2>
<form action="AdminController.php?act=thembienthe" method="post">
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm thông tin biến thể</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên biến thể</label>
                <input type="text" id="inputName" class="form-control" value="" name="tenbienthe">
              </div>           
              <div class="form-group">
                <label for="inputStatus">Giá biến thể</label>
                <input type="text" id="inputName" class="form-control" value="" name="gia">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Số lượng</label>
                <input type="text" id="inputClientCompany" class="form-control" value="" name="soluong">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Trạng thái</label>
                <select id="inputStatus" class="form-control custom-select" name="trangthai">
                  <option disabled>Chọn 1</option>
                  <option value="Còn sân">Còn sân</option>
                  <option value="Hết sân">Hết sân</option>              
                </select>
              </div>

              <input type="submit" class="btn btn-outline-danger" name="thembienthe" value="Thêm biến thể">
            </div>
            <?php if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
           }
           ?>
            <!-- /.card-body -->
          </div>
  </form>