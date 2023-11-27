<h2>Danh sách Liên hệ:</h2>
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
                          Tên tài khoản
                      </th>
                   
                      <th style="width: 30%">
                          Nội dung
                      </th>
                      <th style="width: 10%">
                      SĐT
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
                 foreach($listlienhe as $lh){
                        extract($lh);
                    echo '
                    <tr>
                    <td>
                        '.$id_lien_he.'
                    </td>
                    <td>
                        <a>
                            '.$ten_dang_nhap.'
                        </a>                     
                    </td>
                   
                    <td>'.$noidung.'</td>
                    <td>'.$sdt.'</td>


                    
                 
                    <td class="project-state">
                        <span class="badge badge-success">'.$trang_thai_lh.'</span>
                    </td>
                    <td class="project-actions text-right">                    
                        <a class="btn btn-info btn-sm" href="AdminController.php?act=phanhoi&id_lien_he='.$id_lien_he.'">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Phản hồi
                        </a>
                    </td>
                    <td class="project-actions text-right">                    
                        <a class="btn btn-danger btn-sm" href="AdminController.php?act=xoalienhe&id_lien_he='.$id_lien_he.'">
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