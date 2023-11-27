<style>
    .blog-card .blog-content h3 {
        max-width: 1440px;
    }

    .timkiemlon {
        display: flex;
    }

    .timkiem {
        background-color: orangered;

    }
</style>
<div class="banner-area-two">

    <div class="banner">
        <img id="banner" src="../views/Client/layout/img/anh0.jpg" alt="">

        <!-- <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
         -->
    </div>

</div>
<div class="blog-style-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="search-widget">
                    <form class="search-form" action="ClientController.php?act=danhsachtintuc" method="post">
                        <div class="timkiemlon">
                            <input type="text" class="form-control" name="tukhoa"
                                placeholder="Search...">
                            <input type="submit" name="listok" value="Tìm kiếm" class="timkiem">
                        </div>


                    </form>
                </div>
                <?php
              
                foreach ($dstintuc as $t) {
                    extract($t);
                    $id_tt = "ClientController.php?act=chitiettintuc&id_tin_tuc=" . $id_tin_tuc;
                    $hinhpath = "../views/Admin/quanlytintuc/anhtintuc/" . $img_tin_tuc;
                    echo '<div class="col-lg-12">
                    <div class="blog-card">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4 p-0">
                                <div class="blog-img">
                                    <img src=' . $hinhpath . ' alt="Images">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 p-0">
                                <div class="blog-content">
                                    <h3>
                                    <a href=' . $id_tt . '>' . $tieu_de . '</a>
                                        
                                    </h3>
                                    <i class="bx bx-calendar"></i>
                                    <span>' . $ngay_dang . '</span>
                                    <p>' . $noi_dung . '</p>
                                    <a href=' . $id_tt . ' class="read-btn">
                                        Xem Chi Tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>