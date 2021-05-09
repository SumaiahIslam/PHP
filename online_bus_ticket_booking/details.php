
<?php


 include('connection.php');

$id=$_GET['id'];
	$q = "select * from booking where id=$id";
	$result = mysqli_query($conn,$q);

$row = mysqli_fetch_array($result)) 
				
			
				echo "name:".$row['name']."</br>";
				echo "phone".$row['phone']."</br>";
				echo "from".$row['p_from']."</br>";
				echo "to".$row['p_to']."</br>";
				echo "date".$row['p_date']."</br>";
				echo "time".$row['p_time']."</br>";
				echo "ticket".$row['ticket']."</br>";
			
?>
