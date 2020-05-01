<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Find Your Style</title>

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

                <h1 class="h1-big">How to find your style?</h1>
                <p class="lead">by Anna Hartl</p>
                <p>
                    On our website we talk a lot about fashion, in this article I want to explain how to find your style.
                    Knowing what looks good on you and in what clothes you feel empowered is so beneficial to your life and even if you already know your style maybe you can still learn something.
                    This article has a personal agenda, because I don’t have a style or at least I do not think I have one.
                    Let’s go together on this journey!

                    <h3 class="h3-big"><br />Inspiration</h3>
                    <img class="img-thumbnail" src="..\Pictures\FindYourStyle\pinterest.png"><br /><br />
                    First you should get a feeling of what you like. A good source for inspiration is Pinterest.
                    On our website we have a list of styles in an article also written by me.
                    Choose whatever style you like the best and I want to say you can mix styles how you desire. It is your life do what you want.<br />
                    <a class="reference-link" href="https://www.pinterest.at/melcher_tamara/">
                        Check out our Pinterest-page with inspiration!
                        </a>

                    <h3 class="h3-big"><br />Analyse your wardrobe</h3>
                    <img class="img-thumbnail" src="..\Pictures\FindYourStyle\closet1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\FindYourStyle\closet2.jpg"><br /><br />
                    Look at what you wear for 2 weeks and try to ask you why I wanted to wear that particular clothing today and how does it make me feel.
                    Go to your closet and analyse what you have in your wardrobe, do you have favourite clothes and what are they, do you notice anything similar between them.

                    <h3 class="h3-big"><br />Shopping</h3>
                    <img class="img-thumbnail" src="..\Pictures\FindYourStyle\shopping.jpg"><br /><br />
                    Now to the best part shopping! It is not our mission to built a new wardrobe with on visit to the mall so don’t buy everything you see, try to not lose focus helpful is to have a list of items you want to buy today it should not be more than 5 pieces. On our website we have an article about the essential clothing items to have in your wardrobe, you can start with that.
                    <br /><a class="reference-link" href="../WardrobeEssentials/WardrobeEssentials.php">
                        Click on the link to get there!
                        </a>
                    <h3 class="h3-big"><br />Declutter</h3>
                    <img class="img-thumbnail" src="..\Pictures\FindYourStyle\declutter1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\FindYourStyle\declutter2.jpg"><br /><br />
                    Take this opportunity to declutter, get rid of the things you don’t like to wear or if you can’t throw them away put them in a box and store them somewhere if you don’t miss the clothing in 6 months you have to donate them. It is also a symbolic act of getting rid of the things that are dragging you down.

                    <h3 class="h3-big"><br />Confidence</h3>
                    <img class="img-thumbnail" src="..\Pictures\FindYourStyle\confidence.jpg"><br /><br />
                    Fashion can work both ways it can give you confidence and you also have to have the courage and confidence to wear certain clothing. Working on your body image and how you see yourself is not only beneficial for your mental health but can give you the courage to wear what you like. A recent trend is to make a video of the parts of your body you dont like but film them in a beautiful way.

                    <h3 class="h3-big"><br />Last words</h3>
                    Try to keep in mind finding your style isn’t something you can achieve in one day. It takes time and effort, but this process can change your life. You will have fails and fashion disasters you can laugh about in 10 years, but you will learn from your mistakes.
                    <br /><br />I sincerely hope that you can find your own style with this guide and wish you fun along that journey.

                </p>
                <h3 class="h3-big"><br />Comments</h3>

                <form class="form-horizontal" action="add_comment.php">
                <fieldset>
                <legend>Add a comment</legend>

                <div class="form-group">
                  <div class="col">
                  <input id="new_name" name="new_name" type="text" placeholder="username" class="form-control input-md" required="">

                  </div>
                </div>

                <div class="form-group">
                  <div class="col">
                  <input id="new_comment" name="new_comment" type="text" placeholder="Comment" class="form-control input-md" required="">

                  </div>
                </div>

                <div class="form-group">
                  <div class="col">
                    <button id="submit" name="submit" class="btn btn-primary" style="padding-left: 12px;">Comment!</button>
                  </div>
                </div>

                </fieldset>
                </form>
                <section class="text-left">
                  <?php
                  Include "show_comments.php";
                  $mysqli->close();
                  ?>
                </section>
              </div>
              </div>
              </div>
              </div>
    </section>




    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4">

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <h5 class="blue-color-text">Contact</h5>
                    <h7>Anna Hartl</h7>
                    <a href="mailto:anna.sofie.hartl@gmail.com?subject=Feedback for our website"><br />anna.sofie.hartl@gmail.com</a>
                    <a href="https://www.instagram.com/hey._.anna/"><br />@hey._.anna</a>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">
                    <h7><br />Tamara Melcher</h7>
                    <a href="mailto:t.melcher.htlleonding@gmail.com?subject=Feedback for our website"><br />t.melcher.htlleonding@gmail.com</a>
                    <a href="https://www.instagram.com/tami.melcher/"><br />@tami.melcher</a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>

        <div class="py-3" id="bottomColor"></div>

    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>

</body>

</html>
