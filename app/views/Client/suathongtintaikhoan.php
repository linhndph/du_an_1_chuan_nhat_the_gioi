<?php
    if(is_array($taikhoan)&&isset($taikhoan)){
        extract($taikhoan);
    }
    $hinhpath="../views/Admin/quanlytaikhoan/anhtaikhoan/".$img_tai_khoan;
    if(is_file($hinhpath)){
        $hinh="<img src= '".$hinhpath."' width='100px' height='100px'>";
    }else{
        $hinh="No file img!";
    }
  ?>

<form action="ClientController.php?act=suatk" method="POST" enctype="multipart/form-data">
    <div class="sign-up-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                <span class="sp-color">Thông tin tài khoản</span>
                                <h2>Sửa thông tin tài khoản</h2>
                            </div>
                            
                                <div class="row">
                                <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="hidden" name="idtaikhoan" id="name" class="form-control" required
                                                data-error="Please enter your Username" placeholder="Username" value="<?php if(isset($id_tai_khoan)&&($id_tai_khoan>0)) echo $id_tai_khoan;?> ">
                                        </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="tendangnhap" id="name" class="form-control" required
                                                data-error="Please enter your Username" placeholder="Username" value="<?php if(isset($ten_dang_nhap)&&($ten_dang_nhap!="")) echo $ten_dang_nhap;?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="matkhau" value="<?php if(isset($mat_khau)&&($mat_khau!="")) echo $mat_khau;?>"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="ten_tai_khoan" id="email" class="form-control" required
                                                data-error="Please enter name" placeholder="Tên tài khoản" value="<?php if(isset($ten_tai_khoan)&&($ten_tai_khoan!="")) echo $ten_tai_khoan;?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                        <?php echo $hinh?>
                                            <input type="file" name="img_tai_khoan" id="email" class="form-control" required
                                                data-error="Please enter img" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="sdt" id="name" class="form-control" required
                                                data-error="Please enter your phone" placeholder="SĐT"  value="<?php if(isset($sdt)&&($sdt!="")) echo $sdt;?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                data-error="Please enter email" placeholder="Email" value="<?php if(isset($email)&&($email!="")) echo $email;?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="address" id="name" class="form-control" required
                                                data-error="Please enter your address" placeholder="Address" value="<?php if(isset($address)&&($address!="")) echo $address;?>">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <input type="submit"  value="Cập nhật" name="capnhat">
                                           
                                        <?php
                                            // var_dump($_SESSION['thongbao']);
                                        if (isset($_SESSION['thongbao'])) {
                                          echo '<div class="title" style="color:red; font-size:20px">' .$_SESSION['thongbao'] . '</div>';
                                          unset($_SESSION['thongbao']);
                                         }
                                         ?>
                                    </div>
                                    
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>