<!DOCTYPE html>
<html>
<style type="text/css">
	#name
	{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	#price
	{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	#description
	{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	#x
	{
	width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}
</style>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<h3>Write product name:</h3>
	<input type="text" name="name" id="name" placeholder="Write product name" required>
    <h3>Select image to upload:</h3>
    <input type="file" name="image" id="image" required>
    <h3>Write product price:</h3>
    <input type="text" name="price" id="price" placeholder="Write price" required>
    <h3>Write product description:</h3>
    <input type="text" name="description" id="description" placeholder="Write description" required><br>
    <h3>Select Where to upload:</h3>
     <input type="radio" name="phonecase" value="phonecase"> Phonecase<br>
  <input type="radio" name="headphone" value="headphone"> Headphone<br>
  <input type="radio" name="datacable" value="datacable"> Datacable
    <h3>Submit For Phone case:</h3>
    <input type="submit" value="Upload to database" name="submit1" id="x">
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "id16774077_anuj";
$password = "kAI?#d0JZ5F]Q~+2";
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,"id16774077_accesskart") or die("no db found");

if (isset($_POST["phonecase"])) {
    # code...
    $name = $_POST['name'];
    $target = "images/phonecase/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $query = "INSERT INTO product (name,image,price,description) values ('$name','$image','$price','$description')";
    if (mysqli_query($conn,$query)) {
        # code...
        echo "<h3>Upload successful</h3>";
    }
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        # code...
        echo "<H3>FILE UPLOADED</h3>";
    }
    else
    {
        echo "<h3>ERROR</h3>";
    }
}

if (isset($_POST["headphone"])) {
    # code...
    $name = $_POST['name'];
    $target = "images/headphone/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $query = "INSERT INTO product_headphone (name,image,price,description) values ('$name','$image','$price','$description')";
    if (mysqli_query($conn,$query)) {
        # code...
        echo "<h3>Upload successful</h3>";
    }
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        # code...
        echo "<H3>FILE UPLOADED</h3>";
    }
    else
    {
        echo "<h3>ERROR</h3>";
    }
}

if (isset($_POST["datacable"])) {
    # code...
    $name = $_POST['name'];
    $target = "images/datacable/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $query = "INSERT INTO product_datacable (name,image,price,description) values ('$name','$image','$price','$description')";
    if (mysqli_query($conn,$query)) {
        # code...
        echo "<h3>Upload successful</h3>";
    }
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        # code...
        echo "<H3>FILE UPLOADED</h3>";
    }
    else
    {
        echo "<h3>ERROR</h3>";
    }
}
?>