<?php
include "../db_connect.php";

$name = $_GET["new_name"];
$comment = $_GET["new_comment"];

$name = addslashes($name);
$comment = addslashes($comment);


//seach for the word chicken
	 $sql = "INSERT INTO comments_fashionpsychology (id, name, text, likes) VALUES (NULL, '$name', '$comment', 0)";
	 $result = $mysqli->query($sql) or die(mysqli_error($mysqli));


	 header("Location: FashionPsychology.php");

?>
