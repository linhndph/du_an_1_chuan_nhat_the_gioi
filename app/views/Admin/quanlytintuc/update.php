<?php
    if(is_array($tt)&&isset($tt)){
        extract($tt);
    }
    $hinhpath="../views/Admin/quanlytintuc/anhtintuc/".$img_tin_tuc;
    if(is_file($hinhpath)){
        $hinh="<img src= '".$hinhpath."' width='100px' height='100px'>";
    }else{
        $hinh="No file img!";
    }
  ?>
 
<h2>Sửa tin tức</h2>

<form action="AdminController.php?act=updatetintuc" method="post" enctype="multipart/form-data">
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa tin tức</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
              <input type="hidden" name="idtintuc" value="<?php if(isset($id_tin_tuc)&&($id_tin_tuc>0)) echo $id_tin_tuc;?>">
              </div>
        <div class="form-group">
            <label for="inputName">Tiêu Đề</label>
            <input type="text" id="inputName" class="form-control" name="tieude" value="<?php if(isset($tieu_de)&&($tieu_de!="")) echo $tieu_de;?>">
        </div>
        <div class="form-group">
        <label for="inputName">Nội Dung</label>
            <input type="text" id="inputName" class="form-control" name="noidung" value="<?php if(isset($noi_dung)&&($noi_dung!="")) echo $noi_dung;?>">
        </div>
        <div class="form-group">
            <label for="inputStatus">Ảnh</label>    
            <input type="file" id="inputName" class="form-control" name="img_tin_tuc" value=""><?php echo $hinh?>  
            
        </div>
        <div class="form-group">
            <label for="inputClientCompany">Ngày đăng</label>
            <input type="date" id="inputClientCompany" class="form-control" name="ngay_dang" value="<?php if(isset($ngay_dang)&&($ngay_dang!="")) echo $ngay_dang; ?>">
        </div>

        <input type="submit" class="btn btn-outline-danger" value="Sửa Tin Tức" name="capnhat">
    </div>
    <!-- /.card-body -->
    <?php
           if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
           }
           ?>
</div>
</form>