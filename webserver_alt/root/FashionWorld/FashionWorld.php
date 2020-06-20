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

  <title>FashionWorld.com</title>

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
                <div class="container" id="t">

                <h1 class="h1-big">Fashion around the world</h1>
                <p class="lead">by Anna Hartl</p>

                <figure>
                	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 608" preserveAspectRatio="xMinYMin meet" >
                	<image width="1200" height="608" xlink:href="../Pictures/map.webp">
                	</image>
                    <circle id="india" onclick="indiaText()" cx="830" cy="300" r="20" fill="#202fb1" opacity="0.7"><title>India</title></circle>
                    <circle id="Kenya" onclick="kenyaText()" cx="680" cy="370" r="20" fill="#202fb1" opacity="0.7"><title>Kenya</title></circle>
                    <circle id="America" onclick="americaText()" cx="220" cy="250" r="30" fill="#202fb1" opacity="0.7"><title>North America</title></circle>
                    <circle id="Scotland" onclick="scotlandText()" cx="230" cy="250" r="30" fill="#202fb1" opacity="0.7"><title>Scotland</title></circle>
          			<circle id="Russia" onclick="rusiaText()" cx="880" cy="170" r="20" fill="#202fb1" opacity="0.7"><title>Rusia</title></circle>
          			<circle id="South America" onclick="southamericaText()" cx="370" cy="410" r="20" fill="#202fb1" opacity="0.7"><title>South America</title></circle>

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
    <script>
      function clear(){
        var element = document.getElementById("cont");
        element.parentNode.removeChild(element);

         var parent = document.getElementById("t");
         var content = document.createElement("div");
        content.setAttribute('id', "cont");

        var ruler = document.createElement("hr");
        var br = document.createElement("br");

        parent.appendChild(content);
        document.getElementById("cont").appendChild(ruler);
      }


      function indiaText() {
        clear();

          var head = document.createElement("h1");
          head.innerHTML = "India";
          document.getElementById("cont").appendChild(head);
          var img1 = document.createElement("img");
          img1.classList.add("world-img");
          img1.style.width = '100%';
          img1.src = "../Pictures/World/india.jpg";

          var img2 = document.createElement("img");
          img2.classList.add("world-img");
          img2.style.width = '45%';
          img2.src = "../Pictures/World/india2.jpg";

          var img3 = document.createElement("img");
          img3.classList.add("world-img");
          img3.style.width = '45%';
          img3.src = "../Pictures/World/india3.jpg";

          document.getElementById("cont").appendChild(head);
          document.getElementById("cont").appendChild(img1);
          document.getElementById("cont").appendChild(img2);
          document.getElementById("cont").appendChild(img3);

      }
      function kenyaText() {
        clear();
          var head = document.createElement("h1");
          head.innerHTML = "Kenya";
          var img1 = document.createElement("img");
          img1.classList.add("world-img");
          img1.style.width = '100%';
          img1.src = "../Pictures/World/kenya.jpg";

          var img2 = document.createElement("img");
          img2.classList.add("world-img");
          img2.style.width = '45%';
          img2.src = "../Pictures/World/kenya1.jpg";

          var img3 = document.createElement("img");
          img3.classList.add("world-img");
          img3.style.width = '45%';
          img3.src = "../Pictures/World/kenya2.jpg";

          document.getElementById("cont").appendChild(head);
          document.getElementById("cont").appendChild(img1);
          document.getElementById("cont").appendChild(img2);
          document.getElementById("cont").appendChild(img3);
      }

      function americaText() {
        clear();
          var head = document.createElement("h1");
          head.innerHTML = "North America";
          var img1 = document.createElement("img");
          img1.classList.add("world-img");
          img1.style.width = '100%';
          img1.src = "../Pictures/World/america.jpg";

          var img2 = document.createElement("img");
          img2.classList.add("world-img");
          img2.style.width = '45%';
          img2.src = "../Pictures/World/america1.jpg";

          var img3 = document.createElement("img");
          img3.classList.add("world-img");
          img3.style.width = '45%';
          img3.src = "../Pictures/World/america2.jpg";

          document.getElementById("cont").appendChild(head);
          document.getElementById("cont").appendChild(img1);
          document.getElementById("cont").appendChild(img2);
          document.getElementById("cont").appendChild(img3);
      }
      function scotlandText() {
          clear();
            var head = document.createElement("h1");
            head.innerHTML = "Scotland";
            var img1 = document.createElement("img");
            img1.classList.add("world-img");
            img1.style.width = '100%';
            img1.src = "../Pictures/World/scotland.jpg";

            var img2 = document.createElement("img");
            img2.classList.add("world-img");
            img2.style.width = '45%';
            img2.src = "../Pictures/World/scotland1.jpg";

            var img3 = document.createElement("img");
            img3.classList.add("world-img");
            img3.style.width = '45%';
            img3.src = "../Pictures/World/scotland2.jpg";

            document.getElementById("cont").appendChild(head);
            document.getElementById("cont").appendChild(img1);
            document.getElementById("cont").appendChild(img2);
            document.getElementById("cont").appendChild(img3);
        }
        function southamericaText() {
                  clear();
                  var head = document.createElement("h1");
                  head.innerHTML = "South America";
                  var img1 = document.createElement("img");
                  img1.classList.add("world-img");
                  img1.style.width = '100%';
                  img1.src = "../Pictures/World/southamerica.jpg";

                  var img2 = document.createElement("img");
                  img2.classList.add("world-img");
                  img2.style.width = '45%';
                  img2.src = "../Pictures/World/southamerica1.jpg";

                  var img3 = document.createElement("img");
                  img3.classList.add("world-img");
                  img3.style.width = '45%';
                  img3.src = "../Pictures/World/southamerica2.jpg";

                  document.getElementById("cont").appendChild(head);
                  document.getElementById("cont").appendChild(img1);
                  document.getElementById("cont").appendChild(img2);
                  document.getElementById("cont").appendChild(img3);
              }
    </script>
</body>

</html>
