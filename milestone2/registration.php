<?php

session_start();
(header('location:index.php'));

$con =mysqli_connect('localhost','root');
if ($con)
{
	echo "connection Successful";
} else{
	echo "no connection";
}
mysqli_select_db($con,'sessionpractical2');

$name=$_POST ['user'];
$pass=$_POST ['password'];
$email=$_POST['email'];
$q="Select * from signup where name='$name' && password='$pass' && email='$email'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result); 
if($num==1){
	echo "Already have this account";
}
else{
	$qy="insert into signup(name,password,email) values('$name','$pass','$email')";
	mysqli_query($con,$qy);
	
}

?>