<?php

include("header3.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<head>
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</head>


  <title>Data Mining</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<form id="form1">
    <div id="dvContainer">
<div class="container"><br>
<h2>SUMMARY OF DOCUMENT</h2>
<?php
$python = `python summary_tfidf.py`;
echo  $python;
?></div>

 <input type="button" class="btn btn-primary" value="Print" id="btnPrint" />
    </form>
    
    <a href="dashboard.php" class="btn btn-danger">Back</a>