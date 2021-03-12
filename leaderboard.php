<?php
include $_SERVER["DOCUMENT_ROOT"] . "/global/authorization_check.php";

$result = get_leaderboard_content();
$conn->close();

$membersArr = [];
$stages = [];

if(mysqli_num_rows($result) > 0){
  while($row = $result->fetch_assoc()){
    array_push($membersArr, json_decode($row["Members"]));
    array_push($stages, $row["stage"]);
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leaderboard</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/leaderboard.css">
    <link rel="stylesheet" href="css/global.css">
  </head>
  <body>
<?php include 'global/header.html'; ?>

<section class = "leaderboard-container">
<div class="leaderboard-positioner">
<table id = "leaderboard">
  <thead>
    <tr>
      <th class = "stage-num-td">Stage</th>
      <th class = "members-td">Group</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>
</div>
</section>

<script type="text/javascript">
function createRow(stg, members){
  tr = document.createElement("tr"),
  td1 = document.createElement("td"),
  td2 = document.createElement("td"),
  preparedMems = "";

  td1.setAttribute("class","stage-num-td");
  td2.setAttribute("class","members-td");

  td1.innerHTML = stg;

  for(let k =0; k < members.length; k++){
   let end = "";
   if (members.length > 2){
     end += ", ";
   }
   if (k == members.length -2 || members.length <=2){
     end += "& ";
   }
   if( k == members.length -1){
     end = "";
   }
   preparedMems += (members[k] + ((members.length == 2)?" ":"") + end);
  }
  td2.innerHTML = preparedMems;
  tr.appendChild(td1);
  tr.appendChild(td2);

  return tr;
}


document.addEventListener("DOMContentLoaded", function(){
    const mems = <?php echo json_encode($membersArr); ?>,
    stgs = <?php echo json_encode($stages); ?>,
    table = document.querySelector("table tbody");
    doc = document.querySelector(".leaderboard-positioner"),
    header = document.querySelector("header"),
    img = header.querySelector("img");

    //as long as the icon loads in xampp this works properly
    doc.style = "margin-top:" + (header.clientHeight) + "px;";
    for(let k =0; k < mems.length; k++){
      table.appendChild(createRow(stgs[k],mems[k]));
    }
  });

</script>
  </body>
</html>