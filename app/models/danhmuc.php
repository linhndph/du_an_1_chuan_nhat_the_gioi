<?php
function insert_danhmuc($tendanhmuc)
{
    $sql = "INSERT INTO tb_danh_muc(ten_danh_muc) VALUES ('$tendanhmuc')";
    pdo_execute($sql);
}

function loadAll()
{
    $sql = "SELECT * FROM tb_danh_muc ORDER BY 	id_danh_muc ";
    $listdm = pdo_query($sql);
    return $listdm;
}

function delete_danhmuc($id_danh_muc)
{
    $sql = "DELETE FROM tb_danh_muc WHERE id_danh_muc = '$id_danh_muc'";
    pdo_query($sql);
}

function loadOne($id_danh_muc)
{
    $sql = "SELECT * FROM tb_danh_muc WHERE id_danh_muc = '$id_danh_muc'";
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id_danh_muc, $ten_danh_muc)
{
    $sql = "UPDATE tb_danh_muc SET ten_danh_muc='$ten_danh_muc' WHERE id_danh_muc = '$id_danh_muc'";
    pdo_execute($sql);
}
?>