<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Admina Bootstrap Admin. This is the demo of Admina. You need to purchase a license for legal use!">
		<meta name="author" content="DownTown Themes">

		<link rel="shortcut icon" href="assets/img/icon.png">

		<title>MyClassroom-Student Details</title>
        
	    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!--form validation-->
        <script type="text/javascript" src="assets/plugins/jquery.validate/jquery.validate.min.js"></script>
        <!--form validation init-->
        <script src="assets/plugins/jquery.validate/form-validation-init.js"></script>
        <script src="assets/js/app.js"></script>
	    <!-- DataTables -->
	    <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />	

	</head>

	<body>
	<?php
	include('include/config.php');
	$view = mysqli_query($db,"select * from student order by id desc") or die(mysqli_error($db));
	$total_records= mysqli_num_rows($view);
    ?>
		
		<!--Main Content -->
		<section class="content">

			<!-- Page Content -->

			<div class="wraper container-fluid">
				<!-- <div class="page-title">
					<h3 class="title">Registration Details</h3>
				</div> -->

				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<!-- <div class="panel-heading">
								<!-- <h3 class="panel-title">Datatable</h3>
								<a href="registration.php"><button type="" name="" style="margin-left: 90%;" class="btn btn-primary">Registration form</button></a>
							</div> --> -->
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Sr No</th>
													<th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>last Name</th>
													<th>Branch</th>
													<th>Class</th>
													<th>Email</th>
													<th>Permanent Address</th>
													<th>Current Address</th>
													<th>Date of Birth</th>
													<th>phone</th>
													<th>Gender</th>
                                                    <th>Photo</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$counter = 0;
												while ($row = mysqli_fetch_array($view)) {
												extract($row);
											?>
											<tr>
												<td><?php echo ++$counter; ?></td>
												<td><?php echo $row['fname']; ?></td>
												<td><?php echo $row['mname']; ?></td>
												<td><?php echo $row['lname']; ?></td>
												<td><?php echo $row['branch']; ?></td>
												<td><?php echo $row['class']; ?></td>
												<td><?php echo $row['email']; ?></td>
												<td><?php echo $row['address1']; ?></td>
												<td><?php echo $row['address2']; ?></td>
                                                <td><?php echo $row['dob']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['sex']; ?></td>
                                                <!-- <td><?php echo $row['photo']; ?></td> -->

												<td><img src="image/<?php echo $row['photo']; ?>" height="100" width="100"></td>
												<td>
													<a class="text-success" onClick="return confirm('Are you sure you want to update this registration details ?);" href="stud_update.php?stud_id=<?php echo $id;?>" title="Update registration details"><i class="glyphicon glyphicon-edit"></i></a>

													<a class="text-danger" onClick="return confirm('Are you sure you want to delete this registration details ?);" href="stud_delete.php?stud_id=<?php echo $id;?>" title="Delete registration details"><i class="glyphicon glyphicon-trash"></i></a>
												</td>
											</tr>
									<?php } ?>
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- End Row -->

			</div>

			<!-- Page Content Ends -->

			<!-- Footer -->
			<?php include('include/footer.php'); ?>
			<!-- End Footer -->

		</section>

		<!-- Basic Plugins -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/pace.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>

		<script src="assets/js/app.js"></script>

		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#datatable').dataTable();
			});
		</script>

	</body>
</html>
