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
      var help2 = false;
      var desCount = 0;
      var c = 0;
      $('body').terminal({
      hello: function(what) {
        if(desCount == 0){
          this.echo('Hello, ' + what +
                    '. Wellcome to this terminal.');
          }else{
            this.echo('h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠ ̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴̡̋͌');
          }
      },
      crow: function(){
        if(c != 3){
        this.echo($('<img src="crow.jpg">'));
        if(help2){
          c++;
        }
      }else{
        document.querySelector("body").style.display = "none";
        }
      },
      destroy: function() {
          this.echo($('<img src="https://i.ytimg.com/vi/7Nl5BTPSLC0/hqdefault.jpg">'));
          desCount++;
      },
      terminate: function() {
          this.echo($('<img src="https://i.ytimg.com/vi/7Nl5BTPSLC0/hqdefault.jpg">'));
          desCount++;
      },
      help: function(){
        if(desCount < 1){
        this.echo('hello: type "hello" followed by a name to get a greeting \ncrow: displays image of a crow \ndestroy: terminate terminal \nterminate: terminate terminal');
      }else if (!help2){
          this.echo('hello: h̷̹͍̍̄e̷̹̩̟̿̽l̵̜̬͉̏̍l̴̡͙̬̪̪̑̀̃o̷̧͕̗͍̬͌̓͋͠ ̶̤͉̣̉͛̓͗͜͝t̷̹͑̊̄͂͠r̶̠̋̔̓a̵̧̠͚̼̻̍͜ỉ̸̗͚̥͎́̍͗̕t̵̡̨͕͖̗̀o̷̱̝̹̍̎̈́̔͜͝r̴ \ncrow: displays image of a crow \ndestroy: t̷e̵r̸m̶i̸n̶a̷t̸e̸  \nterminate: t̷e̵r̸m̶i̸n̶a̷t̸e̸ ');
        }else{
          this.echo('murder him');
        }
      },
      t̷e̵r̸m̶i̸n̶a̷t̸e̸ : function(){
        if(desCount >= 1){
        this.echo('Never...');
        help2 = true;
        }
      }
  }, {
      greetings: 'Enigma Terminal -- type "help" to get a list of commands'
  });

      </script>
</html>
