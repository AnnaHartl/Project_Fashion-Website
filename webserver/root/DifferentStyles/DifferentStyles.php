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

  <title>Different Styles</title>

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
        <a class="nav-link" href="../Surveys/style.php">Surveys</a>
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

                <h1 class="h1-big">Different Styles</h1>
                <p class="lead">by Anna Hartl</p>
                <p>
                    In this article I want to show you a variation of styles, it is a fashion lexicon for styles like the fashion bible.
                    It is not possible to cover all the existing fashion styles in this article, because everyday new styles are invented.
                    I will cover 10 of the most popular styles, you are free to research further.

                    <h3 class="h3-big"><br />Decade Styles</h3>

                    <img class="img-thumbnail" src="..\Pictures\DifferentStyles\decade1.png">
                    <img class="img-thumbnail" src="..\Pictures\DifferentStyles\decade2.jpg">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                                <div class="card-body">
                                  This category is special, because it depends on time other styles pop up here and there over time, but Decade Styles is the fashion that is typically for that decade.
                                  It is interesting to watch those styles gain suddenly popularity in more modern ages.
                                  It appears every 30 years these styles are coming back. For example, in the 2010s it was the 80s.  </div>
                            </div>
                        </div>
                    </div><br />
                    <h3 class="h3-big">Sporty</h3>
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\sporty1.jpg">
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\sporty2.jpg">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                      Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                <div class="card-body">
                                    The iconic part of this style are the trainers they can be white, black or any color you desire.
                                    Trainers make the look immediately sportier.
                                    This style is casual and effortless it is the embodiment of the cool girl.
                                    Cool girl, that implies it is a popular style among the youth worn mostly by girls in their 20’s.
                                    It is similar to street fashion.<br /><br />

                                    The makeup is light with natural colors, not to much.  </div>
                            </div>
                        </div>
                    </div><br />

                    <h3 class="h3-big">Boho</h3>
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\boho1.jpg">
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\boho2.jpg">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                <div class="card-body">
                                  The characteristics of  Boho or Bohemian Fashion style are loose, flowing clothes.
                                  This fashion style exits since 200 years and is a colorful mix of natural garments.
                                  A place where Boho fashion is very popular are at festivals, it is colorful rebellion against the formal clothing.
                                  The hippie culture in the 1960s made it a part of their identity.<br /><br />

                                  Open wavy hair and little to no makeup is associated with boho.  </div>
                            </div>
                        </div>
                    </div><br />
                    <h3 class="h3-big">Classic feminine</h3>
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\classicfem1.jpg">
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\classicfem2.jpg">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">
                                  When I think of a feminine way of dressing i’m not thinking of pink and girly I’m thinking of a modern chic way to express my feminine parts.
                                  A fashion rule of this style is focus on one part, if you wear a short skirt combine it with a t-shirt but you are not allowed to wear a deep neckline. Primary colors are nude, pastel and grey.
                                  Handbags and little accessories like a scrunchie or a necklace are essential for this style.<br /><br />

                                  Hair is done or at least curled makeup brown or a smokey eye it is still wearable in the day but definitely more than the other styles.
                                    </div>
                            </div>
                        </div>
                    </div><br />

                    <h3 class="h3-big">Artsy</h3>
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\artsy1.jpg">
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\artsy2.jpg">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                <div class="card-body">
                                  This is an unconventional style with bright and bold colors.
                                  It requires confidence because wherever you go you will  attract the looks of the masses.
                                  This style is cool, young and ebodys a fun playful soul.
                                  The clothes have unusual silhouettes and strange shapes.<br /><br />

                                  For hair and makeup it can be a little extra and colorful, so that your face does not vanish in the clothes.    </div>
                            </div>
                        </div>
                    </div><br />

                    <h3 class="h3-big">Sophisticated</h3>
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\sophisticated1.jpg">
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\sophisticated2.jpg">

                      <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading6">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                <div class="card-body">
                                  Most of styles til now are more for the younger generation, but I want to show you a style that can be worn by woman of the age 30+.
                                  The best example of this fashion style are probably the royals especially Kate and Magan.
                                  Best described is this style as mature, more fashionable business look and simple.
                                  The color pallet is similar to the feminine fashion but with even less variety of colors and more earth tones.<br /><br />

                                  Makeup and hair is the same as feminine fashion.
                                  </div>
                            </div>
                        </div>
                    </div><br />

                    <h3 class="h3-big">Sexy</h3>
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\sexy1.jpg">
                    <img class="img-thumbnail" src="../Pictures\DifferentStyles\sexy2.jpg">

                  <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading7">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                                <div class="card-body">
                                  What if you want to go out with your friends?
                                  You will mostly show for partying more skin than you would to business meeting.
                                  Perfect opportunity for sexy fashion. But please keep in mind dressing sexy is NOT dressing slutty.<br /><br />

                                  As for hair and makeup you can definitely put more effort in it, smokey eyes and waves are a popular option.
                                  </div>
                            </div>
                        </div>
                    </div><br />

                    <h3 class="h3-big">Girly</h3>
                        <img class="img-thumbnail" src="../Pictures\DifferentStyles\girly1.jpg">
                        <img class="img-thumbnail" src="../Pictures\DifferentStyles\girly2.jpg">
              			<div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading8">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                                <div class="card-body">
                                  Girly fashion is the younger, immature version of feminine fashion.
                                  Do not confuse this style with barbie and just hot pink. The color palette is more pastell with grey.
                                  Flower pattern or tulle are iconic for that style.<br /><br />

                                  The makeup is light nothing  exaggerated, hair is open or lose tied together.
                                      </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="h3-big"><br />Summer/Vacation</h3>
                    <img class="img-thumbnail" src="../Pictures/DifferentStyles/summer.jpg"><br />
                    The last style is Summer and Vacation.
                    On this note i want you to look at the article my beloved colleague wrote.
                    She explains this style in depth and better than i ever could in a few sentences.<br />
                    <a  class="reference-link" href="../SummerOutfits/SummerOutfits.php">Click here for the article!</a>

                    <h3 class="h3-big"><br />Last words</h3>
                    I wanted to make this article because I needed inspiration for my own style to discover new and different styles.
                    I think I incorporate some ideas in my wardrobe and I hope you can too.
                    If you have question or any suggestion my friend and I are always open for ideas. You can dm us on our instagram.
                    The contact you can find of the bottom of our page.

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
        url: 'DifferentStyles.php',
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
