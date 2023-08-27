<?php

// Checking data by post method
if(isset($_POST["export"])) {

	// Connect to our data base
	$connect = mysqli_connect("localhost:3307",
		"root", "", "goodweb");

	// Accept csv or text files
	header('Content-Type: text/csv; charset=utf-8');

	// Download csv file as geeksdata.csv
	header('Content-Disposition: attachment;
		filename=geeksdata.csv');

	// Storing data
	$output = fopen("php://output", "w");

	// Placing data using fputcsv
	fputcsv($output, array('userid','name',
	'email', 'phone', 'phone', 'username', 'password', 'image', 'usertype'));

	// SQL query to fetch data from our table
	$query = "SELECT * from users";

	// Result
	$result = mysqli_query($connect, $query);

	while($row = mysqli_fetch_assoc($result)) {

		// Fetching all rows of data one by one
		fputcsv($output, $row);
	}

	// Closing tag
	fclose($output);
}
?>
