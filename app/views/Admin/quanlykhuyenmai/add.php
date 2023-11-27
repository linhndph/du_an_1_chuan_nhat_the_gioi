<h2>Thêm khuyến mãi</h2>

<form action="AdminController.php?act=themkhuyenmai" method="post" enctype="multipart/form-data" >
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm thông khuyến mãi</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="inputName">id Sân</label>
            <input type="text" id="inputName" name="id_san" class="form-control" value="">
        </div>
        <div class="form-group">
        <label for="inputName">Mã khuyến mãi</label>
            <input type="text" id="inputName" class="form-control" name="ma_khuyen_mai" value="">
        </div>
        <div class="form-group">
            <label for="inputStatus">Ngày bắt đầu</label>
            <input type="date" id="inputName" class="form-control" name="ngay_bat_dau" value="">
        </div>
        <div class="form-group">
            <label for="inputClientCompany">Ngày kết thúc</label>
            <input type="date" id="inputClientCompany" class="form-control" name="ngay_ket_thuc" value="">
        </div>
        <div class="form-group">
            <label for="inputClientCompany">Giảm giá</label>
            <input type="text" id="inputClientCompany" class="form-control" name="gia_giam" value="">
        </div>
        <div class="form-group">
            <label for="inputClientCompany">Mô Tả</label>
            <input type="text" id="inputClientCompany" class="form-control" name="mo_ta" value="">
        </div>

        <input type="submit" name="themkm" class="btn btn-outline-danger" value="Thêm Khuyễn Mãi">
    </div>
    <?php if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
           }
           ?>
    <!-- /.card-body -->
</div>
</form>