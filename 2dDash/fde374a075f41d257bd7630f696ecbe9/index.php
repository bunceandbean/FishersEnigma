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
  var _0x84b4=['mukcL','.terminal','querySelector','vOYrC','sjfGY','thethreebirds','hello:\x20h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0adestroy:\x20murder\x20him\x20\x0aterminate:\x20murder\x20him','hello:\x20type\x20\x22hello\x22\x20followed\x20by\x20a\x20name\x20to\x20get\x20a\x20greeting\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0adestroy:\x20terminate\x20terminal\x20\x0aterminate:\x20terminate\x20terminal','.\x20Wellcome\x20to\x20this\x20terminal.','block','style','zwhCS','echo','body','Hello,\x20','DAngL','terminal','none','display','lUyqD','<img\x20src=\x22crow.jpg\x22>','<img\x20src=\x22https://i.ytimg.com/vi/7Nl5BTPSLC0/hqdefault.jpg\x22>','afSEY','h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴̡̋͌','hello:\x20h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0adestroy:\x20t̷e̵r̸m̶i̸n̶a̷t̸e̸\x20\x20\x0aterminate:\x20t̷e̵r̸m̶i̸n̶a̷t̸e̸\x20','POihh','textContent','NKzvG'];(function(_0x469858,_0x84b451){var _0x30af92=function(_0xfbf7e3){while(--_0xfbf7e3){_0x469858['push'](_0x469858['shift']());}};_0x30af92(++_0x84b451);}(_0x84b4,0x18c));var _0x30af=function(_0x469858,_0x84b451){_0x469858=_0x469858-0x0;var _0x30af92=_0x84b4[_0x469858];return _0x30af92;};var help2=![];var desCount=0x0;var c=0x0;$(_0x30af('0x9'))[_0x30af('0xc')]({'hello':function(_0x5e04eb){if(desCount==0x0){if(_0x30af('0x0')===_0x30af('0x1b')){if(desCount<0x1){this[_0x30af('0x8')](_0x30af('0x3'));}else if(!help2){this[_0x30af('0x8')](_0x30af('0x14'));}else{this['echo'](_0x30af('0x2'));}}else{this[_0x30af('0x8')](_0x30af('0xa')+_0x5e04eb+_0x30af('0x4'));}}else{this[_0x30af('0x8')](_0x30af('0x13'));}},'crow':function(){if(c!=0x2){if('POihh'===_0x30af('0x15')){this[_0x30af('0x8')]($(_0x30af('0x10')));if(help2){if('DAngL'===_0x30af('0xb')){c++;}else{this[_0x30af('0x8')]('hello:\x20h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0adestroy:\x20murder\x20him\x20\x0aterminate:\x20murder\x20him');}}}else{document[_0x30af('0x1a')]('.terminal')[_0x30af('0x6')][_0x30af('0xe')]=_0x30af('0xd');document[_0x30af('0x1a')]('p')[_0x30af('0x6')][_0x30af('0xe')]=_0x30af('0x5');document[_0x30af('0x1a')]('p')[_0x30af('0x16')]=_0x30af('0x1');}}else{if(_0x30af('0x12')!=='afSEY'){this[_0x30af('0x8')]($(_0x30af('0x10')));if(help2){c++;}}else{document['querySelector'](_0x30af('0x19'))[_0x30af('0x6')][_0x30af('0xe')]=_0x30af('0xd');document[_0x30af('0x1a')]('p')[_0x30af('0x6')][_0x30af('0xe')]=_0x30af('0x5');document[_0x30af('0x1a')]('p')[_0x30af('0x16')]=_0x30af('0x1');}}},'destroy':function(){this[_0x30af('0x8')]($('<img\x20src=\x22https://i.ytimg.com/vi/7Nl5BTPSLC0/hqdefault.jpg\x22>'));desCount++;},'terminate':function(){this[_0x30af('0x8')]($('<img\x20src=\x22https://i.ytimg.com/vi/7Nl5BTPSLC0/hqdefault.jpg\x22>'));desCount++;},'help':function(){if(desCount<0x1){this[_0x30af('0x8')](_0x30af('0x3'));}else if(!help2){if(_0x30af('0x18')!==_0x30af('0x18')){if(desCount>=0x1){this[_0x30af('0x8')]('Never...');help2=!![];}}else{this['echo'](_0x30af('0x14'));}}else{if(_0x30af('0x7')===_0x30af('0x17')){this[_0x30af('0x8')]($(_0x30af('0x11')));desCount++;}else{this[_0x30af('0x8')](_0x30af('0x2'));}}},'t̷e̵r̸m̶i̸n̶a̷t̸e̸':function(){if(desCount>=0x1){if(_0x30af('0xf')!==_0x30af('0xf')){this[_0x30af('0x8')](_0x30af('0x3'));}else{this[_0x30af('0x8')]('Never...');help2=!![];}}}},{'greetings':'Enigma\x20Terminal\x20--\x20type\x20\x22help\x22\x20to\x20get\x20a\x20list\x20of\x20commands'});
      </script>
</html>
