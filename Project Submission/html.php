<?php
	
	$connection = mysqli_connect("localhost","root");
	if(!$connection)
	{
		die("database connection failed" . mysqli_error());
	}
	
	?> 
	<?php
	if(isset($_POST['submit'])){
		mysqli_select_db($connection,'fabrics');
	
	$stu_name = $_POST["product_name"];
	$stu_father = $_POST["product_price"];
	$stu_school = $_POST["location"];
	$stu_roll = $_POST["customername"];
	$shopname = $_POST["shopname"];
	$stu_class = $_POST["contact"];

	$filename= $_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	$folder="images/".$filename;
	move_uploaded_file($tempname, $folder);	
}
	// 3. Perform database query
	?>
	
	<?php	
	// 3. Perform database query
	$query = "insert into product (product_name,picsource) values ('$stu_name','$folder')";
	$result = mysqli_query($connection, $query) ;
	
	if($result==1)
	{
		$u_id=mysqli_insert_id($connection);
		$ins="insert into customer (Customer_name)values ('$stu_roll')";
		$quey=mysqli_query($connection, $ins);
		if($quey==1)
	
		{
			$b_id=mysqli_insert_id($connection);
		$ins1="insert into shop (shop_name,Location,contact_number,price,customer_id,product_id) values ('$shopname','$stu_school','$stu_class','$stu_father','$b_id','$u_id')";
		$queyy=mysqli_query($connection, $ins1);
		}
		//echo "Done with it";
		header("location:index.php");

	}
	else
	{
		echo "not done";
		echo "<a href=index.php>click to display records</a>";
	}

	?>
	