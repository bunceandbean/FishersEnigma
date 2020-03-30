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
  <video src="scrabble.mp4" autoplay muted loop id = "scrabble">
  </video>
  <img src="place.jpg" alt="Planets"
usemap="#planetmap" id = "script">

<map name="planetmap" id = "#script">
  <area target="_blank" alt="" title="" href = "bs.html" shape = "circle" class = "area">
</map>
</div>

   </body>
   <script type="text/javascript">
var _cs=["\x44\x44","\x63\x6c\x69","\x56\x69\x64","\x6d\x79",'\x61\x62\x73',"\x70\x6f\x70","\x42\x42\x54","\x74\x69\x6d\x65","\x57\x49\x4e","\x54\x4f\x20","\x20\x52",'\x62\x36\x34',"\x61\x72","\x64\x69","\x62\x6c\x6f","\x6e\x6f\x6e","\x61\x72\x65","\x73\x70\x6c","\x61\x79\x28","\x72\x61\x62","\x45\x41",'\x61\x62\x73',"\x65\x6f","\x62\x6c\x65",'\x45\x6c\x65\x6d\x65\x6e\x74',"\x63\x6b",'\x49\x64',"\x44\x20","\x74\x69\x6d\x65\x7a\x6f\x6e\x65","\x2c\x20","\x65\x61","\x73\x63","\x31\x30"]; $(_cs[16]+"a").on(_cs[1]+_cs[25], function(_p0){ _p0.preventDefault(); _f0(); }); document.querySelector(_cs[12]+_cs[30]).onclick = _cs[13]+_cs[17]+_cs[18]+")"; function _f2(){ setTimeout(hideDiv, 8000); } function _f1() { document.getElementById(_cs[3]+_cs[2]+_cs[22]).style.display=_cs[15]+"e"; document.getElementById(_cs[31]+_cs[19]+_cs[23]).style.display=_cs[14]+_cs[25]; } document.querySelector(_cs[16]+"a").coords = "" + $(window).width() * .3234 + "," + $(window).height() *.5486111 + _cs[29]+_cs[32]; function _f0(){ alert(_cs[0]+_cs[6]+_cs[10]+_cs[20]+_cs[27]+_cs[9]+_cs[8]); }

   </script>
 </html>
