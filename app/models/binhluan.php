<?php
function loadAllBL()
{
    $sql = "SELECT * FROM tb_binh_luan ORDER BY id_binh_luan ";
    $listbl = pdo_query($sql);
    return $listbl;
}
function ds_bl_inner()
{

    $sql = "SELECT * FROM tb_binh_luan
    join tb_tai_khoan on tb_binh_luan.id_tai_khoan=tb_tai_khoan.id_tai_khoan
    join tb_san on tb_binh_luan.id_san=tb_san.id_san";
    $listtk = pdo_query($sql);
    return $listtk;
}

function insert_binh_luan($id_tai_khoan,$id_san,$ngay_binh_luan,$noi_dung){
    $sql = "INSERT INTO tb_binh_luan(id_tai_khoan, id_san, ngay_binh_luan, noi_dung) VALUES ('$id_tai_khoan', '$id_san', '$ngay_binh_luan', '$noi_dung')";
   pdo_execute($sql);
}

function load_BL($id)
{
    $sql = "SELECT * FROM tb_binh_luan join tb_tai_khoan on tb_binh_luan.id_tai_khoan=tb_tai_khoan.id_tai_khoan
    join tb_san on tb_binh_luan.id_san=tb_san.id_san where tb_binh_luan.id_san = $id  ORDER BY id_binh_luan DESC LIMIT 3 ";
    $bl = pdo_query($sql);
    return $bl;
}

?>
