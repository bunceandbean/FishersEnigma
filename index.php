<?php

$link = mysqli_connect("localhost", "fishbpzf_admin", "b3b57af55c7a898bcfff2732ae06660e", "fishbpzf_2dDash");
$cal = 0;
$splash = 0;
$numRows = 0;
$tbData = "";
$class = "zui-table";
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM leaderboard";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        // echo "<table>";
        //     echo "<thead> <tr>";
        //         echo "<th>Team</th>";
        //         echo "<th>Stage</th>";
        //     echo "</tr> </thead>";
        while($row = mysqli_fetch_array($result)){
            // echo "<tr>";
                // echo "<td>" . $row['Team'] . "</td>";
                // echo "<td>" . $row['Stage'] . "</td>";
                $tbData = $tbData."<tr><td>" . $row['Team'] . "</td>"."<td>" . $row['Stage'] . "</td></tr>";
            // echo "</tr>";
          }
          // echo "</table>";
        }
      }
?>
<!DOCTYPE html>
<html>
<head>
<title>Fishers Enigma</title>
<meta charset="UTF-8">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">
body{
  overflow: hidden;
}

table {
	 font-family: 'Arial';
	 margin: 25px auto;
	 border-collapse: collapse;
	 border: 1px solid #eee;
	 border-bottom: 2px solid #0cc;
	 box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.10), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);
}
 table tr:hover {
	 background: #f4f4f4;
}
 table tr:hover td {
	 color: #555;
}
 table th, table td {
	 color: #999;
	 border: 1px solid #eee;
	 padding: 12px 35px;
	 border-collapse: collapse;
}
 table th {
	 background: #0cc;
	 color: #fff;
	 text-transform: uppercase;
	 font-size: 12px;
}
 table th.last {
	 border-right: none;
}
  .main-logo,.event-logo,.evlog{
    align: center;
    padding-top: 60px;
    position: relative;
    opacity: 1;
    animation-name: fadeInOpacity;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-duration: 1s;
    animation-direction: normal;
    width: auto ;
  max-width: 100% ;
  min-width: 25%%;
  height: auto ;
  display: block;
  }
.main-logo.active{
  display:none;
}

.abouts.active{
  margin-top: 100px;
  align: center;
  padding-top: 4%;
  position: relative;
  opacity: 1;
  font-size: 30px;
  animation-name: fadeInOpacity;
  animation-iteration-count: 1;
  animation-timing-function: ease-in;
  animation-duration: 1.5s;
}
.information.active{
  margin-top: 100px;
  align: center;
  padding-top: 4%;
  position: relative;
  opacity: 1;
  font-size: 30px;
  animation-name: fadeInOpacity;
  animation-iteration-count: 1;
  animation-timing-function: ease-in;
  animation-duration: 1.5s;
}

.fade-in{
  opacity: 1;
  animation-name: fadeInOpacity;
  animation-iteration-count: 1;
  animation-timing-function: ease-in;
  animation-duration: 2s;
}

  @keyframes fadeInOpacity {
  0% {
  opacity: 0;
  }
  100% {0]0]0]0]0]0]0]n
  opacity: 1;
  }
  }
  @-webkit-keyframes neon1 {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #f00, 0 0 50px #f00, 0 0 60px #F00, 0 0 70px #F00;
  }
  to {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #f00, 0 0 25px #F00, 0 0 30px #F00, 0 0 35px #F00;
  }
}
  /* The sidebar menu */
  .sidenav {
    background-color: #875bd0;
    position: fixed;
    top: 0px;
    left:-440px;
    bottom: 0px;
    right: 0px;
    width: 200px;
    z-index: 100;
    font-family: verdana, sans-serif;
    font-size: 30px;
    margin: 0px;
    padding: 15px;
    opacity: 0.85;
    transition: all 0.4s;
  }

  .sidenav.active{
  left:0px;

  }
  /* The navigation menu links */
  .sidenav p {
    padding-left: 16px;
    text-decoration: none;
    font-size: 25px;
    color: #444;
    display: block;
    cursor: pointer;
  }
  /* .leaderboard{
    align: center;
  } */
  /* When you mouse over the navigation links, change their color */
  .sidenav p:hover {
    transition:0.5s;
    color: #f1f1f1;
    cursor: pointer;
  }
  .sidenav a {
    padding-left: 16px;
    text-decoration: none;
    font-size: 25px;
    color: #444;
    display: block;
    cursor: pointer;
  }

  /* When you mouse over the navigation links, change their color */
  .sidenav a:hover {
    color: #f1f1f1;
    cursor: pointer;
    transition:0.5s;

  }
  /* Style page content */
  .main {
    margin-left: 160px; /* Same as the width of the sidebar */
    padding: 0px 10px;
  }
  .close-icon
  {
    position: absolute;
    height: 60px;
    left:135px;
    border-radius: 60px;
    transition:0.5s;
  }
  .close-icon:hover{
    transition:0.5s;
    background-color: #444;
    opacity: 0.7;
  }
  .ham-a.active
  {
    display: none;
  }
  .ham-a:hover{
    position: fixed;
    top:10px;
    left:10px;
    height:75px;
    width:75px;
    border-radius: 80px;
    background-color: #555;
    transition:0.5s;

  }

  .ham
  {
    position: fixed;
    margin: auto;
    height: 65px;
    width: 65px;
    top: 15px;
    left: 15px;
    cursor: pointer;
    transition:0.5s;

  }
  .button {
 background-color: blue; /* Green */
 border-radius: 10px;
 border-color:darkblue;
 border-style: solid;
 color: white;
 padding: 10px 25px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 16px;
 opacity: 1;
 animation-name: fadeInOpacity, neon1;
 animation-iteration-count: 1, infinite;
 animation-timing-function: ease-in, ease-in-out;
 animation-duration: 3s, 0.75s;
 animation-direction: normal,alternate;
 cursor: pointer;
 transition: .5s;
}


.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;

  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}
.shadowfilter {
    -webkit-filter: drop-shadow(12px 12px 7px rgba(0, 0, 0, 0.5));
     filter: drop-shadow(12px 12px 7px rgba(0, 0, 0, 0.5));
   }
.button:hover{
  background-color:#191970;
  border-color:#191970;
  transition: .5s;

}
.passInput{
  border-color: darkblue;
  border-radius: 5px;
  border-style: solid;
  opacity: 1;
  animation-name: fadeInOpacity;
  animation-iteration-count: 1;
  animation-timing-function: ease-in;
  animation-duration: 2.5s;
}
.input-area{
  padding-top: 60px;
  align: center;
}
.button.active{
  display:none;
}
.passInput.active{
  display:none;
}
canvas {
	position: absolute;
  z-index: -1;
}
.input-area.active{
  display:none;
}
.load-board{
  padding-top:50%;
}
/* .leaderboard.active{
  display:none;
} */
/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (orientation:portrait) {
  .sidenav.active {
    top: 0px;
    padding-top: 15px;
    padding-left: 5px;
    width: 35vw;
  }
  .close-icon
  {
    position: absolute;
    left:25vw;
    border-radius: 60px;
    transition:0.5s;
  }
  .button{
    background-color:#191970;
    border-color:#191970;
    transition: .5s;

  }

  .event-logo{
    display:inline-block;
  }
}
</style>
</head>



<body style = "background-color:white;"> <!-- #552c99 -->
<p class = "main-logo" id = "main-logo" align = "center">
<img src="logos/logo(keyp).png" alt="" class = "main-logo">
<img src="logos/2dDash.png" alt="" class = 'event-logo'>
</p>





<div class = "signups" id = "signups" align = "center" >
<p id = "signups">
</p>
</div>

<div class = "abouts" id= "abouts" align = "center" >
<p id = "abouts">
</p>
</div>

<div class = "information" id= "information" align = "center" >
<p id = "information">
</p>
</div>

<div id= "leaderboard" align = "center">
  <p id = "load-board"></p>
  <iframe></iframe>
</div>

<div class="input-area">
    <p align = "center">

      <input type="text" name="Team ID" value="" align = "center" placeholder = "Team ID" id = "idpas" class = "passInput" autocomplete = "username">
<br>
<br>
      <input type="text" name="Stage Password" value="" align = "center" placeholder = "Stage Password" id = "userpas" class = "passInput">
<br>
<br>
      <button class = "button" id = "enter" onclick = "pasCheck()">
        Submit
      </button>
    </p>
</div>

<a id = "ham-a" class = "ham-a" role="button" onclick="showSidebar()">
  <img src="images/Hamburger_icon.png" class="ham" id = "ham-switch">
</a>
<!-- Side navigation -->
<div class="sidenav">
  <a class = "close-sidebar" role="button" onclick="showSidebar()">
  <img src="images/close-icon.png" class="close-icon">
</a>
  <p onclick = "DisplayLogo()">Home</p>
  <p onclick="DisplayAbouts()">About</p>
  <p onclick= "DisplayInformation()">Events</p>
  <p onclick= "DisplayLeaderboard()">Leaderboard</p>
  <a href= "https://forms.gle/pCK5VxFVWWWERNhw6" target = "_blank">Sign Up</a>
</div>


</body>


 <script>
    var loadingContent = '<table><thead><tr><th>Team</th><th>Stage</th></tr></thead>' + '<?php echo $tbData ?>';
    $('table tr').each(function(){
  $(this).find('th').first().addClass('first');
  $(this).find('th').last().addClass('last');
  $(this).find('td').first().addClass('first');
  $(this).find('td').last().addClass('last');
});

$('table tr').first().addClass('row-first');
$('table tr').last().addClass('row-last')
 </script>

<script src = "js/index.js">

</script>

<script type = "text/javascript">
var aboutText= "Welcome to Fishers Enigma, an event based on puzzles, riddles, cryptography," +
"and other involved elements. The players will traverse through 5 unique stages, each with different challenges and puzzles.\n"+
 "Whichever team/player finishes stage 5 first recieves ? dollars (TBD).\nJoin us for this event that will run from January 1st to January 4th. Teams/competitors will be issued a Team ID that will be used to verify and update scores. These identifications are NOT to be shared with other teams.";
 var informationText = "<div class =  'event-list'><div class = 'event-winter'><p align = 'center' style = 'display:block'><img src = 'logos/2dDash.png' class = 'evlog'><p>Apr. 1st- Apr. 4th</p></p></div> <br> <div class = 'event-dim'><p align = 'center' style = 'display:block'><img src = 'logos/vector/default-monochrome.svg' width = '30%' height = '30%'><p>Summer</p></p></div></div>";
 var boardInnerHTML = "<iframe src='https://sheetsu.com/a/t/ccff5d413d07?embedded=true'  width='100%' height='600' frameBorder='0' style='background: transparent; border: 1px solid #dedede;'></iframe>"
// var loadingContent;

// window.addEventListener("resize", resizeLogo);


function showSidebar()
{
  document.querySelector(".sidenav").classList.toggle('active');
  document.querySelector(".ham-a").classList.toggle('active');

}
function Reset(){
  document.getElementById("abouts").textContent = "";
  document.getElementById("abouts").className = "abouts";
  document.getElementById("information").className = "information";
  document.getElementById("information").textContent = "";
  document.getElementById("leaderboard").className = "leaderboard";
  document.getElementById("leaderboard-frame").style.display = "none";
  document.getElementById("load-board").textContent = "";
  showSidebar();
}

function DisplayAbouts(){
  Reset();
  var t = document.getElementById("abouts").className;
  var logoStatus = document.getElementById("main-logo").className;

  if(logoStatus == "main-logo"){
    document.querySelector(".main-logo").classList.toggle('active');
    document.querySelector(".input-area").classList.toggle('active');
  }
  if(t != "abouts active"){
    document.querySelector(".abouts").classList.toggle('active');
  }
  document.getElementById("abouts").textContent = aboutText;
}
function DisplayLogo(){
Reset();
var logoStatus = document.getElementById("main-logo").className;
if(logoStatus != "main-logo"){
  document.querySelector(".main-logo").classList.toggle('active');
  document.querySelector(".input-area").classList.toggle('active');
}
}
function DisplayInformation(){
  Reset();
  var logoStatus = document.getElementById("main-logo").className;
  var t = document.getElementById("information").className;
  if(logoStatus == "main-logo"){
    document.querySelector(".main-logo").classList.toggle('active');
    document.querySelector(".input-area").classList.toggle('active');
  }
  if(t != "information active"){
    document.querySelector(".information").classList.toggle('active');
  }
  document.getElementById("information").innerHTML = informationText;
}
function DisplayLeaderboard(){
  Reset();
  var logoStatus = document.getElementById("main-logo").className;
  var t = document.getElementById("leaderboard").className;
  if(logoStatus == "main-logo"){
    document.querySelector(".main-logo").classList.toggle('active');
    document.querySelector(".input-area").classList.toggle('active');
  }
  if(t != "leaderboard active"){
    document.querySelector(".leaderboard").classList.toggle('leaderboard');
  }
  document.getElementById("leaderboard-frame").style.display = "inline";
  document.getElementById("load-board").innerHTML = loadingContent;
  document.getElementById("load-board").style.paddingTop = "30vh";
}
function resizeLogo(){
  var screenWidth = screen.width;
  var screenHeight = screen.height;
  var mainLogo = document.querySelector("#main-logo");
  mainLogo.width = screenWidth*(420/1503);
  mainLogo.height = screenHeight*(236.01/1003);
}

function loadingOff(){
  document.getElementById("load-board").style.display = "none";
}
/** @license
 * DHTML Snowstorm! JavaScript-based snow for web pages
 * Making it snow on the internets since 2003. You're welcome.
 * -----------------------------------------------------------
 * Version 1.44.20131208 (Previous rev: 1.44.20131125)
 * Copyright (c) 2007, Scott Schiller. All rights reserved.
 * Code provided under the BSD License
 * http://schillmania.com/projects/snowstorm/license.txt
 */

/*jslint nomen: true, plusplus: true, sloppy: true, vars: true, white: true */
/*global window, document, navigator, clearInterval, setInterval */

// var snowStorm = (function(window, document) {
//
//   // --- common properties ---
//
//   this.autoStart = true;          // Whether the snow should start automatically or not.
//   this.excludeMobile = true;      // Snow is likely to be bad news for mobile phones' CPUs (and batteries.) Enable at your own risk.
//   this.flakesMax = 128;           // Limit total amount of snow made (falling + sticking)
//   this.flakesMaxActive = 64;      // Limit amount of snow falling at once (less = lower CPU use)
//   this.animationInterval = 50;    // Theoretical "miliseconds per frame" measurement. 20 = fast + smooth, but high CPU use. 50 = more conservative, but slower
//   this.useGPU = true;             // Enable transform-based hardware acceleration, reduce CPU load.
//   this.className = null;          // CSS class name for further customization on snow elements
//   this.excludeMobile = true;      // Snow is likely to be bad news for mobile phones' CPUs (and batteries.) By default, be nice.
//   this.flakeBottom = null;        // Integer for Y axis snow limit, 0 or null for "full-screen" snow effect
//   this.followMouse = false;        // Snow movement can respond to the user's mouse
//   this.snowColor = '#fff';        // Don't eat (or use?) yellow snow.
//   this.snowCharacter = '&bull;';  // &bull; = bullet, &middot; is square on some systems etc.
//   this.snowStick = true;          // Whether or not snow should "stick" at the bottom. When off, will never collect.
//   this.targetElement = null;      // element which snow will be appended to (null = document.body) - can be an element ID eg. 'myDiv', or a DOM node reference
//   this.useMeltEffect = true;      // When recycling fallen snow (or rarely, when falling), have it "melt" and fade out if browser supports it
//   this.useTwinkleEffect = false;  // Allow snow to randomly "flicker" in and out of view while falling
//   this.usePositionFixed = false;  // true = snow does not shift vertically when scrolling. May increase CPU load, disabled by default - if enabled, used only where supported
//   this.usePixelPosition = false;  // Whether to use pixel values for snow top/left vs. percentages. Auto-enabled if body is position:relative or targetElement is specified.
//
//   // --- less-used bits ---
//
//   this.freezeOnBlur = true;       // Only snow when the window is in focus (foreground.) Saves CPU.
//   this.flakeLeftOffset = 0;       // Left margin/gutter space on edge of container (eg. browser window.) Bump up these values if seeing horizontal scrollbars.
//   this.flakeRightOffset = 0;      // Right margin/gutter space on edge of container
//   this.flakeWidth = 8;            // Max pixel width reserved for snow element
//   this.flakeHeight = 8;           // Max pixel height reserved for snow element
//   this.vMaxX = 5;                 // Maximum X velocity range for snow
//   this.vMaxY = 4;                 // Maximum Y velocity range for snow
//   this.zIndex = 0;                // CSS stacking order applied to each snowflake
//
//   // --- "No user-serviceable parts inside" past this point, yadda yadda ---
//
//   var storm = this,
//   features,
//   // UA sniffing and backCompat rendering mode checks for fixed position, etc.
//   isIE = navigator.userAgent.match(/msie/i),
//   isIE6 = navigator.userAgent.match(/msie 6/i),
//   isMobile = navigator.userAgent.match(/mobile|opera m(ob|in)/i),
//   isBackCompatIE = (isIE && document.compatMode === 'BackCompat'),
//   noFixed = (isBackCompatIE || isIE6),
//   screenX = null, screenX2 = null, screenY = null, scrollY = null, docHeight = null, vRndX = null, vRndY = null,
//   windOffset = 1,
//   windMultiplier = 2,
//   flakeTypes = 6,
//   fixedForEverything = false,
//   targetElementIsRelative = false,
//   opacitySupported = (function(){
//     try {
//       document.createElement('div').style.opacity = '0.5';
//     } catch(e) {
//       return false;
//     }
//     return true;
//   }()),
//   didInit = false,
//   docFrag = document.createDocumentFragment();
//
//   features = (function() {
//
//     var getAnimationFrame;
//
//     /**
//      * hat tip: paul irish
//      * http://paulirish.com/2011/requestanimationframe-for-smart-animating/
//      * https://gist.github.com/838785
//      */
//
//     function timeoutShim(callback) {
//       window.setTimeout(callback, 1000/(storm.animationInterval || 20));
//     }
//
//     var _animationFrame = (window.requestAnimationFrame ||
//         window.webkitRequestAnimationFrame ||
//         window.mozRequestAnimationFrame ||
//         window.oRequestAnimationFrame ||
//         window.msRequestAnimationFrame ||
//         timeoutShim);
//
//     // apply to window, avoid "illegal invocation" errors in Chrome
//     getAnimationFrame = _animationFrame ? function() {
//       return _animationFrame.apply(window, arguments);
//     } : null;
//
//     var testDiv;
//
//     testDiv = document.createElement('div');
//
//     function has(prop) {
//
//       // test for feature support
//       var result = testDiv.style[prop];
//       return (result !== undefined ? prop : null);
//
//     }
//
//     // note local scope.
//     var localFeatures = {
//
//       transform: {
//         ie:  has('-ms-transform'),
//         moz: has('MozTransform'),
//         opera: has('OTransform'),
//         webkit: has('webkitTransform'),
//         w3: has('transform'),
//         prop: null // the normalized property value
//       },
//
//       getAnimationFrame: getAnimationFrame
//
//     };
//
//     localFeatures.transform.prop = (
//       localFeatures.transform.w3 ||
//       localFeatures.transform.moz ||
//       localFeatures.transform.webkit ||
//       localFeatures.transform.ie ||
//       localFeatures.transform.opera
//     );
//
//     testDiv = null;
//
//     return localFeatures;
//
//   }());
//
//   this.timer = null;
//   this.flakes = [];
//   this.disabled = false;
//   this.active = false;
//   this.meltFrameCount = 20;
//   this.meltFrames = [];
//
//   this.setXY = function(o, x, y) {
//
//     if (!o) {
//       return false;
//     }
//
//     if (storm.usePixelPosition || targetElementIsRelative) {
//
//       o.style.left = (x - storm.flakeWidth) + 'px';
//       o.style.top = (y - storm.flakeHeight) + 'px';
//
//     } else if (noFixed) {
//
//       o.style.right = (100-(x/screenX*100)) + '%';
//       // avoid creating vertical scrollbars
//       o.style.top = (Math.min(y, docHeight-storm.flakeHeight)) + 'px';
//
//     } else {
//
//       if (!storm.flakeBottom) {
//
//         // if not using a fixed bottom coordinate...
//         o.style.right = (100-(x/screenX*100)) + '%';
//         o.style.bottom = (100-(y/screenY*100)) + '%';
//
//       } else {
//
//         // absolute top.
//         o.style.right = (100-(x/screenX*100)) + '%';
//         o.style.top = (Math.min(y, docHeight-storm.flakeHeight)) + 'px';
//
//       }
//
//     }
//
//   };
//
//   this.events = (function() {
//
//     var old = (!window.addEventListener && window.attachEvent), slice = Array.prototype.slice,
//     evt = {
//       add: (old?'attachEvent':'addEventListener'),
//       remove: (old?'detachEvent':'removeEventListener')
//     };
//
//     function getArgs(oArgs) {
//       var args = slice.call(oArgs), len = args.length;
//       if (old) {
//         args[1] = 'on' + args[1]; // prefix
//         if (len > 3) {
//           args.pop(); // no capture
//         }
//       } else if (len === 3) {
//         args.push(false);
//       }
//       return args;
//     }
//
//     function apply(args, sType) {
//       var element = args.shift(),
//           method = [evt[sType]];
//       if (old) {
//         element[method](args[0], args[1]);
//       } else {
//         element[method].apply(element, args);
//       }
//     }
//
//     function addEvent() {
//       apply(getArgs(arguments), 'add');
//     }
//
//     function removeEvent() {
//       apply(getArgs(arguments), 'remove');
//     }
//
//     return {
//       add: addEvent,
//       remove: removeEvent
//     };
//
//   }());
//
//   function rnd(n,min) {
//     if (isNaN(min)) {
//       min = 0;
//     }
//     return (Math.random()*n)+min;
//   }
//
//   function plusMinus(n) {
//     return (parseInt(rnd(2),10)===1?n*-1:n);
//   }
//
//   this.randomizeWind = function() {
//     var i;
//     vRndX = plusMinus(rnd(storm.vMaxX,0.2));
//     vRndY = rnd(storm.vMaxY,0.2);
//     if (this.flakes) {
//       for (i=0; i<this.flakes.length; i++) {
//         if (this.flakes[i].active) {
//           this.flakes[i].setVelocities();
//         }
//       }
//     }
//   };
//
//   this.scrollHandler = function() {
//     var i;
//     // "attach" snowflakes to bottom of window if no absolute bottom value was given
//     scrollY = (storm.flakeBottom ? 0 : parseInt(window.scrollY || document.documentElement.scrollTop || (noFixed ? document.body.scrollTop : 0), 10));
//     if (isNaN(scrollY)) {
//       scrollY = 0; // Netscape 6 scroll fix
//     }
//     if (!fixedForEverything && !storm.flakeBottom && storm.flakes) {
//       for (i=0; i<storm.flakes.length; i++) {
//         if (storm.flakes[i].active === 0) {
//           storm.flakes[i].stick();
//         }
//       }
//     }
//   };
//
//   this.resizeHandler = function() {
//     if (window.innerWidth || window.innerHeight) {
//       screenX = window.innerWidth - 16 - storm.flakeRightOffset;
//       screenY = (storm.flakeBottom || window.innerHeight);
//     } else {
//       screenX = (document.documentElement.clientWidth || document.body.clientWidth || document.body.scrollWidth) - (!isIE ? 8 : 0) - storm.flakeRightOffset;
//       screenY = storm.flakeBottom || document.documentElement.clientHeight || document.body.clientHeight || document.body.scrollHeight;
//     }
//     docHeight = document.body.offsetHeight;
//     screenX2 = parseInt(screenX/2,10);
//   };
//
//   this.resizeHandlerAlt = function() {
//     screenX = storm.targetElement.offsetWidth - storm.flakeRightOffset;
//     screenY = storm.flakeBottom || storm.targetElement.offsetHeight;
//     screenX2 = parseInt(screenX/2,10);
//     docHeight = document.body.offsetHeight;
//   };
//
//   this.freeze = function() {
//     // pause animation
//     if (!storm.disabled) {
//       storm.disabled = 1;
//     } else {
//       return false;
//     }
//     storm.timer = null;
//   };
//
//   this.resume = function() {
//     if (storm.disabled) {
//        storm.disabled = 0;
//     } else {
//       return false;
//     }
//     storm.timerInit();
//   };
//
//   this.toggleSnow = function() {
//     if (!storm.flakes.length) {
//       // first run
//       storm.start();
//     } else {
//       storm.active = !storm.active;
//       if (storm.active) {
//         storm.show();
//         storm.resume();
//       } else {
//         storm.stop();
//         storm.freeze();
//       }
//     }
//   };
//
//   this.stop = function() {
//     var i;
//     this.freeze();
//     for (i=0; i<this.flakes.length; i++) {
//       this.flakes[i].o.style.display = 'none';
//     }
//     storm.events.remove(window,'scroll',storm.scrollHandler);
//     storm.events.remove(window,'resize',storm.resizeHandler);
//     if (storm.freezeOnBlur) {
//       if (isIE) {
//         storm.events.remove(document,'focusout',storm.freeze);
//         storm.events.remove(document,'focusin',storm.resume);
//       } else {
//         storm.events.remove(window,'blur',storm.freeze);
//         storm.events.remove(window,'focus',storm.resume);
//       }
//     }
//   };
//
//   this.show = function() {
//     var i;
//     for (i=0; i<this.flakes.length; i++) {
//       this.flakes[i].o.style.display = 'block';
//     }
//   };
//
//   this.SnowFlake = function(type,x,y) {
//     var s = this;
//     this.type = type;
//     this.x = x||parseInt(rnd(screenX-20),10);
//     this.y = (!isNaN(y)?y:-rnd(screenY)-12);
//     this.vX = null;
//     this.vY = null;
//     this.vAmpTypes = [1,1.2,1.4,1.6,1.8]; // "amplification" for vX/vY (based on flake size/type)
//     this.vAmp = this.vAmpTypes[this.type] || 1;
//     this.melting = false;
//     this.meltFrameCount = storm.meltFrameCount;
//     this.meltFrames = storm.meltFrames;
//     this.meltFrame = 0;
//     this.twinkleFrame = 0;
//     this.active = 1;
//     this.fontSize = (10+(this.type/5)*10);
//     this.o = document.createElement('div');
//     this.o.innerHTML = storm.snowCharacter;
//     if (storm.className) {
//       this.o.setAttribute('class', storm.className);
//     }
//     this.o.style.color = storm.snowColor;
//     this.o.style.position = (fixedForEverything?'fixed':'absolute');
//     if (storm.useGPU && features.transform.prop) {
//       // GPU-accelerated snow.
//       this.o.style[features.transform.prop] = 'translate3d(0px, 0px, 0px)';
//     }
//     this.o.style.width = storm.flakeWidth+'px';
//     this.o.style.height = storm.flakeHeight+'px';
//     this.o.style.fontFamily = 'arial,verdana';
//     this.o.style.cursor = 'default';
//     this.o.style.overflow = 'hidden';
//     this.o.style.fontWeight = 'normal';
//     this.o.style.zIndex = storm.zIndex;
//     docFrag.appendChild(this.o);
//
//     this.refresh = function() {
//       if (isNaN(s.x) || isNaN(s.y)) {
//         // safety check
//         return false;
//       }
//       storm.setXY(s.o, s.x, s.y);
//     };
//
//     this.stick = function() {
//       if (noFixed || (storm.targetElement !== document.documentElement && storm.targetElement !== document.body)) {
//         s.o.style.top = (screenY+scrollY-storm.flakeHeight)+'px';
//       } else if (storm.flakeBottom) {
//         s.o.style.top = storm.flakeBottom+'px';
//       } else {
//         s.o.style.display = 'none';
//         s.o.style.bottom = '0%';
//         s.o.style.position = 'fixed';
//         s.o.style.display = 'block';
//       }
//     };
//
//     this.vCheck = function() {
//       if (s.vX>=0 && s.vX<0.2) {
//         s.vX = 0.2;
//       } else if (s.vX<0 && s.vX>-0.2) {
//         s.vX = -0.2;
//       }
//       if (s.vY>=0 && s.vY<0.2) {
//         s.vY = 0.2;
//       }
//     };
//
//     this.move = function() {
//       var vX = s.vX*windOffset, yDiff;
//       s.x += vX;
//       s.y += (s.vY*s.vAmp);
//       if (s.x >= screenX || screenX-s.x < storm.flakeWidth) { // X-axis scroll check
//         s.x = 0;
//       } else if (vX < 0 && s.x-storm.flakeLeftOffset < -storm.flakeWidth) {
//         s.x = screenX-storm.flakeWidth-1; // flakeWidth;
//       }
//       s.refresh();
//       yDiff = screenY+scrollY-s.y+storm.flakeHeight;
//       if (yDiff<storm.flakeHeight) {
//         s.active = 0;
//         if (storm.snowStick) {
//           s.stick();
//         } else {
//           s.recycle();
//         }
//       } else {
//         if (storm.useMeltEffect && s.active && s.type < 3 && !s.melting && Math.random()>0.998) {
//           // ~1/1000 chance of melting mid-air, with each frame
//           s.melting = true;
//           s.melt();
//           // only incrementally melt one frame
//           // s.melting = false;
//         }
//         if (storm.useTwinkleEffect) {
//           if (s.twinkleFrame < 0) {
//             if (Math.random() > 0.97) {
//               s.twinkleFrame = parseInt(Math.random() * 8, 10);
//             }
//           } else {
//             s.twinkleFrame--;
//             if (!opacitySupported) {
//               s.o.style.visibility = (s.twinkleFrame && s.twinkleFrame % 2 === 0 ? 'hidden' : 'visible');
//             } else {
//               s.o.style.opacity = (s.twinkleFrame && s.twinkleFrame % 2 === 0 ? 0 : 1);
//             }
//           }
//         }
//       }
//     };
//
//     this.animate = function() {
//       // main animation loop
//       // move, check status, die etc.
//       s.move();
//     };
//
//     this.setVelocities = function() {
//       s.vX = vRndX+rnd(storm.vMaxX*0.12,0.1);
//       s.vY = vRndY+rnd(storm.vMaxY*0.12,0.1);
//     };
//
//     this.setOpacity = function(o,opacity) {
//       if (!opacitySupported) {
//         return false;
//       }
//       o.style.opacity = opacity;
//     };
//
//     this.melt = function() {
//       if (!storm.useMeltEffect || !s.melting) {
//         s.recycle();
//       } else {
//         if (s.meltFrame < s.meltFrameCount) {
//           s.setOpacity(s.o,s.meltFrames[s.meltFrame]);
//           s.o.style.fontSize = s.fontSize-(s.fontSize*(s.meltFrame/s.meltFrameCount))+'px';
//           s.o.style.lineHeight = storm.flakeHeight+2+(storm.flakeHeight*0.75*(s.meltFrame/s.meltFrameCount))+'px';
//           s.meltFrame++;
//         } else {
//           s.recycle();
//         }
//       }
//     };
//
//     this.recycle = function() {
//       s.o.style.display = 'none';
//       s.o.style.position = (fixedForEverything?'fixed':'absolute');
//       s.o.style.bottom = 'auto';
//       s.setVelocities();
//       s.vCheck();
//       s.meltFrame = 0;
//       s.melting = false;
//       s.setOpacity(s.o,1);
//       s.o.style.padding = '0px';
//       s.o.style.margin = '0px';
//       s.o.style.fontSize = s.fontSize+'px';
//       s.o.style.lineHeight = (storm.flakeHeight+2)+'px';
//       s.o.style.textAlign = 'center';
//       s.o.style.verticalAlign = 'baseline';
//       s.x = parseInt(rnd(screenX-storm.flakeWidth-20),10);
//       s.y = parseInt(rnd(screenY)*-1,10)-storm.flakeHeight;
//       s.refresh();
//       s.o.style.display = 'block';
//       s.active = 1;
//     };
//
//     this.recycle(); // set up x/y coords etc.
//     this.refresh();
//
//   };
//
//   this.snow = function() {
//     var active = 0, flake = null, i, j;
//     for (i=0, j=storm.flakes.length; i<j; i++) {
//       if (storm.flakes[i].active === 1) {
//         storm.flakes[i].move();
//         active++;
//       }
//       if (storm.flakes[i].melting) {
//         storm.flakes[i].melt();
//       }
//     }
//     if (active<storm.flakesMaxActive) {
//       flake = storm.flakes[parseInt(rnd(storm.flakes.length),10)];
//       if (flake.active === 0) {
//         flake.melting = true;
//       }
//     }
//     if (storm.timer) {
//       features.getAnimationFrame(storm.snow);
//     }
//   };
//
//   this.mouseMove = function(e) {
//     if (!storm.followMouse) {
//       return true;
//     }
//     var x = parseInt(e.clientX,10);
//     if (x<screenX2) {
//       windOffset = -windMultiplier+(x/screenX2*windMultiplier);
//     } else {
//       x -= screenX2;
//       windOffset = (x/screenX2)*windMultiplier;
//     }
//   };
//
//   this.createSnow = function(limit,allowInactive) {
//     var i;
//     for (i=0; i<limit; i++) {
//       storm.flakes[storm.flakes.length] = new storm.SnowFlake(parseInt(rnd(flakeTypes),10));
//       if (allowInactive || i>storm.flakesMaxActive) {
//         storm.flakes[storm.flakes.length-1].active = -1;
//       }
//     }
//     storm.targetElement.appendChild(docFrag);
//   };
//
//   this.timerInit = function() {
//     storm.timer = true;
//     storm.snow();
//   };
//
//   this.init = function() {
//     var i;
//     for (i=0; i<storm.meltFrameCount; i++) {
//       storm.meltFrames.push(1-(i/storm.meltFrameCount));
//     }
//     storm.randomizeWind();
//     storm.createSnow(storm.flakesMax); // create initial batch
//     storm.events.add(window,'resize',storm.resizeHandler);
//     storm.events.add(window,'scroll',storm.scrollHandler);
//     if (storm.freezeOnBlur) {
//       if (isIE) {
//         storm.events.add(document,'focusout',storm.freeze);
//         storm.events.add(document,'focusin',storm.resume);
//       } else {
//         storm.events.add(window,'blur',storm.freeze);
//         storm.events.add(window,'focus',storm.resume);
//       }
//     }
//     storm.resizeHandler();
//     storm.scrollHandler();
//     if (storm.followMouse) {
//       storm.events.add(isIE?document:window,'mousemove',storm.mouseMove);
//     }
//     storm.animationInterval = Math.max(20,storm.animationInterval);
//     storm.timerInit();
//   };
//
//   this.start = function(bFromOnLoad) {
//     if (!didInit) {
//       didInit = true;
//     } else if (bFromOnLoad) {
//       // already loaded and running
//       return true;
//     }
//     if (typeof storm.targetElement === 'string') {
//       var targetID = storm.targetElement;
//       storm.targetElement = document.getElementById(targetID);
//       if (!storm.targetElement) {
//         throw new Error('Snowstorm: Unable to get targetElement "'+targetID+'"');
//       }
//     }
//     if (!storm.targetElement) {
//       storm.targetElement = (document.body || document.documentElement);
//     }
//     if (storm.targetElement !== document.documentElement && storm.targetElement !== document.body) {
//       // re-map handler to get element instead of screen dimensions
//       storm.resizeHandler = storm.resizeHandlerAlt;
//       //and force-enable pixel positioning
//       storm.usePixelPosition = true;
//     }
//     storm.resizeHandler(); // get bounding box elements
//     storm.usePositionFixed = (storm.usePositionFixed && !noFixed && !storm.flakeBottom); // whether or not position:fixed is to be used
//     if (window.getComputedStyle) {
//       // attempt to determine if body or user-specified snow parent element is relatlively-positioned.
//       try {
//         targetElementIsRelative = (window.getComputedStyle(storm.targetElement, null).getPropertyValue('position') === 'relative');
//       } catch(e) {
//         // oh well
//         targetElementIsRelative = false;
//       }
//     }
//     fixedForEverything = storm.usePositionFixed;
//     if (screenX && screenY && !storm.disabled) {
//       storm.init();
//       storm.active = true;
//     }
//   };
//
//   function doDelayedStart() {
//     window.setTimeout(function() {
//       storm.start(true);
//     }, 20);
//     // event cleanup
//     storm.events.remove(isIE?document:window,'mousemove',doDelayedStart);
//   }
//
//   function doStart() {
//     if (!storm.excludeMobile || !isMobile) {
//       doDelayedStart();
//     }
//     // event cleanup
//     storm.events.remove(window, 'load', doStart);
//   }
//
//   // hooks for starting the snow
//   if (storm.autoStart) {
//     storm.events.add(window, 'load', doStart, false);
//   }
//
//   return this;
//
// }(window, document));
const debounce = (func, wait, immediate) => {
	let timeout;
	return function() {
		let context = this, args = arguments;
		let later = () => {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		let callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

window.requestAnimFrame = (() =>{
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60);
        };
})();

let c = document.createElement("canvas");
document.body.insertBefore(c,document.body.childNodes[0]);

const getContext = () => {
		let ctx = c.getContext("2d");
		c.width = window.innerWidth;
		c.height = window.innerHeight;
		let cubes = [],
				//more spacing less squares
				spacing = 30,
				xPos = 0,
				n = window.innerWidth / spacing,
				tSpeedFactor = [.2, .4, .6, .8, 1],
				i;

		const colors = ['#a5dff9', '#ef5285', '#feee7d']

		for (i = 0; i < n; i++) {
				cubes.push({
						x: xPos,
						y: Math.round(Math.random() * c.height),
						width: Math.round(Math.random() * 10) * 2,
						tSpeed: tSpeedFactor[Math.floor(Math.random() * tSpeedFactor.length)],
						color: colors[Math.floor(Math.random() * colors.length)],
						angle: 0,
						upDownFactor: (Math.random() >= .5) ? 1 : -1
				});
				xPos += spacing;
		}

		const draw = () => {
				let i;
				ctx.clearRect(0, 0, c.width, c.height);
				for (i = 0; i < n; i++) {
						ctx.save();
						ctx.translate(cubes[i].x + cubes[i].width / 2, cubes[i].y + cubes[i].width / 2);
						ctx.rotate(cubes[i].angle);
						ctx.fillStyle = cubes[i].color;
						ctx.globalAlpha = 1;
						ctx.fillRect(-cubes[i].width / 2, -cubes[i].width / 2, cubes[i].width, cubes[i].width);
						ctx.restore();
						cubes[i].y = cubes[i].y + cubes[i].tSpeed * cubes[i].upDownFactor;
						cubes[i].angle += Math.PI / 360;
						if (cubes[i].upDownFactor === -1) {
								if (cubes[i].y + cubes[i].width < 0) {
										cubes[i].y = c.height;
								}
						} else if (cubes[i].upDownFactor === 1) {
								if (cubes[i].y >= c.height) {
										cubes[i].y = -cubes[i].width;
								}
						}
				}
				window.requestAnimationFrame(draw);
		}
		draw();
};
getContext();
window.addEventListener('resize', debounce(getContext, 500));
</script>

</body>
</html>
