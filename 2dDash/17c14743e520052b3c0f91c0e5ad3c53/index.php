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
  z-index:101;
  display:none
}
area{
  z-index: 101;
}
     </style>
   </head>

   <body>
     <video controls autoplay onplay = "onPlayHide()" id="myVideo">
       <source src="Stage Two.mp4" type="video/mp4">
     </video>

<div class="container">
  <video src="scrabble.mp4" autoplay muted loop id = "scrabble"> <!-- scrabble -->
  </video>
  <img src="place.jpg"
usemap="#planetmap" id = "script">

<map name="planetmap" id = "#script"> <!-- scrabble -->
  <area target="_blank" alt="" title="" href = "bs.html" shape = "circle" class = "area">
</map>
</div>

   </body>
   <script type="text/javascript">
var _0x32cc=['display()','preventDefault','coords',',\x2015','querySelector','area','DDBBT\x20READ\x20TO\x20WIN','onclick','click'];(function(_0x40c63f,_0x32ccde){var _0x4e726d=function(_0xc8d6f8){while(--_0xc8d6f8){_0x40c63f['push'](_0x40c63f['shift']());}};_0x4e726d(++_0x32ccde);}(_0x32cc,0x174));var _0x4e72=function(_0x40c63f,_0x32ccde){_0x40c63f=_0x40c63f-0x0;var _0x4e726d=_0x32cc[_0x40c63f];return _0x4e726d;};$(_0x4e72('0x2'))['on'](_0x4e72('0x5'),function(_0x20e41c){_0x20e41c[_0x4e72('0x7')]();display();});document[_0x4e72('0x1')](_0x4e72('0x2'))[_0x4e72('0x4')]=_0x4e72('0x6');document[_0x4e72('0x1')](_0x4e72('0x2'))[_0x4e72('0x8')]=''+$(window)['width']()*0.32+','+$(window)['height']()*0.5486111+_0x4e72('0x0');function display(){alert('His\x20most\x20notable\x20title...');alert(_0x4e72('0x3'));}

          function onPlayHide(){
               setTimeout(hideDiv, 8000);
             }

               function hideDiv() {
                   document.getElementById("myVideo").style.display="none";
                   document.getElementById("scrabble").style.display="block";
                   document.getElementById("script").style.display="block";

               }


   </script>
 </html>
