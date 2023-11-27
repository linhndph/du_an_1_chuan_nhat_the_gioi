<?php
function loadall_hethong(){
    $sql="select * from tb_ql_hethong order by id";
    $dsht=pdo_query($sql);
    return $dsht;
}
function insert_hethong($ten_img, $img){
    $sql = "INSERT INTO `tb_ql_hethong`(`ten_img`, `img`) VALUES ('$ten_img', '$img');";
    pdo_execute($sql);
}
function delete_hethong($id){
    $sql="delete from tb_ql_hethong where id=".$id;
    pdo_execute($sql);
}
function update_hethong($id,$ten_img,$img){
    if ($img != "" ) {
      $sql = "UPDATE tb_ql_hethong SET id='$id',ten_img='$ten_img',img='$img' WHERE id = '$id'";
  } else {
      $sql = "UPDATE tb_ql_hethong SET id='$id',ten_img='$ten_img' WHERE id = '$id'";
  }
  

  pdo_execute($sql);
}
function loadone_hethong($id){
  $sql = "select * from tb_ql_hethong where id = '$id'";
  $ht = pdo_query_one($sql);
  return $ht;
}

?>