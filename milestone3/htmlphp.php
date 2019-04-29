<?php
	
	$connection = mysqli_connect("localhost","root");
	if(!$connection)
	{
		die("database connection failed" . mysqli_error());
	}
	
	?> 
	<?php
	if(isset($_POST['submit'])){
		mysqli_select_db($connection,'labtask2');
	
	$stu_name = $_POST["user_name"];
	$stu_father = $_POST["father_name"];
	$stu_school = $_POST["school_name"];
	$stu_roll = $_POST["roll_no"];
	$stu_class = $_POST["student_class"];

	$filename= $_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	$folder="images/".$filename;
	move_uploaded_file($tempname, $folder);	
	// 3. Perform database query
	$query = "insert into form2(student_name, father_name, student_school, student_roll, class,picsource) VALUES('$stu_name', '$stu_father', '$stu_school', '$stu_roll', '$stu_class','$folder')";
	
	$result = mysqli_query($connection, $query);
	echo "<center><b>The following data has been inserted into database.</b></center>";
	echo "<table align='center' border='1' cellpadding='4'><tr><th>Name</th> <th>Father Name</th><th>School</th><th>Roll No</th><th>Class</th></tr><tr><td>$stu_name</td><td>$stu_father</td><td>$stu_school</td><td>$stu_roll</td><td>$stu_class</td></tr></table>";

		$sql = "SELECT student_name, father_name, student_school, student_roll, class ,picsource FROM form2";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
	echo "<center><b>The following data has been display from the database.</b></center>";
	echo "<table align='center' border='1' cellpadding='4'><tr><th>Name</th> <th>Father Name</th><th>School</th><th>Roll No</th><th>Class</th><th>delete</th><th>update</th></tr></table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<table align='center' border='1' cellpadding='4'><tr>
    	<td>Student Name:  ".( $row["student_name"])."</td>
    	<td>Father Name:  ".( $row["father_name"])."</td>
    	<td>Student School:  ".( $row["student_school"])."</td>
    	<td>Student Roll no:  ".( $row["student_roll"])."</td>
    	<td>class:  ".( $row["class"])."</td>
    	<td>Picsource: <img src='".( $row['picsource'])."'height='100' width='100'/></td>
    	<td>Delete:  <a href='delete.php?rn=$row[student_roll]&sn=$row[student_school]'> Delete</a></td>
    	<td>update:  <a href='update.php?rn=$row[student_roll]&sn=$row[student_school]'> update</a></td>

    	</tr></table>";
        
    }
} else {
    echo "0 results";
}
$connection->close();
		
	if(!$result){
		 die("Database query failed:" . mysql_error());
	}
	return true;


} 

?>


</div>

</body>
</html>

