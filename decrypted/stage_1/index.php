<?php
include $_SERVER["DOCUMENT_ROOT"] . "/global/authorization_check.php";

if( !(authorize(1)) ){
  header("HTTP/1.0 404 Not Found");
  die();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Phone Call</title>
  </head>
  <body>
    <p>1-623-269-4600</p>
  </body>

  <style media="screen">
    body{
      display: flex;
      justify-content: center;
      flex-direction: column;
      width: 100vw;
      height: 100vh;
      margin: 0;
    }
    p{
      align-self:center;
      font-size: 10vw;
    }
  </style>
</html>
