<?php
//adding likes to database
if (isset($_POST['liked'])) {
  $postid = $_POST['postid'];
  $result = mysqli_query($con, "SELECT * FROM comment_table WHERE id=$postid");
  $row = mysqli_fetch_array($result);
  $n = $row['likes'];

  mysqli_query($con, "UPDATE comment_table SET likes=$n+1 WHERE id=$postid");

  echo $n+1;
  exit();
}
//subtracting likes
if (isset($_POST['unliked'])) {
  $postid = $_POST['postid'];
  $result = mysqli_query($con, "SELECT * FROM comment_table WHERE id=$postid");
  $row = mysqli_fetch_array($result);
  $n = $row['likes'];

  mysqli_query($con, "UPDATE comment_table SET likes=$n-1 WHERE id=$postid");

  echo $n-1;
  exit();
}
 ?>
