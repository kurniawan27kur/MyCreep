<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Product</title>
    <link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dist/css/index.css">
    <link rel="stylesheet" href="./dist/css/product.css">
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

        <div class="section">
            <div class="container">
            <div class="d-flex justify-content-between mb-2 mt-4 d-block bg-white rounded shadow p-3">
            <h3>Data Product</h3>
            <h4 type="submit"> <a class="d-inline p-2 bg-primary text-white btn"  href="upload.php">Upload</a></h4>
            </div>
                <div class="box d-block bg-white rounded shadow p-3">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <td >ID</td>
                            <td>Product Name</td>
                            <td>Product Price</td>
                            <td>Product Image</td>
                            <td>Product Status</td>
                            <td>Network</td>
                            <td>Link Product</td>
                            <td>Currency</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                        <?php
                             include("../config.php");
                                $sql = "SELECT * FROM tb_product ORDER BY product_id ASC";
                                $hasil = mysqli_query($conn, $sql);
                                while ($data = mysqli_fetch_array($hasil)) {
                                ?>
                            <tr>
                                <td class="text-center" name="product_id"> <?php echo $data['product_id'] ?></td>
                                <td> <?php echo $data['product_name'] ?></td>
                                <td> <?php echo $data['product_price'] ?></td>
                                <td> <?php echo $data['product_image'] ?></td>
                                <td> <?php echo $data['product_status'] ?></td>
                                <td> <?php echo $data['network'] ?></td>
                                <td class="link col-12 text-center" type="submit"> <a href="<?php echo $data['link_product']?>" class="text-decoration-none" target='_blank'>Klik Disini</a></td>
                                <td> <?php echo $data['currency'] ?></td>
                                <td class="edit col-12 text-center text-decoration-none" type="submit"> 
                                    <a class="text-decoration-none" style="color: green;" href="edit.php?product_id=<?php echo $data["product_id"];?>">Edit | </a>
                                    <a class="text-decoration-none" style="color: red;" href="delete.php?product_id=<?php echo $data["product_id"];?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="./dist/js/jquery.js"></script>
    <script src="./assets/app/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script src="./dist/js/index.js"></script>

</body>

</html>