<h2>Thêm tin tức</h2>

<form action="AdminController.php?act=themtintuc" method="post" enctype="multipart/form-data" >

<div class="card card-primary">
    
    <div class="card-header">
        <h3 class="card-title">Thêm thông tin tức</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="inputName">Tiêu Đề</label>
            <input type="text" id="inputName" class="form-control" value="" name="tieude">
        </div>
        <div class="form-group">
        <label for="inputName">Nội Dung</label>
            <input type="text" id="inputName" class="form-control" value="" name="noidung">
        </div>
        <div class="form-group">
            <label for="inputStatus">Ảnh</label>
            <input type="file" id="inputName" class="form-control" name="img_tin_tuc">
        </div>
        <div class="form-group">
            <label for="inputClientCompany">Ngày đăng</label>
            <input type="date" id="inputClientCompany" class="form-control" value=""name="ngaydang">
        </div>

        <input type="submit" class="btn btn-outline-danger" value="Thêm Tin Tức" name="themtintuc">
    </div>
    <!-- /.card-body -->
</div>
<?php if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
           }
           ?>
</form>