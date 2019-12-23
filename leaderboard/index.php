<?php
$link = mysqli_connect("localhost", "fishtzte_localuser", "localpassword", "fishtzte_scores");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM Winter_Break_2019";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class = 'zui-table'>";
            echo "<thead> <tr>";
                echo "<th>Team</th>";
                echo "<th>Stage</th>";
            echo "</tr> </thead>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Team'] . "</td>";
                echo "<td>" . $row['Stage'] . "</td>";
                ///////////////////////////////////
            echo "</tr>";
          }
          echo "</table>";
          // Free result set
          mysqli_free_result($result);

        }else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/Data_Table_1.0.css">
    <title>Leaderboard</title>

  </head>
  <body>
  </body>
</html>
