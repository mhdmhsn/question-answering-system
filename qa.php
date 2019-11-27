<?php
error_reporting(0);
include("header3.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mining</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<div class="container"><br>
<div class="col-md-6">
<h2>Question Answering System</h2>
<br>
<form  method="post" action="ans.php">
<label>Enter Question</label>
<textarea name="qa" class="form-control" ></textarea>
<input type="submit" name="submit" >
</form>


</div>
<div class="col-md-6">
<h2>Uploaded Flie Data</h2>
<br>
<?php

$myFile = "text.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;

?>

</div>
</div>