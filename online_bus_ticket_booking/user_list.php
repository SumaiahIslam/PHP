

<?php

 include('php_backend_header.php');
 include('connection.php');


	$q = "select * from signup";
	$result = mysqli_query($conn,$q);

?>

<header class="uni-header">
              <div class="header">
                <div class="container">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <a class="navbar-brand" href="#"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">User List</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                          </li>
                         
                          <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
                          </li>
                       </ul>

                        

                       </div>
                  </nav>
                </div>      
              </div>
      </header>  

<section class="user-list">
	<div class="container"> 
       <div class="row ">
      		<div class="col-md-8">
      			<h1>User List</h1>
      		</div>
      	</div>


		<div class="row">
			<div class="col-md-10 offset-1">
		<table class="table">
		    <thead>
		      <tr>
		      	<th>ID</th>
		        <th>Name</th>
		        <th>NID</th>
		        <th>Phone</th>
				<th>Gender</th>
			    <th>Password</th>
			    <th>Delete</th>
		      </tr>
		    </thead>
        <tbody>
			<?php
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['nid']."</td>";
				echo "<td>".$row['phone']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['password']."</td>";
				
				
				echo '<td><a href="user_list_delete.php?id='.$row['id'].'" class="btn btn-primary">Delete</a></td>';
				echo "</tr>";
			}
			?>
       </tbody>
  </table>
			</div>
		</div>
	</div>
	
</section>
<?php

include('php_backend_footer.php');

?>




















