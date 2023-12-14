<?php
    include 'include/header.php';
    include 'include/menu.php';
    include 'include/top_header.php';
?>
<?php
    include 'sql/db_connection.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM student_add WHERE id = '$id'";
    $table = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($table);
?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-12 col-sm-12">
            <div>
                <span><i class="fa fa-tachometer pr-1"></i>Dashboard</span><hr>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center" style="font-family: redo;">Single Student View</h3><hr>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <table class="table table-responsive w-100">
                            <tr>
                                <td><img src="sql/imagemove/<?php echo $row['photo']; ?>" height="150px" width="100%"></td>
                            </tr>
                        </table>    
                    </div>
                    <div class="col-md-5 col-sm-12">
							<table class="table table-responsive w-100">
								<tr>
									<td>Name</td>
								</tr>
								<tr>
									<td><input type="text" value="<?php echo $row['name']; ?>" class="form-control" readonly></td>
								</tr>
								<tr>
									<td>Father's Name</td>
								</tr>
								<tr>
									<td><input type="text" value="<?php echo $row['fname']; ?>" class="form-control" readonly></td>
								</tr>
								<tr>
									<td>Mother's Name</td>
								</tr>
								<tr>
									<td><input type="text" value="<?php echo $row['mname']; ?>" class="form-control" readonly></td>
								</tr>
								<tr>
									<td>Mobile Number</td>
								</tr>
								<tr>
									<td><input type="text" value="<?php echo $row['mobilenumber']; ?>" class="form-control" readonly></td>
								</tr>
								<tr>
									<td>Alt. Number</td>
								</tr>
								<tr>
									<td><input type="text" value="<?php echo $row['altnumber']; ?>" class="form-control" readonly></td>
								</tr>
								<tr>
									<td>Email Id</td>
								</tr>
								<tr>
									<td><input type="text" value="<?php echo $row['email']; ?>" class="form-control" readonly></td>
								</tr>
								<tr>
									<td>Gender</td>
								</tr>
								<tr>
									<td><input type="text" value="<?php echo $row['gender']; ?>" class="form-control" readonly></td>
								</tr>
								<tr>
									<td>Religion</td>
								</tr>
								<tr>
									<td><input type="text" value="<?php echo $row['rel']; ?>"class="form-control" readonly></td>
								</tr>
								<tr>
									<td>Category</td>
								</tr>
								<tr>
									<td><input type="text" value="<?php echo $row['category']; ?>" class="form-control" readonly></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<?php
	include 'include/footer.php';
?>