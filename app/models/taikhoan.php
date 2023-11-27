<?php
function insert_tai_khoan($ten_dang_nhap, $mat_khau, $sdt, $email,$address,$id_chuc_vu,$trang_thai,$img_tai_khoan,$ten_tai_khoan){
    $sql = "INSERT INTO `tb_tai_khoan` VALUES
     ('null','$ten_dang_nhap', '$mat_khau', '$sdt', '$email','$address','$id_chuc_vu','$trang_thai','$img_tai_khoan','$ten_tai_khoan');";
    pdo_execute($sql);
}
function loadAll_tai_khoan()
{
    $sql = "SELECT * FROM tb_tai_khoan ORDER BY id_tai_khoan ";
    $listtk = pdo_query($sql);
    return $listtk;
}
function ds_tk_inner()
{
    $sql = "select * from tb_tai_khoan join tb_chuc_vu on tb_tai_khoan.id_chuc_vu = tb_chuc_vu.id_chuc_vu";
    $listchucvu = pdo_query($sql);
    return $listchucvu;
}

function loadone_tk($id_tai_khoan){
    $sql = "select * from tb_tai_khoan where id_tai_khoan = '$id_tai_khoan'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

function update_tai_khoan($id_tai_khoan,$ten_dang_nhap,$mat_khau,$sdt,$email,$address,$id_chuc_vu,$trang_thai,$img_tai_khoan,$ten_tai_khoan){
    if($img_tai_khoan!=""){
        $sql = "update tb_tai_khoan set id_tai_khoan='".$id_tai_khoan."', ten_dang_nhap='".$ten_dang_nhap."', mat_khau='".$mat_khau."', sdt='".$sdt."', email='".$email."', address='".$address."', id_chuc_vu='".$id_chuc_vu."', trang_thai='".$trang_thai."', img_tai_khoan='".$img_tai_khoan."'  , ten_tai_khoan='".$ten_tai_khoan."' where id_tai_khoan=".$id_tai_khoan;
    }
    else{
        $sql = "update tb_tai_khoan set id_tai_khoan='".$id_tai_khoan."', ten_dang_nhap='".$ten_dang_nhap."', mat_khau='".$mat_khau."', sdt='".$sdt."', email='".$email."', address='".$address."', id_chuc_vu='".$id_chuc_vu."', trang_thai='".$trang_thai."', ten_tai_khoan='".$ten_tai_khoan."' where id_tai_khoan=".$id_tai_khoan;
    }
    pdo_execute($sql);
}
function delete_tk($id_tai_khoan)
{
    $sql = "DELETE FROM tb_tai_khoan WHERE id_tai_khoan = '$id_tai_khoan'";
    pdo_query($sql);
}


function checkuser($user,$pass){
    $sql= "select * from tb_tai_khoan where ten_dang_nhap='$user' and mat_khau='$pass'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
    
}

function insert_tk_nguoidung($ten_dang_nhap, $mat_khau, $sdt, $email,$address,$id_chuc_vu,$trang_thai,$img_tai_khoan,$ten_tai_khoan){
    $sql = "INSERT INTO `tb_tai_khoan`(`ten_dang_nhap`, `mat_khau`, `sdt`, `email`,`address`,`id_chuc_vu`,`trang_thai`,`img_tai_khoan`,`ten_tai_khoan`) VALUES
     ('$ten_dang_nhap', '$mat_khau', '$sdt', '$email','$address','$id_chuc_vu','$trang_thai','$img_tai_khoan','$ten_tai_khoan');";
    pdo_execute($sql);
}

function quen_mat_khau($email) {
    $sql="SELECT * FROM tb_tai_khoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    return $taikhoan;
}

?>