<?php
include "db_connect.php";

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

$sql = "SELECT comment_name, comment_text FROM comment_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //dots to put strings together
        echo "Name: " . $row["comment_name"]. " - Text: " . $row["comment_text"].  "<br>";
    }
} else {
    echo "0 results";
}

?>
