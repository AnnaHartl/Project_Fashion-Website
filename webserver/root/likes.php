<?php
//adding likes to database
if (isset($_POST['liked'])) {
  $postid = $_POST['postid'];
  $result = mysqli_query($mysqli, "SELECT * FROM comments_table WHERE id=$postid");
  $row = mysqli_fetch_array($result);
  $n = $row['likes'];

  mysqli_query($mysqli, "UPDATE comments_table SET likes=$n+1 WHERE id=$postid");

  echo $n+1;
  exit();
}
 ?>