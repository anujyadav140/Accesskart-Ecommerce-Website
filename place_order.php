<?php include('process.php'); ?>
<?php include('add_to_cart_serve.php'); ?>
<?php include('checkout_serve.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Placed Successfully</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
              .add-btn{
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    width: 140px;
    height: 70px;
    border-radius: 24px;
    float: right;
    position: relative;
    top:-60px;

    }.add-btn:hover{
    background-color: #d3d3d3;
    color: black;
    padding: 15px 32px;
    }
    body {
  background: url(dispatch.gif) no-repeat;
  background-size: 100%;
}
           </style>
</head>
<body>
     <h1>Your Order Has Been Placed Successfully</h1><a href="index.php"><button class="add-btn">Continue</button></a>

</body>
</html>

   


