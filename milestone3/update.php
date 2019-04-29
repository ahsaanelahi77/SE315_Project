<html>
   
   <head>
      <title>update a Record from MySQL Database</title>
   </head>
   
   <body>
     
           <form method = "post" action = "updatea.php">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100">Enter Student Roll Number</td>
                        <td><input name = "roll_no" type = "text" id = "emp_id"></td>
                     </tr>
                      <tr>
                    <td align="right">Student's Name</td>
					<td><input type="text" name="user_name" /></td>
                     </tr>
                     <tr>
                    <td align="right">Father's Name</td>
					<td><input type="text" name="father_name" /></td>
                     </tr>
                     <tr>
                    	<td align="right">School's Name</td>
						<td><input type="text" name="school_name" /></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "submit" type = "submit" 
                              id = "submit" value = "update">
                        </td>
                     </tr>
                     
                  </table>
               </form>
           
      
   </body>
</html>