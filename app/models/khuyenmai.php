<?php
function insert_khuyen_mai($id_san,$ma_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$gia_giam,$mo_ta)
{
    $sql = "INSERT INTO tb_khuyen_mai(id_san,ma_khuyen_mai,ngay_bat_dau,ngay_ket_thuc,gia_giam,mo_ta) VALUES ('$id_san','$ma_khuyen_mai','$ngay_bat_dau','$ngay_ket_thuc','$gia_giam','$mo_ta')";
    pdo_execute($sql);
}
function loadAllKM()
{
    $sql = "SELECT * FROM tb_khuyen_mai ORDER BY id_khuyen_mai ";
    $listkm = pdo_query($sql);
    return $listkm;
}
function ds_km_inner()
{

    $sql = "SELECT * FROM tb_khuyen_mai
    join tb_san on tb_khuyen_mai.id_san=tb_san.id_san";
    $list_joinkm = pdo_query($sql);
    return $list_joinkm;
}

function loadone_khuyen_mai($id_khuyen_mai){
    $sql = "select * from tb_khuyen_mai where id_khuyen_mai = '$id_khuyen_mai'";
    $onekm = pdo_query_one($sql);
    return $onekm;
}
function update_khuyen_mai($id_khuyen_mai,$id_san,$ma_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$gia_giam,$mo_ta){
    $sql = "update tb_khuyen_mai set id_khuyen_mai = '$id_khuyen_mai', id_san='$id_san',ma_khuyen_mai='$ma_khuyen_mai',ngay_bat_dau='$ngay_bat_dau',ngay_ket_thuc='$ngay_ket_thuc',gia_giam='$gia_giam',mo_ta='$mo_ta' where id_khuyen_mai=$id_khuyen_mai";
    pdo_execute($sql);
}
function delete_khuyen_mai($id_khuyen_mai)
{
    $sql = "DELETE FROM tb_khuyen_mai WHERE id_khuyen_mai = '$id_khuyen_mai'";
    pdo_query($sql);
}
?>