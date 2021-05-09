<?php
include 'function.php';
check_session();

?>

<?php

 include('php_backend_header.php');
 include('connection.php');

  if(isset($_POST['submit']))
  {
  
  $payment_code=$_POST['payment_code'];
 
 

  $sql = "INSERT INTO transaction_code (payment_code)
  VALUES ('$payment_code')";


if (mysqli_query($conn, $sql)) {

  echo "<div class='col-md-6 offset-2'>";
  echo "<div class='p-border' 
                style=' box-shadow: 0 6px 11px 0 hsla(0,0%,75%,.5);
                background-color: #fff; 
                margin-left: 96px; 
                margin-top: 65px; 
                margin-bottom: 65px;
                padding: 18px; 
                font-size: 500px; 
                font-family: pt;
                text-align: center;
                padding-top: 37px;'>";

  echo "<div class='h1'>";
  echo "<img src=images/sucess.png>";
  echo "<br>Thank You!";
  echo "<br>Booking Confirm Successfully";
  echo "<a class='nav-link' href='e_ticket.php'>E-Ticket</a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
include('php_backend_footer.php');

?>

