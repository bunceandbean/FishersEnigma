<section class = "images-section">
  <div class="images-container-positioner">
    <!-- <div class="image-container home-logo">
      <img src="img/logo.png" alt="">
    </div> -->
    <div class="image-container event-logo">
      <img src="img/default-monochrome.png" alt="">
    </div>
  </div>
</section>
<section class = "input-section">
  <div class="input-container">
    <form class="input-form" action="#" method="post">
      <input type="text" name="ID" value="" placeholder="Team ID" required>
      <br>
      <input type="password" name="Pass" value="" placeholder="Password" required>
      <br>
      <button type="submit" name="button">Log In</button>
    </form>
  </div>
</section>

<?php
if(isset($_POST['ID'])){
$ID = htmlentities($_POST['ID'], ENT_QUOTES);
$pass = htmlentities($_POST['Pass'],ENT_QUOTES);

$result = cookie_check($ID, $pass);
if ($result !== NULL) {
  setcookie("teamID",$ID,time() + (86400 * 30),"/");
  setcookie("teamPass",$pass,time() + (86400 * 30),"/");
  header("Refresh:0");
}
}
?>
