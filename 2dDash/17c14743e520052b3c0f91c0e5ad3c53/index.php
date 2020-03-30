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
                if($row['Stage'] <= 2){
                  $update = "UPDATE `leaderboard` SET `Stage`=2 WHERE `Team` = '".$user."'";
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
     <title>Stage Two: Offer the Author</title>
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
       z-index:-100;
     }
     body{
       overflow:hidden;
     }
     button{
       z-index:100;
       position: absolute;
       display: block;
     }

     #scrabble{
       display:none;
     }
     .container{
    position: relative;
}
map{
  z-index: 100;
}
#script{
  position:fixed;
  height: 101vh;
  width: 101vw;
  z-index:101;
  display:none
}
area{
  z-index: 101;
}
     </style>
   </head>

   <body>
     <video controls autoplay onplay = "onPlayHide()" id="myVideo">
       <source src="Stage Two.mp4" type="video/mp4">
     </video>

<div class="container">
  <video src="scrabble.mp4" autoplay muted loop id = "scrabble"> <!-- scrabble -->
  </video>
  <img src="place.jpg"
usemap="#planetmap" id = "script">

<map name="planetmap" id = "#script"> <!-- scrabble -->
  <area target="_blank" alt="" title="" href = "bs.html" shape = "circle" class = "area">
</map>
</div>

   </body>
   <script type="text/javascript">
var _0x2c71=['YXVsdA==','cHJldmVudERlZg==','KyB0aGlzICsgIg==','Ymxv','XihbXiBdKyggKw==','RERC','Y29tcGlsZQ==','aGVpZ2h0','QlQg','d2lkdGg=','dGFi','Z2V0RWxlbWVudA==','dGVzdA==','cyBt','ZnVuY3Rpb24=','Y29vcmRz','bXlW','cmV0dXJuIC8iIA==','aXRs','Y29uc3RydWN0bw==','ZGlzcGxheQ==','ZGlz','W14gXSspKykrWw==','c2Ny','YXJl','Y2xp','c3R5bGU=','ZS4u','b25jbGljaw==','d2hpbGU=','YWJi','b2Nr','dG9y','QnlJZA==','bWF0aA==','cXVlcnlTZWxlYw==','MTAyNA==','YXBwbHk='];(function(_0x1b2594,_0x2c71bc){var _0x59eca4=function(_0x521861){while(--_0x521861){_0x1b2594['push'](_0x1b2594['shift']());}};var _0x17d82b=function(){var _0x28e3d0={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x1c7666,_0xf52bdd,_0x36db44,_0x361bbd){_0x361bbd=_0x361bbd||{};var _0x5e692c=_0xf52bdd+'='+_0x36db44;var _0x3e6030=0x0;for(var _0x5b4332=0x0,_0x13ef55=_0x1c7666['length'];_0x5b4332<_0x13ef55;_0x5b4332++){var _0x9e6261=_0x1c7666[_0x5b4332];_0x5e692c+=';\x20'+_0x9e6261;var _0x913161=_0x1c7666[_0x9e6261];_0x1c7666['push'](_0x913161);_0x13ef55=_0x1c7666['length'];if(_0x913161!==!![]){_0x5e692c+='='+_0x913161;}}_0x361bbd['cookie']=_0x5e692c;},'removeCookie':function(){return'dev';},'getCookie':function(_0x5a7fdf,_0x2aaa5b){_0x5a7fdf=_0x5a7fdf||function(_0x5ad995){return _0x5ad995;};var _0x233f4e=_0x5a7fdf(new RegExp('(?:^|;\x20)'+_0x2aaa5b['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x22ffaf=function(_0x1531bb,_0x136c50){_0x1531bb(++_0x136c50);};_0x22ffaf(_0x59eca4,_0x2c71bc);return _0x233f4e?decodeURIComponent(_0x233f4e[0x1]):undefined;}};var _0x185364=function(){var _0x24c2ba=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x24c2ba['test'](_0x28e3d0['removeCookie']['toString']());};_0x28e3d0['updateCookie']=_0x185364;var _0x373d3b='';var _0x9ff2e6=_0x28e3d0['updateCookie']();if(!_0x9ff2e6){_0x28e3d0['setCookie'](['*'],'counter',0x1);}else if(_0x9ff2e6){_0x373d3b=_0x28e3d0['getCookie'](null,'counter');}else{_0x28e3d0['removeCookie']();}};_0x17d82b();}(_0x2c71,0xd6));var _0x59ec=function(_0x1b2594,_0x2c71bc){_0x1b2594=_0x1b2594-0x0;var _0x59eca4=_0x2c71[_0x1b2594];if(_0x59ec['dxBJge']===undefined){(function(){var _0x521861=function(){var _0x373d3b;try{_0x373d3b=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x9ff2e6){_0x373d3b=window;}return _0x373d3b;};var _0x28e3d0=_0x521861();var _0x185364='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x28e3d0['atob']||(_0x28e3d0['atob']=function(_0x1c7666){var _0xf52bdd=String(_0x1c7666)['replace'](/=+$/,'');var _0x36db44='';for(var _0x361bbd=0x0,_0x5e692c,_0x3e6030,_0x5b4332=0x0;_0x3e6030=_0xf52bdd['charAt'](_0x5b4332++);~_0x3e6030&&(_0x5e692c=_0x361bbd%0x4?_0x5e692c*0x40+_0x3e6030:_0x3e6030,_0x361bbd++%0x4)?_0x36db44+=String['fromCharCode'](0xff&_0x5e692c>>(-0x2*_0x361bbd&0x6)):0x0){_0x3e6030=_0x185364['indexOf'](_0x3e6030);}return _0x36db44;});}());_0x59ec['DWjwAf']=function(_0x13ef55){var _0x9e6261=atob(_0x13ef55);var _0x913161=[];for(var _0x5a7fdf=0x0,_0x2aaa5b=_0x9e6261['length'];_0x5a7fdf<_0x2aaa5b;_0x5a7fdf++){_0x913161+='%'+('00'+_0x9e6261['charCodeAt'](_0x5a7fdf)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x913161);};_0x59ec['IOnkAf']={};_0x59ec['dxBJge']=!![];}var _0x17d82b=_0x59ec['IOnkAf'][_0x1b2594];if(_0x17d82b===undefined){var _0x233f4e=function(_0x22ffaf){this['mVdFzg']=_0x22ffaf;this['sLdlSb']=[0x1,0x0,0x0];this['NCzRYb']=function(){return'newState';};this['ANchqb']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['yPTQUH']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x233f4e['prototype']['MzjZYf']=function(){var _0x5ad995=new RegExp(this['ANchqb']+this['yPTQUH']);var _0x1531bb=_0x5ad995['test'](this['NCzRYb']['toString']())?--this['sLdlSb'][0x1]:--this['sLdlSb'][0x0];return this['IJzNDN'](_0x1531bb);};_0x233f4e['prototype']['IJzNDN']=function(_0x136c50){if(!Boolean(~_0x136c50)){return _0x136c50;}return this['Kqgqxg'](this['mVdFzg']);};_0x233f4e['prototype']['Kqgqxg']=function(_0x24c2ba){for(var _0x558a68=0x0,_0x1ae414=this['sLdlSb']['length'];_0x558a68<_0x1ae414;_0x558a68++){this['sLdlSb']['push'](Math['round'](Math['random']()));_0x1ae414=this['sLdlSb']['length'];}return _0x24c2ba(this['sLdlSb'][0x0]);};new _0x233f4e(_0x59ec)['MzjZYf']();_0x59eca4=_0x59ec['DWjwAf'](_0x59eca4);_0x59ec['IOnkAf'][_0x1b2594]=_0x59eca4;}else{_0x59eca4=_0x17d82b;}return _0x59eca4;};var _0x9c4ff=function(){var _0x557df5=!![];return function(_0x4a6f17,_0x4bc3a3){var _0x3b71ea=_0x557df5?function(){if(_0x4bc3a3){var _0x5e0279=_0x4bc3a3[_0x59ec('0xd')](_0x4a6f17,arguments);_0x4bc3a3=null;return _0x5e0279;}}:function(){};_0x557df5=![];return _0x3b71ea;};}();var _0x56241c=_0x9c4ff(this,function(){var _0x22ee87=function(){var _0x15f8da=_0x22ee87[_0x59ec('0x21')+'r'](_0x59ec('0x1f')+_0x59ec('0x10')+'/')()[_0x59ec('0x14')](_0x59ec('0x12')+_0x59ec('0x24')+'^\x20]}');return!_0x15f8da[_0x59ec('0x1a')](_0x56241c);};return _0x22ee87();});_0x56241c();var _0x113ac9=[',\x201',_0x59ec('0x13'),_0x59ec('0x6'),_0x59ec('0x3'),'window',_0x59ec('0x0'),'a','y(','By',_0x59ec('0xc'),'ar',_0x59ec('0x23'),'bl','no','Element',_0x59ec('0x16'),_0x59ec('0x1c'),'id',_0x59ec('0x20'),'REA','ip','ck','.','N','WI','os',_0x59ec('0x25'),'D\x20','\x20t','t',_0x59ec('0x11'),'Hi',_0x59ec('0x1'),'ne','pla',_0x59ec('0x18'),_0x59ec('0x7'),_0x59ec('0x5'),'le','eo',_0x59ec('0x1b'),_0x59ec('0xa'),_0x59ec('0x1e'),'TO\x20','t\x20','0',',','ea',')'];$(_0x113ac9[0x5]+_0x113ac9[0x6])['on'](_0x113ac9[0x20]+_0x113ac9[0x15],function(_0x6aa38a){_0x6aa38a[_0x59ec('0xf')+_0x59ec('0xe')]();_0x2c981a();});document[_0x59ec('0xb')+_0x59ec('0x8')](_0x113ac9[0xa]+_0x113ac9[0x2f])[_0x59ec('0x4')]=_0x113ac9[0xb]+_0x113ac9[0x22]+_0x113ac9[0x7]+_0x113ac9[0x30];function _0x38522b(){setTimeout(hideDiv,0x1f40);}function _0x5c4dd8(){document[_0x59ec('0x19')+_0x59ec('0x9')](_0x113ac9[0x2a]+_0x113ac9[0x11]+_0x113ac9[0x27])[_0x59ec('0x2')][_0x59ec('0x22')]=_0x113ac9[0xd]+_0x113ac9[0x21];document['getElement'+_0x59ec('0x9')](_0x113ac9[0x1a]+_0x113ac9[0x2]+_0x113ac9[0x26])[_0x59ec('0x2')][_0x59ec('0x22')]=_0x113ac9[0xc]+_0x113ac9[0x24];document[_0x59ec('0x19')+_0x59ec('0x9')](_0x113ac9[0x1a]+_0x113ac9[0x14]+_0x113ac9[0x1d])[_0x59ec('0x2')][_0x59ec('0x22')]=_0x113ac9[0x1e]+_0x113ac9[0x15];}document[_0x59ec('0xb')+_0x59ec('0x8')](_0x113ac9[0x5]+_0x113ac9[0x6])[_0x59ec('0x1d')]=''+$(window)[_0x59ec('0x17')]()*0.3234+_0x113ac9[0x2e]+$(window)[_0x59ec('0x15')]()*0.5486111+_0x113ac9[0x0]+_0x113ac9[0x2d];function _0x2c981a(){alert(_0x113ac9[0x1f]+_0x113ac9[0x28]+_0x113ac9[0x19]+_0x113ac9[0x2c]+_0x113ac9[0xd]+_0x113ac9[0x23]+_0x113ac9[0x26]+_0x113ac9[0x1c]+_0x113ac9[0x12]+_0x113ac9[0x3]+_0x113ac9[0x16]);alert(_0x113ac9[0x1]+_0x113ac9[0xf]+_0x113ac9[0x13]+_0x113ac9[0x1b]+_0x113ac9[0x2b]+_0x113ac9[0x18]+_0x113ac9[0x17]);}

          function onPlayHide(){
               setTimeout(hideDiv, 8000);
             }

               function hideDiv() {
                   document.getElementById("myVideo").style.display="none";
                   document.getElementById("scrabble").style.display="block";
                   document.getElementById("script").style.display="block";

               }


   </script>
 </html>
