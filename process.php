<?php
$servername = "localhost";
$username = "id16774077_anuj";
$password = "kAI?#d0JZ5F]Q~+2";
$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,"id16774077_accesskart") or die ("database not found");
session_start();
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' and password = '$password'" or die("ERROR");
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password) {
	$_SESSION['username']=$username;
	$_SESSION['profile']=$row['pic'];
	 header('Location: index.php');
}
else{
	   echo "</h1>login not error</h1>";
}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('Location: index.php');
}
?>