<style>
    .inner-banner {
        margin-top: 50px;
    }
</style>
<div class="navbar-area">

    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="assets/img/logos/logo-3.png" class="logo-one" alt="Logo">
            <img src="assets/img/logos/footer-logo3.png" class="logo-two" alt="Logo">
        </a>
    </div>

    <div class="main-nav nav-three">

    </div>
</div>


<div class="inner-banner inner-bg10">

</div>


<div class="room-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="room-details-side">
                    <?php
                    // $id_san=$_GET['id_san'];
                    //  $listdatsan = loadAllDatSan($id_san); 
                             foreach($listdatsan as $dsngungu){  
                                extract($dsngungu);
                             
                        ?>

                                <div class="side-bar-form">
                                <h3>Đặt sân ngay </h3>
                                <form method="post" action="">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Tên sân</label>
                                                <div class="input-group">
                                                   <p class="form-control" style="padding-top:10px;" ><?php echo $ten_san;
                                                    ?></p>
                                                 
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Giá sân</label>
                                                <div class="input-group">
                                                <p class="form-control" style="padding-top:10px;" ><?php echo $gia; ?></p>
                                                    
                                                </div>
                                             
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Thể loại sân</label>
                                                <div class="input-group">
                                                <p class="form-control" style="padding-top:10px;" ><?php echo $ten_bien_the; ?></p>
                                                    
                                                </div>
                                             
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Ngày sử dụng sân</label>
                                                <div class="input-group">
                                                <input type="date" name="ngay_da" class="form-control" style="padding-top:10px;">
                                                  
                                                </div>
                                             
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Ca Sân</label>
                                            <div class="input-group">
                                           <select class="form-control">
                                          <?php 
                                        
                                          foreach ($listcasan as $casan){
                                          ?>
                                            <option value="<?php echo $casan['id_ca'] ?>"><?php echo $casan['ten_ca'] ?></option>
                                     
                                          <?php } ?>
                                           </select>
                                                <span class="input-group-addon"></span>
                                            </div>
                                         
                                        </div>
                                    </div>
                                      
                                        <div class="col-lg-12 col-md-12">
                                            <input type="submit" class="default-btn btn-bg-three border-radius-5" name="booknow" value="Book Now">
                                                
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
                            <?php }
                    ?>
                 

                </div>
            </div>
            <div class="col-lg-8">
                <div class="room-details-article">
                    <!-- ảnh -->
                    <?php
                    $chitietsan = loadone_SAN_BT($id_san);
                    if (is_array($chitietsan)) {
                        extract($chitietsan);
                        $img_san = "../views/Admin/quanlysan/anhsan/" . $chitietsan['img_san'];
                        echo '
                
            <div class="room-details-item">
            <img src="' . $img_san . '" alt="Images">
        </div>
    </div>
    <div class="room-details-title">
        <h2>
            ' . $ten_san . '
        </h2>
        <ul>
            <li>
               ' . $gia . ' VNĐ 
            </li>
        </ul>
    </div>
                ';
                    }
                    ?>

                    <form action="ClientController.php?act=binhluan" method="post">
                        <input type="hidden" value="<?php if (isset($id_san) && ($id_san > 0))
                            echo $id_san; ?>" name="id_san">

                        <input type="hidden" value="
                        <?php $id_TaiKhoan = loadone_tk($_SESSION['id_tai_khoan']);
                        extract($id_TaiKhoan);
                        if (isset($id_tai_khoan) && ($id_tai_khoan > 0))
                            echo $id_tai_khoan; ?>" 
                            name="id_tai_khoan">

                        <?php
                        if (isset($_SESSION['id_chuc_vu'])) {

                            if ($_SESSION['id_chuc_vu'] == 3) {
                                echo ' <div class="room-details-review">
                                        <h2>Clients Review and Retting</h2>
                                        <div class="review-ratting">
                                            <h3>Your retting: </h3>
                                        </div>
                                        
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="noi_dung" class="form-control" cols="30" rows="8" required
                                                            data-error="Write your message"
                                                            placeholder="Write your review here.... "></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <input type="submit" class="default-btn btn-bg-three" value="Submit Review"
                                                        name="binhluan">
                                                    
                                                </div>
                                            </div>
                                        
                                    </div>';
                            }
                        }


                        echo '
                            <table class="table table-striped projects">
                                <div class="col-lg-12 col-md-12">
                                    <tr>
                                        <th style="width: 30%">Tên người bình luận</th>
                                        <th style="width: 30%">Nội dung</td>
                                        <th style="width: 30%">Thời gian bình luận</th>
                                
                                    </tr>
                                </div>
                        ';
                        foreach ($bl as $b) {
                            extract($b);
                            echo '
                                <div class="col-lg-12 col-md-12">
                                    <tr>
                                        <td>' . $ten_tai_khoan . '</td>
                                        <td>' . $noi_dung . '</td>
                                        <td>' . $ngay_binh_luan . '</td>
                                    </tr>
                                </div>
                                
                                ';
                        }
                        echo '</table>';
                        ?>

                        <?php
                        // var_dump($_SESSION['thongbao']);
                        if (isset($_SESSION['thongbao'])) {
                            echo '<div class="title" style="color:red; font-size:20px">' . $_SESSION['thongbao'] . '</div>';
                            unset($_SESSION['thongbao']);
                        }


                        ?>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="room-details-other pb-70">
    <div class="container">
        <div class="room-details-text">
            <h2>Sân cùng loại</h2>
        </div>
        <div class="row ">
            <?php
            $listsan_cungloai = loadOne_SAN_CUNGLOAI($id_san, $id_danh_muc);
            foreach ($listsan_cungloai as $cungloai) {
                extract($cungloai);

                $idchitiet = "ClientController.php?act=chitietsan&id_san=" . $id_san;
                $img_san = "../views/Admin/quanlysan/anhsan/" . $cungloai['img_san'];
                echo '
                <div class="col-lg-6">
                <div class="room-card-two">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="room-card-img">
                                <a href="' . $idchitiet . '">
                                    <img src="' . $img_san . '" alt="Images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                <h3>
                                    <a href="' . $idchitiet . '">' . $ten_san . '</a>
                                </h3>
                                <span>' . $gia . ' VNĐ </span>
                                <a href="' . $idchitiet . '" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                ';

            }

            ?>
            <!-- <div class="col-lg-6">
                <div class="room-card-two">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="room-card-img">
                                <a href="room-details.html">
                                    <img src="assets/img/room/room-style-img2.jpg" alt="Images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                <h3>
                                    <a href="room-details.html">Single Room</a>
                                </h3>
                                <span>300 / Per Night </span>
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed
                                    pulvinar purus.</p>
                                <ul>
                                    <li><i class="bx bx-user"></i> 1 Person</li>
                                    <li><i class="bx bx-expand"></i> 25m2 / 276ft2</li>
                                </ul>
                                <ul>
                                    <li><i class="bx bx-show-alt"></i> Sea Balcony</li>
                                    <li><i class="bx bxs-hotel"></i> Smallsize / Twin</li>
                                </ul>
                                <a href="room-details.html" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>