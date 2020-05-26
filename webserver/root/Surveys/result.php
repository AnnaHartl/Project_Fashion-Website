<?php
//$beach = $_GET["beach"];
//echo $beach;
$p1 = 0;
$p2 = 0;
$p3 = 0;
$p4 = 0;

$arr = array(
  0 => $_GET["beach"],
  1 => $_GET["personality"],
  2 => $_GET["gift"],
  3 => $_GET["shoes"],
  4 => $_GET["wedding"],
  5 => $_GET["club"],
);

for($i = 0; $i < 6;$i++){
  if($arr[$i] == 1){
    $p1 += 10;
  }
  else if($arr[$i] == 2){
    $p2 += 10;
  }
  else if($arr[$i] == 3){
    $p3 += 10;
  }
  else if($arr[$i] == 4){
    $p4 += 10;
  }
}

//echo "1: ".$p1." 2: ".$p2. " 3: ".$p3."  4: ".$p4;

 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>YourResult.com</title>

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
       <li class="nav-item ">
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

                 <h1 class="h1-big">Your Result</h1>
                 <p class="lead">by Anna Hartl</p>

                 <?php
                    echo "";
                  ?>

                 <figure>
                 	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1250 800" preserveAspectRatio="xMinYMin meet" >
                 	<image width="1250" height="800" xlink:href="../Pictures/Survey/grid2.jpg">
                 	</image>
                  <?php
                  $xpos = ($p1-$p3)*6 +625;
                  $ypos = ($p4 -$p2)*5.5 +400;
                      echo "<circle id=\"india\"  cx=\"".$xpos."\" cy=\"".$ypos."\" r=\"20\" fill=\"#202fb1\" opacity=\"0.7\"></circle>";
                   ?>
                   </svg>
                 </figure>

                 <div id="cont">
                   <hr>
                 </div>

               </div>
               </div>
               </div>
               </div>
     </section>
     <script src="../vendor/jquery/jquery.min.js"></script>
     <script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
 </body>

 </html>
