<?php

$conn = mysqli_connect("localhost", "root", "", "login");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
function cookie_check($ID = FALSE, $Password = FALSE){
  global $conn;
  $teamID = $ID;
  $teamPass = $Password;
  if (isset($_COOKIE['teamID']) && isset($_COOKIE['teamPass'])){
  $teamID = $_COOKIE['teamID'];
  $teamPass = $_COOKIE['teamPass'];
  }


  $result = $conn -> query("SELECT * FROM info WHERE teamID = '$teamID' AND Password = '$teamPass' ");
  return $result;
}
function get_leaderboard_content(){
  global $conn;
  $result = $conn->query("SELECT stage, Members FROM info WHERE 1 ORDER BY stage DESC");
  return $result;
}
// var_dump(cookie_check());


 ?>
