<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/atoli/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Nov 2023 15:50:24 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/animate.min.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/fonts/flaticon.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/boxicons.min.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/owl.carousel.min.css">

    <link rel="stylesheet"
        href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/nice-select.min.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/meanmenu.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/jquery-ui.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/style.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/responsive.css">

    <link rel="stylesheet" href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/css/theme-dark.css">

    <link rel="icon" type="image/png"
        href="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/home-two/LOGO.jpg">
    <title>PolySoccer</title>
</head>
<style>
    .ps {
        height: 600px;
    }

    .owl-carousel .owl-item img {
        width: 530px;
    }

    .testimonials-img .content {
        left: 20px;
        padding: 10px 20px;
    }

    .san9 {
        height: 300px;
    }

    #Menu-footer {
        text-align: center;
    }

    #logo {
        width: 70px;
        width: 70px;
        border-radius: 25px 0px 25px 0px;
    }

    .room-item .content .book-btn {
        background-color: #FF8C00;
    }

    .option-item .menu-icon .menu-icon-one {
        color: #FF8C00;
    }

    .btn-bg-two {
        background-color: #FF8C00;
    }

    .room-item .content ul li {
        color: #FF8C00;
    }

    .services-card i {
        color: #FF8C00;
    }
    
    .banner img{
        width: 100%;
        height: 700px;
    }
   
    


</style>

<body>



    <div class="navbar-area">
<!-- // loggo -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img id="logo" src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/home-two/LOGO.jpg"
                    class="logo-one" alt="Logo">
                <imgid="logo" src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/home-two/LOGO.jpg"
                    class="logo-two" alt="Logo">
            </a>
        </div>

        <div class="main-nav nav-two">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="index.php">
                        <img id="logo"
                            src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/home-two/LOGO.jpg"
                            class="logo-one" alt="Logo">
                        <img id="logo"
                            src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/home-two/LOGO.jpg"
                            class="logo-two" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="ClientController.php" class="nav-link">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Danh mục
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                <?php
                                    foreach ($listdm as $dm) {
                                        extract($dm);
                                        $linkdm = "ClientController.php?act=listsan5&id_danh_muc=" . $id_danh_muc;
                                        $linkdm1 = "ClientController.php?act=listsan7&id_danh_muc=" . $id_danh_muc;
                                        $linkdm2 = "ClientController.php?act=listsan9&id_danh_muc=" . $id_danh_muc;
                                        $linkdm3 = "ClientController.php?act=listsan11&id_danh_muc=" . $id_danh_muc;
                                        ?>

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
                                            <li>
                                                <?php echo $ten_danh_muc ?>
                                            </li>
                                        </a>

                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="ClientController.php?act=san" class="nav-link">
                                    Sân
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ClientController.php?act=danhsachtintuc" class="nav-link">
                                    Tin Tức
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ClientController.php?act=lienhe" class="nav-link">
                                    Liên Hệ
                                </a>
                            </li>
                        </ul>
                        <div class="other-option">
                            <div class="option-item d-in-line">
                                <div class="menu-icon">
                                    <a href="#" class="burger-menu menu-icon-one d-in-line">
                                        <i class="bx bx-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <div class="sidebar-modal">
        <div class="sidebar-modal-inner">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <img id="logo"
                        src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/home-two/LOGO.jpg"
                        class="sidebar-logo-one" alt="Image">
                    <img id="logo"
                        src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/home-two/LOGO.jpg"
                        class="sidebar-logo-two" alt="Image">
                </div>
                <span class="close-btn sidebar-modal-close-btn">
                    <i class="bx bx-x"></i>
                </span>
            </div>
            <?php
            // echo $_SESSION["ten_dang_nhap"];    
            if(isset($_SESSION['ten_dang_nhap'])){

                
                // echo'Đây là đúng';
                include('thongtintk.php');
            }
            else{
                
               include 'dkdn.php';
            }
            
            
            ?>
          
            <div class="contact-us">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <i class="bx bx-current-location"></i>
                        Địa chỉ: FPT Polytechnic,Cổng Số 1,13 P.Trịnh Văn Bô, Hà Nội, Việt Nam
                    </li>
                    <li>
                        <i class="bx bx-mail-send"></i>
                        <a href="#">Email: HoàngLinhPoly@gmail.com</a>
                        <a href="#">Email: HuyPhúcPoly@gmail.com</a>
                        <a href="#">Email: DuyLinhPoly@gmail.com</a>
                    </li>
                    <li>
                        <i class="bx bx-phone-call"></i>
                        <a href="tel:+1(123)-456-7890"> (+84) 385922153</a>
                        <a href="tel:+1(123)-456-6790"> (+84) 767148662</a>
                        <a href="tel:+1(123)-456-6790"> (+84) 352168486</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-follow-us">
                <h2>Follow Us</h2>
                <ul class="social-wrap">
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
