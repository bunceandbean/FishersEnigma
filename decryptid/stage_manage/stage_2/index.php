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
<script type="text/javascript">
  var _0x5588=['11OhAWUS','Type\x20\x27login\x27\x20followed\x20by\x20a\x20password\x20to\x20access\x20your\x20account.','399089alydVV','47522DoBIIw','churubusco','.wrapper','268517KBSXow','Churubusco','27pIHoDv','15255ufJDqi','Welcome\x20to\x20CryptOS\x20v1.3!','This\x20is\x20Dr.\x20Bauer,\x20the\x20password\x20to\x20my\x20CryptOS\x20account\x20is\x20the\x20name\x20of\x20a\x20town.','1113934TxEusG','Your\x20account\x20has\x20been\x20reactivated.\x20Your\x20last\x20recorded\x20cryptid\x20was,\x20\x27The\x20Beast\x20of\x20Busco\x27\x20with\x20an\x20ID\x20number','\x20of:\x2018648304.','1kJPEww','11198VJSJlc','--Incorrect\x20verification\x20number.','--\x20Error,\x20no\x20user\x20found.','echo','\x20Please\x20use\x20this\x20as\x20a\x20hint:\x209781883362102,\x20166.','50508014929278','142406BqLvNO'];function _0x43a4(_0x21a96e,_0x4919bd){return _0x43a4=function(_0x5588f6,_0x43a43e){_0x5588f6=_0x5588f6-0xe8;var _0x107d65=_0x5588[_0x5588f6];return _0x107d65;},_0x43a4(_0x21a96e,_0x4919bd);}var _0x3ed5a9=_0x43a4;(function(_0xa7c614,_0x3c4c24){var _0x1977ec=_0x43a4;while(!![]){try{var _0x45b451=parseInt(_0x1977ec(0xeb))*-parseInt(_0x1977ec(0xf3))+parseInt(_0x1977ec(0xe9))*-parseInt(_0x1977ec(0xf2))+-parseInt(_0x1977ec(0xec))*-parseInt(_0x1977ec(0xfa))+-parseInt(_0x1977ec(0xf9))+-parseInt(_0x1977ec(0xfc))+parseInt(_0x1977ec(0xfd))+parseInt(_0x1977ec(0xef));if(_0x45b451===_0x3c4c24)break;else _0xa7c614['push'](_0xa7c614['shift']());}catch(_0x58b66a){_0xa7c614['push'](_0xa7c614['shift']());}}}(_0x5588,0x34f47),responses={'greet':_0x3ed5a9(0xed)+'\x0a'+_0x3ed5a9(0xee)+_0x3ed5a9(0xf7)+'\x0a'+_0x3ed5a9(0xfb)},$(_0x3ed5a9(0xe8))['terminal']({'login':function(_0x42a5ed){var _0xea8280=_0x3ed5a9;_0x42a5ed==_0xea8280(0xfe)||_0x42a5ed==_0xea8280(0xea)?this['echo']('Welcome,\x20Dr.\x20Ivy\x20Bauer.\x20Your\x20account\x20has\x20been\x20deactivated\x20due\x20to\x20d̴͖̤̏͂e̸̢̙̫͒á̵̡͙͊t̸̨̓h̴̞͂̉̔.\x20To\x20reactivate\x20your\x20account,\x20'+'please\x20type\x20\x27activate\x27\x20followed\x20by\x20the\x2014-digit\x20Noblesville\x20Southeastern\x20Public\x20Library\x20barcode\x20number.'):this[_0xea8280(0xf6)](_0xea8280(0xf5));},'activate':function(_0x2896a8){var _0x517664=_0x3ed5a9;_0x2896a8==_0x517664(0xf8)?this['echo'](_0x517664(0xf0)+_0x517664(0xf1)):this[_0x517664(0xf6)](_0x517664(0xf4));}},{'greetings':responses['greet']}));
</script>
  <style media="screen">
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
  </style>
</html>
