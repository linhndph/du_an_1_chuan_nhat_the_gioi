<h2>Danh sách chức vụ:</h2>
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
    margin-left:400px;
    display: flex;
  
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
<div class="timkiem2">
<select name="" id="">
    <option value="">Admin</option>
    <option value="">Nhân viên</option>
    <option value="">Khách hàng</option>

</select>
<button type="button" class="btn btn-outline-danger">Tìm kiếm</button>
</div>
</div>
    <table class="table table-striped projects">
        <thead>
                <tr>
                      <th style="width: 10%">
                          Stt
                      </th>
                      <th style="width: 30%">
                          Tên chức vụ
                      </th> 
                      <th style="width: 30%">
                          Phân cấp
                      </th>  
                                    
                      <th style="width: 40%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php
                    foreach($dschucvu as $ds){
                        extract($ds);
                        $themcv="AdminController.php?act=themchucvu&id_chuc_vu=".$id_chuc_vu;
                        $suacv="AdminController.php?act=suachucvu&id_chuc_vu=".$id_chuc_vu;
                        $xoacv="AdminController.php?act=xoachucvu&id_chuc_vu=".$id_chuc_vu;

                        echo '
                        <tr>
                        <td>
                            '.$id_chuc_vu.'
                        </td>
                        <td>
                            <a>
                                '.$ten_chuc_vu.'
                            </a>                     
                        </td>                 
                        <td>'.$role.'</td>
                                             
                        <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="'.$themcv.'">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Thêm
                    </a>
                            <a class="btn btn-info btn-sm" href="'.$suacv.'">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <a class="btn btn-danger btn-sm" href="'.$xoacv.'">
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