<?php
if (is_array($onekm) && isset($onekm)) {
    extract($onekm);
}

?>
<h2>Sửa khuyến mãi</h2>


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa thông khuyến mãi</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <form action="AdminController.php?act=updatekhuyenmai" method="post" enctype="multipart/form-data">
            <div class="form-group">

                <input type="hidden" id="inputName" class="form-control" name="id_khuyen_mai" value="<?php if (isset($id_khuyen_mai) && ($id_khuyen_mai > 0))
                    echo $id_khuyen_mai; ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Tên khuyến mãi</label>
                <input type="text" id="inputName" class="form-control" name="id_san" value="<?php if (isset($id_san) && ($id_san != ""))
                    echo $id_san; ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Mã khuyến mãi</label>
                <input type="text" id="inputName" class="form-control" name="ma_khuyen_mai" value="<?php if (isset($ma_khuyen_mai) && ($ma_khuyen_mai != ""))
                    echo $ma_khuyen_mai; ?>">
            </div>
            <div class="form-group">
                <label for="inputStatus">Ngày bắt đầu</label>
                <input type="date" id="inputName" class="form-control" name="ngay_bat_dau" value="<?php if (isset($ngay_bat_dau) && ($ngay_bat_dau != ""))
                    echo $ngay_bat_dau; ?>">
            </div>
            <div class="form-group">
                <label for="inputClientCompany">Ngày kết thúc</label>
                <input type="date" id="inputClientCompany" class="form-control" name="ngay_ket_thuc" value="<?php if (isset($ngay_ket_thuc) && ($ngay_ket_thuc != ""))
                    echo $ngay_ket_thuc; ?>">
            </div>
            <div class="form-group">
                <label for="inputClientCompany">Giảm giá</label>
                <input type="text" id="inputClientCompany" class="form-control" name="gia_giam" value="<?php if (isset($gia_giam) && ($gia_giam != ""))
                    echo $gia_giam; ?>">
            </div>
            <div class="form-group">
                <label for="inputClientCompany">Mô Tả</label>
                <input type="text" id="inputClientCompany" class="form-control" name="mo_ta" value="<?php if (isset($mo_ta) && ($mo_ta != ""))
                    echo $mo_ta; ?>">
            </div>

            <input type="submit" class="btn btn-outline-danger" value="Sửa Khuyễn Mãi" name="updatekm">
        </form>
    </div>

    <!-- /.card-body -->
    <?php
    if (isset($thongbao) && $thongbao != "") {
echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
    }
    ?>
</div>