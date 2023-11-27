<h2>Danh sách tin tức:</h2>
<style>
    .timkiem1 {
        margin-left: 9px;
    }

    .timkiem1>.a {
        padding: 5px 50px 5px 50px;
    }
</style>
<div class="timkiem">

    <form action="AdminController.php?act=dstintuc" method="post">
        <div class="timkiem1">
            <input type="text" name="tukhoa" class="a" placeholder="Tìm kiếm theo tên">
            <input type="submit" name="listok" class="btn btn-outline-primary" value="Tìm kiếm">
        </div>
    </form>
</div>
<table class="table table-striped projects">
    <thead>
        <tr>
            <th style="width: 5%">
                Stt
            </th>
            <th style="width: 20%">
                Tiểu đề
            </th>
            <th style="width: 30%">
               Nội dung
            </th>
            <th style="width: 10%">
               Ảnh
            </th>
            <th style="width: 14%">
                Ngày đăng
            </th>
            
            <th style="width: 20%">
            </th>
        </tr>
    </thead>
    <tbody>
    <?php
          foreach ($dstintuc as $ds) {
            extract($ds);
            $themtt = "AdminController.php?act=themtintuc&id_tin_tuc=" . $id_tin_tuc;
            $suatt = "AdminController.php?act=suatintuc&id_tin_tuc=" . $id_tin_tuc;
            $xoatt = "AdminController.php?act=xoatintuc&id_tin_tuc=" . $id_tin_tuc;
            $hinhpath = "../views/Admin/quanlytintuc/anhtintuc/" . $img_tin_tuc;
            if (is_file($hinhpath)) {
              $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
            } else {
              $hinhpath = "No file img!";
            }

            echo '
              <tr>
              <td>' . $id_tin_tuc . '</td>
              <td>' . $tieu_de . '</td>
              <td>' . $noi_dung . '</td>
              <td class="project-actions text-right">
                <li class="list-inline-item">
                  ' . $hinhpath . '
                </li>
              </td>
              <td>' . $ngay_dang . '</td>
  
              <td>
             
                <a class="btn btn-info btn-sm" href="' . $suatt . '">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Sửa
                </a>
                <a class="btn btn-danger btn-sm" href="' . $xoatt . '">
                  <i class="fas fa-trash"></i>
                  Xóa
                </a>
              </td>
            </tr>
              ';
          }
          ?>
    </tbody>
</table>