<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Update</title>
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
                    <p class="fw-bold mb-0 lh-1 text-white">Kurniawan Azziz</p>
                    <small class="text-white">Kurniawan@gmail.com</small>
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

        <?php 
        include "../config.php";
        $product_id = $_GET['product_id'];
        $qry = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id='$product_id'");
        $data = mysqli_fetch_array($qry); // fetch data
        ?>

        <form action="edit_controller.php" method="POST" enctype="multipart/form-data">
          <div class="container">
            <div class="box">
            <h3 class="bg-white rounded shadow p-3 mb-3">Edit Product</h3>
            <input type="text" value="<?= $product_id ?>" name="product_id" hidden>
            <div class="meng bg-white rounded shadow p-4">
            <div class="mb-3 col-12 bg-white rounded shadow p-2">
            <label for="product_name" class="form-label">Product Name</label>
            <input style="color: gray;" type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $data['product_name'];?>">
            </div>

            <div class="mb-3 col-12 bg-white rounded shadow p-2">
            <label for="product_price" class="form-label">Product Price</label>
            <input style="color: gray;" type="text" class="form-control" id="product_price" name="product_price" value="<?php echo $data['product_price'];?>">
            </div>

            <div class="mb-3 col-12 bg-white rounded shadow p-2">
            <label for="product_image" class="form-label">Product Image</label>
            <input style="color: gray;" type="file" class="form-control" id="product_image" name="product_image" value="<?php echo $data['product_image'];?>">
            </div>

            <div class="mb-3 col-12 bg-white rounded shadow p-2">
            <label for="product_status" class="form-label">Market</label>
            <input style="color: gray;" type="text" class="form-control" id="product_status" name="product_status" value="<?php echo $data['product_status'];?>">
            </div>

            <div class="mb-3 col-12 bg-white rounded shadow p-2">
            <label for="network" class="form-label">Network</label>
            <input style="color: gray;" type="text" class="form-control" id="network" name="network" value="<?php echo $data['network'];?>">
            </div>

            <div class="mb-3 col-12 bg-white rounded shadow p-2">
            <label for="link_product" class="form-label">Link Product</label>
            <input style="color: gray;" type="text" class="form-control" id="link_product" name="link_product" value="<?php echo $data['link_product'];?>">
            </div>

            <div class="mb-3 col-12 bg-white rounded shadow p-2">
            <label for="currency" class="form-label">Currency</label>
            <input style="color: gray;" type="text" class="form-control" id="currency" name="currency" value="<?php echo $data['currency'];?>">
            </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 col-2 rounded shadow p-2" name="update">Update</button>
          </div>
</form>

    <div class="slider-background" id="sliders-background"></div>
    <script src="./dist/js/jquery.js"></script>
    <script src="./assets/app/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script src="./dist/js/index.js"></script>

</body>

</html>