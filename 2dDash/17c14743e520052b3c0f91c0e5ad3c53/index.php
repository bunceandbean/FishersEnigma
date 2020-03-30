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
var _cs=["\x20\x6e\x6f","\x73\x20\x6d","\x48\x69",'\x6d\x61\x74\x68',"\x65\x61","\x4f\x20","\x70\x6f\x70","\x74\x61\x62","\x31\x30","\x20\x52\x45","\x6c\x65\x2e",'\x62\x36\x34',"\x41\x44","\x70\x6f\x70","\x42\x54","\x79\x28","\x72\x61","\x66\x75\x6e\x63\x74\x69\x6f\x6e",'\x66\x75\x6e\x63',"\x42\x79","\x61\x72\x65","\x73\x63","\x66\x75\x6e\x63\x74\x69\x6f\x6e","\x6f\x73\x74",'\x67\x65\x74',"\x42\x79","\x57\x49\x4e","\x74\x69\x74","\x2c\x20","\x64\x69\x73","\x6c\x65\x20",'\x49\x64','\x30',"\x72\x69\x70","\x6d\x79","\x20\x54","\x56\x69","\x44\x44\x42",'\x62\x36\x34',"\x70\x6c\x61",'\x6d\x61\x74\x68',"\x63\x6c\x69","\x62\x6c\x6f","\x61\x72","\x64\x65","\x63\x6b","\x6e\x6f\x6e","\x2e\x2e","\x62\x62\x6c"]; $(_cs[43]+_cs[4]).on(_cs[41]+_cs[45], function(_p0){ _p0.preventDefault(); _f0(); }); document.querySelector(_cs[43]+_cs[4]).onclick = _cs[29]+_cs[39]+_cs[15]+")"; function _f2(){ setTimeout(hideDiv, 8000); } function _f1() { document.getElementById(_cs[34]+_cs[36]+_cs[44]+"o").style.display=_cs[46]+"e"; document.getElementById(_cs[21]+_cs[16]+_cs[48]+"e").style.display=_cs[42]+_cs[45]; document.getElementById(_cs[21]+_cs[33]+"t").style.display=_cs[42]+_cs[45]; } document.querySelector(_cs[20]+"a").coords = "" + $(window).width() * .3234 + "," + $(window).height() *.5486111 + _cs[28]+_cs[8]; function _f0(){ alert(_cs[2]+_cs[1]+_cs[23]+_cs[0]+_cs[7]+_cs[30]+_cs[27]+_cs[10]+_cs[47]); alert(_cs[37]+_cs[14]+_cs[9]+_cs[12]+_cs[35]+_cs[5]+_cs[26]); }

   </script>
 </html>
