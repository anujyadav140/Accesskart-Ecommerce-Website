<?php include('process.php'); ?>
<?php include('add_to_cart_serve.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD TO CART PAGE</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
    margin: 4px 2px;
    cursor: pointer;
    width: 140px;
    height: 70px;
    border-radius: 24px;
    float: right;

    }.add-btn:hover{
    background-color: #d3d3d3;
    color: black;
    padding: 15px 32px;
    }
           </style>
</head>
<body>
 <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          
                          <tr>  
                               <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>&#x20b9; <?php echo $values["item_price"]; ?></td>  
                               <td>&#x20b9; <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="add_to_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">&#x20b9; <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php
                            }
                          ?>
                     </table>  
                </div>  
           </div>  
           <br />  
           <a href="checkout.php"><button class="add-btn">Proceed to Checkout</button></a>
      </body>  
</body>
</html>