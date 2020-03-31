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
  var _0x2e3e=['<img\x20src=\x22crow.jpg\x22>','.terminal','MVqIR','hello:\x20type\x20\x22hello\x22\x20followed\x20by\x20a\x20name\x20to\x20get\x20a\x20greeting\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0adestroy:\x20terminate\x20terminal\x20\x0aterminate:\x20terminate\x20terminal','qQhiJ','ifoJs','style','.\x20Wellcome\x20to\x20this\x20terminal.','hello:\x20h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0adestroy:\x20t̷e̵r̸m̶i̸n̶a̷t̸e̸\x20\x20\x0aterminate:\x20t̷e̵r̸m̶i̸n̶a̷t̸e̸\x20','koNrB','body','none','block','<img\x20src=\x22https://i.ytimg.com/vi/7Nl5BTPSLC0/hqdefault.jpg\x22>','display','textContent','querySelector','h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠\x20̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴̡̋͌','murder\x20him','thethreebirds','WxbsP','KGBLy','AQhmS','terminal','Never...','echo'];(function(_0x1a65ce,_0x2e3e0c){var _0x5f1059=function(_0x23731f){while(--_0x23731f){_0x1a65ce['push'](_0x1a65ce['shift']());}};_0x5f1059(++_0x2e3e0c);}(_0x2e3e,0xd2));var _0x5f10=function(_0x1a65ce,_0x2e3e0c){_0x1a65ce=_0x1a65ce-0x0;var _0x5f1059=_0x2e3e[_0x1a65ce];return _0x5f1059;};var help2=![];var desCount=0x0;var c=0x0;$(_0x5f10('0x8'))[_0x5f10('0x15')]({'hello':function(_0x4f4d95){if(desCount==0x0){if(_0x5f10('0x13')===_0x5f10('0x13')){this['echo']('Hello,\x20'+_0x4f4d95+_0x5f10('0x5'));}else{document[_0x5f10('0xe')](_0x5f10('0x19'))['style'][_0x5f10('0xc')]=_0x5f10('0x9');document[_0x5f10('0xe')]('p')[_0x5f10('0x4')][_0x5f10('0xc')]=_0x5f10('0xa');document[_0x5f10('0xe')]('p')['textContent']='thethreebirds';}}else{if(_0x5f10('0x2')===_0x5f10('0x7')){this[_0x5f10('0x17')](_0x5f10('0x6'));}else{this[_0x5f10('0x17')](_0x5f10('0xf'));}}},'crow':function(){if(c!=0x2){this['echo']($(_0x5f10('0x18')));if(help2){if('TAgIZ'===_0x5f10('0x12')){this[_0x5f10('0x17')](_0x5f10('0x1'));}else{c++;}}}else{document[_0x5f10('0xe')](_0x5f10('0x19'))[_0x5f10('0x4')][_0x5f10('0xc')]=_0x5f10('0x9');document['querySelector']('p')[_0x5f10('0x4')][_0x5f10('0xc')]=_0x5f10('0xa');document[_0x5f10('0xe')]('p')[_0x5f10('0xd')]=_0x5f10('0x11');}},'destroy':function(){this[_0x5f10('0x17')]($(_0x5f10('0xb')));desCount++;},'terminate':function(){this['echo']($(_0x5f10('0xb')));desCount++;},'help':function(){if(desCount<0x1){this[_0x5f10('0x17')]('hello:\x20type\x20\x22hello\x22\x20followed\x20by\x20a\x20name\x20to\x20get\x20a\x20greeting\x20\x0acrow:\x20displays\x20image\x20of\x20a\x20crow\x20\x0adestroy:\x20terminate\x20terminal\x20\x0aterminate:\x20terminate\x20terminal');}else if(!help2){this[_0x5f10('0x17')](_0x5f10('0x6'));}else{if(_0x5f10('0x14')===_0x5f10('0x0')){this[_0x5f10('0x17')]('murder\x20him');}else{this[_0x5f10('0x17')](_0x5f10('0x10'));}}},'t̷e̵r̸m̶i̸n̶a̷t̸e̸':function(){if(desCount>=0x1){if(_0x5f10('0x3')!=='ifoJs'){c++;}else{this[_0x5f10('0x17')](_0x5f10('0x16'));help2=!![];}}}},{'greetings':'Enigma\x20Terminal\x20--\x20type\x20\x22help\x22\x20to\x20get\x20a\x20list\x20of\x20commands'});
      </script>
</html>
