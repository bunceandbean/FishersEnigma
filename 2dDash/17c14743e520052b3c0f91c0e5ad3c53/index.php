<?php
if(isset($_POST["user"])){
  $user = $_POST["user"];
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
                if($row['Stage'] <= 2){
                  $update = "UPDATE `leaderboard` SET `Stage`=2 WHERE `Team` = '".$user."'";
                  mysqli_query($link,$update);
              }
            }
          }
        }

}


 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Stage Two: Offer the Author</title>
     <meta charset="UTF-8">
     <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon.png">
     <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.png">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js?n=1"></script>
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

     #scrabble{
       display:none;
     }
     .container{
    position: relative;
}
map{
  z-index: 100;
}
#script{
  position:fixed;
  height: 101vh;
  width: 101vw;
  z-index:-101;
  visibility:hidden;
  display:none;
}
     </style>
   </head>

   <body>
     <video controls autoplay onplay = "onPlayHide()" id="myVideo">
       <source src="Stage Two.mp4" type="video/mp4">
     </video>

<div class="container">
  <video src="scrabble.mp4" autoplay muted loop id = "scrabble">
  </video>
  <img src="place.jpg" alt="Planets"
usemap="#planetmap" id = "script">

<map name="planetmap" id = "#script">
  <area target="_blank" alt="" title="" href="book.html">
</map>
</div>

   </body>
   <script type="text/javascript">
          function onPlayHide(){
               setTimeout(hideDiv, 8000);
             }

               function hideDiv() {
                   document.getElementById("myVideo").style.display="none";
                   document.getElementById("scrabble").style.display="block";
               }

          document.querySelector("area").coords = "" + $(window).width() * .3125 + "," + $(window).height() * .5486111 + "," + $(window).width() * .3234375 + "," + $(window).height() * .3234375 + "";


   </script>
 </html>
