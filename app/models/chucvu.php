<?php 
function insert_chuc_vu($id_chuc_vu,$ten_chuc_vu){
    $sql = "INSERT INTO `tb_chuc_vu`(`id_chuc_vu`,`ten_chuc_vu`) VALUES ('$id_chuc_vu','$ten_chuc_vu');";
    pdo_execute($sql);
}
function loadall_chuc_vu(){
    $sql="select * from tb_chuc_vu order by id_chuc_vu";
    $dschucvu=pdo_query($sql);
    return  $dschucvu;
}
function delete_chuc_vu($id_chuc_vu){
    $sql="delete from tb_chuc_vu where id_chuc_vu=".$id_chuc_vu;
    pdo_execute($sql);
}
function loadone_chuc_vu($id_chuc_vu){
    $sql = "select * from tb_chuc_vu where id_chuc_vu = '$id_chuc_vu'";
    $ds = pdo_query_one($sql);
    return $ds;
}
function update_chuc_vu($id_chuc_vu,$ten_chuc_vu){
    $sql="update tb_chuc_vu set id_chuc_vu='".$id_chuc_vu."', ten_chuc_vu='".$ten_chuc_vu."', where id_chuc_vu=".$id_chuc_vu;

    pdo_execute($sql);
}
?>