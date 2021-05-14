<?php include('../process.php'); ?>
<?php
	$link = mysqli_connect("localhost","id16774077_anuj","kAI?#d0JZ5F]Q~+2");
	if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
	mysqli_select_db($link,"id16774077_accesskart");
?>
<!DOCTYPE html>
<html>
<title>Detail For Products</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 10px;
    border: none;
    cursor: pointer;
}
.dropdown {
    position: relative;
    display: inline-block;
    top: 20px;
}
.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.img{
      width: 200px;
      height: 200px;
      position: relative;
      top: 50px;
      right: 155px;
    }
    .add-btn{
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
    width: 140px;
    height: 70px;
    border-radius: 24px;

    }.add-btn:hover{
    background-color: #d3d3d3;
    color: black;
    padding: 15px 32px;
    }
    .info-container{
    border-radius: 25px;
    border: 2px solid black;
    padding: 20px; 
    width: 600px;
    height: auto;  
    max-height: 800px; 
    position: relative;
    left: 230px;
    bottom: 150px;
    }
    .button {
    background-color: black;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}
.button_black {
    background-color: white;
    color: black;
    border: 2px solid black;
}
.button_black:hover {
    background-color: black;
    color: white;
}
    .nam{font-size: 20px;}
    .pri{font-size: 12px;}
    .pri-col{font-size:12px;color: red;}
    .desc{font-size: 16px;max-width: 400px;}
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
     <h3 class="w3-wide"><b><img src="../images/logo.png" height="100" width="200"></b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Phone Cases <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Basic</a>
    </div>
    <a href="../headphones.php" class="w3-bar-item w3-button">Headphones</a>
    <a href="../datacable.php" class="w3-bar-item w3-button">Data Cables</a>
  </div>
  <a href="../contact.php" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="../about.php" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">About Us</a> 
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Phone Cases</p>
    <p class="w3-right">
      <i class="login-click">
      <?php if(isset($_SESSION['username'])){ ?>
      <div class="dropdown" style="float: right;">
  <button class="dropbtn">Hello, <?php echo $_SESSION['username'] ?></button>
    <div class="dropdown-content">
    <a href="../add_to_cart.php">Your Cart</a>
    <a href="../index.php?logout='1'">Logout</a>
    </div>
    </div>
<?php }else{ ?>
<div class="dropdown" style="float: right;">
  <button class="dropbtn"><a href="../login.php" style="text-decoration:none">login</a></button>
  </div>
<?php } ?>
        </i>
    </p>
    
    <?php
  if(isset($_GET['id'])){
  $ID = mysqli_real_escape_string($link,$_GET['id']);
  $res = mysqli_query($link,"select * from product where id = '$ID'");
  $row = mysqli_fetch_array($res);
?>
<form method="post" action="../add_to_cart.php?action=add$id=<?php echo $row['id'];?>" id="forms">
<img src="../images/phonecase/<?php echo $row["image"] ?>" class="img">
<div class="info-container">
<p class="nam"><strong><?php echo $row['name']; ?></strong></p>
<p class="pri"><strong>Price:&#x20b9;  </strong><strong class="pri-col"><?php echo $row['price']; ?></strong></p>
<p style="font-size: 14px;"><strong>Qty:</strong></p><input type="text" name="quantity" value="1">
<p class="desc"><strong>Info:</strong><?php echo $row['description']; ?></p>
<input type="hidden" name="hidden_name" value="<?php echo $row['name'] ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row['price'] ?>">
<input type="hidden" name="hidden_id" value="<?php echo $row['id'] ?>">
<button type="submit" form="forms" class="add-btn" name="add_to_cart">Add to Cart</button>
</div>
</form>
<?php } ?>
<?php
if (isset($_GET['id'])) {
  $ID = mysqli_real_escape_string($link,$_GET['id']);
  $res = mysqli_query($link,"select * from product where id = '$ID'");
  $row = mysqli_fetch_array($res);
?>
<h1 style="position: relative;left: 8px;">Write Your Review </h1>
<hr>
<div class="container">
<form method="post" action="reviews_serve.php">
<div class="form-group">
  <textarea placeholder="Write a review" name="review" rows="2" cols="40" required></textarea><br>
    <input type="hidden" name="postid" value="<?php echo $row['id'];?>">
  <input type="submit" name="sub_review" value="Post review" class="button button_black"><hr>
  </div>
</form>
</div>
<?php }?>
<?php
$res = mysqli_query($link,"SELECT * FROM reviews WHERE postid = '$ID'");
while($row=mysqli_fetch_array($res)){
?>
<div class="container">
<div class="row">
<div class="col-sm-12">
</div><!-- /col-sm-12 -->
</div><!-- /row -->
<div class="row">
<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="../images/user_pics/<?php echo $row['profile']?>">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->
<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong><?php echo $row['username'];?></strong> <span class="text-muted">commented on <?php echo $row['timess']; ?></span>
</div>
<div class="panel-body">
<?php echo $row['review']; ?>
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->
<?php } ?>
  </header>
<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html>