<!doctype html>
<?php
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if($user=="admin" && $pass=="admin"){
		echo("username and password matched");
	}else{
	echo("error ! please enter correct data!");
	}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
	<table align="center">
		<tr>
			<td>username:</td>
			<td><input type="text" name="username" placeholder="enter your username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name ="password" placeholder="enter your password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit"</td>
		</tr>
	</table>
</form>
</body>
</html>