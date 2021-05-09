
<?php

 session_start(); 

?>
<?php

 include('php_backend_header.php');
 include('connection.php');



  if(isset($_POST['submit']))
  {
  
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $p_from=$_POST['p_from'];
  $p_to=$_POST['p_to'];
  $p_date=$_POST['p_date'];
  $p_time=$_POST['p_time'];
  $ticket=$_POST['ticket'];
 

$sql = "INSERT INTO booking (name,phone,p_from,p_to,p_date,p_time,ticket)
VALUES ('$name','$phone','$p_from','$p_to','$p_date','$p_time','$ticket')";


if (mysqli_query($conn, $sql)) {

 header('Location:payment.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
include('php_backend_footer.php');

?>

