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
    <meta charset="UTF-8">
    <!-- <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cool Out</title>

    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/global.css">
  </head>
  <body>
    <div class="wrapper">
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/global/header.html") ?>
    <article class="">
      <section>
        <p>go to the Yeti</p>
        <p>and make sure to Wrap yourself</p>
        <p>in the past, look under</p>
        </video>
      </section>
    </article>
  </div>
  </body>

  <style media="screen">
  article{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  p{
    font-size: 2rem;
    text-align: center;
    margin: 0;
  }
  </style>
</html>
