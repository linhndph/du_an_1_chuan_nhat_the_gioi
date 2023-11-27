<h2>Danh sách bình luận</h2>
<div class="col-12">
  <div class="card">
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>STT</th>
            <th>Người bình luận</th>
            <th>Tên Sân</th>
            <th>Ngày Bình Luận</th>
            <th>Nội Dung</th>
          </tr>
        </thead>
        <tbody>
        <?php
            foreach($listtk as $bl){
              extract($bl);
              echo '
              <tr>
              <td>'.$id_binh_luan.'</td>
              <td>'.$ten_dang_nhap.'</td>
              <td>'.$ten_san.'</td>
              <td>'.$ngay_binh_luan.'</td>
              <td>'.$noi_dung.'</td>
          
            </tr>
              
              ';

            }
          ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>