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

	<div class="row mt-1">
		<div class="col-md-3 col-sm-12">
			<div class="card1">
				<div class="card1-left">
					<i class="fa fa-user"></i>
				</div>

				<div class="card1-right">
					<div class="card1-right-top">
						<span class="text-white">TOTAL STUDENTS</span>
						<span class="text-white">400</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-12">
			<div class="card1" style="background-color: #9AE66E!important;">
				<div class="card1-left" style="background-color:#17D7A0!important;">
					<i class="fa fa-users"></i>
				</div>

				<div class="card1-right">
					<div class="card1-right-top">
						<span class="text-white">TOTAL TEACHERS</span>
						<span class="text-white">50</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-12">
			<div class="card1" style="background-color: #0F00FF!important;">
				<div class="card1-left" style="background-color:#1597E5!important;">
					<i class="fa fa-male"></i>
				</div>

				<div class="card1-right">
					<div class="card1-right-top">
						<span class="text-white">TOTAL STAFF</span>
						<span class="text-white">100</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-12">
			<div class="card1" style="background-color: red!important;">
				<div class="card1-left" style="background-color:#F05945!important;">
					<i class="fa fa-bus"></i>
				</div>

				<div class="card1-right">
					<div class="card1-right-top">
						<span class="text-white">TOTAL TRANSPORT</span>
						<span class="text-white">100</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col-md-12 col-sm-12 chart">
			<div>
				<div id="chartContainer" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
	</div>
</div>

<?php
	include 'include/footer.php';
?>