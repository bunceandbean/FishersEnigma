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
     <title>Stage Three: Tu effingo?</title>
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
       position: relative;
       height: 101vh;
       width: 101vw;
       z-index:100;
     }
     body{
       overflow:hidden;
     }
     </style>
       <body>

       </body>
      <script type="text/javascript">
      $('body').terminal({
      hello: function(what) {
          this.echo('Hello, ' + what +
                    '. Wellcome to this terminal.');
      }
  }, {
      greetings: 'My First Terminal'
  });
      </script>
</html>
