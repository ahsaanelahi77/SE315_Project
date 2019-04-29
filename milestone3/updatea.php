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
          $stu_name = $_POST["user_name"];
            $stu_father = $_POST["father_name"];
            $stu_school = $_POST["school_name"];
            
            $sql = "UPDATE form2 SET student_name='$stu_name',father_name='$stu_father',student_school='$stu_school' WHERE student_roll=$stu_roll";
            $result = $connection->query($sql);
            
            if(! $result ) {
               die('Could not update data: ' . mysql_error());
            }
            else{
            echo "update data successfully";
           echo" <a href='html.php'> Go back to page</a>";
         }
         
            ?>