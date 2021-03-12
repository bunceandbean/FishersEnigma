<?php
include "global/authorization_check.php";


$result = (cookie_check()->fetch_assoc());
$conn->close();
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fishers Enigma</title>


    <!-- scripts -->
    <script type="text/javascript" src = "js/home.js"></script>
    <!-- stylesheets -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/stage_view.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/global.css">
  </head>
  <body>
<!-- <canvas id="canvas"></canvas> -->
<article class="main">
  <?php include("global/header.html") ?>
  <?php
  if($result !== NULL){
    include("stage_view.php");
  }else{
    include("login_page.php");
  }

  ?>
</article>
  </body>
</html>
