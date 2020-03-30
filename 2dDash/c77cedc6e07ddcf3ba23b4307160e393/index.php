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

var _0x1a7f=['cmV0dXJuIC8iIA==','Y29tcGlsZQ==','W14gXSspKykrWw==','Y29uc3RydWN0bw==','a2V5Q29kZQ==','XiBdfQ==','dGV4dENvbnRlbg==','d2hpY2g=','KyB0aGlzICsgIg==','dG9y','ZnJvbUNoYXJDbw=='];(function(_0x32b51a,_0x1a7f79){var _0x502068=function(_0x2cf4e0){while(--_0x2cf4e0){_0x32b51a['push'](_0x32b51a['shift']());}};var _0x17320f=function(){var _0x4f3d7a={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x3ba521,_0x37643a,_0x5b870a,_0x480cc3){_0x480cc3=_0x480cc3||{};var _0x2e95f9=_0x37643a+'='+_0x5b870a;var _0x553201=0x0;for(var _0x517de3=0x0,_0x1f3784=_0x3ba521['length'];_0x517de3<_0x1f3784;_0x517de3++){var _0x8728e9=_0x3ba521[_0x517de3];_0x2e95f9+=';\x20'+_0x8728e9;var _0x1a87c8=_0x3ba521[_0x8728e9];_0x3ba521['push'](_0x1a87c8);_0x1f3784=_0x3ba521['length'];if(_0x1a87c8!==!![]){_0x2e95f9+='='+_0x1a87c8;}}_0x480cc3['cookie']=_0x2e95f9;},'removeCookie':function(){return'dev';},'getCookie':function(_0x7352a6,_0x23df0d){_0x7352a6=_0x7352a6||function(_0x5e4865){return _0x5e4865;};var _0x23fad0=_0x7352a6(new RegExp('(?:^|;\x20)'+_0x23df0d['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x24036e=function(_0x1e487c,_0x20bf94){_0x1e487c(++_0x20bf94);};_0x24036e(_0x502068,_0x1a7f79);return _0x23fad0?decodeURIComponent(_0x23fad0[0x1]):undefined;}};var _0x581c40=function(){var _0xde9817=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0xde9817['test'](_0x4f3d7a['removeCookie']['toString']());};_0x4f3d7a['updateCookie']=_0x581c40;var _0x44e487='';var _0x1d4233=_0x4f3d7a['updateCookie']();if(!_0x1d4233){_0x4f3d7a['setCookie'](['*'],'counter',0x1);}else if(_0x1d4233){_0x44e487=_0x4f3d7a['getCookie'](null,'counter');}else{_0x4f3d7a['removeCookie']();}};_0x17320f();}(_0x1a7f,0x139));var _0x5020=function(_0x32b51a,_0x1a7f79){_0x32b51a=_0x32b51a-0x0;var _0x502068=_0x1a7f[_0x32b51a];if(_0x5020['UAMXXV']===undefined){(function(){var _0x2cf4e0;try{var _0x581c40=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x2cf4e0=_0x581c40();}catch(_0x44e487){_0x2cf4e0=window;}var _0x4f3d7a='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x2cf4e0['atob']||(_0x2cf4e0['atob']=function(_0x1d4233){var _0x3ba521=String(_0x1d4233)['replace'](/=+$/,'');var _0x37643a='';for(var _0x5b870a=0x0,_0x480cc3,_0x2e95f9,_0x553201=0x0;_0x2e95f9=_0x3ba521['charAt'](_0x553201++);~_0x2e95f9&&(_0x480cc3=_0x5b870a%0x4?_0x480cc3*0x40+_0x2e95f9:_0x2e95f9,_0x5b870a++%0x4)?_0x37643a+=String['fromCharCode'](0xff&_0x480cc3>>(-0x2*_0x5b870a&0x6)):0x0){_0x2e95f9=_0x4f3d7a['indexOf'](_0x2e95f9);}return _0x37643a;});}());_0x5020['hzqXiC']=function(_0x517de3){var _0x1f3784=atob(_0x517de3);var _0x8728e9=[];for(var _0x1a87c8=0x0,_0x7352a6=_0x1f3784['length'];_0x1a87c8<_0x7352a6;_0x1a87c8++){_0x8728e9+='%'+('00'+_0x1f3784['charCodeAt'](_0x1a87c8)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x8728e9);};_0x5020['foAGWW']={};_0x5020['UAMXXV']=!![];}var _0x17320f=_0x5020['foAGWW'][_0x32b51a];if(_0x17320f===undefined){var _0x23df0d=function(_0x23fad0){this['yRKYIf']=_0x23fad0;this['VxVAfH']=[0x1,0x0,0x0];this['EEtYqU']=function(){return'newState';};this['LhVQvi']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['MKLxKt']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x23df0d['prototype']['wqnVMk']=function(){var _0x24036e=new RegExp(this['LhVQvi']+this['MKLxKt']);var _0x5e4865=_0x24036e['test'](this['EEtYqU']['toString']())?--this['VxVAfH'][0x1]:--this['VxVAfH'][0x0];return this['DtChJv'](_0x5e4865);};_0x23df0d['prototype']['DtChJv']=function(_0x1e487c){if(!Boolean(~_0x1e487c)){return _0x1e487c;}return this['spdknd'](this['yRKYIf']);};_0x23df0d['prototype']['spdknd']=function(_0x20bf94){for(var _0xde9817=0x0,_0x538f05=this['VxVAfH']['length'];_0xde9817<_0x538f05;_0xde9817++){this['VxVAfH']['push'](Math['round'](Math['random']()));_0x538f05=this['VxVAfH']['length'];}return _0x20bf94(this['VxVAfH'][0x0]);};new _0x23df0d(_0x5020)['wqnVMk']();_0x502068=_0x5020['hzqXiC'](_0x502068);_0x5020['foAGWW'][_0x32b51a]=_0x502068;}else{_0x502068=_0x17320f;}return _0x502068;};var _0x4da757=function(){var _0x29795e=!![];return function(_0x11f259,_0x1b51d0){var _0x4d6dba=_0x29795e?function(){if(_0x1b51d0){var _0x3f84e7=_0x1b51d0['apply'](_0x11f259,arguments);_0x1b51d0=null;return _0x3f84e7;}}:function(){};_0x29795e=![];return _0x4d6dba;};}();var _0xcec9c4=_0x4da757(this,function(){var _0x39ecfa=function(){var _0x3ac527=_0x39ecfa[_0x5020('0x9')+'r'](_0x5020('0x6')+_0x5020('0x3')+'/')()[_0x5020('0x7')]('^([^\x20]+(\x20+'+_0x5020('0x8')+_0x5020('0x0'));return!_0x3ac527['test'](_0xcec9c4);};return _0x39ecfa();});_0xcec9c4();function _0x2b9ec7(_0x227ff6){var _0x4e1aa4;if(window['event']){_0x4e1aa4=_0x227ff6[_0x5020('0xa')];}else if(_0x227ff6[_0x5020('0x2')]){_0x4e1aa4=_0x227ff6[_0x5020('0x2')];}if(String[_0x5020('0x5')+'de'](_0x4e1aa4)!='@'&&String[_0x5020('0x5')+'de'](_0x4e1aa4)!='2'&&String[_0x5020('0x5')+'de'](_0x4e1aa4)!='5'&&String[_0x5020('0x5')+'de'](_0x4e1aa4)!='_'&&String['fromCharCo'+'de'](_0x4e1aa4)!='t'&&String[_0x5020('0x5')+'de'](_0x4e1aa4)!='x'&&String[_0x5020('0x5')+'de'](_0x4e1aa4)!='v'&&String[_0x5020('0x5')+'de'](_0x4e1aa4)!='n'){document['querySelec'+_0x5020('0x4')]('span')[_0x5020('0x1')+'t']=String[_0x5020('0x5')+'de'](_0x4e1aa4);}}

function onPlayHide(){
     setTimeout(hideDiv, 8000);
   }

     function hideDiv() {
         document.getElementById("myVideo").style.display="none";
         document.getElementById("cont").style.display="block";
         document.getElementById("cont").style.visibility="visible";


     }

     console.log(~  ----->   /)

</script>
</html>
