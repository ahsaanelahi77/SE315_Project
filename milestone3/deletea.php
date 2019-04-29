 <?php
         
         if(isset($_POST['submit'])) {
          
   
   $connection = mysqli_connect("localhost","root");
}
   if(!$connection)
   {
      die("database connection failed" . mysqli_error());
   }
   else
   {
      echo "connection is successfully";
   }
   ?>
   <?php
            mysqli_select_db($connection,'labtask2');
           $stu_roll = $_POST["roll_no"];
            
            $sql = "delete from form2 where student_roll=$stu_roll";
$result = $connection->query($sql);
            
            if(! $result ) {
               die('Could not delete data: ' . mysql_error());
            }
            else{
            echo "Deleted data successfully";
           echo" <a href='html.php'> Go back to page</a>";
         }
         
            ?>
   