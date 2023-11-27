

<style>
    .room-area {
        margin-top: 50px;
    }
</style>

<div class="room-area pt-100 pb-70">
<div class="container">
<div class="section-title text-center">
<span class="sp-color">Trang sân</span>
<h2>Sân bóng đá 7 người </h2>
</div>
<div class="row pt-45">
    <?php
        foreach($listbienthe as $san7){
            extract($san7);
            $idchitiet="ClientController.php?act=chitietsan&id_san=" . $id_san;
            $hinhpath = "../views/Admin/quanlysan/anhsan/" . $img_san;
            if($id_bien_the == 2){
            echo '
            <div class="col-lg-4 col-md-6">
<div class="room-card">
<a href="'.$idchitiet.'">
<img src=" '.$hinhpath.'" alt="Images">
</a>
<div class="content">
<h3><a href="'.$idchitiet.'">'.$ten_san.'</a></h3>
<ul>
<li class="text-color">'.$gia.' VNĐ/2 Giờ</li>

</ul>

</div>
</div>
</div>
            
            ';
            }
    ?>

<?php
        }
?>
<!-- <div class="col-lg-4 col-md-6">
<div class="room-card">
<a href="room-details.html">
<img src="assets/img/room/room-img2.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="room-details.html">Single Room</a></h3>
<ul>
<li class="text-color">300</li>
<li class="text-color">Per Night</li>
</ul>
<div class="rating text-color">
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star-half"></i>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="room-card">
<a href="room-details.html">
<img src="assets/img/room/room-img3.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="room-details.html">Double Room</a></h3>
<ul>
<li class="text-color">350</li>
<li class="text-color">Per Night</li>
</ul>
<div class="rating text-color">
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star-half"></i>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="room-card">
<a href="room-details.html">
<img src="assets/img/room/room-img4.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="room-details.html">Family Room</a></h3>
<ul>
<li class="text-color">370</li>
<li class="text-color">Per Night</li>
</ul>
<div class="rating text-color">
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star-half"></i>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="room-card">
<a href="room-details.html">
<img src="assets/img/room/room-img5.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="room-details.html">Deluxe Room</a></h3>
<ul>
<li class="text-color">270</li>
<li class="text-color">Per Night</li>
</ul>
<div class="rating text-color">
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star-half"></i>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="room-card">
<a href="room-details.html">
<img src="assets/img/room/room-img6.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="room-details.html">Presidential Room</a></h3>
<ul>
<li class="text-color">270</li>
<li class="text-color">Per Night</li>
</ul>
<div class="rating text-color">
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star-half"></i>
</div>
</div>
</div>
</div> -->
</div>
</div>
</div>

