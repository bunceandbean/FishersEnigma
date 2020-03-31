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
                if($row['Stage'] <= 4){
                  $update = "UPDATE `leaderboard` SET `Stage`=4 WHERE `Team` = '".$user."'";
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
     <title>Stage Four: Terminate the Terminal</title>
     <meta charset="UTF-8">
     <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon.png">
     <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.png">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js?n=1"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js"></script>
      <link rel="stylesheet" href="https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css"/>
     <style media="screen">
     video{
       position: fixed;
       height: 101vh;
       width: 101vw;
       z-index:100;
     }
     body{
       overflow:hidden;
     }
     </style>
       <body>
         <video controls autoplay onplay = "onPlayHide()" id="myVideo">
           <source src="Stage Four.mp4" type="video/mp4">
         </video>
         <p style = "display:none"></p>
       </body>
      <script type="text/javascript">
      /////////////////////////
      function onPlayHide(){
           setTimeout(hideDiv, 8000);
         }

     function hideDiv() {
         document.getElementById("myVideo").style.display="none";
        }
      /////////////////////////
  var _0x12bf=['\x74\x65\x72\x6d\x69\x6e\x61\x6c','\x74\x65\x72\x6d\x69\x6e\x61\x74\x65\x20','\x6c\x69\x73\x74\x20\x6f\x66\x20\x63\x6f','\x61\x75\x6c\x74\x2e\x6a\x70\x67\x22\x3e','\x68\u0337\u030d\u0304\u0339\u034d\x65\u0337\u033f\u033d','\x65\x72\x6d\x69\x6e\x61\x6c\x2e','\x74\x6f\x72','\x79\x20\x61\x20\x6e\x61\x6d\x65\x20\x74','\x71\x75\x65\x72\x79\x53\x65\x6c\x65\x63','\x62\x6f\x64\x79','\u032c\x20\u0336\u035d\u0309\u035b\u0343\u0357\u035c\u0324','\x3a\x20\x64\x69\x73\x70\x6c\x61\x79\x73','\x76\x69\x2f\x37\x4e\x6c\x35\x42\x54\x50','\u0335\x72\u0338\x6d\u0336\x69\u0338\x6e\u0336\x61','\u0356\u0321\u0328\u0317\x6f\u0337\u030d\u030e\u0344\u035d','\x66\x6f\x6c\x6c\x6f\x77\x65\x64\x20\x62','\x6d\x75\x72\x64\x65\x72\x20\x68\x69\x6d','\x2e\x74\x65\x72\x6d\x69\x6e\x61\x6c','\u0304\u0339\u034d\x65\u0337\u033f\u033d\u0339\u0329\u031f','\x68\x74\x74\x70\x73\x3a\x2f\x2f\x69\x2e','\x6e\x6f\x6e\x65','\x20\x69\x6d\x61\x67\x65\x20\x6f\x66\x20','\x6f\x77\x3a\x20\x64\x69\x73\x70\x6c\x61','\u030d\u0357\u0317\u035a\u0325\u034e\x74\u0335\u0300\u0355','\x65\x72\x6d\x69\x6e\x61\x6c\x20\x0a\x74','\u0337\x74\u0338\x65\u0338\x20\x20\x0a\x74\x65','\x79\x73\x20\x69\x6d\x61\x67\x65\x20\x6f','\u0349\u0323\x74\u0337\u0351\u030a\u0304\u0342\u0360\u0339','\x4e\x65\x76\x65\x72\x2e\x2e\x2e','\x74\x68\x65\x74\x68\x72\x65\x65\x62\x69','\x65\x65\x74\x69\x6e\x67\x20\x0a\x63\x72','\u035d\u0309\u035b\u0343\u0357\u035c\u0324\u0349\u0323\x74','\x79\x74\x69\x6d\x67\x2e\x63\x6f\x6d\x2f','\u0327\u035a\u033c\u033b\u035c\x69\u0338\u0309\u0301\u0315','\x2e\x20\x57\x65\x6c\x6c\x63\x6f\x6d\x65','\x66\x20\x61\x20\x63\x72\x6f\x77\x20\x0a','\x6c\u0334\u0311\u0300\u0303\u0359\u032c\u0321\u032a\u032a','\x65\x20\x22\x68\x65\x6c\x6c\x6f\x22\x20','\x68\x65\x6c\x6c\x6f\x3a\x20\x74\x79\x70','\x68\x65\x6c\x6c\x6f\x3a\x20\x68\u0337\u030d','\u035c\u0339\x72\u0334\x20\x0a\x63\x72\x6f\x77','\x73\x74\x79\x6c\x65','\x45\x6e\x69\x67\x6d\x61\x20\x54\x65\x72','\x64\x69\x73\x70\x6c\x61\x79','\x79\x70\x65\x20\x22\x68\x65\x6c\x70\x22','\x6f\u0337\u034c\u0313\u0360\u034b\u0355\u0317\u034d\u0327','\x6c\u0335\u030f\u030d\u031c\u032c\u0349\x6c\u0334\u0311','\x72\x64\x73','\x53\x4c\x43\x30\x2f\x68\x71\x64\x65\x66','\x62\x6c\x6f\x63\x6b','\x20\x74\x6f\x20\x67\x65\x74\x20\x61\x20','\x72\u0336\u030b\u0314\u0343\u0320\x61\u0335\u030d\u0320','\x65\x72\x6d\x69\x6e\x61\x74\x65\x3a\x20','\x3c\x69\x6d\x67\x20\x73\x72\x63\x3d\x22','\x74\x65\x78\x74\x43\x6f\x6e\x74\x65\x6e','\u0314\u0343\u0320\x61\u0335\u030d\u0320\u0327\u035a\u033c','\x64\x65\x73\x74\x72\x6f\x79\x3a\x20\x74','\u0314\u0331\u031d\u035c\u0339\x72\u0334\u030b\u034c\u0321','\u0317\x6f\u0337\u030d\u030e\u0344\u035d\u0314\u0331\u031d','\x73\x74\x72\x6f\x79\x3a\x20\x74\u0337\x65','\x48\x65\x6c\x6c\x6f\x2c\x20','\x20\x74\x6f\x20\x74\x68\x69\x73\x20\x74','\u0337\u0351\u030a\u0304\u0342\u0360\u0339\x72\u0336\u030b','\x65\x63\x68\x6f'];(function(_0x71204b,_0x12bfb5){var _0x448b8a=function(_0x3160d5){while(--_0x3160d5){_0x71204b['push'](_0x71204b['shift']());}};_0x448b8a(++_0x12bfb5);}(_0x12bf,0x81));var _0x448b=function(_0x71204b,_0x12bfb5){_0x71204b=_0x71204b-0x0;var _0x448b8a=_0x12bf[_0x71204b];return _0x448b8a;};var help2=![];var desCount=0x0;var c=0x0;$(_0x448b('\x30\x78\x38'))[_0x448b('\x30\x78\x33\x66')]({'\x68\x65\x6c\x6c\x6f':function(_0x10bc8d){if(desCount==0x0){this['\x65\x63\x68\x6f'](_0x448b('\x30\x78\x33\x62')+_0x10bc8d+(_0x448b('\x30\x78\x32\x31')+_0x448b('\x30\x78\x33\x63')+_0x448b('\x30\x78\x34')));}else{this[_0x448b('\x30\x78\x33\x65')](_0x448b('\x30\x78\x33')+'\u0339\u0329\u031f\x6c\u0335\u030f\u030d\u031c\u032c\u0349'+_0x448b('\x30\x78\x32\x33')+_0x448b('\x30\x78\x32\x63')+_0x448b('\x30\x78\x39')+_0x448b('\x30\x78\x31\x61')+_0x448b('\x30\x78\x33\x32')+_0x448b('\x30\x78\x32\x30')+_0x448b('\x30\x78\x31\x36')+_0x448b('\x30\x78\x64')+_0x448b('\x30\x78\x33\x38'));}},'\x63\x72\x6f\x77':function(){if(c!=0x2){this[_0x448b('\x30\x78\x33\x65')]($(_0x448b('\x30\x78\x33\x34')+'\x63\x72\x6f\x77\x2e\x6a\x70\x67\x22\x3e'));if(help2){c++;}}else{document[_0x448b('\x30\x78\x37')+_0x448b('\x30\x78\x35')](_0x448b('\x30\x78\x31\x30'))['\x73\x74\x79\x6c\x65'][_0x448b('\x30\x78\x32\x61')]=_0x448b('\x30\x78\x31\x33');document[_0x448b('\x30\x78\x37')+_0x448b('\x30\x78\x35')]('\x70')[_0x448b('\x30\x78\x32\x38')][_0x448b('\x30\x78\x32\x61')]=_0x448b('\x30\x78\x33\x30');document[_0x448b('\x30\x78\x37')+_0x448b('\x30\x78\x35')]('\x70')[_0x448b('\x30\x78\x33\x35')+'\x74']=_0x448b('\x30\x78\x31\x63')+_0x448b('\x30\x78\x32\x65');}},'\x64\x65\x73\x74\x72\x6f\x79':function(){this[_0x448b('\x30\x78\x33\x65')]($('\x3c\x69\x6d\x67\x20\x73\x72\x63\x3d\x22'+_0x448b('\x30\x78\x31\x32')+_0x448b('\x30\x78\x31\x66')+_0x448b('\x30\x78\x62')+_0x448b('\x30\x78\x32\x66')+_0x448b('\x30\x78\x32')));desCount++;},'\x74\x65\x72\x6d\x69\x6e\x61\x74\x65':function(){this[_0x448b('\x30\x78\x33\x65')]($('\x3c\x69\x6d\x67\x20\x73\x72\x63\x3d\x22'+_0x448b('\x30\x78\x31\x32')+_0x448b('\x30\x78\x31\x66')+_0x448b('\x30\x78\x62')+_0x448b('\x30\x78\x32\x66')+_0x448b('\x30\x78\x32')));desCount++;},'\x68\x65\x6c\x70':function(){if(desCount<0x1){this[_0x448b('\x30\x78\x33\x65')](_0x448b('\x30\x78\x32\x35')+_0x448b('\x30\x78\x32\x34')+_0x448b('\x30\x78\x65')+_0x448b('\x30\x78\x36')+'\x6f\x20\x67\x65\x74\x20\x61\x20\x67\x72'+_0x448b('\x30\x78\x31\x64')+_0x448b('\x30\x78\x31\x35')+_0x448b('\x30\x78\x31\x39')+_0x448b('\x30\x78\x32\x32')+_0x448b('\x30\x78\x33\x37')+'\x65\x72\x6d\x69\x6e\x61\x74\x65\x20\x74'+_0x448b('\x30\x78\x31\x37')+_0x448b('\x30\x78\x33\x33')+_0x448b('\x30\x78\x30')+_0x448b('\x30\x78\x33\x66'));}else if(!help2){this[_0x448b('\x30\x78\x33\x65')](_0x448b('\x30\x78\x32\x36')+_0x448b('\x30\x78\x31\x31')+_0x448b('\x30\x78\x32\x64')+'\u0300\u0303\u0359\u032c\u0321\u032a\u032a\x6f\u0337\u034c'+'\u0313\u0360\u034b\u0355\u0317\u034d\u0327\u032c\x20\u0336'+_0x448b('\x30\x78\x31\x65')+_0x448b('\x30\x78\x33\x64')+_0x448b('\x30\x78\x33\x36')+'\u033b\u035c\x69\u0338\u0309\u0301\u0315\u030d\u0357\u0317'+'\u035a\u0325\u034e\x74\u0335\u0300\u0355\u0356\u0321\u0328'+_0x448b('\x30\x78\x33\x39')+_0x448b('\x30\x78\x32\x37')+_0x448b('\x30\x78\x61')+_0x448b('\x30\x78\x31\x34')+'\x61\x20\x63\x72\x6f\x77\x20\x0a\x64\x65'+_0x448b('\x30\x78\x33\x61')+_0x448b('\x30\x78\x63')+_0x448b('\x30\x78\x31\x38')+'\x72\x6d\x69\x6e\x61\x74\x65\x3a\x20\x74'+'\u0337\x65\u0335\x72\u0338\x6d\u0336\x69\u0338\x6e'+'\u0336\x61\u0337\x74\u0338\x65\u0338\x20');}else{this[_0x448b('\x30\x78\x33\x65')](_0x448b('\x30\x78\x66'));}},'\x74\u0337\x65\u0335\x72\u0338\x6d\u0336\x69\u0338\x6e\u0336\x61\u0337\x74\u0338\x65\u0338':function(){if(desCount>=0x1){this['\x65\x63\x68\x6f'](_0x448b('\x30\x78\x31\x62'));help2=!![];}}},{'\x67\x72\x65\x65\x74\x69\x6e\x67\x73':_0x448b('\x30\x78\x32\x39')+'\x6d\x69\x6e\x61\x6c\x20\x2d\x2d\x20\x74'+_0x448b('\x30\x78\x32\x62')+_0x448b('\x30\x78\x33\x31')+_0x448b('\x30\x78\x31')+'\x6d\x6d\x61\x6e\x64\x73'});
      </script>
</html>
