<?php
include "../db_connect.php";
$id_article = 5;

$name = $_GET["new_name"];
$comment = $_GET["new_comment"];

$name = addslashes($name);
$comment = addslashes($comment);

$sql = "INSERT INTO comments_table (id, name, text, likes, article) VALUES (NULL, '$name', '$comment', 0, $id_article)";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

header("Location: Hairstyles.php");
?>
