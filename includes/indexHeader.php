<?php 
   session_start();
   if (!isset($_SESSION['email'])) {
       $_SESSION['msg'] = "You must log in first";
       header('location: loginPage.php');
   }
   if (isset($_GET['logout'])) {
       session_destroy();
       unset($_SESSION['email']);
       header("location: loginPage.php");
       
   }
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Online Yemek Satış Sistemi</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
      <!-- Select2 CSS-->
      <link href="vendor/select2/css/select2.min.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light osahan-nav shadow-sm">
         <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img alt="Generic placeholder image" src="img/user/4.png" class="nav-osahan-pic rounded-pill"> My Account
                     </a>
                     <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                        <a class="dropdown-item" href="myorders.php"><i class="icofont-food-cart"></i> Orders</a>
                       
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
