<?php
include "../db_connect.php";
$id_article = 5;
include "../likes.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hairstyles</title>

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
        <a class="nav-link" href="../articles.php">Articles
</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Surveys</a>
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

                <h1 class="h1-big">Hairstyles</h1>
                <p class="lead">by Tamara Melcher</p>
                <p>
                  <img class="img-thumbnail" src="..\Pictures\Hairstyles\hairstyle1.jpg">
                  <img class="img-thumbnail" src="..\Pictures\Hairstyles\hairstyle2.jpg">
                      <br />
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link Information" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Ancient Hairstyles
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                                <div class="card-body">
                                  The fashion of hairstyle has been existing for over 5169 years now.
                                  The youngest culture to be known to do their hair was the ancient Egypt.
                                  They did their hair with knifes, hairpins and combs.
                                  But it was not only the ancient Egypt who did their hair pretty early, also the ancient Greece loved to do their hair.
                                  The ones who did not do their hair well had to pay fines. The complicate hairstyles were often made with wigs.
                                  In contrast to ancient Greece, the ancient Rome liked to wear easy hairstyles. It was also a tradition to do

                                </div>
                            </div>
                        </div>
                    </div>

                    <img class="img-thumbnail" src="..\Pictures\Hairstyles\hairstyle3.jpg">
                    <img class="img-thumbnail" src="..\Pictures\Hairstyles\hairstyle4.jpg">


                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading0">
                                <h5 class="mb-0">
                                    <button class="btn btn-link Information" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                        Renaissance
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion">
                                <div class="card-body">
                                  In the renaissance the women started to like to wear open hair again.
                                  The hairstyles also got more imaginative. The colors gold and blonde.
                                  Most of the time they made a node on the head and decorated it with pearls, chains and precious stones.<br /><br />

                                </div>
                            </div>
                        </div>
                    </div>




                    <br />
                    <img class="img-thumbnail" src="..\Pictures\Hairstyles\hairstyle5.jpg">
                    <img class="img-thumbnail" src="..\Pictures\Hairstyles\hairstyle6.jpg">

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link Information" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                        20th Century
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                <div class="card-body">
                                  In the beginning of 20. century the short hair came back. The old Egyptian hairstyle named Pageboy was the most famous one.
                                  With the time the women started to wear headscarves.<br />

                                  In the whole 20. century the women liked to have curly hair.<br /><br />
                                </div>
                            </div>
                        </div>
                    </div>


                    All in all humanity nearly always loved to do their hair in thousands different ways and in thousands of  years always different.

                    <h3 class="h3-big"><br />Hairstyles of all around the world</h3>
                    In our world there are so many different cultures with different styles, so it is nearly impossible which one of them is the most popular style.
                    Most of the people only focus on the clothes someone wears, so they forget that it is not only the clothes that differ our different cultures.
                    It is also the way how each culture styles their hair.<br /><br />
                    For example, the traditional Japanese hairstyle: <br />
                    <img class="img-thumbnail" src="..\Pictures\Hairstyles\japanese1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\Hairstyles\japanese2.webp">

                    <br />
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
                  Include "../show_comments.php";
                  ?>
                </section>
              </div>
              </div>
              </div>
              </div>
    </section>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script>
    $(document).ready(function(){
    // when the user clicks on like
    $('.like').on('click', function(){
      var postid = $(this).data('id');
          $post = $(this);

      $.ajax({
        url: 'Hairstyles.php',
        type: 'post',
        data: {
          'liked': 1,
          'postid': postid
        },
        success: function(response){
          $post.parent().find('span.likes_count').text(response + " likes");
        }
      });
    });
    });
    </script>
</body>

</html>
