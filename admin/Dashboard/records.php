<?php include 'connection.php'?>

<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscle Dev - Records</title>
</head>
<body>
    <!---header---->
    <?php include 'header.php'?>

    <!-----Sidebar--------->
    <?php include 'sidebar.php'?>

    <div class="main-panel">
        <div class="content">
         <div class="panel-header bg-primary">
					<div class="page-inner bg-primary">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white fw-bold">Residents</h2>
							</div>
						</div>
					</div>
				</div>
                <div class="page-inner bg-primary">
					<div class="row mt--2">
						<div class="col-md-12">

                            <?php if(isset($_SESSION['message'])): ?>
                                <div class="alert alert-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                            <?php unset($_SESSION['message']); ?>
                            <?php endif ?>

                            <div class="card bg-dark2">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Resident Information</div>
                                        <?php if(isset($_SESSION['username'])):?>
										<div class="card-tools">
											<a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
												<i class="fa fa-plus"></i>
												Resident
											</a>
                                            <a href="model/export_resident_csv.php" class="btn btn-danger btn-border btn-round btn-sm">
												<i class="fa fa-file"></i>
												Export CSV
											</a>
										</div>
                                        <?php endif ?>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="residenttable" class="display table table-striped">
											<thead>
												<tr>
                                                    <th scope="col">Picture</th>
													<th scope="col">Fullname</th>
                                                    <th scope="col">National ID</th>
													<th scope="col">Alias</th>
													<th scope="col">Birthdate</th>
													<th scope="col">Age</th>
													<th scope="col">Civil Status</th>
                                                    <th scope="col">Gender</th>
													<th scope="col">Purok</th>
                                                    <?php if(isset($_SESSION['username'])):?>
                                                        <?php if($_SESSION['role']=='administrator'):?>
													<th scope="col">Voter Status</th>
                                                    <?php endif ?>
													<th scope="col">Action</th>
                                                    <?php endif ?>
												</tr>
											</thead>
											<tbody>




        </div>
    </div>
</body>
</html>