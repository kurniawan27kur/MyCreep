<?php 
include("../config.php");

$sql = "DELETE FROM tb_product WHERE product_id ='" . $_GET["product_id"] . "'";
$query = mysqli_query($conn,$sql) or exit("Error query : <b>".$sql."</b>.");

if($query->connect_errno){
    echo "Koneksi database gagal karena".$query->connect_error;
    exit;
}else{
    session_start();
    $_SESSION['Flash_Data'] = '<div class="alert alert-success">Data Berhasil dihapus.</div>';
    header("Location: product.php");
}
?>