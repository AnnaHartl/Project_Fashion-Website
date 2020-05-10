<?php
//display posts gotten from the database
$sql = mysqli_query($mysqli, "SELECT * FROM comments_table");

$arr = array();

if ($sql->num_rows > 0) {
    // output data of each row
    $ind =0;
    for($i = 0; $i < $sql->num_rows;$i++){
      $row = $sql->fetch_assoc();

      if($row["article"] == $id_article){
        $arr["$ind"] = "<hr><h5>Username:  " . $row["name"]. "</h5> <p>" . $row["text"].  "</p>" ."<div>
            <img class=\"like\" data-id=".$row['id']." style=\"width:auto;height:40px;\" src=\"..\Pictures\Psychology\\heart.jpg\">
            <span class=\"likes_count\">" .$row['likes']. " likes</span>
        </div>";
        $ind++;
      }

    }

    if($ind > 0){
      for($i = $ind-1; $i>= 0;$i--){
        echo "<p>".$arr["$i"]."</p>";
      }
    }
    else {
        echo "0 comments";
    }
}
?>
