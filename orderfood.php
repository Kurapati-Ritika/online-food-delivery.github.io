<?php
    require('connection.php');
    
    if (isset($_REQUEST['submit'])) {
      $quantity = stripslashes($_REQUEST['quantity']);
      $quantity = mysqli_real_escape_string($con, $quantity);

      $phoneno = stripslashes($_REQUEST['phoneno']);
      $phoneno = mysqli_real_escape_string($con, $phoneno);

      $address = stripslashes($_REQUEST['address']);
      $address = mysqli_real_escape_string($con, $address);

      $order_datetime = date("Y-m-d H:i:s");
      $query    = "INSERT into `orders` (quantity, phoneno, address, order_datetime)
            VALUES ('$quantity', '$phoneno', '$address', '$order_datetime')";
      $result   = mysqli_query($con, $query);
      if ($result) {
        echo "<script type='text/javascript'>
                  alert('Your order has been successfully placed :)');
              </script>";
              
      } else {
        echo "<script type='text/javascript'>
                  alert('Error in placing order, Try again!!');
              </script>";
              
      }
      
    }
?>
