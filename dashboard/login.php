<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Login</title>
    <link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dist/css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

<section id="kontak" class="kontak text-center">
  <div class="container">
    <div class="row">
    </div>
    <div class="row justify-content-center text-start">
      <div class="col-md-6">
        
      <form action="" method="POST">
    <div class="logo text-center">
        <h1>MyCreep</h1>
    </div>
  <div class="mb-3">
    <label for="user" class="form-label">Username</label>
    <input type="text" class="form-control" name="user" id="user" aria-describedby="name">
  </div>

  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="pass" aria-describedby="password">
  </div>

<div class="submit text-center">
  <button type="submit" name="submit" class="btn">Submit</button>
  </div>
</form>
<?php
           if(isset($_POST['submit'])){
               include '../config.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
                if(mysqli_num_rows($cek) > 0 ){

                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['admin_global'] = $d;
                    $_SESSION['id'] = $d -> admin_id;

                    echo '<script>window.location="index.php"</script>';
                }else{
                    echo '<script>alert("Username atau Password Anda Salah!")</script>';
                }
            }
        ?>
      </div>
    </div>
  </div>
    </section>

    <div class="slider-background" id="sliders-background"></div>
    <script src="./dist/js/jquery.js"></script>
    <script src="./assets/app/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</body>

</html>