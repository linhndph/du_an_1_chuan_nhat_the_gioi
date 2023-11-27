<?php
function insert_bien_the($ten_bien_the, $so_luong, $gia, $trang_thai){
    $sql = "INSERT INTO `tb_bien_the`(`ten_bien_the`, `so_luong`, `gia`, `trang_thai`) VALUES ('$ten_bien_the', '$so_luong', '$gia', '$trang_thai');";
    pdo_execute($sql);
}

function delete_bien_the($id_bien_the){
    $sql="delete from tb_bien_the where id_bien_the=".$id_bien_the;
    pdo_execute($sql);
}

function loadall_bienthe(){
    $sql="select * from tb_bien_the order by id_bien_the";
    $dsbienthe=pdo_query($sql);
    return  $dsbienthe;
}

function update_bienthe($id_bien_the,$ten_bien_the,$so_luong,$gia,$trang_thai){
    $sql="update tb_bien_the set id_bien_the='".$id_bien_the."', ten_bien_the='".$ten_bien_the."', so_luong='".$so_luong."', gia='".$gia."', trang_thai='".$trang_thai."' where id_bien_the=".$id_bien_the;

    pdo_execute($sql);
}

function loadone_bien_the($id_bien_the){
    $sql = "select * from tb_bien_the where id_bien_the = '$id_bien_the'";
    $ds = pdo_query_one($sql);
    return $ds;
}

?>