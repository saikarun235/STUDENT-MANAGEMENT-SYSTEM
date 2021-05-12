<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Image insertion</title>
</head>
<body>
<?php
$message=null;
$con = new PDO("mysql:host=localhost;dbname=SMS","root","");
if(isset($_POST['save_btn']))
{
	
	$filetemp=$_FILES['img']['tmp_name'];
	$filename=$_FILES['img']['name'];
	$filetype=$_FILES['img']['type'];
	$filepath='..\\pics\\'.$filename;
	
	if(!move_uploaded_file($filetemp,$filepath)){
		$message="failed";
	}else{		
		$insert=$con->prepare("INSERT INTO image(name,path,type) values('$filename','$filepath','$filetype')");
		$insert->execute();
		$message="success";
	}
}
	if($message) 
		echo "<p>$message</p>"
?>
<form action="new.php" method="POST" enctype="multipart/form-data">
<h2 align="center">Image insertion</h2>
<table align="center">
<tr>
<td><label>Image</label></td>
<td><label>:</label></td>
<td><label><input type="file" name="img" required/></tr>
<tr>
<td><label></label></td>
<td><label></label></td>
<td><label><input type="submit" name="save_btn" value="SAVE" required/></tr>
</table>
</form>
</body>
</html>








