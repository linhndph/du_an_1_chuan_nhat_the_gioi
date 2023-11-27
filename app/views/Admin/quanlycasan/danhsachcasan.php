<h2>Danh sách ca sân:</h2>

<table class="table table-striped projects">
    <thead>
        <tr>
            <th style="width: 1%">
                Stt
            </th>
            <th style="width: 20%">
                Tên ca sân
            </th>

            <th style="width: 25%">
                Thời gian bắt đầu
            </th>
            <th style="width: 25%">
                Thời gian kết thúc
            </th>

            <th style="width: 20%">
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listcasan as $casan): ?>
            <tr>
                <td>
                    <?php echo $casan['id_ca']; ?>
                </td>
                <td>
                    <?php echo $casan['ten_ca']; ?>
                </td>
                <td>
                    <?php echo $casan['thoi_gian_bd']; ?>
                </td>
                <td>
                    <?php echo $casan['thoi_gian_kt']; ?>
                </td>
                <td>
                <a class="btn btn-info btn-sm" href="AdminController.php?act=themcasan&id_ca=<?= $casan['id_ca']; ?>">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Thêm
                    </a>
                    <a class="btn btn-info btn-sm" href="AdminController.php?act=suacasan&id_ca=<?= $casan['id_ca']; ?>">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Sửa
                    </a>
                    <a class="btn btn-danger btn-sm" href="AdminController.php?act=xoacasan&id_ca=<?= $casan['id_ca']; ?>">
                        <i class="fas fa-trash">
                        </i>
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <!-- <td>
                2
            </td>
            <td>

                Ca 4

            </td>
            <td>

                14:20 PM

            </td>
            <td>

                16:20 PM

            </td> -->



            <!-- <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="AdminController.php?act=themcasan">
                    <i class="fas fa-folder">
                    </i>
                    Thêm
                </a>
                <a class="btn btn-info btn-sm" href="AdminController.php?act=suacasan">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Sửa
                </a>
                <a class="btn btn-danger btn-sm" href="AdminController.php?act=xoacasan">
                    <i class="fas fa-trash">
                    </i>
                    Xóa
                </a>
            </td> -->
        </tr>


    </tbody>
</table>