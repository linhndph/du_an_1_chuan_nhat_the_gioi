<h2>Danh sách sân:</h2>
<style>
    .timkiem1 {
        margin-left: 300px;
    }

    .timkiem1>.a {
        padding: 5px 50px 5px 50px;
    }

    .timkiem1>#b {
        padding: 7px 50px 7px 50px;
    }
</style>
<div class="timkiem">

    <form action="AdminController.php?act=dssan" method="post">
        <div class="timkiem1">
            <input type="text" name="tukhoa" class="a" placeholder="Tìm kiếm theo tên">


            <select name="id_danh_muc" id="b">
                <option value="0" disabled>Chọn sân</option>
                <?php
                foreach ($listdanhmuc as $danhmuc):
                    extract($danhmuc);
                    ?>
                    <option value="<?= $id_danh_muc ?>">
                        <?= $ten_danh_muc ?>
                    </option>
                <?php endforeach ?>

            </select>
            <input type="submit" name="listok" class="btn btn-outline-primary" value="Tìm kiếm">
        </div>
    </form>

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
            <th style="width: 30%">
                Ảnh sân
            </th>
            <th style="width: 10%">
                Giá sân
            </th>
            <th style="width: 14%">
                Kiểu sân
            </th>
            <th style="width: 15%" class="text-center">
                Trạng thái
            </th>
            <th style="width: 20%">
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($listsan as $san){
            extract($san);
            $suasan="AdminController.php?act=suasan&id_san=".$id_san;
            $xoasan="AdminController.php?act=xoasan&id_san=".$id_san;
            $hinhpath = "../views/Admin/quanlysan/anhsan/" . $img_san;
            if (is_file($hinhpath)) {
              $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
            } else {
              $hinhpath = "No file img!";
            }


            echo'
                <tr>
                <td>
                '.$id_san.'
                </td>

                <td>
                '.$ten_san.'
                </td>

                <td>
                '.$hinhpath.'
                </td>

                <td>
                '.$gia.'
                </td>

                <td>
                '.$ten_bien_the.'
                </td>

                <td class="project-state">
                <span  class="badge badge-success">'.$trang_thai.'</span>
                </td>

                <td class="project-actions text-right">
                        
                            <a class="btn btn-info btn-sm" href="'.$suasan.'">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <a class="btn btn-danger btn-sm" href="'.$xoasan.'">
                                <i class="fas fa-trash">
                                </i>
                                Xóa
                            </a>
                        </td>
                </tr>
            ';
        }
        
        ?>
        <!-- <tr>
            <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="AdminController.php?act=themsan">
                    <i class="fas fa-folder">
                    </i>
                    Thêm
                </a>
                <a class="btn btn-info btn-sm" href="AdminController.php?act=suasan">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Sửa
                </a>
                <a class="btn btn-danger btn-sm" href="AdminController.php?act=xoasan">
                    <i class="fas fa-trash">
                    </i>
                    Xóa
                </a>
            </td>
        </tr> -->


    </tbody>
</table>