<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Fashion Website">
  <meta name="author" content="Anna Hartl & Tamara Melcher">

  <title>Comments.com</title>
</head>

<body>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<?php
	include "db_connect.php";
  //include "redirect_form.php";
//	include "search_all_jokes.php";
?>
<h1>Comment Test Page</h1>
<?php
Include "show_comments.php";
?>
<!--
<form class="form-horizontal" action="show_comments.php">
<fieldset>

<legend></legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Show all comments</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-default">Show</button>
  </div>
</div>

</fieldset>
</form>

-->

<form class="form-horizontal" action="search_keyword.php">
<fieldset>

<legend>Search for a comment</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Input</label>
  <div class="col-md-4">
    <input id="keyword" name="keyword" type="search" placeholder="e. g. chicken" class="form-control input-md" required="">
    <p class="help-block">Enter a word</p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>


<form class="form-horizontal" action="add_comment.php">
<fieldset>

<legend>Add a comment</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="new_name">Name</label>
  <div class="col-md-4">
  <input id="new_name" name="new_name" type="text" placeholder="username" class="form-control input-md" required="">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="new_comment">Comment</label>
  <div class="col-md-4">
  <input id="new_comment" name="new_comment" type="text" placeholder="e. g. Great!" class="form-control input-md" required="">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Comment!</button>
  </div>
</div>

</fieldset>
</form>

<?php
//	include "search_keyword.php";
	$mysqli->close();

	?>

</body>

</html>
