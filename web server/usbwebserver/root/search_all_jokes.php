<?php

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //dots to put strings together
        echo "id: " . $row["JokeID"]. " - Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
