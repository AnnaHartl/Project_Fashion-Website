<?php
include "../db_connect.php";
$id_article = 3;
include "../likes.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Socilogy</title>

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

                <h1 class="h1-big">Socilogy</h1>
                <p class="lead">by Tamara Melcher</p>
                <p>
                    <h3 class="h3-big"><br />What does that mean?</h3>
                    <img class="img-thumbnail" src="..\Pictures\Socilogy\teenagers.jpg"><br />

                    The possibility to wear what we want is for the most a kind of freedom, but that way you automatically get associated to group.
                    There so many groups all around the world. Too much to count all of them right here.
                    By these associations are most the women more affected than men.<br />
                    Because if a woman wears short skirt, everybody says she is cheap and a slut.
                    But who cares if a man wears a very short trouser?<br />
                    Sometimes we also want adapt ourselves to our generation and the style of it, to delimit us from the older ones.
                    I also have to say that most of these associations happen by teenagers.
                    But as always money takes a very important part in this associations.
                    Because the ones who have more money than others will delimit themselves, because they think they are better because they have more branded clothes than others.
                    Even when it is not true.



                    <h3 class="h3-big"><br />Influence</h3>
                    <img class="img-thumbnail" src="..\Pictures\Socilogy\influence.jpg"><br />

                    Most people buy something they see, which most of the people around them wear. They let themselves get influenced by others even if they do not really think that that looks good they just want to belong to other people.
                    Of course, social media and ad have an important role. Because if Kylie Jenner says that maxi skirts look stupid most of the would not even think about it to buy one ever again.

                    <h3 class="h3-big"><br />Groups</h3>
                    There are two main groups: <br />
                    the conservatively shaped group and
                    the experiment-friendly, rebellious and individualistic group <br /><br />
                    <img class="img-thumbnail" src="..\Pictures\Socilogy\modest.jpg">
                    <img class="img-thumbnail" src="..\Pictures\Socilogy\modern.jpg"><br />


                    The individualistic group apply new fashion faster than the other group, because they want to stand out from the mass.
                    This group wants to represent their personality by their clothes. they want to delimit themselves from others.
                    Mostly these people are teenagers who want to find out their own style without the influence from their parents.
                    We also want to delimit us from the older ones, to delimit us externally. To show different generation, different style. <br /><br />

                    But also, the conservatively shaped group applies with the time the new style, but not because they really want a new style it is because they want to “compete”.
                    But as soon as this happens these fashions are not very interesting, anymore, for the individualistic group.
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
        url: 'FashionSocilogy.php',
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
