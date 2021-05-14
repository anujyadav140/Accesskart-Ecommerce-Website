<?php include('process.php'); ?>
<?php include('add_to_cart_serve.php'); ?>
<?php include('checkout_serve.php'); ?>
<?php
if(isset($_POST['order'])){
   $mailMsg = $_POST['myTextArea'];
   require '/PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "cowboy.ttanaka@gmail.com";
   $mail ->Password = "stdsub11";
   $mail ->SetFrom("cowboy.ttanaka@gmail.com");
   $mail ->Subject = "Order Has Been Initiated";
   $mail ->Body = $mailMsg;
   $mail ->AddAddress("cowboy.ttanaka@gmail.com");

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
       header('Location: place_order.php');
   }
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Order</title>
	<style type="text/css">
	.add-btn{
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 0px 12px;
    cursor: pointer;
    width: 140px;
    height: 70px;
    border-radius: 24px;
    position: relative;
    float: right;
    }.add-btn:hover{
    background-color: #d3d3d3;
    color: black;
    padding: 15px 32px;
    }
    .address{
    	font-family:Georgia, Times, "Times New Roman", serif;
    	color: #A9A9A9;
    }
    .item_name{
    	font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
    }
    .item_price{
    	font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
    	color: red;
    }
    .item_quantity{
    	font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
    }
    </style>
</head>
<body>
<div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading"><h1>Your Order Is Ready</h1></div>
      <div class="panel-body">
      <form method="post" action="order.php">
<textarea name="myTextArea" cols="20" rows="3" style="display: none;">
  <?php if(!empty($_SESSION["shopping_cart"])){
    if (!empty($_SESSION['address_sess'])) {
      echo "Deliver Address:".$address_array['fullname'].",".$address_array['address1']."<br>,".$address_array['address2'].
"<br>,".$address_array['city'].",".$address_array['state'].",".$address_array['postal'].",".$address_array['country'];
    }
    foreach($_SESSION["shopping_cart"] as $keys => $values){ 
      echo nl2br("\nName:".$values["item_name"]."\n");
      echo nl2br("Price:".$values["item_price"]."\n");
      echo nl2br("Quantity:".$values["item_quantity"]."\n");
      echo "\n******************************************************\n";
    }
  }
      ?>
</textarea>
<input class="add-btn" name="order" type="submit">
</form>
<?php 
if (!empty($_SESSION['address_sess'])) {
?>
<p class="address">
<strong>Deliver To:</strong><?php echo $address_array['fullname'].",".$address_array['address1']."<br>,".$address_array['address2'].
"<br>,".$address_array['city'].",".$address_array['state'].",".$address_array['postal'].",".$address_array['country'];
}?>
</p>
<?php
if(!empty($_SESSION["shopping_cart"])){
		foreach($_SESSION["shopping_cart"] as $keys => $values){
?>
<hr>
<div>
<ul>
  <li  class="well">
  <p class="item_name"><strong><?php echo $values["item_name"]; ?></strong></p>
  <p><strong>&#x20b9; </strong><strong class="item_price"><?php echo $values["item_price"]; ?></strong></p>
  <p class="item_quantity">Quantity - <?php echo $values["item_quantity"]; ?></p>
  </li>
</ul>
</div>
<?php
		}
	}	
?>
<hr>
</div>
</div>
</div>

</body>
</html>