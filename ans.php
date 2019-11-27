
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


<?php
//error_reporting(0);
set_time_limit(0);
include("header3.php");


if(isset($_POST['submit']))
{
	
	
	$myFiles = "qstn.txt";
$fh = fopen($myFiles, 'w') or die("can't open file");
$stringData = $_POST['qa'];
fwrite($fh, $stringData);
fclose($fh);

$python = `python pgm.py`;


$myFiles = "ans.txt";
$fhs = fopen($myFiles, 'r');
$theDatas = fread($fhs, filesize($myFiles));
fclose($fhs);
?>
<form id="form1">
    <div id="dvContainer">
<?php
$data=explode("answer score",$theDatas,"2");

echo "<h2>$_POST[qa]</h2></br>";
echo "ans:-".$data[0]."<br>";
echo "answer score".$data[1]."<br>";

?>
</div>
    <input type="button" class="btn btn-primary" value="Print" id="btnPrint" />
    </form>
    <?php
    //echo "answer score".$data[1]."<br>";
	?>
    <a href="qa.php" class="btn btn-danger">Back</a>
<?php



}
?>
