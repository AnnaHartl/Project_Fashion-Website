<?php
include "../db_connect.php";
$id_article = 2;
include "../likes.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fashion Psychology</title>

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

                <h1 class="h1-big">Fashion Psychology</h1>
                <p class="lead">by Anna Hartl</p>
                <p>
                    First let’s start with the definition: <br />
                    Psychology of fashion is the study of the impact of clothing in which way we perceive and judge others.
                    But it is much more than that, it looks well beyond cloth at how it affect us and the perspective of our self.

                    <h3 class="h3-big">Color</h3>
                    One of the first things we notice about someone are the colors of the clothing, it is a difference between wearing a bright color such as light green or hot pink or wearing a neutral color.
                    It affect the way others see you and how YOU behave.

                    <h3 class="h3-big" style="color: #e60808;"><br />Red</h3>
                    <img class="img-thumbnail" src="..\Pictures\Psychology\red1.jpg" alt="Red outfit">
                    <img class="img-thumbnail" src="..\Pictures\Psychology\red2.jpg" alt="Red outfit">
                    <!-- Bild -->
                    <br />

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOneRed">
                                <h5 class="mb-0">
                                    <button class="btn btn-link Information" data-toggle="collapse" data-target="#collapseOneRed" aria-expanded="true" aria-controls="collapseOneRed">
                                        Information
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOneRed" class="collapse" aria-labelledby="headingOneRed" data-parent="#accordion">
                                <div class="card-body">
                                  The color captures attention, it is associated with excitement, passion, danger, energy and action.
                                  It is the most intense color it triggers our fight or flight response. When you wear red you will stand out.
                                  Choose this color wisely for some pieces in your wardrobe, wearing too much red will make you looking like a firefighter (we certainly don’t want that).
                                  The color is often paired with white or black.<br /> With red less is more.
                                </div>
                            </div>
                        </div>
                    </div>




                    <h3 class="h3-big" style="color: #f77404;"><br />Orange</h3>
                    <img class="img-thumbnail" src="..\Pictures\Psychology\orange1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\Psychology\orange2.jpg">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="Orange">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                  In color psychology orange represents creativity, adventure, enthusiasm, success and balance.<br />
                                  It attracts attention but not as forceful as red does.<br />
                                  In my opinion orange is underrated you hardly see orange in outfits maybe because it can be hard to find the right colors that match.
                                <br />  White is the nearly the only color that matches.

                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="h3-big" style="color:#ffdb6e;"><br />Yellow</h3>
                    <img class="img-thumbnail" src="..\Pictures\Psychology\yellow1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\Psychology\yellow2.jpg">

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" id="Yellow">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                <div class="card-body">
                                  The first thing that comes to my mind when I see yellow is sunshine, sunflowers and summer.
                                  It represents happiness and positivity. Adding a piece of yellow in your wardrobe can make a dramatic change.
                                  <br />Like orange yellow is in my opinion underrated.
                                  <br />It goes well with white blue and black.
                                  </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="h3-big" style="color: #28a745;"><br />Green</h3>
                    <img class="img-thumbnail" src="..\Pictures\Psychology\green1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\Psychology\green2.jpg">

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" id="Green">
                                        Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">
                                  Green is highly connected to nature and money, it means groth, fertility, health and generosity.
                                  Green is calm and doesn’t attracts much attention that's why soldiers wear it.
                                  When you go for a more down to earth look. It is a strong colors and goes well with blue and white.
                                        </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="h3-big" style="color: #026bcc;"><br />Blue</h3>
                    <img class="img-thumbnail" src="..\Pictures\Psychology\blue1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\Psychology\blue2.jpg">

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed Information" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" id="Blue">
                                      Information
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                <div class="card-body">
                                  When you ask me what the most popular color in fashion is then I would say blue.
                                  The favourite clothing piece of the western culture is the jeans and it is light blue.
                                  Blue represents stability, harmony, peace and calmness.
                                      </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="h3-big"><br />Last Words</h3>
                    People do not care what they wear but I want to educate you that it does matter what you wear more important what colors you wear.
                    This article is all about what colors represent what feeling but fashion psychology is much more when you are interested in that topic I will leave a few links below.
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
				url: 'FashionPsychology.php',
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
