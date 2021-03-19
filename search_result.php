<?php
    $ad = $_GET["ad"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM appointment where A_date = '$ad' " )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>D_Name</th> <th>P_Name</th> <th>A_Date</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $doctor_name </td>";
		echo "<td> $patient_name </td>";
        echo "<td> $A_date </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=viewall.php>Go to Wiew all page</a>";
?>