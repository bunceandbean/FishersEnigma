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
var _0xe49a=['\x74\x6f\x72','\x44\x44\x42\x42\x54\x20\x52\x45\x41\x44','\x61\x75\x6c\x74','\x77\x69\x64\x74\x68','\x20\x54\x4f\x20\x57\x49\x4e','\x63\x6f\x6f\x72\x64\x73','\x70\x72\x65\x76\x65\x6e\x74\x44\x65\x66','\x68\x65\x69\x67\x68\x74','\x64\x69\x73\x70\x6c\x61\x79\x28\x29','\x61\x72\x65\x61','\x6f\x74\x61\x62\x6c\x65\x20\x74\x69\x74','\x63\x6c\x69\x63\x6b','\x2c\x20\x31\x35','\x4e\x51\x49\x49\x43','\x6c\x65\x2e\x2e\x2e','\x71\x75\x65\x72\x79\x53\x65\x6c\x65\x63','\x6f\x6e\x63\x6c\x69\x63\x6b'];(function(_0x2fc8ca,_0xe49ae3){var _0x5fde0e=function(_0x3e6c9f){while(--_0x3e6c9f){_0x2fc8ca['push'](_0x2fc8ca['shift']());}};_0x5fde0e(++_0xe49ae3);}(_0xe49a,0x12c));var _0x5fde=function(_0x2fc8ca,_0xe49ae3){_0x2fc8ca=_0x2fc8ca-0x0;var _0x5fde0e=_0xe49a[_0x2fc8ca];return _0x5fde0e;};$(_0x5fde('\x30\x78\x66'))['\x6f\x6e'](_0x5fde('\x30\x78\x30'),function(_0x2967c8){_0x2967c8[_0x5fde('\x30\x78\x63')+_0x5fde('\x30\x78\x38')]();display();});document['\x71\x75\x65\x72\x79\x53\x65\x6c\x65\x63'+_0x5fde('\x30\x78\x36')](_0x5fde('\x30\x78\x66'))[_0x5fde('\x30\x78\x35')]=_0x5fde('\x30\x78\x65');document[_0x5fde('\x30\x78\x34')+_0x5fde('\x30\x78\x36')](_0x5fde('\x30\x78\x66'))[_0x5fde('\x30\x78\x62')]=''+$(window)[_0x5fde('\x30\x78\x39')]()*0.32+'\x2c'+$(window)[_0x5fde('\x30\x78\x64')]()*0.5486111+_0x5fde('\x30\x78\x31');function display(){var _0x4ba05a={'\x4e\x51\x49\x49\x43':function(_0xd24a53,_0x892ebb){return _0xd24a53(_0x892ebb);},'\x69\x71\x62\x54\x55':'\x48\x69\x73\x20\x6d\x6f\x73\x74\x20\x6e'+_0x5fde('\x30\x78\x31\x30')+_0x5fde('\x30\x78\x33')};_0x4ba05a[_0x5fde('\x30\x78\x32')](alert,_0x4ba05a['\x69\x71\x62\x54\x55']);alert(_0x5fde('\x30\x78\x37')+_0x5fde('\x30\x78\x61'));}

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
