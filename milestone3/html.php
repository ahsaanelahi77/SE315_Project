<form method="post" action="htmlphp.php" enctype="multipart/form-data">
	<table width="300" border="0" align="center">
	<tr><th bgcolor="yellow" colspan="2">Student's Registration Form</th></tr>
	<tr bgcolor="lightgray">
		<td align="right">Student's Name</td>
		<td><input type="text" name="user_name" /></td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Father's Name</td>
		<td><input type="text" name="father_name" /></td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">School's Name</td>
		<td><input type="text" name="school_name" /></td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Roll No</td>
		<td><input type="text" name="roll_no" /></td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Student Image</td>
		<td><input type="file" name="uploadfile" value=""/></td>
	</tr>
	<tr bgcolor="lightgray">
		<td align="right">Class</td>
		<td>
		<select name="student_class">
			<option value="-1">Select Class</option>
			<option value="10th">3rd semester</option>
			<option value="9th">4th semester</option>
		</select></td>
	</tr>
	<tr align="center">
		<td colspan="2">
			<input type="submit" value="Submit" name="submit" />
		</td>
	</tr>
 
</table>
</form>
