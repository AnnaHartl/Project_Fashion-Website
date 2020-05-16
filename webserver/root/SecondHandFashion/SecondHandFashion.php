<?php
include "../db_connect.php";
$id_article = 6;
include "../likes.php";
include "vote.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Fashion Website">
  <meta name="author" content="Anna Hartl & Tamara Melcher">

  <title>SecondHandFashion</title>
</head>

<body>
  <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="../css/specialAddings.css" rel="stylesheet">
  <link href="../css/Chart.css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

              <h1 class="h1-big">Second Hand Fashion</h1>
              <p class="lead">by Tamara Melcher</p>
              <p>
                  <h3 class="h3-big"><br />Why buy second-hand fashion?</h3>
                  That is a simple question.
                  First of all, second-hand fashion is cheaper than the fashion from the shop.
                  It is also more climate-friendly, because there must not be produced more if you buy something that already has been produced instead of buying everything right from the shop.
                  Just because you buy it second-hand does not mean that you cannot buy branded clothing.
                  There are also a few shops who offer that.<br /><br />
                  <img class="img-thumbnail" src="..\Pictures\SecondHandFashion\nature.jpg"><br /><br />

                  <h3 class="h3-big"><br />Survey</h3>
                  <h4><br />Have you ever bought second hand fashion?<br /></h4>
                  <img class="vote1" style="width:300px;height:40px;" src="..\Pictures\SecondHandFashion\blue.png">
                  <img class="vote2" style="width:300px;height:40px;" src="..\Pictures\SecondHandFashion\lilac.png">
                  <img class="vote3" style="width:300px;height:40px;" src="..\Pictures\SecondHandFashion\turquoise.png"><br />
                  <div class="text-left">
                  <?php
                  $sql = mysqli_query($mysqli, "SELECT * FROM vote_table");
                  $row = $sql->fetch_assoc();

                  echo "<span style=\"margin-right:150px;margin-left:160px;\">No</span>
                  <span style=\"margin-right:100px;margin-left:80px;\"> Yes, once or twice</span>
                  <span style=\"margin-right:20px;margin-left:20px;\">Yes, I only buy second hand fashion<br /></span>
                  <span style=\"margin-right:150px;margin-left:140px;\">Votes: <b><span id=\"1\" class=\"vote11\">".$row["vote1"]."</span></b></span>
                  <span style=\"margin-right:140px;margin-left:100px;\">Votes: <b><span id=\"2\" class=\"vote22\">".$row["vote2"]."</span></b></span>
                  <span style=\"margin-right:150px;margin-left:110px;\">Votes: <b><span id=\"3\" class=\"vote33\">".$row["vote3"]."</span></b></span>";
                  ?>
                  </div>
                  <h4><br />Result Chart<br /></h4>
                  <span id="total"></span>
                  <canvas id="myChart" height="1" width="10"></canvas>
                  <span id="error_text"></span>
                  <h3 class="h3-big"><br />Where can you buy it?</h3>

                  You can buy second-hand almost everywhere.
                  If you like to buy your clothes in real stores, drive to the next city and ask where one is.
                  I am sure that a second-hand fashion shop is in nearly every city.
                  But if you are an online shopper, you just have to google “shop second-hand fashion” and you will get over thousand online shops where you can buy second-hand fashion.
                  Of course, driving in a shop is more climate friendly, but it does not matter at all, if you know what you want and buy it regional.
                  <br /><br />
                  <img class="img-thumbnail" src="..\Pictures\SecondHandFashion\shopping2.jpg"><br />


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
                    Include "../show_comments.php";
                    ?>
                  </section>

              </p>
            </div>
            </div>
            </div>
            </div>
  </section>
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script>
  $('.vote1').on('click', function(){
    //drawChart();
    $post = $(this);

    $.ajax({
      url: 'SecondHandFashion.php',
      type: 'post',
      data: {
        'voted1': 1,
      },
      success: function(response){
        $post.parent().find('span.vote11').text(response);
        drawChart();
        updateCount();
      }
    });
  });

  $('.vote2').on('click', function(){
        $post = $(this);

    $.ajax({
      url: 'SecondHandFashion.php',
      type: 'post',
      data: {
        'voted2': 1,
      },
      success: function(response){
          $post.parent().find('span.vote22').text(response);
          drawChart();
          updateCount();
      }
    });
  });
  $('.vote3').on('click', function(){
        $post = $(this);

    $.ajax({
      url: 'SecondHandFashion.php',
      type: 'post',
      data: {
        'voted3': 1,
      },
      success: function(response){
        $post.parent().find('span.vote33').text(response);
        drawChart();
        updateCount();
      }
    });
  });
  </script>
  <script>
  updateCount();
  function updateCount() {
    var vote1 = document.getElementById("1").innerHTML;
    var vote2 = document.getElementById("2").innerHTML;
    var vote3 = document.getElementById("3").innerHTML;
    var res = parseInt(vote1,10)+parseInt(vote2,10)+parseInt(vote3,10);
    document.getElementById("total").innerHTML= "<br />Total Votes: "+res;
  }
  </script>
  <script>
  drawChart();
  function drawChart() {

    var ctx = document.getElementById('myChart').getContext('2d');
    var vote1 = document.getElementById("1").innerHTML;
    var vote2 = document.getElementById("2").innerHTML;
    var vote3 = document.getElementById("3").innerHTML;

  if(vote1 === "0" && vote2 === "0" && vote3 === "0") {
    var vote3 = document.getElementById("error_text").innerHTML = "<br /><br />More people have to participate in this statistic<br />Please come back later";
  }else {
    var element = document.getElementById("myChart");
    element.width = "800";
    element.height = "500";
      var chart = new Chart(ctx, {
          // The type of chart we want to create
      type: 'pie',
      data: {
        //labels: ["No", "Once or twice", "Only"],
        datasets: [{
          label: "Survey_Chart",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
          data: [vote1,vote2,vote3]
        }]
      },
      options: {
        title: {
          display: false,
          text: 'Chart'
        },
        events: [],
        animation: false,
      }
      });
    }
}
  </script>
  <script>
  // when the user clicks on like
  $('.like').on('click', function(){
    var postid = $(this).data('id');
        $post = $(this);

    $.ajax({
      url: 'SecondHandFashion.php',
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
  </script>
</body>

</html>
