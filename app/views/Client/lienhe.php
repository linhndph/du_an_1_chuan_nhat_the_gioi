<style>
    .contact-another-img img {
        height: 480px;
    }
</style>
<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-content">
                    <div class="section-title">
                        <h2>Mọi Thắc Mắc Của Bạn Xin Điền Vào Thông Tin Liên Hệ</h2>
                    </div>
                    <div class="contact-img">
                        <img src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/contact/contact-img1.jpg"
                            alt="Images">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form action="ClientController.php?act=lienhe" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Name" value="<?php if (isset($id_TaiKhoan) && ($id_TaiKhoan > 0))
                                            echo $taikhoan['ten_tai_khoan']; ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Email" value="<?php if (isset($id_TaiKhoan) && ($id_TaiKhoan > 0))
                                            echo $taikhoan['email']; ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" required
                                        data-error="Please enter your number" class="form-control" placeholder="Phone"
                                        value="<?php if (isset($id_TaiKhoan) && ($id_TaiKhoan > 0))
                                            echo $taikhoan['sdt']; ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="address" id="msg_subject" class="form-control" required
                                        value="<?php if (isset($id_TaiKhoan) && ($id_TaiKhoan > 0))
                                            echo $taikhoan['address']; ?>" data-error="Please enter your subject"
                                        placeholder="Địa Chỉ">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="hidden" name="id_tai_khoan" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="id" value="<?php if (isset($id_TaiKhoan) && ($id_TaiKhoan > 0))
                                            echo $taikhoan['id_tai_khoan']; ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                        required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <?php if (isset($_SESSION['id_chuc_vu'])) {
                                    if ($_SESSION['id_chuc_vu'] == 3) {
                                        echo '<input type="submit" name="guilienhe" value="Gửi Liên Hệ"
                                    class="default-btn btn-bg-three">';
                                    }
                                } ?>
                                <?php
                                // var_dump($_SESSION['thongbao']);
                                if (isset($_SESSION['thongbao'])) {
                                    echo '<div class="title" style="color:red; font-size:20px">' . $_SESSION['thongbao'] . '</div>';
                                    unset($_SESSION['thongbao']);
                                }
                                ?>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-another pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-another-content">
                    <div class="section-title">
                        <h2>Thông Tin Liên Hệ Khác</h2>

                    </div>
                    <div class="contact-item">
                        <ul>
                            <li>
                                <i class="bx bx-home-alt"></i>
                                <div class="content">
                                    <span> FPT Polytechnic,Cổng Số 1,13 P.Trịnh Văn Bô, Hà Nội, Việt Nam</span>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <div class="content">
                                    <span>(+84) 385922153</span>
                                    <span>(+84) 767148662</span>
                                    <span>(+84) 352168486</span>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                <div class="content">
                                    <span>
                                        <a href="#"> HoàngLinhPoly@gmail.com</a>
                                        <a href="#"> HuyPhúcPoly@gmail.com</a>
                                        <a href="#"> DuyLinhPoly@gmail.com</a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-another-img">
                    <img src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/home-two/diachi.jpg"
                        alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>