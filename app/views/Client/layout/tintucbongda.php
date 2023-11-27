<div class="blog-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Tin Tức Bóng Đá Thế Giới Và Giải Đấu Mới Nhất Hiện Nay</h2>
        </div>
        <div class="row pt-45">
        <?php
        $tt=load_tinmoi();

            foreach($tt as $tintuc){
                extract($tintuc);
                $id_tt = "ClientController.php?act=chitiettintuc&id_tin_tuc=" . $id_tin_tuc;
                $hinhpath = "../views/Admin/quanlytintuc/anhtintuc/" . $img_tin_tuc;
                
                    echo'
                    
                    <div class="col-lg-6">
                        <div class="blog-card">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="blog-img">
                                        <a href="'.$id_tt.'">
                                            <img src='.$hinhpath.'
                                                alt="Images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="blog-content blog-color">
                                        <span>'.$ngay_dang.'</span>
                                        <h3>
                                            <a href="'.$id_tt.'">'.$tieu_de.'</a>
                                        </h3>
                                        
                                        <a href="'.$id_tt.'" class="read-btn">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    ';
                
            }
        ?>
        </div>
        
    </div>
</div>