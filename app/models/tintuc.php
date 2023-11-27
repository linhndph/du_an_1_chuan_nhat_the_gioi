<?php
function loadall_tintuc(){
    $sql="select * from tb_tin_tuc order by id_tin_tuc";
    $dstintuc=pdo_query($sql);
    return  $dstintuc;
}

function insert_tin_tuc($tieu_de, $noi_dung, $img_tin_tuc, $ngay_dang){
    $sql = "INSERT INTO `tb_tin_tuc`(`tieu_de`, `noi_dung`, `img_tin_tuc`, `ngay_dang`) VALUES ('$tieu_de', '$noi_dung', '$img_tin_tuc', '$ngay_dang');";
    pdo_execute($sql);
}

function delete_tin_tuc($id_tin_tuc){
    $sql="delete from tb_tin_tuc where id_tin_tuc=".$id_tin_tuc;
    pdo_execute($sql);
}
function update_tin_tuc($id_tin_tuc,$tieu_de,$noi_dung,$img_tin_tuc,$ngay_dang){
  
    if(($img_tin_tuc!="")&&($ngay_dang!= "")){
        $sql = "update tb_tin_tuc set id_tin_tuc='$id_tin_tuc',tieu_de='$tieu_de',noi_dung='$noi_dung',img_tin_tuc='$img_tin_tuc',ngay_dang='$ngay_dang' where id_tin_tuc=".$id_tin_tuc;

    }
    elseif(($img_tin_tuc== "")&&($ngay_dang!="")){
        $sql = "update tb_tin_tuc set id_tin_tuc='$id_tin_tuc',tieu_de='$tieu_de',noi_dung='$noi_dung',ngay_dang='$ngay_dang' where id_tin_tuc=".$id_tin_tuc;
    }
    elseif(($img_tin_tuc!= "")&&($ngay_dang=="")){
        $sql = "update tb_tin_tuc set id_tin_tuc='$id_tin_tuc',tieu_de='$tieu_de',noi_dung='$noi_dung',img_tin_tuc='$img_tin_tuc' where id_tin_tuc=".$id_tin_tuc;
    }
    else {
        $sql = "update tb_tin_tuc set id_tin_tuc='$id_tin_tuc',tieu_de='$tieu_de',noi_dung='$noi_dung' where id_tin_tuc=".$id_tin_tuc;
    }
    
 
    pdo_execute($sql);
}
function loadone_tin_tuc($id_tin_tuc){
    $sql = "select * from tb_tin_tuc where id_tin_tuc = '$id_tin_tuc'";
    $tt = pdo_query_one($sql);
    return $tt;
}
function loadAll_tintuchaha($tukhoa = "")
{
    $sql = "SELECT * FROM tb_tin_tuc WHERE 1";

    if ($tukhoa != "") {
        $sql .= " AND tieu_de LIKE '%$tukhoa%'";
    }

    $sql .= " ORDER BY id_tin_tuc DESC";

    $dstintuc = pdo_query($sql);
    return $dstintuc;
}

function load_tinmoi(){
    $sql = "SELECT * FROM tb_tin_tuc ORDER BY id_tin_tuc DESC LIMIT 2";
    $tt = pdo_query($sql);
    return $tt;
}


?>