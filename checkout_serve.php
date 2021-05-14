<?php
	if(isset($_POST["checkout"])){
		if (isset($_SESSION["address_sess"])) {
			$address_array = array(  
                     'fullname'               =>     $_POST["fullname"],  
                     'address1'               =>     $_POST["address1"],  
                     'address2'          =>     $_POST["address2"],  
                     'city'          =>     $_POST["city"],
                     'state'          =>     $_POST["state"],
                     'postal'          =>     $_POST["postal"],
                     'country'          =>     $_POST["country"]
                );  
			$_SESSION["address_sess"] = $address_array; 
		}
		else  
      {  
           $address_array = array(  
                 'fullname'               =>     $_POST["fullname"],  
                     'address1'               =>     $_POST["address1"],  
                     'address2'          =>     $_POST["address2"],  
                     'city'          =>     $_POST["city"],
                     'state'          =>     $_POST["state"],
                     'postal'          =>     $_POST["postal"],
                     'country'          =>     $_POST["country"]
           );  
           $_SESSION["address_sess"] = $address_array;  
      } 
	} 
	
?>