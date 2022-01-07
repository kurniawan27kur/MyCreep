<?php
    include "../config.php";

    if(isset($_POST['proses']))
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

       $sql = mysqli_query($conn,"INSERT INTO tb_product (product_name,product_price,product_image,product_status,network,link_product,currency)
       VALUES ('$product_name','$product_price','$newname','$product_status','$network','$link_product','$currency')");

      if ($sql) {
      header("location: product.php"); // redirects to all records page
      mysqli_close($conn); // Close connection
      exit;
      } else {

      }
    }

?>