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
var _0x445d=['terminal','none','hello:\x20h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0abook:\x20displays\x20image\x20of\x20a\x20book\x20\x0adestroy:\x20murder\x20him\x20\x0aterminate:\x20murder\x20him','sGVeu','hello:\x20h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0abook:\x20displays\x20image\x20of\x20a\x20book\x20\x0adestroy:\x20t̷e̵r̸m̶i̸n̶a̷t̸e̸\x20\x20\x0aterminate:\x20t̷e̵r̸m̶i̸n̶a̷t̸e̸\x20','<img\x20src=\x22https://i.ytimg.com/vi/7Nl5BTPSLC0/hqdefault.jpg\x22>','.terminal','style','afiEM','<img\x20src=\x22crow.jpg\x22>','block','ehwsi','<img\x20src=\x22https://www.calendarlabs.com/holidays/images/world-book-day.jpg\x22>','querySelector','h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴̡̋͌','zrCkq','hello:\x20type\x20\x22hello\x22\x20followed\x20by\x20a\x20name\x20to\x20get\x20a\x20greeting\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0abook:\x20displays\x20image\x20of\x20a\x20book\x20\x0adestroy:\x20terminate\x20terminal\x20\x0aterminate:\x20terminate\x20terminal','display','thethreebirds','rxbdc','mHhOl','vNZqZ','textContent','Never...','echo','Enigma\x20Terminal\x20--\x20type\x20\x22help\x22\x20to\x20get\x20a\x20list\x20of\x20commands','ckxII','.\x20Wellcome\x20to\x20this\x20terminal.'];(function(_0x330403,_0x445de9){var _0x2c2cdf=function(_0x54ca59){while(--_0x54ca59){_0x330403['push'](_0x330403['shift']());}};_0x2c2cdf(++_0x445de9);}(_0x445d,0x13a));var _0x2c2c=function(_0x330403,_0x445de9){_0x330403=_0x330403-0x0;var _0x2c2cdf=_0x445d[_0x330403];return _0x2c2cdf;};var help2=![];var desCount=0x0;var c=0x0;$('body')[_0x2c2c('0x16')]({'hello':function(_0xdd84a7){if(desCount==0x0){this['echo']('Hello,\x20'+_0xdd84a7+_0x2c2c('0x15'));}else{this[_0x2c2c('0x12')](_0x2c2c('0x8'));}},'crow':function(){if(c!=0x2){if(_0x2c2c('0x19')==='sGVeu'){this[_0x2c2c('0x12')]($(_0x2c2c('0x3')));if(help2){if(_0x2c2c('0x14')!=='RUKqu'){c++;}else{this[_0x2c2c('0x12')]($(_0x2c2c('0x6')));}}}else{this[_0x2c2c('0x12')](_0x2c2c('0x18'));}}else{if(_0x2c2c('0xd')==='rxbdc'){document['querySelector'](_0x2c2c('0x0'))[_0x2c2c('0x1')][_0x2c2c('0xb')]=_0x2c2c('0x17');document['querySelector']('p')['style'][_0x2c2c('0xb')]=_0x2c2c('0x4');document[_0x2c2c('0x7')]('p')['textContent']=_0x2c2c('0xc');}else{document[_0x2c2c('0x7')](_0x2c2c('0x0'))[_0x2c2c('0x1')][_0x2c2c('0xb')]=_0x2c2c('0x17');document[_0x2c2c('0x7')]('p')[_0x2c2c('0x1')][_0x2c2c('0xb')]='block';document[_0x2c2c('0x7')]('p')[_0x2c2c('0x10')]='thethreebirds';}}},'book':function(){this['echo']($(_0x2c2c('0x6')));},'destroy':function(){this[_0x2c2c('0x12')]($(_0x2c2c('0x1b')));desCount++;},'terminate':function(){this[_0x2c2c('0x12')]($('<img\x20src=\x22https://i.ytimg.com/vi/7Nl5BTPSLC0/hqdefault.jpg\x22>'));desCount++;},'help':function(){if(desCount<0x1){if('afiEM'===_0x2c2c('0x2')){this[_0x2c2c('0x12')](_0x2c2c('0xa'));}else{this['echo']('h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴̡̋͌');}}else if(!help2){this[_0x2c2c('0x12')](_0x2c2c('0x1a'));}else{if(_0x2c2c('0xe')!==_0x2c2c('0x9')){this[_0x2c2c('0x12')](_0x2c2c('0x18'));}else{c++;}}},'t̷e̵r̸m̶i̸n̶a̷t̸e̸':function(){if(desCount>=0x1){if(_0x2c2c('0xf')!==_0x2c2c('0x5')){this[_0x2c2c('0x12')](_0x2c2c('0x11'));help2=!![];}else{if(desCount>=0x1){this[_0x2c2c('0x12')]('Never...');help2=!![];}}}}},{'greetings':_0x2c2c('0x13')});
      </script>
</html>
