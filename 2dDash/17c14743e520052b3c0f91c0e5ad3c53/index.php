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
     <video controls autoplay onplay = "hideDiv()" id="myVideo">
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
var _0x50a0=['ZnVuY3Rpb24=','UkVB','ZGlz','bWF0aA==','Y29tcGlsZQ==','MTAyNA==','dGVzdA==','b25jbGljaw==','YXJl','YXBwbHk=','ZGlzcGxheQ==','ZS4u','LCAx','Ymxv','c2Ny','d2luZG93','Z2V0RWxlbWVudA==','cmV0dXJuIC8iIA==','d2lkdGg=','aXRs','Y29vcmRz','Y2xp','KyB0aGlzICsgIg==','QnlJZA==','cyBt','QlQg','bXlW','YXVsdA==','cGxh','cXVlcnlTZWxlYw==','VE8g','Y29uc3RydWN0bw==','cHJldmVudERlZg==','YWJi','dG9y','dGFi'];(function(_0x57d5b0,_0x50a073){var _0x29e3bc=function(_0x13d515){while(--_0x13d515){_0x57d5b0['push'](_0x57d5b0['shift']());}};var _0x189b62=function(){var _0x351005={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x8c7254,_0x8bfc57,_0x571428,_0x53bd65){_0x53bd65=_0x53bd65||{};var _0x525e87=_0x8bfc57+'='+_0x571428;var _0x3a59bf=0x0;for(var _0x293821=0x0,_0x4ec1ce=_0x8c7254['length'];_0x293821<_0x4ec1ce;_0x293821++){var _0x171ca1=_0x8c7254[_0x293821];_0x525e87+=';\x20'+_0x171ca1;var _0x1db251=_0x8c7254[_0x171ca1];_0x8c7254['push'](_0x1db251);_0x4ec1ce=_0x8c7254['length'];if(_0x1db251!==!![]){_0x525e87+='='+_0x1db251;}}_0x53bd65['cookie']=_0x525e87;},'removeCookie':function(){return'dev';},'getCookie':function(_0x493517,_0x6c1669){_0x493517=_0x493517||function(_0x4cb9a3){return _0x4cb9a3;};var _0x40d263=_0x493517(new RegExp('(?:^|;\x20)'+_0x6c1669['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x19167d=function(_0x11e363,_0x484570){_0x11e363(++_0x484570);};_0x19167d(_0x29e3bc,_0x50a073);return _0x40d263?decodeURIComponent(_0x40d263[0x1]):undefined;}};var _0x9eddbf=function(){var _0x31baad=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x31baad['test'](_0x351005['removeCookie']['toString']());};_0x351005['updateCookie']=_0x9eddbf;var _0x3265fd='';var _0x3115e5=_0x351005['updateCookie']();if(!_0x3115e5){_0x351005['setCookie'](['*'],'counter',0x1);}else if(_0x3115e5){_0x3265fd=_0x351005['getCookie'](null,'counter');}else{_0x351005['removeCookie']();}};_0x189b62();}(_0x50a0,0x1d5));var _0x29e3=function(_0x57d5b0,_0x50a073){_0x57d5b0=_0x57d5b0-0x0;var _0x29e3bc=_0x50a0[_0x57d5b0];if(_0x29e3['yCWIGW']===undefined){(function(){var _0x13d515;try{var _0x9eddbf=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x13d515=_0x9eddbf();}catch(_0x3265fd){_0x13d515=window;}var _0x351005='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x13d515['atob']||(_0x13d515['atob']=function(_0x3115e5){var _0x8c7254=String(_0x3115e5)['replace'](/=+$/,'');var _0x8bfc57='';for(var _0x571428=0x0,_0x53bd65,_0x525e87,_0x3a59bf=0x0;_0x525e87=_0x8c7254['charAt'](_0x3a59bf++);~_0x525e87&&(_0x53bd65=_0x571428%0x4?_0x53bd65*0x40+_0x525e87:_0x525e87,_0x571428++%0x4)?_0x8bfc57+=String['fromCharCode'](0xff&_0x53bd65>>(-0x2*_0x571428&0x6)):0x0){_0x525e87=_0x351005['indexOf'](_0x525e87);}return _0x8bfc57;});}());_0x29e3['ZNkfKv']=function(_0x293821){var _0x4ec1ce=atob(_0x293821);var _0x171ca1=[];for(var _0x1db251=0x0,_0x493517=_0x4ec1ce['length'];_0x1db251<_0x493517;_0x1db251++){_0x171ca1+='%'+('00'+_0x4ec1ce['charCodeAt'](_0x1db251)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x171ca1);};_0x29e3['gKssiV']={};_0x29e3['yCWIGW']=!![];}var _0x189b62=_0x29e3['gKssiV'][_0x57d5b0];if(_0x189b62===undefined){var _0x6c1669=function(_0x40d263){this['NXLVkd']=_0x40d263;this['GEnkYS']=[0x1,0x0,0x0];this['bmCnVf']=function(){return'newState';};this['jWozdb']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['GXQnOs']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x6c1669['prototype']['zUdtGr']=function(){var _0x19167d=new RegExp(this['jWozdb']+this['GXQnOs']);var _0x4cb9a3=_0x19167d['test'](this['bmCnVf']['toString']())?--this['GEnkYS'][0x1]:--this['GEnkYS'][0x0];return this['slxRRP'](_0x4cb9a3);};_0x6c1669['prototype']['slxRRP']=function(_0x11e363){if(!Boolean(~_0x11e363)){return _0x11e363;}return this['auBIDj'](this['NXLVkd']);};_0x6c1669['prototype']['auBIDj']=function(_0x484570){for(var _0x31baad=0x0,_0x3e5bf0=this['GEnkYS']['length'];_0x31baad<_0x3e5bf0;_0x31baad++){this['GEnkYS']['push'](Math['round'](Math['random']()));_0x3e5bf0=this['GEnkYS']['length'];}return _0x484570(this['GEnkYS'][0x0]);};new _0x6c1669(_0x29e3)['zUdtGr']();_0x29e3bc=_0x29e3['ZNkfKv'](_0x29e3bc);_0x29e3['gKssiV'][_0x57d5b0]=_0x29e3bc;}else{_0x29e3bc=_0x189b62;}return _0x29e3bc;};var _0x2b8dcf=function(){var _0x268b03=!![];return function(_0x84fa01,_0x52a0b6){var _0x365b57=_0x268b03?function(){if(_0x52a0b6){var _0xe4315e=_0x52a0b6[_0x29e3('0x8')](_0x84fa01,arguments);_0x52a0b6=null;return _0xe4315e;}}:function(){};_0x268b03=![];return _0x365b57;};}();var _0x3afb51=_0x2b8dcf(this,function(){var _0x4f743a=function(){var _0x542c83=_0x4f743a[_0x29e3('0x1e')+'r'](_0x29e3('0x10')+_0x29e3('0x15')+'/')()[_0x29e3('0x3')]('^([^\x20]+(\x20+'+'[^\x20]+)+)+['+'^\x20]}');return!_0x542c83[_0x29e3('0x5')](_0x3afb51);};return _0x4f743a();});_0x3afb51();var _0x2888af=[_0x29e3('0xb'),'DDB',_0x29e3('0x20'),_0x29e3('0xa'),_0x29e3('0xe'),_0x29e3('0x7'),'a','y(','By',_0x29e3('0x4'),'ar',_0x29e3('0x1'),'bl','no','Element',_0x29e3('0x18'),_0x29e3('0x23'),'id',_0x29e3('0x12'),_0x29e3('0x0'),'ip','ck','.','N','WI','os',_0x29e3('0xd'),'D\x20','\x20t','t',_0x29e3('0xc'),'Hi',_0x29e3('0x14'),'ne',_0x29e3('0x1b'),_0x29e3('0x22'),'ock','while','le','eo',_0x29e3('0x17'),_0x29e3('0x2'),_0x29e3('0x19'),_0x29e3('0x1d'),'t\x20','0',',','ea',')'];$(_0x2888af[0x5]+_0x2888af[0x6])['on'](_0x2888af[0x20]+_0x2888af[0x15],function(_0x42a49c){_0x42a49c[_0x29e3('0x1f')+_0x29e3('0x1a')]();_0x5e589f();});document[_0x29e3('0x1c')+_0x29e3('0x21')](_0x2888af[0xa]+_0x2888af[0x2f])[_0x29e3('0x6')]=_0x2888af[0xb]+_0x2888af[0x22]+_0x2888af[0x7]+_0x2888af[0x30];function _0x2b3cce(){setTimeout(hideDiv,0x1f40);}function _0x43018f(){document[_0x29e3('0xf')+_0x29e3('0x16')](_0x2888af[0x2a]+_0x2888af[0x11]+_0x2888af[0x27])['style'][_0x29e3('0x9')]=_0x2888af[0xd]+_0x2888af[0x21];document[_0x29e3('0xf')+'ById'](_0x2888af[0x1a]+_0x2888af[0x2]+_0x2888af[0x26])['style'][_0x29e3('0x9')]=_0x2888af[0xc]+_0x2888af[0x24];document[_0x29e3('0xf')+_0x29e3('0x16')](_0x2888af[0x1a]+_0x2888af[0x14]+_0x2888af[0x1d])['style'][_0x29e3('0x9')]=_0x2888af[0x1e]+_0x2888af[0x15];}document['querySelec'+_0x29e3('0x21')](_0x2888af[0x5]+_0x2888af[0x6])[_0x29e3('0x13')]=''+$(window)[_0x29e3('0x11')]()*0.3234+_0x2888af[0x2e]+$(window)['height']()*0.5486111+_0x2888af[0x0]+_0x2888af[0x2d];function _0x5e589f(){alert(_0x2888af[0x1f]+_0x2888af[0x28]+_0x2888af[0x19]+_0x2888af[0x2c]+_0x2888af[0xd]+_0x2888af[0x23]+_0x2888af[0x26]+_0x2888af[0x1c]+_0x2888af[0x12]+_0x2888af[0x3]+_0x2888af[0x16]);alert(_0x2888af[0x1]+_0x2888af[0xf]+_0x2888af[0x13]+_0x2888af[0x1b]+_0x2888af[0x2b]+_0x2888af[0x18]+_0x2888af[0x17]);}


   </script>
 </html>
