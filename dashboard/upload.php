<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dist/css/index.css">
    <link rel="stylesheet" href="./dist/css/upload.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3 text-center">
                    <img src="./images/user/user.png" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white">YourName</p>
                    <small class="text-white">YourAccount@gmail.com</small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="index.php">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="product.php">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Product
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="notif.php">
                        <i class="fa fa-bell fa-lg box-icon" aria-hidden="true"></i>Notifikasi
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="login.php">
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <form action="" method="POST">
          <div class="container">
            <div class="box">
            <h3>Add Product</h3>

            <div class="mb-3 col-6">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name">
            </div>

            <div class="mb-3 col-6">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="product_price" name="product_price">
            </div>

            <div class="mb-3 col-6">
            <label for="product_status" class="form-label">Product Status</label>
            <input type="text" class="form-control" id="product_status" name="product_status">
            </div>

            <div class="mb-3 col-6">
            <label for="network" class="form-label">Network</label>
            <input type="text" class="form-control" id="network" name="network">
            </div>

            <div class="mb-3 col-6">
            <label for="link_product" class="form-label">Link Product</label>
            <input type="text" class="form-control" id="link_product" name="link_product">
            </div>

            <div class="mb-3 col-6">
            <label for="currency" class="form-label">Currency</label>
            <input type="text" class="form-control" id="currency" name="currency">
            </div>

            <button type="submit" class="btn btn-primary" name="proses">Submit</button>
            </div>
          </div>
</form>

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

             $sql = "INSERT INTO tb_product (product_name,product_price,product_status,network,link_product,currency)
             VALUES ('$product_name','$product_price','$product_status','$network','$link_product','$currency')";

             if (mysqli_query($conn, $sql)) {
              echo "New record created successfully !";
             } else {
              echo "Error: " . $sql . "
          " . mysqli_error($conn);
             }
             mysqli_close($conn);
          }
          ?>



    <div class="slider-background" id="sliders-background"></div>
    <script src="./dist/js/jquery.js"></script>
    <script src="./assets/app/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script src="./dist/js/index.js"></script>

</body>

</html>