<?php
session_start();
set_time_limit(0);
include("header3.php");

?>










<html>
	<head>
		<title>Read pdf php</title>
        <style>
			.gfg { 
                border-collapse:separate; 
                border-spacing:0 15px; 
            } 
		</style>
	</head>
    <div>
    <br>
	<form method="post" enctype="multipart/form-data">
		<table class="gfg" align="center" border="0" bgcolor="">
			<Tr>
				<td>Choose Your Document </td>
				<td><input type="file" name="uploadedfile" class="form-control"/></td>
			</Tr>
          
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Upload Document" name="readpdf" class="btn btn-primary"/></td>
			</tr>
		</table>
	</form>
    </div>
</html>


<?php
set_time_limit(0);
error_reporting(0);

extract($_POST);
if(isset($readpdf))
{
	
	
	
	$name=basename( $_FILES['uploadedfile']['name']); 
$target_path="uploads/".$name;

move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
	


$myFiles = "input_loc.txt";
$fh = fopen($myFiles, 'w') or die("can't open file");
$stringData = "uploads/".$name;
fwrite($fh, $stringData);
fclose($fh);


$python = `python input_txt.py`;

?>
<script>
alert('Uploaded Sucessfully');

window.location = "dashboard.php";

</script>	
<?php
}
?>