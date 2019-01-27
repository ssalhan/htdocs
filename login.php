<?php
$con=mysql_connect("localhost","root","");
if(!$con){ 
	echo'Unable to establish connection '.mysql_error();
}
else{
	$db=mysql_select_db('vyners',$con);
if(!$db)
{
	echo'Database not found '.mysql_error();
}
if (isset($_post['Submit'])){
$type=$_post['type'];
$un=$_post['username'];
$pw=$_post['password'];

$query="select * from login where username='$username' and password='$password'and type='$user_type'";
$result=mysql_query($query);

while($row=mysql_fetch_array($result)){
	if($row=['username']==$username && $row['password']==$password && $row['type']='Teacher'){
		header('Location: teacher.html');
	}elseif($row=['username']==$username && $row['password']==$password && $row['type']='Student'){
		header('Location: student.html');
	}elseif($row=['username']==$username && $row['password']==$password && $row['type']='Contacts'){
		header('Location: Contacts.html');
		}
	}
}
?>



<!-- <!DOCTYPE html>
<html>
<head>
	<title> Login forms </title>
</head>
<body>
<form method="Post">
	<table>
		<tr> 
			<td> User Type <td>
			<td><select name="type">
				<option value="-1">select user type</option>
				<option value="Student">Student</option>
				<option value="Teacher">Teacher</option>
				<option value="Contacts">Contacts</option>
			</select></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" placeholder="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" placeholder="password"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" placeholder="Login"></td>
		</tr>
	</table>
</form>
</body>
</html> -->

