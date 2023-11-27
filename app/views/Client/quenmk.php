<form action="ClientController.php?act=quenmatkhau" method="POST" enctype="multipart/form-data">
    <div class="sign-in-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                <span class="sp-color">Quên mật khẩu</span>
                                <h2>Lấy mật khẩu bằng email của bạn!</h2>
                            </div>
                            
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="email" id="name" class="form-control" required
                                                data-error="Please enter your Email"
                                                placeholder="Nhập email của bạn để lấy mật khẩu">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-sm-6 form-condition">
                                        
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <input type="submit" value="Submit" name="quenmk">
                                           
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
