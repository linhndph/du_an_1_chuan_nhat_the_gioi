<div class="room-area-two pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Các Kiểu Sân 7</h2>
        </div>
        <div class="room-slider owl-carousel owl-theme pt-45">
            <!-- <div class="room-item"> -->
            <?php
            $listbienthe = ds_san_inner();
            foreach ($listbienthe as $san) {
                extract($san);
                $hinhpath = "../views/Admin/quanlysan/anhsan/" . $img_san;
                $idchitiet = "ClientController.php?act=chitietsan&id_san=" . $id_san;

                if ($id_bien_the == 2) {
                    echo '
                        <div class="room-item">
                                <a href="'.$idchitiet.'">
                                <img src=' . $hinhpath . '
                                    alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="'.$idchitiet.'">' . $ten_san . '</a></h3>
                                
                                <ul>
                                    <li>' . $gia . ' VNĐ</li>
                                    <li><span>2 giờ</span></li>
                                </ul>
                                <a href="'.$idchitiet.'" class="book-btn">Book Now</a>
                            </div>
                            </div>
                                ';
                }
            }
            ?>

            <!-- </div> -->

            <!-- <div class="room-item">
                    <a href="room-details.html">
                        <img src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/room/room-img2.jpg"
                            alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="room-details.html">Single Room</a></h3>
                        <p>You can easily reserve a hotel room with a double bed as you want. This will give you a very
                            good feeling.</p>
                        <ul>
                            <li>300</li>
                            <li><span>Per Night</span></li>
                        </ul>
                        <a href="book.html" class="book-btn">Book Now</a>
                    </div>
                </div>
                <div class="room-item">
                    <a href="room-details.html">
                        <img src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/room/room-img8.jpg"
                            alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="room-details.html">Deluxe Room</a></h3>
                        <p>You can easily reserve a hotel room with a double bed as you want. This will give you a very
                            good feeling.</p>
                        <ul>
                            <li>340</li>
                            <li><span>Per Night</span></li>
                        </ul>
                        <a href="book.html" class="book-btn">Book Now</a>
                    </div>
                </div>
                <div class="room-item">
                    <a href="room-details.html">
                        <img src="../../public/assets/templates.hibootstrap.com/atoli/default/assets/img/room/room-img4.jpg"
                            alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="room-details.html">Family Room</a></h3>
                        <p>You can easily reserve a hotel room with a double bed as you want. This will give you a very
                            good feeling.</p>
                        <ul>
                            <li>360</li>
                            <li><span>Per Night</span></li>
                        </ul>
                        <a href="book.html" class="book-btn">Book Now</a>
                    </div>
                </div> -->
        </div>
    </div>
</div>