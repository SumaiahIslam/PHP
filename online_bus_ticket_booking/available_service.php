
<?php

 include('php_backend_header.php');
 include('connection.php');
 include('pop_up_signin_signup.php');

	$q = "select * from add_ticket_info";
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
                            <a class="nav-link" href="index.php">Home</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="booking.php">Booking</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="available_service.php">Availeable root</a>
                          </li>
                            <button type="button" class="btn btn-primary c-btn" data-toggle="modal" data-target="#staticBackdrop">Sign In</button>
                          <button type="button" class="btn btn-primary c-btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Sign Up</button>
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
      			<h1>Available Root</h1>
      		</div>
      	</div>


	

		<div class="row">
			<div class="col-md-10 offset-1">
		<table class="table">
		    <thead>
		      <tr>
		      	<th>ID</th>
		      	<th>From</th>
			    <th>To</th>
			    <th>date</th>
			    <th>Time</th>
          <th>Ticket Price</th>
			    <th>Ticket Available</th>
		      </tr>
		    </thead>
        <tbody>
			<?php
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['p_from']."</td>";
				echo "<td>".$row['p_to']."</td>";
				echo "<td>".$row['p_date']."</td>";
				echo "<td>".$row['p_time']."</td>";
        echo "<td>".$row['ticket_price']."</td>";
				echo "<td>".$row['ticket']."</td>";
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









