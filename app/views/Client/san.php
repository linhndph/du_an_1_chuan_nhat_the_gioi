<style>
    .timkiemlon {
        display: flex;
    }

    .timkiemnho {
        background-color: orange;
        border-color: orange;
    }
</style>
<div class="blog-style-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                // $listsanClient = ds_san_inner();
                
                foreach ($listsanClient as $san) {
                    extract($san);
                    $idchitiet = "ClientController.php?act=chitietsan&id_san=" . $id_san;
                    $hinhsan = "../views/Admin/quanlysan/anhsan/" . $img_san;
                    echo '
                    <a href=' . $idchitiet . ' class="read-btn">
                    <div class="col-lg-12">
                    <div class="blog-card">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4 p-0">
                                <div class="blog-img">
                                <img src=' . $hinhsan . ' alt="Images" style="width:600px; height:300px">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 p-0">
                                <div class="blog-content">
                                    <h3>
                                        ' . $ten_san . '
                                    </h3>
                                    <span>' . $gia . 'VNĐ/2 Giờ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                </a>';
                }
                ?>

            </div>
            <div class="col-lg-4">
                <div class="side-bar-wrap">
                    <div class="search-widget">
                        <form class="search-form" action="ClientController.php?act=san" method="post">
                            <div class="timkiemlon">
                                <input type="search" class="form-control" name="tukhoa" placeholder="Search...">
                                <input type="submit" name="listok" value="Tìm kiếm" class="timkiemnho">
                            </div>

                        </form>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Danh mục sân</h3>
                        <div class="widget-popular-post">
                            <?php
                            foreach ($listdm as $dm) {
                                extract($dm);
                                $linkdm = "ClientController.php?act=listsan5&id_danh_muc=" . $id_danh_muc;
                                $linkdm1 = "ClientController.php?act=listsan7&id_danh_muc=" . $id_danh_muc;
                                $linkdm2 = "ClientController.php?act=listsan9&id_danh_muc=" . $id_danh_muc;
                                $linkdm3 = "ClientController.php?act=listsan11&id_danh_muc=" . $id_danh_muc;
                                ?>
                                <article class="item">
                                    <!-- <a href="blog-details.html" class="thumb">
                                    <span class="full-image cover bg1" role="img"></span>
                                </a> -->
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="<?php
                                            if ($id_danh_muc == 1) {
                                                echo $linkdm;
                                            }
                                            if ($id_danh_muc == 2) {
                                                echo $linkdm1;
                                            }
                                            if ($id_danh_muc == 3) {
                                                echo $linkdm2;
                                            }
                                            if ($id_danh_muc == 4) {
                                                echo $linkdm3;
                                            }
                                            ?>">
                                                <?php
                                                echo $ten_danh_muc;
                                                ?>
                                            </a>
                                        </h4>
                                        <!-- <ul>
                                        <li>
                                            <i class="bx bx-user"></i>
                                            29K
                                        </li>
                                        <li>
                                            <i class="bx bx-message-square-detail"></i>
                                            15K
                                        </li>
                                    </ul> -->
                                    </div>
                                </article>
                            <?php } ?>

                            <!-- <article class="item">
                                <a href="blog-details.html" class="thumb">
                                    <span class="full-image cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="blog-details.html">
                                            We Can Easily Make a Good Hotel Management
                                        </a>
                                    </h4>
                                    <ul>
                                        <li>
                                            <i class="bx bx-user"></i>
                                            49K
                                        </li>
                                        <li>
                                            <i class="bx bx-message-square-detail"></i>
                                            17K
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <article class="item">
                                <a href="news-details.html" class="thumb">
                                    <span class="full-image cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="news-details.html">
                                            Hotel Management Has Made a New Goal
                                        </a>
                                    </h4>
                                    <ul>
                                        <li>
                                            <i class="bx bx-user"></i>
                                            69K
                                        </li>
                                        <li>
                                            <i class="bx bx-message-square-detail"></i>
                                            52K
                                        </li>
                                    </ul>
                                </div>
                            </article> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>