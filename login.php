<!DOCTYPE html>
<html>
<head>
	<title> Login forms </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
<form action="login.php" method="Post">
	<table>
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
			<td><input id="loginbtn" type="submit" name="submit"></td>
		</tr>
	</table>
	
	<?php

					
						if(isset($_POST['submit'])){
							$userType = $_POST['userType'];
							header("Location:login.php");	
							}
					
	

/* if(isset($_POST['submit'])){
	$userType = $_POST['userType'];
	
	if($userType == 'Student') {
		header("Location:https://www.bbc.com");
	}
	elseif ($userType == 'Teacher') {
		header("Location:https://www.google.com");
	}
	else {
		header("Location:https://www.yahoo.com");
	}
} */

// $con=mysqli_connect("localhost","root","");
// $con=mysqli_connect("localhost", "root", "", "vyners");
// if(!$con){ 
	// echo ("Unable to establish connection ").mysqli_error();
// }
// else{
	// mysqli_select_db($con, "vyners");
// }
// if(!mysqli_select_db($con, "vyners"))
// {
	// echo ('Database not found ').mysqli_error();
// }

// if(isset($_post['submit']))
// {
	// header("Location:https://www.yahoo.com");
// }
// /* {
// //$type=$_post['type'];
// $un=$_post['username'];
// $pw=$_post['password'];

// $query="select * from login where username='$username' and password='$password'and userType='$user_type'";
// $result=mysqli_query($query);


// while($row=mysqli_fetch_array($result))
	// {
		// if($row=['username']==$username && $row['password']==$password && $row['type']='Teacher'){
			// header("Location:https://www.bbc.com");
		// }
		// elseif($row=['username']==$username && $row['password']==$password && $row['type']='Student'){
			// header("Location:https://www.google.com");
		// }
		// elseif($row=['username']==$username && $row['password']==$password && $row['type']='Contacts'){
			// header("Location:https://www.yahoo.com");
		// }
	// }
// } */

 ?>
	
</form>
</body>
</html>

