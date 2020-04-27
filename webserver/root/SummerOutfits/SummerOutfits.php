<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SummerOutfits</title>

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

                <h1 class="h1-big">Perfect Summer Outfits</h1>
                <p class="lead">by Tamara Melcher</p>
                <p>
                    If you have ever asked yourself, what you should wear in summer this is the perfect article for you.
                    This article is about what you can wear for school, work or during your free time.
                    <br />
                    <h3 class="h3-big">Summer outfits for work</h3>
                    At work you can’t just show up in hot pants or a mini dress.
                    So, we have to find a way to make you look good and serious.

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading0">
                                <h5 class="mb-0">
                                    <button class="btn btn-link Information" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                      Tipps
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion">
                                <div class="card-body">
                                  Do NOT show up in hot pants!<br />
                                      Make sure your dress or skirt is not too short!<br />
                                    Keep in mind, that your dress should not be too sexy!<br />
                                    Never wear a belly-free top!

                                </div>
                            </div>
                        </div>
                    </div>
                    <br />

                    <h4>Long Dress</h4>
                    Firstly, a long dress is always a good tip.
                    Just keep in mind, the points above.<br />
                    <img class="img-thumbnail" src="..\Pictures\maxiDress1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\maxiDress2.jpg">
                    <br />


                    <h4><br />Maxi Skirt</h4>
                    A maxi skirt and a simple t-shirt or shirt are still in trend and they also make you look serious.<br /><br />

                    <img class="img-thumbnail" src="..\Pictures\maxiSkirt1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\maxiSkirt2.jpg">


                    <h3 class="h3-big"><br />Summer outfits for school</h3>
                    In school you can almost wear anything you want to. It does not have to be very serious. So, this is way easier than a summer outfit for work


                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button class="btn btn-link Information" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                        Tipps
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                <div class="card-body">
                                Make sure your shorts, skirt or dress is not too short!<br />
                                    Keep in mind that you are still in a school so, do not show up too sexy!

                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <h4>Shorts</h4>
                    Shorts are easy, comfortable and they make you look cool.<br />
                    You can them combine with almost everything. It does not matter if you wear a pullover or a normal t-shirt with it.<br />
                    <img class="img-thumbnail" src="..\Pictures\hotpants1.jpg">
                    <img class="img-thumbnail" src="..\Pictures\hotpants2.jpg">

                    <br /><br />If you want to wear a dress or skirt make sure they are comfortable, because you have to wear them all the time and it might get really uncomfortable. <br />
                    A jeans skirt still looks way better than a normal one.

                    <h3 class="h3-big"><br />Summer outfits for your free time</h3>
                    In your free time you can wear whatever you want to. There are no rules or anything.
                    You can leave your creativity free. But if you have no ideas what to wear, we will present some.
                    You can wear whatever you want to. So do it.
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
