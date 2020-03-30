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
                if($row['Stage'] <= 3){
                  $update = "UPDATE `leaderboard` SET `Stage`=3 WHERE `Team` = '".$user."'";
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
     <style media="screen">
     video{
       position:fixed;
       height: 101vh;
       width: 101vw;
       z-index:100;
     }
     body{
       overflow:hidden;
     }
     @import url('https://fonts.googleapis.com/css?family=Titan+One');

 body{text-align:center}
 div{display:block;position:absolute}

 .container{
 	width:320px;
 	height:320px;
 	top:50%;
 	left:50%;
 	transform:translate(-50%,-50%);
  z-index:-100;
  display:none;
 	}

 h1{
 	background:#fff;
 	width:100%;
 	height:100%;
 	margin:0;
 	padding:0;
 	display:flex;
 	font-family:'Titan One',cursive;
 	font-size:90px;
 	font-weight:700;
 	flex-flow:row wrap;
 	align-content:center;
 	justify-content:center
 	}

 h1 span{width:100%;position:relative}

 h1 span:before{
 	background:linear-gradient(45deg,#fc5c7d,#6a82fb,#fc5c7d);
 	width:100%;
 	height:100%;
 	display:block;
 	position:absolute;
 	content:"";
 	mix-blend-mode:screen
 	}

 [class*="blobs"]
 	{mix-blend-mode:color;animation:blobs 15s ease-in-out infinite alternate}

 .blobs_1{
 	background:#ff1493;
 	width:60px;
 	height:60px;
 	top:90px;
 	left:210px
 	}

 .blobs_2{
 	background:#ff4500;
 	width:80px;
 	height:80px;
 	top:155px;
 	left:230px
 	}

 .blobs_3{
 	background:#00ff00;
 	width:60px;
 	height:60px;
 	top:145px;
 	left:20px
 	}

 .blobs_4{
 	background:#ff0000;
 	width:100px;
 	height:100px;
 	top:115px;
 	left:100px
 	}

 .blobs_5{
 	background:#ffff00;
 	width:50px;
 	height:50px;
 	top:55px;
 	left:70px
 	}

 .blobs_6{
 	background:#00ffff;
 	width:60px;
 	height:60px;
 	top:220px;
 	left:55px
 	}

 .blobs_7{
 	background:#ff8c00;
 	width:50px;
 	height:50px;
 	top:210px;
 	left:180px
 	}

 @keyframes blobs{
 	0%{border-radius:26% 74% 61% 39% / 54% 67% 33% 46%}
 	10%{border-radius:74% 26% 47% 53% / 68% 46% 54% 32%}
 	20%{border-radius:48% 52% 30% 70% / 27% 37% 63% 73%}
 	30%{border-radius:73% 27% 57% 43% / 28% 67% 33% 72%}
 	40%{border-radius:63% 37% 56% 44% / 25% 28% 72% 75%}
 	50%{border-radius:39% 61% 70% 30% / 61% 29% 71% 39%}
 	60%{border-radius:27% 73% 29% 71% / 73% 51% 49% 27%}
 	70%{border-radius:39% 61% 65% 35% / 74% 65% 35% 26%}
 	80%{border-radius:55% 45% 37% 63% / 38% 30% 70% 62%}
 	90%{border-radius:25% 75% 70% 30% / 39% 50% 50% 61%}
 	100%{border-radius:66% 34% 33% 67% / 65% 73% 27% 35%}
 	}
     </style>
</head>
<body onkeypress = "myKeyPress(event)">
  <video controls autoplay onplay = "onPlayHide()" id="myVideo">
    <source src="Stage Three.mp4" type="video/mp4">
  </video>
  <div class="container" id = "cont">
  	<h1><span id = "span"></span></h1>

  	<div class="blobs_1"></div>
  	<div class="blobs_2"></div>
  	<div class="blobs_3"></div>
  	<div class="blobs_4"></div>
  	<div class="blobs_5"></div>
  	<div class="blobs_6"></div>
  	<div class="blobs_7"></div>
  </div>

  <img src="" alt="">

</body>
<script type="text/javascript">

function myKeyPress(e){
   var keynum;

   if(window.event) { // IE
     keynum = e.keyCode;
   } else if(e.which){ // Netscape/Firefox/Opera
     keynum = e.which;
   }

  if(String.fromCharCode(keynum) != "@" && String.fromCharCode(keynum) != "2" && String.fromCharCode(keynum) != "5" && String.fromCharCode(keynum) != "_" && String.fromCharCode(keynum) != "t" && String.fromCharCode(keynum) != "x" && String.fromCharCode(keynum) != "v" && String.fromCharCode(keynum) != "n"){
    document.querySelector("span").textContent = String.fromCharCode(keynum);
  }
 }

function onPlayHide(){
     setTimeout(hideDiv, 8000);
   }

     function hideDiv() {
         document.getElementById("myVideo").style.display="none";
         document.getElementById("cont").style.display="block";

     }

</script>
</html>
