

<?php

  include('php_backend_header.php');
  include('connection.php');

  if(isset($_POST['submit']))
  {

  $p_from=$_POST['p_from'];
  $p_to=$_POST['p_to'];
  $p_date=$_POST['p_date'];
  $p_time=$_POST['p_time'];
  


$sql = "SELECT * FROM add_ticket_info WHERE p_from='$p_from' and p_to='$p_to' and p_date='$p_date' and p_time='$p_time'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

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
  echo "<br>Ticket Is available";
  echo "<a class='nav-link' href='index.php'>Sign In</a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
 
} else {
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
  echo "<img src=images/wrong.jpg>";
  echo "<br>Ticket Is Not available";
  echo "<a class='nav-link' href='index.php'>Home Page</a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}


mysqli_close($conn);
}
include('php_backend_footer.php');


?>

































