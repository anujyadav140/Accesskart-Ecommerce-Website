<?php
if(isset($_POST['send_contact'])){
   $mailMsg = $_POST['contact'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
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
<?php
	if(isset($_POST["send_contact"])){
		if (isset($_SESSION["contacts"])) {
			$address_array = array(  
                     'name'               =>     $_POST["Name"],  
                     'email'               =>     $_POST["Email"],  
                     'sub'          =>     $_POST["Subject"],  
                     'msg'          =>     $_POST["Message"],
                );  
			$_SESSION["contacts"] = $address_array; 
		}
		else  
      {  
           $address_array = array(  
                     'name'               =>     $_POST["Name"],  
                     'email'               =>     $_POST["Email"],  
                     'sub'          =>     $_POST["Subject"],  
                     'msg'          =>     $_POST["Message"],
                );  
			$_SESSION["contacts"] = $address_array; 
 
      } 
	} 
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.ezz{
		position: relative;
		right: -600px;
	}
</style>
	<title>Contact Page</title>
</head>
<body>
 <div class="w3-row-padding">
      <div class="w3-col s4">
        <h1>Contact</h1>
        <p>Questions? Go ahead.</p>
        <form action="contact_serve.php" name="contact">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black" name="send_contact">Send</button>
        </form>
      </div>
      <div class="ezz">
      <div class="w3-col s4 w3-justify">
        <h1>Store</h1>
        <p><i class="fa fa-fw fa-map-marker"></i>ACCESSKART</p>
        <p><i class="fa fa-fw fa-phone"></i> 9322553737</p>
        <p><i class="fa fa-fw fa-envelope"></i> anujyadav140@gmail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
    </div>
</body>
</html>