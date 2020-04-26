<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Fashion Website">
  <meta name="author" content="Anna Hartl & Tamara Melcher">

  <title>TestArticle.com</title>
</head>

<body>
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="css/specialAddings.css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!---->
	<?php
	include "db_connect.php";
  //include "redirect_form.php";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
<div class="container">
<section class="navbar-brand">Fashionistas</section>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Articles</a>
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

              <h1 class="h1-big">Second Hand Fashion</h1>
              <p class="lead">by Tamara Melcher</p>
              <p>
                  <h3 class="h3-big"><br />Why buy second-hand fashion?</h3>
                  That is a simple question.
                  First of all, second-hand fashion is cheaper than the fashion from the shop.
                  It is also more climate-friendly, because there must not be produced more if you buy something that already has been produced instead of buying everything right from the shop.
                  Just because you buy it second-hand does not mean that you cannot buy branded clothing.
                  There are also a few shops who offer that.<br /><br />
                  <img class="img-thumbnail" src="Pictures\arrow.png">
                  <img class="img-thumbnail" src="Pictures\nature.jpg"><br />


                  <h3 class="h3-big"><br />Where can you buy it?</h3>

                  You can buy second-hand almost everywhere.
                  If you like to buy your clothes in real stores, drive to the next city and ask where one is.
                  I am sure that a second-hand fashion shop is in nearly every city.
                  But if you are an online shopper, you just have to google “shop second-hand fashion” and you will get over thousand online shops where you can buy second-hand fashion.
                  Of course, driving in a shop is more climate friendly, but it does not matter at all, if you know what you want and buy it regional.
                  <br /><br />
                  <img class="img-thumbnail" src="Pictures\shopping2.jpg">
                  <img class="img-thumbnail" src="Pictures\shopping3.jpg"><br />


                  <h3 class="h3-big"><br />Last words</h3>
                  I want to finish thisarticle with a reference to our friends and colleges.
                  Sheila, Julia and Vivian made a website about our enviranmen and how we can be more eco-friendly.
                  Their website is called GoGreen.com you should definetely check them out.


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
                    ?>
                  </section>

              </p>
            </div>
            </div>
            </div>
            </div>
  </section>
<?php
//	include "search_keyword.php";
	$mysqli->close();

	?>

</body>

</html>
