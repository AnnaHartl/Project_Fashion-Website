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

                <h1 class="h1-big">What style matches your personality?</h1>
                <p class="lead">by Anna Hartl</p>

                <form action="result.php">
                <img class="survey-img" src="../Pictures/Survey/style/beach1.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/beach2.jpg"><br>
                <input class="radio-btn-survey" type="radio" id="beach1" name="beach" value="1" checked="checked">
                <input class="radio-btn-survey" type="radio" id="beach1" name="beach" value="2"><br>
                <img class="survey-img" src="../Pictures/Survey/style/beach3.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/beach4.jpg">
                <input class="radio-btn-survey" type="radio" id="beach1" name="beach" value="3">
                <input class="radio-btn-survey" type="radio" id="beach1" name="beach" value="4">
                <br>
                <img src="../Pictures/Survey/style/clubbing1.jpg" width="200" height="auto">
                <input type="radio" id="clubbing" name="clubbing" value="1">
                <img src="../Pictures/Survey/style/clubbing2.jpg" width="200" height="auto">
                <input type="radio" id="clubbing" name="clubbing" value="2">
                <img src="../Pictures/Survey/style/clubbing3.jpg" width="200" height="auto">
                <input type="radio" id="clubbing" name="clubbing" value="3">
                <img src="../Pictures/Survey/style/clubbing4.jpg" width="200" height="auto">
                <input type="radio" id="clubbing" name="clubbing" value="4">

                <button id="submit" name="submit" class="btn btn-primary" style="padding-left: 12px;">Result</button>
                </form>

              </div>
              </div>
              </div>
              </div>
    </section>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
