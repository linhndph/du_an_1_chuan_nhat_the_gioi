<?php
function loadAllCASAN()
{
    $sql = "SELECT * FROM tb_ca_san ORDER BY id_ca DESC";
    $listcasan = pdo_query($sql);
    return $listcasan;
}

function insert_casan($ten_ca, $thoi_gian_bd, $thoi_gian_kt)
{
    $sql = "INSERT INTO tb_ca_san(ten_ca, thoi_gian_bd, thoi_gian_kt) VALUES ('$ten_ca','$thoi_gian_bd','$thoi_gian_kt')";
    pdo_execute($sql);
}

function delete_casan($id_ca)
{
    $sql = "DELETE FROM tb_ca_san WHERE id_ca = '$id_ca'";
    pdo_query($sql);
}

function loadOneCASAN($id_ca)
{
    $sql = "SELECT * FROM tb_ca_san WHERE id_ca = '$id_ca'";
    $cs = pdo_query_one($sql);
    return $cs;
}
function update_casan($id_ca, $ten_ca, $thoi_gian_bd, $thoi_gian_kt)
{
    $sql = "UPDATE tb_ca_san SET ten_ca = '$ten_ca', thoi_gian_bd='$thoi_gian_bd',thoi_gian_kt = '$thoi_gian_kt'  WHERE id_ca = '$id_ca'";
    pdo_execute($sql);
}
?>
