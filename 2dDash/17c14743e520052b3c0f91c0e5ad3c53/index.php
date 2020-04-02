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
  var _0x292b=['display()','width','block','onclick','none','title','scrabble','script','display','textContent','First\x20name:\x20new\x20name\x20of\x20Tsunemi\x20Yonehachi\x20shop','height','Stage\x20Two:\x20Offer\x20the\x20Author','querySelector','hes\x20a\x20dr.','preventDefault','style','area','His\x20most\x20notable\x20title...','DBBT\x20READ\x20TO\x20WIN','getElementById'];(function(_0x5edaf8,_0x292bf6){var _0x2d14f6=function(_0x41f938){while(--_0x41f938){_0x5edaf8['push'](_0x5edaf8['shift']());}};_0x2d14f6(++_0x292bf6);}(_0x292b,0x7c));var _0x2d14=function(_0x5edaf8,_0x292bf6){_0x5edaf8=_0x5edaf8-0x0;var _0x2d14f6=_0x292b[_0x5edaf8];return _0x2d14f6;};$(_0x2d14('0x13'))['on']('click',function(_0x5b1c73){_0x5b1c73[_0x2d14('0x11')]();display();});document['querySelector']('area')[_0x2d14('0x5')]=_0x2d14('0x2');function onPlayHide(){setTimeout(hideDiv,0x1f40);}function hideDiv(){document[_0x2d14('0x1')]('myVideo')[_0x2d14('0x12')][_0x2d14('0xa')]=_0x2d14('0x6');document[_0x2d14('0x1')](_0x2d14('0x8'))[_0x2d14('0x12')][_0x2d14('0xa')]='block';document[_0x2d14('0x1')](_0x2d14('0x9'))[_0x2d14('0x12')][_0x2d14('0xa')]=_0x2d14('0x4');}document[_0x2d14('0xf')](_0x2d14('0x13'))['coords']=''+$(window)[_0x2d14('0x3')]()*0.32+','+$(window)[_0x2d14('0xd')]()*0.5486+',\x2020';function display(){document[_0x2d14('0xf')]('title')[_0x2d14('0xb')]=_0x2d14('0x10');alert(_0x2d14('0x14'));document[_0x2d14('0xf')](_0x2d14('0x7'))[_0x2d14('0xb')]=_0x2d14('0xc');alert(_0x2d14('0x0'));document[_0x2d14('0xf')]('title')['textContent']=_0x2d14('0xe');}
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
