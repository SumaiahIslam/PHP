
<?php
include("connection.php");
if(isset($_POST['update']))
{
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$p_from = mysqli_real_escape_string($mysqli, $_POST['p_from']);
	$p_to = mysqli_real_escape_string($mysqli, $_POST['p_to']);
	$p_date = mysqli_real_escape_string($mysqli, $_POST['p_date']);
	$p_time= mysqli_real_escape_string($mysqli, $_POST['p_time']);
	$ticket= mysqli_real_escape_string($mysqli, $_POST['ticket']);

	if(empty($p_from) || empty($p_to) || empty($p_date) || empty($p_time) || empty($ticket)) {

		if(empty($p_from)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($p_to)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($p_date)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($p_time)) {
			echo "<font color='red'>Department field is empty.</font><br/>";
		}
		if(empty($ticket)) {
			echo "<font color='red'>Department field is empty.</font><br/>";
		}
	} else {
		$result = mysqli_query($mysqli, "UPDATE `add_ticket_info` SET p_from='$p_from',p_to='$p_to',p_date='$p_date',p_time='$p_time',ticket='$ticket' WHERE id=$id");

		header("Location:service_list.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM `add_ticket_info` WHERE id=$id");
while($res = mysqli_fetch_array($result))
{

  $p_from=$res['p_from'];
  $p_to=$res['p_to'];
  $p_date=$res['p_date'];
  $p_time=$res['p_time'];
  $ticket=$res['ticket'];

}
?>




<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top:20px;">
	<form name="form1" method="post" action="edit.php">
		  <table class="table">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" class="form-control" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" class="form-control" value="<?php echo $age;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" class="form-control" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td>Department</td>
				<td><input type="text" name="dept" class="form-control" value="<?php echo $dept;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" style="float:right;"></td>
			</tr>
		</table>
	</form>
	<a href="index.php" class="btn btn-info" role="button" style="float:right;">Home Page</a>
</body>
</html>













<!----------<?php
include("connection.php");
  $id = $_GET['id'];
  $p_from=$res['p_from'];
  $p_to=$res['p_to'];
  $p_date=$res['p_date'];
  $p_time=$res['p_time'];
  $ticket=$res['ticket'];


$result = "UPDATE `add_ticket_info` SET `id`=$id,`p_from`='$p_from',`p_to`='$p_to',`p_date`='$p_date',`p_time`='$p_time',`ticket`='$ticket' WHERE  id=$id ";

if (mysqli_query($conn, $result)) {
  header('Location:service_list.php');
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
------>