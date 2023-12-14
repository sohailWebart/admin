<?php
	include 'include/header.php';
	include 'include/menu.php';
	include 'include/top_header.php';
?>

<div class="container-fluid">
		<div class="row mt-3">
			<div class="col-md-12 col-sm-12">
				<div>
					<span><i class="fa fa-tachometer pr-1"></i> Dashboard</span><hr>
				</div>
			</div>
		</div>

		<div class="container">
			<h3 class="text-center" style="font-family: redo;">Student View</h3>
		</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card">
				<table class="table table-responsive w-100 table-bordered">
					<thead>
						<tr>
							<th>Sno.</th>
							<th>Name</th>
							<th>Father's Name</th>
							<th>Mobile</th>
							<th>Date Of Birth</th>
							<th>Aadhar Number</th>
							<th>Village</th>
							<th>Admission Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include 'sql/db_connection.php';
							$sql = "SELECT * FROM student_add";

							$table = mysqli_query($conn,$sql);
							$i = 1;
							if(mysqli_num_rows($table) > 0){
								while($row = mysqli_fetch_assoc($table)){
									?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['fname']; ?></td>
									<td><?php echo $row['mobilenumber']; ?></td>
									<td><?php echo $row['dob']; ?></td>
									<td><?php echo $row['adhar']; ?></td>
									<td><?php echo $row['vill']; ?></td>
									<td><?php echo $row['adate']; ?></td>
									<td>
										<div class="row">
											<div class="col-md-4 col-sm-12">
												<a href="single_view.php?id=<?php echo $row['id']; ?>" class="fa fa-eye btn-sm btn-info" style="text-decoration: none;"></a>
											</div>
											<div class="col-md-4 col-sm-12">
												<a href="std_edit.php?id=<?php echo $row['id']; ?>" class="fa fa-edit btn-sm btn-primary" style="text-decoration: none;"></a>
											</div>
											<div class="col-md-4 col-sm-12">
												<a href="sql/std_del.php?id=<?php echo $row['id']; ?>" class="fa fa-trash btn-sm btn-danger" style="text-decoration: none;"></a>
											</div>
										</div>
									</td>
								</tr>


					</tbody>
					<?php
					$i++;
						}
					}else{
						echo "<tr>
							<td>No data available</td>
						</tr>";
					}

					?>
				</table>
			</div>
		</div>
	</div>
</div>

<?php
	include 'include/footer.php';
?>