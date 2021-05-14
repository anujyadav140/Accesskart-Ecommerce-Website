<?php include('process.php'); ?>
<?php
  $link = mysqli_connect("localhost","id16774077_anuj","kAI?#d0JZ5F]Q~+2");
  if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
  mysqli_select_db($link,"id16774077_accesskart");
?>
<!DOCTYPE html>
<html>
<title>ACCESORY WEBSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b><img src="images/logo.png" height="100" width="200"></b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="index.php" class="w3-bar-item w3-button">Phone Cases</a>
    <a href="headphones.php" class="w3-bar-item w3-button">Headphones</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Data Cables <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Basic</a>
    </div>
  </div>
  <a href="contact.php" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="about.php" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">About Us</a> 
</nav>
<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide"></div>
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
    <p class="w3-left">Datacables</p>
    <p class="w3-right">
      <?php if(isset($_SESSION['username'])){ ?>
      <div class="dropdown" style="float: right;">
  <button class="dropbtn">Hello, <?php echo $_SESSION['username'] ?></button>
    <div class="dropdown-content">
    <a href="add_to_cart.php">Your Cart</a>
    <a href="index.php?logout='1'">Logout</a>
    </div>
    </div>
<?php }else{ ?>
<div class="dropdown" style="float: right;">
  <button class="dropbtn"><a href="login.php" style="text-decoration:none">login</a></button>
  </div>
<?php } ?>
    </p>
  </header>
  <div class="w3-container w3-text-grey" id="jeans">
    <?php
    $res = mysqli_query($link,"SELECT * FROM product_datacable");
    $count = 0;
    while($row=mysqli_fetch_array($res))
    {
      $count++;
      ?>
    <?php
    }?>
    <p><?php echo "$count Items"; ?></p>
  </div>

  <!-- Product grid -->
 <div class="w3-row w3-grayscale">
  <?php
    $res = mysqli_query($link,"SELECT * FROM product_datacable");
    while($row=mysqli_fetch_array($res))
    {
  ?>
  <div class="w3-col l3 s6">
      <div class="w3-container">
 <div class="w3-display-container">
        <img src="images/datacable/<?php echo $row["image"] ?>" style="width:100%">
 <span class="w3-tag w3-display-topleft">New</span>
<div class="w3-display-middle w3-display-hover">
<button class="w3-button w3-black"><?php echo "<a href='details/details3.php?id={$row['id']}'>" ?>Buy now </a><i class="fa fa-shopping-cart"></i></button>
</div>
        </div>
        <p><?php echo $row["name"]; ?><br><b><?php echo $row["price"]; ?> &#x20b9;</b></p>
        </div>     
      </div>
   <?php
    }
  ?>
 </div> 
  <div class="w3-black w3-center w3-padding-24">Made by Anuj,Meher & Monaami</div>
  <!-- End page content -->
</div>
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