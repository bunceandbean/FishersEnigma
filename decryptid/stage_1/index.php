<?php
include $_SERVER["DOCUMENT_ROOT"] . "/global/authorization_check.php";

if( !(authorize(1)) ){
  header("HTTP/1.0 404 Not Found",TRUE, 404);
  include($_SERVER["DOCUMENT_ROOT"] . "/404.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Phone Call</title>

    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/global.css">
  </head>
  <body>
    <article class="">
      <?php include($_SERVER["DOCUMENT_ROOT"] . "global/header.html") ?>
      <section>
        <p>1-623-269-4600</p>
      </section>
    </article>
  </body>

  <style media="screen">
  p{
    font-size: 2rem;
    align-self: center;
  }
  </style>
</html>
