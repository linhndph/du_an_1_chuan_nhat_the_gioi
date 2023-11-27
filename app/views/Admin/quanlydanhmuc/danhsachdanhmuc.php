<h2>Danh sách danh mục:</h2>
<style>
    .timkiem2 {
        margin-left: 10px;
    }

    .timkiem2>select {
        padding: 6px 150px 6px 5px;
    }

    .timkiem2>button {
        padding: 5px 5px 5px 5px;

    }
</style>
<div class="timkiem">


    <div class="timkiem2">
        <select name="" id="">
            <option value="">Sân bóng đá</option>
            <option value="">Sân bóng chuyền</option>
            <option value="">Sân bóng rổ</option>

        </select>
        <button type="button" class="btn btn-outline-danger">Tìm kiếm</button>
    </div>

</div>
<table class="table table-striped projects">
    <thead>
        <tr>
            <th style="width: 20%">
                Stt
            </th>
            <th style="width: 40%">
                Tên danh mục
            </th>
            <th style="width: 40%">
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listdanhmuc as $danhmuc): ?>
            <tr>
                <td>
                    <?php echo $danhmuc['id_danh_muc']; ?>
                </td>
                <td>
                    <?php echo $danhmuc['ten_danh_muc']; ?>
                </td>
                <td>
                <a class="btn btn-info btn-sm" href="AdminController.php?act=suadanhmuc&id_danh_muc=<?= $danhmuc['id_danh_muc']; ?>">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Sửa
                </a>
                <a class="btn btn-danger btn-sm" href="AdminController.php?act=xoadanhmuc&id_danh_muc=<?= $danhmuc['id_danh_muc']; ?>">
                    <i class="fas fa-trash">
                    </i>
                    Xóa
                </a>
                </td>
            </tr>
        <?php endforeach; ?>
        <!-- <tr>
            
            <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="AdminController.php?act=themdanhmuc">
                    <i class="fas fa-folder">
                    </i>
                    Thêm
                </a>
                <a class="btn btn-info btn-sm" href="AdminController.php?act=suadanhmuc">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Sửa
                </a>
                <a class="btn btn-danger btn-sm" href="AdminController.php?act=xoadanhmuc">
                    <i class="fas fa-trash">
                    </i>
                    Xóa
                </a>
            </td>
        </tr> -->


    </tbody>
</table>