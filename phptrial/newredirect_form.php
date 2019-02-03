<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta content="noindex, nofollow" name="robots">
<link href='redirect_form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
</head>
<body>
<div class="main">
<div class="first">
<h2>Redirect Form To a Particular Page On Submit using PHP</h2>
<form action="newredirect_form.php" id="#form" method="post" name="#form">
<label>Usertype :</label>
<input id="usertype" name="usertype" placeholder='Enter Your Usertype' type='text'>
<label>Username :</label>
<input id="username" name="username" placeholder='Enter Your Username' type='text'>
<label>Password :</label>
<input id="password" name="password" placeholder='Enter Your Password' type='text'>
<!---- Including PHP File Here ---->
<?php
include "redirect.php";
?>
</form>
</div>
</div>
</body>
</html>