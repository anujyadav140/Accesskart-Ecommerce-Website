<?php include('../process.php'); ?>
<?php
$link = mysqli_connect("localhost","id16774077_anuj","kAI?#d0JZ5F]Q~+2");
mysqli_select_db($link,"id16774077_accesskart");
if(!empty($_SESSION['username'])){
if (isset($_POST['sub_review'])) {
	$rev = $_POST['review'];
	$ids = $_POST['postid'];
	$uname = $_SESSION['username'];
	$img = $_SESSION['profile'];
	$t = time();
	$time = date("d-m-Y",$t);
	$query = "INSERT INTO reviews (postid,review,username,profile,timess) values ('$ids','$rev','$uname','$img','$time')";
	mysqli_query($link,$query);
	header('Location: ../index.php');
}
}
else{
	  header('Location: ../login.php');
}
?>