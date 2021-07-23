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
    <div class="term_container">

    </div>
    </div>

  </body>
<script type="text/javascript">
  var _0x3996=['please\x20type\x20\x27activate\x27\x20followed\x20by\x20the\x2014-digit\x20Noblesville\x20Southeastern\x20Public\x20Library\x20barcode\x20number.','\x20Please\x20use\x20this\x20as\x20a\x20hint:\x209781883362102,\x20166.','1806agkoAW','.term_container','21200FhwALX','churubusco','Welcome,\x20Dr.\x20Ivy\x20Bauer.\x20Your\x20account\x20has\x20been\x20deactivated\x20due\x20to\x20d̴͖̤̏͂e̸̢̙̫͒á̵̡͙͊t̸̨̓h̴̞͂̉̔.\x20To\x20reactivate\x20your\x20account,\x20','1709063WSrxPh','--\x20Error,\x20no\x20user\x20found.','1nuhudI','Type\x20\x27login\x27\x20followed\x20by\x20a\x20password\x20to\x20access\x20your\x20account.','4nkxtsg','503OMihNO','437458vIqimK','1508515HjmMvY','This\x20is\x20Dr.\x20Bauer,\x20the\x20password\x20to\x20my\x20CryptOS\x20account\x20is\x20the\x20name\x20of\x20a\x20town.','echo','1epFUhR','1815630qAgBzz','terminal','3414akCTdY','greet','584PHYGTw'];var _0x2f7aed=_0xa8d9;function _0xa8d9(_0x4d1b3e,_0x322a88){return _0xa8d9=function(_0x39964f,_0xa8d93f){_0x39964f=_0x39964f-0x128;var _0x49faa7=_0x3996[_0x39964f];return _0x49faa7;},_0xa8d9(_0x4d1b3e,_0x322a88);}(function(_0x479625,_0xb35baf){var _0x43a509=_0xa8d9;while(!![]){try{var _0x54e568=parseInt(_0x43a509(0x131))*-parseInt(_0x43a509(0x12e))+-parseInt(_0x43a509(0x13c))*parseInt(_0x43a509(0x13a))+parseInt(_0x43a509(0x129))*-parseInt(_0x43a509(0x13d))+parseInt(_0x43a509(0x136))+parseInt(_0x43a509(0x12c))*parseInt(_0x43a509(0x13b))+parseInt(_0x43a509(0x133))+parseInt(_0x43a509(0x138))*parseInt(_0x43a509(0x12a));if(_0x54e568===_0xb35baf)break;else _0x479625['push'](_0x479625['shift']());}catch(_0x4777a9){_0x479625['push'](_0x479625['shift']());}}}(_0x3996,0xe7f44),responses={'greet':'Welcome\x20to\x20CryptOS\x20v1.3!'+'\x0a'+_0x2f7aed(0x13e)+_0x2f7aed(0x130)+'\x0a'+_0x2f7aed(0x139)},$(_0x2f7aed(0x132))[_0x2f7aed(0x12b)]({'login':function(_0x3c6d81){var _0x1de9d8=_0x2f7aed;_0x3c6d81==_0x1de9d8(0x134)||_0x3c6d81=='Churubusco'?this['echo'](_0x1de9d8(0x135)+_0x1de9d8(0x12f)):this['echo'](_0x1de9d8(0x137));},'activate':function(_0x7bbf7f){var _0xe0fe52=_0x2f7aed;_0x7bbf7f=='50508014929278'?this[_0xe0fe52(0x128)]('Your\x20account\x20has\x20been\x20reactivated.\x20Your\x20last\x20recorded\x20cryptid\x20was,\x20\x27The\x20Beast\x20of\x20Busco\x27\x20with\x20an\x20ID\x20number'+'\x20of:\x2018648304.'):this['echo']('--Incorrect\x20verification\x20number.');}},{'greetings':responses[_0x2f7aed(0x12d)]}));
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
