<h2>Danh sách khuyến mãi:</h2>
<style>
    .timkiem {
        display: flex;

    }

    .timkiem1>input {
        padding: 5px 50px 5px 5px;
    }

    .timkiem1>button {
        padding: 5px 5px 5px 5px;

    }

    .timkiem1 {
        margin-left: 3px;
    }

    .timkiem2 {
        margin-left: 600px;
    }

    .timkiem2>select {
        padding: 6px 150px 6px 5px;
    }

    .timkiem2>button {
        padding: 5px 5px 5px 5px;

    }
</style>
<div class="timkiem">

    <div class="timkiem1">
        <input type="text" name="" placeholder="Tìm kiếm theo tên">
        <button type="button" class="btn btn-outline-danger">Tìm kiếm</button>
    </div>
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
            <th style="width: 1%">
                Stt
            </th>
            <th style="width: 10%">
                Tên sân
            </th>
            <th style="width: 10%">
                Tên khuyến mãi
            </th>
            <th style="width: 10%">
                Ngày bắt đầu
            </th>
            <th style="width: 10%">
                Ngày kết thúc
            </th>
            <th style="width: 15%" class="text-center">
                Giảm giá
            </th>
            <th style="width: 25%">
                Mô tả
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($list_joinkm as $km){
            extract($km);
            $suasan="AdminController.php?act=suakhuyenmai&id_khuyen_mai=".$id_khuyen_mai;
            $xoasan="AdminController.php?act=xoakhuyenmai&id_khuyen_mai=".$id_khuyen_mai;
        ?>
        <tr>
            <td>
                <?php echo $id_khuyen_mai; ?>
            </td>
            <td>
                <a>
                <?php echo $ten_san; ?>
                </a>
            </td>
            <td>
            <?php echo $ma_khuyen_mai; ?>
            </td>
            <td> <?php echo $ngay_bat_dau; ?></td>
            <td class="project_progress">
            <?php echo $ngay_ket_thuc; ?>
            </td>
            <td class="project-state">
            <?php echo $gia_giam; ?>
            </td>
            <td>
            <?php echo $mo_ta; ?>
            </td>
            
        </tr>
        <?php
        }
        ?>


    </tbody>
</table>