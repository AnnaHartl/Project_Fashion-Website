<?php
include "../db_connect.php";
$id_article = 1;
include "../likes.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FashionWorld.com</title>

  <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <link href="../css/specialAddings.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
<div class="container">
  <section class="navbar-brand">Fashionistas</section>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home
            </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Articles
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Surveys</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</div>
</nav>

    <!-- Article -->
    <section>
          <div class="container text-center">
            <div class="card border-0 shadow my-5">
              <div class="card-body p-5">
                <div class="container">

                <h1 class="h1-big">Fashion around the world</h1>
                <p class="lead">by Anna Hartl</p>


                <img src="https://cdn.pixabay.com/photo/2014/04/02/16/26/map-307294_960_720.png" class="map change" usemap="#worldmap">
                <map name="worldmap">
                <area onclick="myFunction()" href="#" shape="circle" coords="500,290,10" data-maphilight='{"stroke":false,"fillColor":"000000","fillOpacity":0.5,"alwaysOn":true}' title="Metadata'd up a bit">
                </map>

                <figure id=burj>
                	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 808" preserveAspectRatio="xMinYMin meet" >
                	<image width="1200" height="808" xlink:href="https://cdn.pixabay.com/photo/2014/04/02/16/26/map-307294_960_720.png">
                	</image>
                	<a xlink:href="//burjkhalifa.ae/en/">
                		<rect x="535" y="28" fill="#FF0000" opacity="0.5" width="150" height="750" />
                		</a>
                	</svg>
                </figure>

                <p id="test">Hello</p>
              </div>
              </div>
              </div>
              </div>
    </section>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../jquery.maphilight.js"></script>
    <script type="text/javascript">$(function() {
        $('.map').maphilight();
    });
    </script>

      <script>
      function myFunction() {
          document.getElementById("test").innerHTML = "clicked";
      }
    </script>
</body>

</html>
