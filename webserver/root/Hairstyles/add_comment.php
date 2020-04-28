<?php
include "../db_connect.php";

$name = $_GET["new_name"];
$comment = $_GET["new_comment"];

$name = addslashes($name);
$comment = addslashes($comment);


//seach for the word chicken
	 $sql = "INSERT INTO comments_hairstyles (CommentID, comment_name, comment_text) VALUES (NULL, '$name', '$comment')";
	 $result = $mysqli->query($sql) or die(mysqli_error($mysqli));


	 header("Location: Hairstyles.php");

?>
