<?php
$n = 0;
$result = mysqli_query($mysqli, "SELECT * FROM vote_table");
$row = mysqli_fetch_array($result);

if($row["vote1"] == NULL && $row["vote2"] == NULL && $row["vote3"] == NULL){
  $sql = "INSERT INTO vote_table (vote1, vote2, vote3) VALUES (0,0,0)";
  $result = $mysqli->query($sql) or die(mysqli_error($mysqli));
}

if (isset($_POST['voted1'])) {
  $n = $row['vote1'];
  mysqli_query($mysqli, "UPDATE vote_table SET vote1=$n+1");
  echo $n+1;
  exit();
}
else if (isset($_POST['voted2'])) {
  $n = $row['vote2'];
  mysqli_query($mysqli, "UPDATE vote_table SET vote2=$n+1");
  echo $n+1;
  exit();
}
else if (isset($_POST['voted3'])) {
  $n = $row['vote3'];
  mysqli_query($mysqli, "UPDATE vote_table SET vote3=$n+1");
  echo $n+1;
  exit();
}
 ?>
