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

  <title>StyleTest.com</title>

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
      <li class="nav-item">
        <a class="nav-link" href="../articles.php">Articles
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Surveys</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../outfits/main.php">Outfits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contact.php">Contact</a>
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

                <form action="result.php" class="horizontalLine">
                <br> <hr>
                <h3>It's summer time! <br>What swimwear would you wear so the beach?<br><br></h3>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/beach1.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/beach2.jpg"><br>
                <input class="radio-btn-survey" type="radio" id="beach" name="beach" value="1" checked="checked">
                <input class="radio-btn-survey" type="radio" id="beach" name="beach" value="2"><br>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/beach3.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/beach4.jpg">
                <input class="radio-btn-survey" type="radio" id="beach" name="beach" value="3">
                <input class="radio-btn-survey" type="radio" id="beach" name="beach" value="4">
                <br> <br> <hr> <br>
                <h3>How would your friend describe you?<br><br></h3>
                <input type="radio" id="personality" name="personality" value="1" checked="checked">
                <label for="1">Cool, laidback, having an attitude</label><br>
                <input type="radio" id="personality" name="personality" value="2">
                <label for="2">Girly, playful, happy, likes attention</label><br>
                <input type="radio" id="personality" name="personality" value="3">
                <label for="3">Mature, thinks about her actions, confident</label><br>
                <input type="radio" id="personality" name="personality" value="4">
                <label for="4">Fun, energetic, extroverted</label><br>
                <br> <br> <hr> <br>
                <h3>Your bestfriend gets you a necklace for your birthday <br>How would it look? <br><br></h3>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/gift1.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/gift2.jpg"><br>
                <input class="radio-btn-survey" type="radio" id="gift" name="gift" value="1" checked="checked">
                <input class="radio-btn-survey" type="radio" id="gift" name="gift" value="2"><br>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/gift3.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/gift4.jpg">
                <input class="radio-btn-survey" type="radio" id="gift" name="gift" value="3">
                <input class="radio-btn-survey" type="radio" id="gift" name="gift" value="4">
                <br> <br> <hr> <br>
                <h3>Your favourite shoes?<br><br></h3>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/shoes1.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/shoes2.jpg"><br>
                <input class="radio-btn-survey" type="radio" id="shoes" name="shoes" value="1" checked="checked">
                <input class="radio-btn-survey" type="radio" id="shoes" name="shoes" value="2"><br>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/shoes3.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/shoes4.jpg">
                <input class="radio-btn-survey" type="radio" id="shoes" name="shoes" value="3">
                <input class="radio-btn-survey" type="radio" id="shoes" name="shoes" value="4">
                <br> <br> <hr> <br>
                <h3>You found your perfect match <br>What is your dream weddingdress?<br><br></h3>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/wedding1.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/wedding2.jpg"><br>
                <input class="radio-btn-survey" type="radio" id="wedding" name="wedding" value="1" checked="checked">
                <input class="radio-btn-survey" type="radio" id="wedding" name="wedding" value="2"><br>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/wedding3.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/wedding4.jpg">
                <input class="radio-btn-survey" type="radio" id="wedding" name="wedding" value="3">
                <input class="radio-btn-survey" type="radio" id="wedding" name="wedding" value="4">
                <br> <br> <hr> <br>
                <h3>Party time! <br> What should you wear?<br><br></h3>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/clubbing1.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/clubbing2.jpg"><br>
                <input class="radio-btn-survey" type="radio" id="club" name="club" value="1" checked="checked">
                <input class="radio-btn-survey" type="radio" id="club" name="club" value="2"><br>
                <img class="survey-img survey-img-left" src="../Pictures/Survey/style/clubbing3.jpg">
                <img class="survey-img" src="../Pictures/Survey/style/clubbing4.jpg">
                <input class="radio-btn-survey" type="radio" id="club" name="club" value="3">
                <input class="radio-btn-survey" type="radio" id="club" name="club" value="4">
                <br> <br> <hr> <br>

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
