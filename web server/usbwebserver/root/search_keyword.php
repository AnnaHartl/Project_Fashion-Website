<?php
include "db_connect.php";

$keywordFromForm = $_GET["keyword"];

//seach for the word chicken
	$sql = "SELECT CommentID, comment_name, comment_text FROM comment_table WHERE comment_text LIKE '%". $keywordFromForm ."%'";
	$result = $mysqli->query($sql);

	echo "<h2>get all jokes with ".$keywordFromForm."</h2>";
	if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				//dots to put strings together
					echo "id: " . $row["CommentID"]. "    Name: " . $row["comment_name"]. "    Text: " . $row["comment_text"]. "<br>";
			}
	} else {
			echo "0 results";
	}
?>
