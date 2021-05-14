<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
.username,.password{
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
	background-color: #18A9C5;
	border-color: #18A9C5;
	border-radius: 2px;
}
.account a{
	text-decoration: none;
	color: #609dff;
}
.account{
	text-align: center;
}
.account a:hover{
	color: #0061ff;
}s
	</style>
</head>
<body>
<div class="container">
	<h1 class="name">Accesskart</h1>
	<form action="process.php" method="post">
	<input type="text" name="username" class="username" placeholder="Username:" required>
	<input type="password" name="password" class="password" placeholder="Password:" required>
	<input type="submit" name="submit" class="submit" value="Login">
	<h3 class="account"><a href="register.php">Create your account</h3>
	</form>
</div>
</body>
</html>
