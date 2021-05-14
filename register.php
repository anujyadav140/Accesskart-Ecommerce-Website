<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<style type="text/css">
*, html, body{
	height = 100%;
	width = 100%;
	margin = 0 0 0 0;
	padding = 0 0 0 0;
}
body {
	background-image:url("images/login-gif.gif");
	background-repeat:no-repeat;
	background-size:cover;
}
.name {
	color:white;
	font-family:Courier New;
	font-size: 25px;
	text-align: center;
}
.container {
	background-color: rgba(0, 0, 0, 0.4);
	width:30%;
	height:400px;
	margin-left:35%;
	margin-top:8%;
	padding-top: 2%;
}
.username,.email,.password{
	margin-left: 110px;
	margin-top:6%;
	height:10%;
	border-radius: 10px;
	padding-left:2%;
	font-size: 15px;
}
.submit{
	margin-top:10%;
	margin-left:40%;
	height: 10%;
	width:20%;
	background-color: #0061ff;
	border-color: #18A9C5;
	border-radius: 2px;
	color: white;
}
.submit:hover{
	background-color: #18A9C5;
	color: black;
}
.image{
	position: relative;
	left:160px;
	top:20px;
}
	</style>
</head>
<body>
<div class="container">
	<h1 class="name">Accesskart</h1>
	<form action="register.php" method="post" enctype="multipart/form-data">
	<input type="text" name="username" class="username" placeholder="Your Username:" required>
	<input type="email" class="email" name="email" placeholder="Your Email:" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$">
	<input type="password" name="password" placeholder="Password:" minlength="8" class="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." required>
	<input type="file" name="image" class="image">
	<input type="submit" name="submit" class="submit" value="Sign Up">
	</form>
</div>
</body>
</html>
<?php 

$servername = "localhost";
$username = "id16774077_anuj";
$password = "kAI?#d0JZ5F]Q~+2";
$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,"id16774077_accesskart") or die ("database not found");

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$target = "images/user_pics/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];
	$query = "INSERT INTO users (username,email,password,pic) values ('$username','$email','$password','$image')";
	mysqli_query($conn,$query);
	move_uploaded_file($_FILES['image']['tmp_name'], $target);
	header('Location: login.php');
} 
?>