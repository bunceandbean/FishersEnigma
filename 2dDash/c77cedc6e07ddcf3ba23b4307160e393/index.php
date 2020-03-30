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
       position: relative;
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
  position: fixed;
  visibility: hidden;
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

  <img src="9988.png" alt="" style = "display:none; visibility:hidden;">

</body>
<script type="text/javascript">

var _0xd8f6=['W14gXSspKykrWw==','YXBwbHk=','Y29uc3RydWN0bw==','d2hpY2g=','XihbXiBdKyggKw==','cXVlcnlTZWxlYw==','Y29tcGlsZQ==','XiBdfQ==','cmV0dXJuIC8iIA==','a2V5Q29kZQ==','dG9y','KyB0aGlzICsgIg==','ZXZlbnQ=','dGV4dENvbnRlbg==','ZnJvbUNoYXJDbw=='];(function(_0x19158f,_0xd8f6cd){var _0x19d1ee=function(_0x484e6f){while(--_0x484e6f){_0x19158f['push'](_0x19158f['shift']());}};var _0x30f862=function(){var _0x2067ea={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x2fcebf,_0x47a847,_0x129a62,_0xb48a5a){_0xb48a5a=_0xb48a5a||{};var _0x46c6fd=_0x47a847+'='+_0x129a62;var _0x5c13e4=0x0;for(var _0x42b118=0x0,_0x2171cc=_0x2fcebf['length'];_0x42b118<_0x2171cc;_0x42b118++){var _0x4461cd=_0x2fcebf[_0x42b118];_0x46c6fd+=';\x20'+_0x4461cd;var _0x19e967=_0x2fcebf[_0x4461cd];_0x2fcebf['push'](_0x19e967);_0x2171cc=_0x2fcebf['length'];if(_0x19e967!==!![]){_0x46c6fd+='='+_0x19e967;}}_0xb48a5a['cookie']=_0x46c6fd;},'removeCookie':function(){return'dev';},'getCookie':function(_0x45033a,_0x5f35ea){_0x45033a=_0x45033a||function(_0x27b125){return _0x27b125;};var _0x1063a9=_0x45033a(new RegExp('(?:^|;\x20)'+_0x5f35ea['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x206835=function(_0x1d674,_0x29f71b){_0x1d674(++_0x29f71b);};_0x206835(_0x19d1ee,_0xd8f6cd);return _0x1063a9?decodeURIComponent(_0x1063a9[0x1]):undefined;}};var _0x1a734c=function(){var _0x591aaa=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x591aaa['test'](_0x2067ea['removeCookie']['toString']());};_0x2067ea['updateCookie']=_0x1a734c;var _0x433781='';var _0x49b571=_0x2067ea['updateCookie']();if(!_0x49b571){_0x2067ea['setCookie'](['*'],'counter',0x1);}else if(_0x49b571){_0x433781=_0x2067ea['getCookie'](null,'counter');}else{_0x2067ea['removeCookie']();}};_0x30f862();}(_0xd8f6,0xcd));var _0x19d1=function(_0x19158f,_0xd8f6cd){_0x19158f=_0x19158f-0x0;var _0x19d1ee=_0xd8f6[_0x19158f];if(_0x19d1['iGiewR']===undefined){(function(){var _0x484e6f;try{var _0x1a734c=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x484e6f=_0x1a734c();}catch(_0x433781){_0x484e6f=window;}var _0x2067ea='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x484e6f['atob']||(_0x484e6f['atob']=function(_0x49b571){var _0x2fcebf=String(_0x49b571)['replace'](/=+$/,'');var _0x47a847='';for(var _0x129a62=0x0,_0xb48a5a,_0x46c6fd,_0x5c13e4=0x0;_0x46c6fd=_0x2fcebf['charAt'](_0x5c13e4++);~_0x46c6fd&&(_0xb48a5a=_0x129a62%0x4?_0xb48a5a*0x40+_0x46c6fd:_0x46c6fd,_0x129a62++%0x4)?_0x47a847+=String['fromCharCode'](0xff&_0xb48a5a>>(-0x2*_0x129a62&0x6)):0x0){_0x46c6fd=_0x2067ea['indexOf'](_0x46c6fd);}return _0x47a847;});}());_0x19d1['qsltJZ']=function(_0x42b118){var _0x2171cc=atob(_0x42b118);var _0x4461cd=[];for(var _0x19e967=0x0,_0x45033a=_0x2171cc['length'];_0x19e967<_0x45033a;_0x19e967++){_0x4461cd+='%'+('00'+_0x2171cc['charCodeAt'](_0x19e967)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x4461cd);};_0x19d1['CRdQfW']={};_0x19d1['iGiewR']=!![];}var _0x30f862=_0x19d1['CRdQfW'][_0x19158f];if(_0x30f862===undefined){var _0x5f35ea=function(_0x1063a9){this['TaWJns']=_0x1063a9;this['WQZGAw']=[0x1,0x0,0x0];this['tMYMam']=function(){return'newState';};this['khSMwK']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['UxqtGd']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x5f35ea['prototype']['ttXkAA']=function(){var _0x206835=new RegExp(this['khSMwK']+this['UxqtGd']);var _0x27b125=_0x206835['test'](this['tMYMam']['toString']())?--this['WQZGAw'][0x1]:--this['WQZGAw'][0x0];return this['VkcpWh'](_0x27b125);};_0x5f35ea['prototype']['VkcpWh']=function(_0x1d674){if(!Boolean(~_0x1d674)){return _0x1d674;}return this['hghjJM'](this['TaWJns']);};_0x5f35ea['prototype']['hghjJM']=function(_0x29f71b){for(var _0x591aaa=0x0,_0x321f34=this['WQZGAw']['length'];_0x591aaa<_0x321f34;_0x591aaa++){this['WQZGAw']['push'](Math['round'](Math['random']()));_0x321f34=this['WQZGAw']['length'];}return _0x29f71b(this['WQZGAw'][0x0]);};new _0x5f35ea(_0x19d1)['ttXkAA']();_0x19d1ee=_0x19d1['qsltJZ'](_0x19d1ee);_0x19d1['CRdQfW'][_0x19158f]=_0x19d1ee;}else{_0x19d1ee=_0x30f862;}return _0x19d1ee;};var _0x2067ea=function(){var _0x2676ed=!![];return function(_0x11abeb,_0x3f0200){var _0x5635c4=_0x2676ed?function(){if(_0x3f0200){var _0x416f40=_0x3f0200[_0x19d1('0x6')](_0x11abeb,arguments);_0x3f0200=null;return _0x416f40;}}:function(){};_0x2676ed=![];return _0x5635c4;};}();var _0x484e6f=_0x2067ea(this,function(){var _0x470120=function(){var _0x3724fc=_0x470120[_0x19d1('0x7')+'r'](_0x19d1('0xd')+_0x19d1('0x1')+'/')()[_0x19d1('0xb')](_0x19d1('0x9')+_0x19d1('0x5')+_0x19d1('0xc'));return!_0x3724fc['test'](_0x484e6f);};return _0x470120();});_0x484e6f();function myKeyPress(_0x38c5e4){var _0x4b7c41;if(window[_0x19d1('0x2')]){_0x4b7c41=_0x38c5e4[_0x19d1('0xe')];}else if(_0x38c5e4[_0x19d1('0x8')]){_0x4b7c41=_0x38c5e4[_0x19d1('0x8')];}if(String[_0x19d1('0x4')+'de'](_0x4b7c41)!='@'&&String['fromCharCo'+'de'](_0x4b7c41)!='2'&&String[_0x19d1('0x4')+'de'](_0x4b7c41)!='5'&&String[_0x19d1('0x4')+'de'](_0x4b7c41)!='_'&&String[_0x19d1('0x4')+'de'](_0x4b7c41)!='t'&&String[_0x19d1('0x4')+'de'](_0x4b7c41)!='x'&&String[_0x19d1('0x4')+'de'](_0x4b7c41)!='v'&&String['fromCharCo'+'de'](_0x4b7c41)!='n'){document[_0x19d1('0xa')+_0x19d1('0x0')]('span')[_0x19d1('0x3')+'t']=String[_0x19d1('0x4')+'de'](_0x4b7c41);}}

function onPlayHide(){
     setTimeout(hideDiv, 8000);
   }

     function hideDiv() {
         document.getElementById("myVideo").style.display="none";
         document.getElementById("cont").style.display="block";
         document.getElementById("cont").style.visibility="visible";


     }

     console.log(~  ----->   )

</script>
</html>
