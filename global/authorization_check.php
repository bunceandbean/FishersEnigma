<?php

function cookie_check($ID = FALSE, $Password = FALSE){
  $conn = mysqli_connect("localhost", "fishcmui_admin", "fishersenigma", "fishcmui_login");
  if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  $teamID = $ID;
  $teamPass = $Password;


  if (isset($_COOKIE['teamID']) && isset($_COOKIE['teamPass'])){
  $teamID = $_COOKIE['teamID'];
  $teamPass = $_COOKIE['teamPass'];
  }

  $result = $conn -> query("SELECT * FROM info WHERE teamID = '$teamID' AND Password = '$teamPass' ");
  $conn->close();
  return $result;
}
function get_leaderboard_content(){
  $conn = mysqli_connect("localhost", "fishcmui_admin", "fishersenigma", "fishcmui_login");
  if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $result = $conn->query("SELECT stage, Members FROM info WHERE 1 ORDER BY stage DESC");
  $conn->close();
  return $result;
}
// var_dump(get_leaderboard_content());


function check_answer($ans, $stage){
      $conn = mysqli_connect("localhost", "fishcmui_admin", "fishersenigma", "fishcmui_login");
      if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      $result = $conn->query("SELECT answer FROM stages WHERE stageNUM = '$stage'");
      $conn->close();

      if($result !== NULL && mysqli_num_rows($result) > 0){
          $stageAnswer = ($result->fetch_assoc())["answer"];

          return (strcmp($ans,$stageAnswer) == 0);
      }else{
          return FALSE;
      }
}

function update_stage_num(){
    $r = cookie_check();
    $s = 1;
    if(mysqli_num_rows($r) > 0){
        $r = $r->fetch_assoc();
        $s = ($r)["stage"];

        $conn = mysqli_connect("localhost", "fishcmui_admin", "fishersenigma", "fishcmui_login");
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $id = $r["teamID"];
        $conn->query("UPDATE info SET stage = ($s + 1) WHERE teamID = '$id'");
        $conn->close();
    }
}
function authorize($current_stage){
  $result = cookie_check();
  if(mysqli_num_rows($r) > 0){
    $stage = ($r->fetch_assoc())["stage"];
    if($current_stage <= $stage){
      return TRUE;
    }
  }
  return FALSE;
}
 ?>
