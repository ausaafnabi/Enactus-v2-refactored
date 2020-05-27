<?php
	$page = "";
	if(isset($_GET["page"]) && $_GET["page"] != "") {
		$page = $_GET["page"];
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Enactus Aryabhatta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="icon" href="images/0.png" type="image/icon type">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,500|Dosis:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img style="height: 100px;" src="images/white-trans.png" alt="Image placeholder"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> 
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li <?php if (stripos($_SERVER['REQUEST_URI'],'index.php') !== false){ echo "class='nav-item active'";} else { echo "class='nav-item'";} ?>><a href="index.php" class="nav-link">Home</a></li>
          <li <?php if (stripos($_SERVER['REQUEST_URI'],'About') !== false) { echo "class='nav-item active'";} else { echo "class='nav-item'";} ?>><a href=".?action=About" class="nav-link">About Us</a></li>
          <li <?php if (stripos($_SERVER['REQUEST_URI'],'Team') !== false) { echo "class='nav-item active'";} else { echo "class='nav-item'";} ?>><a href=".?action=Team" class="nav-link">Team</a></li>
          <li <?php if (stripos($_SERVER['REQUEST_URI'],'Projects') !== false) { echo "class='nav-item active'";} else { echo "class='nav-item'";} ?>><a href=".?action=Projects" class="nav-link">Projects</a></li>
          <li <?php if (stripos($_SERVER['REQUEST_URI'],'SuccessStories') !== false) { echo "class='nav-item active'";} else { echo "class='nav-item'";} ?>><a href=".?action=SuccessStories" class="nav-link">Success Stories</a></li>
          <li <?php if (stripos($_SERVER['REQUEST_URI'],'Contact') !== false) { echo "class='nav-item active'";} else { echo "class='nav-item'";} ?>><a href=".?action=Contact" class="nav-link">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

