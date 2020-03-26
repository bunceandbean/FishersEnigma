<?php
if (isset($_POST["Stage Password"])){
  $user = $_POST["Stage Password"];
  $link = mysqli_connect("localhost", "fishbpzf_admin", "b3b57af55c7a898bcfff2732ae06660e", "fishbpzf_2dDash");
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM leaderboard";
  if($result = mysqli_query($link, $sql)){
      if(mysqli_num_rows($result) > 0){

          while($row = mysqli_fetch_array($result)){
                  // echo "<td>" . $row['Team'] . "</td>";
                  // echo "<td>" . $row['Stage'] . "</td>";
                  if($row['Team'] == $user){
                    $update = "UPDATE leaderboard SET Stage='1' WHERE Team = $user";
                    mysqli_query($link,$update);
                  }
            }
          }
        }
}else{
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fishers Enigma</title>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
    video{
      position:fixed;
      height: 101vh;
      width: 101vw;
      z-index:-100;
    }
    body{
      overflow:hidden;
    }
    button{
      z-index:100;
      position: absolute;
      display: block;
    }

    </style>
  </head>

  <body>
    <video loop autoplay controls id="myVideo">
      <source src="StageOne.mp4" type="video/mp4">
    </video>

  </body>
  <script type="text/javascript">
    console.log("Schläfli: {4.5} {2.25}");
  </script>
</html>
