<?php

// Connect syntax
$connect = mysqli_connect("localhost:3307",
	"root", "", "goodweb");

// Display data from geeksdata table
$query ="SELECT * FROM users";

// Storing it in result variable
$result = mysqli_query($connect, $query);
?>


<html>

<head>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
	</script>
	
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<style>
	body{
		background-image: url('images/cafune.jpeg');
	}
		</style>

</head>

<body>
	<div class="container" style="width:900px;">
		<h2 align="center">USERS</h2>

		<h3 align="center">
			Export data into CSV from Data Base
		</h3>
		<br />
		
		<!-- After clicking on submit button
			export.php code is revoked -->
		<form method="post" action="export_excel.php"
			align="center">
			<input type="submit" name="export"
				value="CSV Export"
				class="btn btn-success" />
		</form>
		<br />

		<!-- Code for table because our data is
			displayed in tabular format -->
		<div class="table-responsive" id="employee_table">
			<table class="table table-bordered">
				<tr>
					

					<th width="35%">userid</th>
					<th width="10%">name</th>
					<th width="20%">email</th>
					<th width="5%">phone</th>
					<th width="20%">username</th>
					<th width="20%">password</th>
					<th width="20%">image</th>
					<th width="20%">usertype</th>
				</tr>
				<?php
				
				// Fetching all data one by one using
				// while loop
				while($row = mysqli_fetch_array($result)) {
				?>
				
				<!-- taking attributes and storing
					in table cells -->
				<tr>
					<!-- column names in table -->
					<td><?php echo $row["userid"]; ?></td>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["phone"]; ?></td>
					<td><?php echo $row["username"]; ?></td>
					<td><?php echo $row["password"]; ?></td>
					<td><?php echo $row["image"]; ?></td>
					<td><?php echo $row["usertype"]; ?></td>
				</tr>
				<?php	
				}?>
			</table>
			<!-- Closing table tag -->
		</div>
		<!-- Closing div tag -->
	</div>
</body>

</html>
