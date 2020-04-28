<?php
include "../db_connect.php";

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "<br>";

$sql = "SELECT comment_name, comment_text FROM comments_wardrobeessentials";
$result = $mysqli->query($sql);

$arr = array();

if ($result->num_rows > 0) {
    // output data of each row

    for($i = 0; $i < $result->num_rows;$i++){
      $row = $result->fetch_assoc();
      $arr["$i"] = "<hr><h5>Username:  " . $row["comment_name"]. "</h5> <p>" . $row["comment_text"].  "</p>";
    }

    for($i = $result->num_rows-1; $i>= 0;$i--){
      echo "<p>".$arr["$i"]."</p>";
    }

} else {
    echo "0 comments";
}

?>
