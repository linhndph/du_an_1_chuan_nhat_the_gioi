<h2>Danh sách tài khoản:</h2>
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
        margin-left: 400px;
        display: flex;

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
            <option value="">Admin</option>
            <option value="">Nhân viên</option>
            <option value="">Người dùng</option>

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
            <th style="width: 15%">
                Tên đăng nhập
            </th>
            <th style="width: 15%">
                Mật khẩu
            </th>
            <th style="width: 9%">
                Số điện thoại
            </th>
            <th style="width: 15%">
                Email
            </th>
            <th style="width: 20%">
                Địa chỉ
            </th>
            <th style="width: 10%">
                Chức vụ
            </th>
            <th style="width: 10%" class="text-center">
                Trạng thái
            </th>
            <th style="width: 10%">
                Ảnh
            </th>
            <th style="width: 10%">
                Tên tài khoản
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listchucvu as $tk) {
            extract($tk);
            $hinhpath = "../views/Admin/quanlytaikhoan/anhtaikhoan/" . $img_tai_khoan;
            if (is_file($hinhpath)) {
                $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
            } else {
                $hinhpath = "No file img!";
            }
            $suatk = "AdminController.php?act=suataikhoan&id_tai_khoan=" . $id_tai_khoan;
            $xoatk = "AdminController.php?act=xoataikhoan&id_tai_khoan=" . $id_tai_khoan;

            echo '
                    <tr>
                    <td>' . $id_tai_khoan . ' </td>

                    <td> ' . $ten_dang_nhap . '</td>

                    <td> ' . $mat_khau . ' </td>

                    <td> ' . $sdt . '</td>

                    <td> ' . $email . ' </td>

                    <td> ' . $address . ' </td>

                    <td> ' . $ten_chuc_vu . ' </td>

                    <td> ' . $trang_thai . ' </td>

                    <td> ' . $hinhpath . ' </td>

                    <td> ' . $ten_tai_khoan . ' </td>

                    <td>
                    <a class="btn btn-info btn-sm" href="' . $suatk . '">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Sửa
                  </a>
                  <a class="btn btn-danger btn-sm" href="' . $xoatk . '">
                    <i class="fas fa-trash"></i>
                    Xóa
                  </a>
                    </td>
                    </tr>
                    ';





        } ?>


    </tbody>
</table>