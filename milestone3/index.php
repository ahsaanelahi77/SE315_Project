<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="uploadfile" value=""/>
		<input type="submit" name="submit" value="upload file"/>

	</form>
</body>
</html>
	<?php
			$filename= $_FILES["uploadfile"]["name"];
			$tempname=$_FILES["uploadfile"]["tmp_name"];
			$folder="images/".$filename;
			echo $folder;
			move_uploaded_file($tempname, $folder);
			echo "<img src='$folder' height='auto' width='auto'/>";
	?>
	<?php
	
			$connection = mysqli_connect("localhost","root");
			if(!$connection)
	{
			die("database connection failed" . mysqli_error());
	}
	
	?> 
	<?php
	if(isset($_POST['submit']))
	{
		mysql_select_db($connection,'labtask3');
		$query="insert into form3 ('picsource') VAlUES ('$Folder')";
		$result = mysqli_query($connection, $query);
	}
	if ($result->num_rows > 0) 
	{
    while($row = $result->fetch_assoc())
    {
    	($row['picsource']);
  
    }
	} 
else {
    echo "0 results";
}
?>


