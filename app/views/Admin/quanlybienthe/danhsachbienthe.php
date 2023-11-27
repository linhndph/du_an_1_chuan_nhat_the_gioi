<h2>Danh sách biến thể</h2>
<style>
    .timkiem{
        display: flex;
        
    }
.timkiem1>input{
    padding: 5px 50px 5px 5px;
}
.timkiem1>button{
    padding: 5px 5px 5px 5px;
   
}
.timkiem1{
    margin-left:3px;
}
.timkiem2{
    margin-left:600px;
}
.timkiem2>select{
    padding: 6px 150px 6px 5px;
}
.timkiem2>button{
    padding: 5px 5px 5px 5px;
   
}
</style>
<div  class="timkiem">

<div class="timkiem1">
<input type="text" name="" placeholder="Tìm kiếm theo tên">
<button type="button" class="btn btn-outline-danger">Tìm kiếm</button>
</div>


</div>
    <table class="table table-striped projects">
        <thead>
                <tr>
                      <th style="width: 5%">
                          Stt
                      </th>
                      <th style="width: 20%">
                          Tên biến thể
                      </th>
                      <th style="width: 20%">
                          Giá biến thể
                      </th>
                      <th style="width: 20%">
                          Số lượng
                      </th>              
                      <th style="width: 10%" class="text-center">
                          Trạng thái
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php
                    foreach($dsbienthe as $ds){
                        extract($ds);
                        $thembt="AdminController.php?act=thembienthe&id_bien_the=".$id_bien_the;
                        $suabt="AdminController.php?act=suabienthe&id_bien_the=".$id_bien_the;
                        $xoabt="AdminController.php?act=xoabienthe&id_bien_the=".$id_bien_the;

                        echo '
                        <tr>
                        <td>
                            '.$id_bien_the.'
                        </td>
                        <td>
                            <a>
                                '.$ten_bien_the.'
                            </a>                     
                        </td>                 
                        <td>'.$gia.'</td>
                        <td class="project_progress">
                         <!-- mô tả -->
                          '.$so_luong.'
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">'.$trang_thai.'</span>
                        </td>
                        <td class="project-actions text-right">
                        
                            <a class="btn btn-info btn-sm" href="'.$suabt.'">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <a class="btn btn-danger btn-sm" href="'.$xoabt.'">
                                <i class="fas fa-trash">
                                </i>
                                Xóa
                            </a>
                        </td>
                    </tr>
                        ';
                    }
                    ?>
                  


              </tbody>
          </table>            


