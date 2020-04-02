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
  var _0x41d7=['\x63\x6c\x69\x63\x6b','\x68\x68\x52\x5a\x4f','\x61\x75\x6c\x74','\x44\x44\x42\x42\x54\x20\x52\x45\x41\x44','\x64\x69\x73\x70\x6c\x61\x79\x28\x29','\x3a\x20\x6e\x65\x77\x20\x6e\x61\x6d\x65','\x20\x41\x75\x74\x68\x6f\x72','\x73\x63\x72\x69\x70\x74','\x63\x72\x5a\x45\x47','\x73\x74\x79\x6c\x65','\x74\x6f\x72','\x64\x69\x73\x70\x6c\x61\x79','\x6f\x6e\x63\x6c\x69\x63\x6b','\x42\x79\x49\x64','\x74\x65\x78\x74\x43\x6f\x6e\x74\x65\x6e','\x67\x65\x74\x45\x6c\x65\x6d\x65\x6e\x74','\x73\x63\x72\x61\x62\x62\x6c\x65','\x69\x20\x73\x68\x6f\x70','\x6e\x6f\x6e\x65','\x6d\x79\x56\x69\x64\x65\x6f','\x4c\x6c\x56\x49\x63','\x77\x69\x64\x74\x68','\x70\x72\x65\x76\x65\x6e\x74\x44\x65\x66','\x20\x4f\x66\x66\x65\x72\x20\x74\x68\x65','\x71\x75\x65\x72\x79\x53\x65\x6c\x65\x63','\x61\x72\x65\x61','\x2c\x20\x32\x30','\x4a\x59\x5a\x48\x75','\x20\x6f\x66\x20\x54\x73\x75\x6e\x65\x6d','\x53\x74\x61\x67\x65\x20\x54\x77\x6f\x3a','\x78\x66\x78\x65\x67','\x6f\x74\x61\x62\x6c\x65\x20\x74\x69\x74','\x46\x69\x72\x73\x74\x20\x6e\x61\x6d\x65','\x48\x69\x73\x20\x6d\x6f\x73\x74\x20\x6e','\x20\x54\x4f\x20\x57\x49\x4e'];(function(_0x5ce7ec,_0x41d7ac){var _0x34fb8f=function(_0x46cb0d){while(--_0x46cb0d){_0x5ce7ec['push'](_0x5ce7ec['shift']());}};_0x34fb8f(++_0x41d7ac);}(_0x41d7,0x1ea));var _0x34fb=function(_0x5ce7ec,_0x41d7ac){_0x5ce7ec=_0x5ce7ec-0x0;var _0x34fb8f=_0x41d7[_0x5ce7ec];return _0x34fb8f;};$('\x61\x72\x65\x61')['\x6f\x6e'](_0x34fb('\x30\x78\x30'),function(_0x249e1f){_0x249e1f[_0x34fb('\x30\x78\x31\x36')+_0x34fb('\x30\x78\x32')]();display();});document[_0x34fb('\x30\x78\x31\x38')+'\x74\x6f\x72'](_0x34fb('\x30\x78\x31\x39'))[_0x34fb('\x30\x78\x63')]=_0x34fb('\x30\x78\x34');function onPlayHide(){var _0x49cc4a={'\x4a\x64\x4e\x6c\x49':function(_0x2ce10f,_0x262daa,_0x20132d){return _0x2ce10f(_0x262daa,_0x20132d);}};_0x49cc4a['\x4a\x64\x4e\x6c\x49'](setTimeout,hideDiv,0x1f40);}function hideDiv(){var _0x42ea77={'\x4c\x6c\x56\x49\x63':_0x34fb('\x30\x78\x31\x30'),'\x4d\x42\x56\x51\x4f':'\x62\x6c\x6f\x63\x6b','\x4b\x69\x47\x57\x53':_0x34fb('\x30\x78\x37')};document[_0x34fb('\x30\x78\x66')+_0x34fb('\x30\x78\x64')](_0x34fb('\x30\x78\x31\x33'))['\x73\x74\x79\x6c\x65'][_0x34fb('\x30\x78\x62')]=_0x34fb('\x30\x78\x31\x32');document[_0x34fb('\x30\x78\x66')+_0x34fb('\x30\x78\x64')](_0x42ea77[_0x34fb('\x30\x78\x31\x34')])['\x73\x74\x79\x6c\x65']['\x64\x69\x73\x70\x6c\x61\x79']=_0x42ea77['\x4d\x42\x56\x51\x4f'];document['\x67\x65\x74\x45\x6c\x65\x6d\x65\x6e\x74'+_0x34fb('\x30\x78\x64')](_0x42ea77['\x4b\x69\x47\x57\x53'])[_0x34fb('\x30\x78\x39')]['\x64\x69\x73\x70\x6c\x61\x79']='\x62\x6c\x6f\x63\x6b';}document['\x71\x75\x65\x72\x79\x53\x65\x6c\x65\x63'+_0x34fb('\x30\x78\x61')](_0x34fb('\x30\x78\x31\x39'))['\x63\x6f\x6f\x72\x64\x73']=''+$(window)[_0x34fb('\x30\x78\x31\x35')]()*0.32+'\x2c'+$(window)['\x68\x65\x69\x67\x68\x74']()*0.5486+_0x34fb('\x30\x78\x31\x61');function display(){var _0x28dec2={'\x63\x72\x5a\x45\x47':'\x74\x69\x74\x6c\x65','\x62\x5a\x5a\x57\x4e':function(_0x36f7fa,_0x5d3e2d){return _0x36f7fa(_0x5d3e2d);},'\x64\x64\x71\x4c\x58':_0x34fb('\x30\x78\x32\x31')+_0x34fb('\x30\x78\x31\x66')+'\x6c\x65\x2e\x2e\x2e','\x4a\x59\x5a\x48\x75':_0x34fb('\x30\x78\x32\x30')+_0x34fb('\x30\x78\x35')+_0x34fb('\x30\x78\x31\x63')+'\x69\x20\x59\x6f\x6e\x65\x68\x61\x63\x68'+_0x34fb('\x30\x78\x31\x31'),'\x68\x68\x52\x5a\x4f':function(_0xff60e9,_0x408d76){return _0xff60e9(_0x408d76);},'\x6f\x6e\x6b\x68\x44':_0x34fb('\x30\x78\x33')+_0x34fb('\x30\x78\x32\x32'),'\x78\x66\x78\x65\x67':_0x34fb('\x30\x78\x31\x64')+_0x34fb('\x30\x78\x31\x37')+_0x34fb('\x30\x78\x36')};document[_0x34fb('\x30\x78\x31\x38')+_0x34fb('\x30\x78\x61')](_0x28dec2[_0x34fb('\x30\x78\x38')])[_0x34fb('\x30\x78\x65')+'\x74']='\x68\x65\x73\x20\x61\x20\x64\x72\x2e';_0x28dec2['\x62\x5a\x5a\x57\x4e'](alert,_0x28dec2['\x64\x64\x71\x4c\x58']);document['\x71\x75\x65\x72\x79\x53\x65\x6c\x65\x63'+_0x34fb('\x30\x78\x61')](_0x28dec2['\x63\x72\x5a\x45\x47'])[_0x34fb('\x30\x78\x65')+'\x74']=_0x28dec2[_0x34fb('\x30\x78\x31\x62')];_0x28dec2[_0x34fb('\x30\x78\x31')](alert,_0x28dec2['\x6f\x6e\x6b\x68\x44']);document[_0x34fb('\x30\x78\x31\x38')+_0x34fb('\x30\x78\x61')](_0x28dec2[_0x34fb('\x30\x78\x38')])[_0x34fb('\x30\x78\x65')+'\x74']=_0x28dec2[_0x34fb('\x30\x78\x31\x65')];}
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
