

<?php
 include('php_backend_header.php');
 include('connection.php');

  if(isset($_POST['submit']))
  {
  
  $p_from=$_POST['p_from'];
  $p_to=$_POST['p_to'];
  $p_date=$_POST['p_date'];
  $p_time=$_POST['p_time'];
  $ticket=$_POST['ticket'];
  $ticket_price=$_POST['ticket_price'];



$sql = "INSERT INTO add_ticket_info (p_from,p_to,p_date,p_time,ticket_price,ticket)
VALUES ('$p_from','$p_to','$p_date','$p_time','$ticket_price','$ticket')";


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
  echo "<br>Sucessfully Add Service";
  echo "<a class='nav-link' href='admin.php'>Admin page</a>";
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