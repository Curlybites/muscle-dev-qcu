 <?php include 'header.php'?>
 <?php include 'sidebar.php'?>
 <?php include 'connection.php'?>

<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="print_pdf.php" class="btn btn-white btn-border btn-round mr-2">PRINT</a>
							
							</div>
						</div>
					</div>
				</div>
				<table class="table table-hover">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">First Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">Email</th>
					<th scope="col">Number</th>
					<th scope="col">Message</th>
					<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
<?php 

						include_once('connection.php');
							$sql = "SELECT * FROM client";
 
							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['Id']."</td>
									<td>".$row['Firstname']."</td>
									<td>".$row['Lastname']."</td>
									<td>".$row['Email']."</td>
									<td>".$row['Number']."</td>
									<td>".$row['Message']."</td>
									<td> 
										<a href='#delete_".$row['Id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span>Delete</a>
									</td>
									<td>
										
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}

?>

	
				
				</tbody>
				</table>

<?php include 'settings.php'?>
<?php include 'script.php'?>
<?php include 'footer.php'?>