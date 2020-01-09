<?php

?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Shape</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type"text/css" href="shapeCSS.css">
  <meta name="theme-color" content="#fafafa">
</head>

<body>

<div class="bg-img">
  <div class="container">
    <div class="fixedWidth">
<header>
    <img class="logo" src="Images/pin.png" alt="logo" height=90px; width=90px/>

      <nav>
        <ul class="nav__links">

          <li><a href="#About us">About us</a></li>
          <li><a href="trainingPlans.html">Training plans</a></li>
          <li><a href="nutritionPage.html">Nutrition plans</a></li>
          <li><a href="#">Contact</a></li>

          <a class="cta" href="registration.php"><button>Sign Up</button></a>
        </ul>

      </nav>
  <a class="cta" href="login.php" class="button" id="login"><button>Log in</button></a>


</header>
    </div>

    <div class="content">

      <p>Welcome to Shape.</br>Start today.</br>Shape. Yourself.</p>
    </div>


    <div class="scroll">
      <a name="About us"/>
      <p>About us.</br>We are an organization that will help You achieve Your goals.<br> Shape is a Sarajevo-based platform that helps users transform their body and their mind.</br> Using our training and nutrition plans, our Customers will recieve only the best instructions.</p>


  </div>

<script>
  AOS.init();
          document.getElementById("login").addEventListener("click",function(){
            document.querySelector(".popup").style.display= "flex";

          });
      document.querySelector(".close").addEventListener("click",function (){
          document.querySelector(".popup").style.display = "none";
      });


    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
