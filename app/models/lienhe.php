<?php
function loadAllLH()
{
    $sql = "SELECT * FROM tb_lien_he ORDER BY id_lien_he ";
    $listlh = pdo_query($sql);
    return $listlh;
}
function ds_lh_inner()
{
    $sql = "select * from tb_lien_he join tb_tai_khoan on tb_lien_he.id_tai_khoan = tb_tai_khoan.id_tai_khoan";
    $listlienhe = pdo_query($sql);
    return $listlienhe;
}
function update_lien_he($id_lien_he,$trang_thai_lh){
    $sql="update tb_lien_he set  trang_thai_lh='".$trang_thai_lh."' where id_lien_he=".$id_lien_he;

    pdo_execute($sql);
}
function delete_lien_he($id_lien_he){
    $sql= "delete from tb_lien_he where id_lien_he=".$id_lien_he;
    pdo_execute($sql);
}
function insert_lien_he($id_tai_khoan,$noi_dung,$trang_thai)
{   
    $sql = "INSERT INTO tb_lien_he(id_tai_khoan,noidung,trang_thai_lh) VALUES ('$id_tai_khoan','$noi_dung','$trang_thai')";
    pdo_execute($sql);
}
?>