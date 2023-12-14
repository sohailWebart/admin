<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin_Panel</title>
	<!--boostrap link-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--js link start-->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/student.css">

<!--chart area start here-->
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Monthlywise Impovement"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		dataPoints: [      
			{ y: 300878, label: "January" },
			{ y: 266455,  label: "Febuary" },
			{ y: 169709,  label: "March" },
			{ y: 158400,  label: "April" },
			{ y: 142503,  label: "May" },
			{ y: 101500, label: "June" },
			{ y: 97800,  label: "July" },
			{ y: 97800,  label: "August" },
			{ y: 97800,  label: "September" },
			{ y: 97800,  label: "October" },
			{ y: 97800,  label: "November" },
			{ y: 80000,  label: "December" }
		]
	}]
});
chart.render();

}
</script>
</head>
<body>

<div class="container-fluid">
	<div class="row">
