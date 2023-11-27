<?php
    if(is_array($san)&&isset($san)){
        extract($san);
    }
    $hinhpath="../views/Admin/quanlysan/anhsan/".$img_san;
    if(is_file($hinhpath)){
        $hinh="<img src= '".$hinhpath."' width='100px' height='100px'>";
    }else{
        $hinh="No file img!";
    }
  ?>


<div class="card card-primary">
  <div class="card-header">
  <h2>Sửa sân</h2>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <form action="AdminController.php?act=updatesan" method="post" enctype="multipart/form-data">
    <div class="card-body">
      <!-- <div class="form-group">
        <label for="inputName">Số thứ tự sân</label>
        <input type="text" id="STT" name="STT" class="form-control" value="">
      </div> -->
      <div class="form-group">
              <input type="hidden" name="idsan" value="<?php if(isset($id_san)&&($id_san>0)) echo $id_san;?>">
              </div>
      <div class="form-group">
        <label for="inputName">Tên sân</label>
        <input type="text" id="tensan" name="tensan" class="form-control" value="<?php if(isset($ten_san)&&($ten_san!="")) echo $ten_san;?>">
      </div>
      <div class="form-group">
        <label for="inputDescription">Ảnh sân</label>
        <?php echo $hinh?>
        <input type="file" name="img_san" class="form-control">
      </div>
      <div class="form-group">
        <label for="inputProjectLeader">Danh Mục</label>
        <select id="inputStatus" class="form-control custom-select" name="id_danh_muc">
          <?php
          $listdm = loadAll();
          foreach ($listdm as $d) {
            ?>
            <option value="<?= $d['id_danh_muc'] ?>">
              <?= $d['ten_danh_muc'] ?>
            </option>
            <?php
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="inputProjectLeader">Kiểu sân</label>
        <select id="inputStatus" class="form-control custom-select" name="id_bien_the">
          <?php
          $dsbienthe = loadall_bienthe();
          foreach ($dsbienthe as $s) {
            ?>
            <option value="<?= $s['id_bien_the'] ?>">
              <?= $s['ten_bien_the'] ?>
            </option>
            <?php
          }
          ?>
        </select>
      </div>

      <input type="submit" class="btn btn-outline-danger" name="capnhat" value="Cập nhật sân">
  </form>
</div>
<!-- /.card-body -->
<?php
if (isset($thongbao) && $thongbao != "") {
  echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>
</div>
