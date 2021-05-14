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
  <title></title>
</head>
<body>
<textarea name="myTextArea" cols="20" rows="3">
      <?php
          if (!empty($_SESSION['contacts'])) {
      echo "Name:".$address_array['name']."<br>,"."Email:".$address_array['email']."<br>Subject".$address_array['sub']."<br>Message:".$address_array['msg'];
    }
    ?>
      </textarea>
</body>
</html>