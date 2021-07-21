<?php
include $_SERVER["DOCUMENT_ROOT"] . "/global/authorization_check.php";

if( !(authorize(1)) ){
  header("HTTP/1.0 404 Not Found",TRUE, 404);
  include($_SERVER["DOCUMENT_ROOT"] . "/404.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terminal Determination</title>

    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/global.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css"/>
  </head>
  <body>
    <div class="wrapper">
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/global/header.html") ?>
    </div>

  </body>

  <!-- <style media="screen">
  article{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  p{
    font-size: 2rem;
    text-align: center;
    margin: 0;
  }
  </style> -->
  <script>
    responses = {
      "greet":"Welcome to CryptOS v1.3!" + "\n" + "This is Dr. Bauer, the password to my CryptOS account is the name of a town." +
      " Please use this as a hint: 9781883362102, 166." + "\n" +
      "Type 'login' followed by a password to access your account."
    }
    $('body').terminal({
        login: function(what) {
          if(what == "churubusco" || what == "Churubusco"){
              this.echo("Welcome, Dr. Ivy Bauer. Your account has been deactivated due to d̴͖̤̏͂e̸̢̙̫͒á̵̡͙͊t̸̨̓h̴̞͂̉̔. To reactivate your account, " +
              "please type 'activate' followed by the 14-digit Noblesville Southeastern Public Library barcode number.");
            }else{
              this.echo("-- Error, no user found.")
            }
        },
        activate: function(what){
          if(what == "50508014929278"){
            this.echo("Your account has been reactivated. Your last recorded cryptid was, 'The Beast of Busco' with an ID number" +
            " of: 18648304.");
          }else{
            this.echo("--Incorrect verification number.")
          }
        }

    }, {
        greetings: responses.greet
    });
</script>
</html>
