<?php
function ds_san_inner()
{
    $sql = "select * from tb_bien_the join tb_san on tb_bien_the.id_bien_the = tb_san.id_bien_the";
    $listbienthe = pdo_query($sql);
    return $listbienthe;
}
function ds_san2_inner()
{
    $sql = "select * from tb_danh_muc join tb_san on tb_danh_muc.id_danh_muc = tb_san.id_danh_muc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadAllSAN()
{
    $sql = "SELECT * FROM tb_san ORDER BY id_san desc";
    $listsan = pdo_query($sql);
    return $listsan;
}

function loadone_SAN($id_san){
    $sql = "select * from tb_san where id_san = '$id_san'";
    $san = pdo_query_one($sql);
    return $san;
}
function loadAll_san($tukhoa = "", $id_danh_muc = 0)
{
    $sql = "SELECT * FROM tb_san join tb_bien_the on tb_bien_the.id_bien_the=tb_san.id_bien_the
    join tb_danh_muc on tb_danh_muc.id_danh_muc=tb_san.id_danh_muc WHERE 1";

    if ($tukhoa != "") {
        $sql .= " AND tb_san.ten_san LIKE '%$tukhoa%'";
    }

    if ($id_danh_muc > 0) {
        $sql .= " AND tb_san.id_danh_muc = '$id_danh_muc'";
    }

     $sql .= " ORDER BY id_san DESC";

    $listsan = pdo_query($sql);
    return $listsan;
}
function insert_dat_san($id_bien_the,$id_san){
    $sql = "INSERT INTO tb_dat_san(id_bien_the,id_san) VALUES ('$id_bien_the','$id_san')";
    pdo_execute($sql);
}
function insert_san($ten_bien_the,$ten_danh_muc,$ten_san,$img_san)
{

    $sql = "INSERT INTO tb_san(id_bien_the,id_danh_muc,ten_san,img_san) VALUES ('$ten_bien_the','$ten_danh_muc','$ten_san','$img_san')";
    pdo_execute($sql);
    $listdatsan = loadAllSAN();
    
    foreach ($listdatsan as $value) {
        # code...
        extract($value);
        insert_dat_san($ten_bien_the,$id_san);
        break;
        // echo "$id_san";
        // die();
    }
    // insert_dat_san($id_bien_the,$id_san);
    
}

function update_san($id_san,$ten_bien_the,$ten_danh_muc,$ten_san,$img_san){
    if($img_san!=""){
        $sql = "update tb_san set id_san='".$id_san."', id_bien_the='".$ten_bien_the."', id_danh_muc='".$ten_danh_muc."', ten_san='".$ten_san."', img_san='".$img_san."' where id_san=".$id_san;
    }
    else{
        $sql = "update tb_san set id_san='".$id_san."', id_bien_the='".$ten_bien_the."', id_danh_muc='".$ten_danh_muc."', ten_san='".$ten_san."' where id_san=".$id_san;
        
    }
    pdo_execute($sql);
    
}

function delete_dat_san($id_san){
    $sql = "DELETE FROM tb_dat_san WHERE id_san = '$id_san'";
    pdo_query($sql);
}
function delete_san($id_san)
{
    $sql = "DELETE FROM tb_san WHERE id_san = '$id_san'";
    pdo_query($sql);
    delete_dat_san($id_san);
}

function loadone_SAN_BT($id_san)
{
    $sql = "select * from tb_san join tb_bien_the on tb_bien_the.id_bien_the = tb_san.id_bien_the where id_san = '$id_san'";
    $chitietsan = pdo_query_one($sql);
    return $chitietsan;
}
function loadOne_SAN_CUNGLOAI($id_san, $id_danh_muc)
{
    $sql = "SELECT * FROM tb_san 
    join tb_danh_muc on tb_danh_muc.id_danh_muc = tb_san.id_danh_muc 
    join tb_bien_the on tb_bien_the.id_bien_the = tb_san.id_bien_the 
    WHERE tb_san.id_san <> '$id_san' AND tb_san.id_danh_muc = '$id_danh_muc' limit 2 "; // where khác <>
    $listsan_cungloai = pdo_query($sql);
    return $listsan_cungloai;
}
function loadAll_sanClient($tukhoa = "")
{
    $sql = "SELECT * FROM tb_san join tb_bien_the on tb_bien_the.id_bien_the = tb_san.id_bien_the  WHERE 1";

    if ($tukhoa != "") {
        $sql .= " AND tb_san.ten_san LIKE '%$tukhoa'";
    }

    $sql .= " ORDER BY id_san ";

    $listsanClient = pdo_query($sql);
    return $listsanClient;
}
?>