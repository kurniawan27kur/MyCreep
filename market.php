<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link  rel="stylesheet" href="market.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,300&display=swap" rel="stylesheet">

    <title>Home - MyCreep</title>
  </head>
  <body id="home">
  <nav class="navbar navbar-expand-lg shadow-lg fixed-top"
    style="background-color: #32054E;">
  <div class="container">
    <a class="navbar-brand" href="#home">MyCreep </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="market.php">Market</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section id="listcard">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Market Place</h1>
        <h2>Start your own MyCreep collection</h2>
      </div>
    </div>

    <div class="input text-center">
        <input type="text" name="search" class="w100" placeholder="Search">
        <input type="hidden" name="page" value="2">
        <input type="hidden" name="loading" value="0">                    
      </div>

      <?php
          include("config.php");
          $sql = "SELECT product_name,product_price,network,product_status FROM tb_product";
          $hasil = mysqli_query($conn, $sql);
          while ($data = mysqli_fetch_array($hasil)) {
          ?>
          
        <div class="container navbar-collapse">
        <div class="row">
        <div class="col-3">
          <div class="card">
  <img src="img/team6.png" class="card-img-top" alt="card1">
  <div class="card-body">
    <h3 class="card-title"><?php echo '<font color="white">' . $data['product_name'] . '</font>'?></h3>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo '<font color="white">' . $data['product_price'] . '</font>'?></li>
    <li class="list-group-item"><?php echo '<font color="white">' . $data['network'] . '</font>'?></li>
    <li class="list-group-item"><?php echo '<font color="white">' . $data['product_status'] . '</font>'?></li>
  </ul>
    </div>
          </div>
          </div>
          </div>

    <?php 
     }
    ?>
    
</section>


<footer>
<section id="footer" class="footer text-center">
<div class="container">
  <div class="row align-items-start">
    <div class="col">
    <h6>Copyright &copy; 2021 - MyCreep</h6>
    </div>
  </div>
  </div>
</section>

</footer>


    <script src="assets/js/bootstrap.bundle.min.js"></script>

  </body>


</html>