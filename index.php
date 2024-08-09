<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn) {
	die("Unable to connect");
}
if($_POST) {
	$uname = $_POST["username"];
	$pass = $_POST["password"];

    //$uname = mysqli_real_escape_string($conn, $uname);
    //$pass = mysqli_real_escape_string($conn, $pass);

	$sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pass'";

    $result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) >= 1) {
        $row = mysqli_fetch_array($result);
        $user = $row['username'];
		header("Location: menu.php?user=".$user);
	} else {
		echo "<h1>Incorrect Username/Password</h1>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Portal</title>
	<style type="text/css"><?php include("css/main.css"); ?></style>
</head>
<body>
	<a style="position: absolute; top: 24px; left: 24px; background-color: white; border-radius: 24px; text-decoration: none; color: black; width: 32px; height: 32px; border: 2px solid #171921; display: flex; align-items: center; justify-content: center" href="hint.html"><svg width="24px" height="24px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="Icons"> <g> <path d="M27.2,34.8l-4.5.4s2.2-7.9,3.8-13.2a4.1,4.1,0,0,0-3.6-5.5,3.6,3.6,0,0,0-2.7,1.2l-4,3.3a.7.7,0,0,0,.6,1.2l4.5-.4L17.5,35a4.1,4.1,0,0,0,3.6,5.5,3.6,3.6,0,0,0,2.7-1.2l4-3.3A.7.7,0,0,0,27.2,34.8Z"></path> <circle cx="26" cy="11" r="3"></circle> </g> </g> </g> </g></svg></a>
	<form action method="POST" autocomplete="off">
		<input type="text" name="username" placeholder="Username" /><br />
		<input type="text" name="password" placeholder="********" /><br />
		<input type="submit" name="login" value="LOGIN" />
	</form>
</body>
</html>
