<?php 
include "../config.php";
$product_id = $_GET['product_id'];
$qry = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id='$product_id'");
$data = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_status = $_POST['product_status'];
    $network = $_POST['network'];
    $link_product = $_POST['link_product'];
    $currency = $_POST['currency'];

    $product_image = $_FILES['product_image']['name'];
    $tmp_name = $_FILES['product_image']['tmp_name'];

    $type1 = explode('.',$product_image);
    $type2 = $type1[1];

    $newname = 'NFT'.time().'.'.$type2;

    $ijin = array('jpg','jpeg','png','gif','mp4');

    if(!in_array($type2,$ijin)){
        echo '<script>alert("Format File Salah")</script>';
    }else{
        move_uploaded_file($tmp_name,'../img/'.$newname);
    }

    $edit = mysqli_query($conn, "UPDATE tb_product SET product_name='$product_name', product_price='$product_price',
    product_status='$product_status', network='$network', link_product='$link_product', currency='$currency' WHERE product_id='$product_id'");

    if ($edit) {
        mysqli_close($conn); // Close connection
        header("location:product.php"); // redirects to all records page
        exit;
    } else {
       
    }
}
?>