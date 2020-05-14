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

                <figure>
                	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 608" preserveAspectRatio="xMinYMin meet" >
                	<image width="1200" height="608" xlink:href="../Pictures/map.webp">
                	</image>
                    <circle id="idea" onclick="indiaText()" cx="830" cy="300" r="15" fill="#202fb1" opacity="0.7"><title>India</title></circle>
                    <circle cx="680" cy="370" r="15" fill="#202fb1" opacity="0.7"><title>Kenia</title></circle>
                	</svg>
                </figure>

                <h1 id="text"></h1>
                <img id="pic" width="10" height="auto" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAA1BMVEX///+nxBvIAAAAR0lEQVR4nO3BAQEAAACCIP+vbkhAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAO8GxYgAAb0jQ/cAAAAASUVORK5CYII=">
                <p></p>
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
      function indiaText() {
          document.getElementById("text").innerHTML = "India";
          var x = document.getElementById("pic");
          x.src = "../Pictures/india.jpg";
          x.width = "1000";
      }
    </script>
</body>

</html>
