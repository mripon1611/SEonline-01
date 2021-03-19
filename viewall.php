<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM appointment" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>D_Name</th> <th>P_Name</th> <th>A_Date</th> <th>Edit</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $doctor_name </td>";
		echo "<td> $patient_name </td>";
        echo "<td> $A_date </td>";
		echo "<td> <a href = 'edit.php?id=$id&doctor_name=$doctor_name&patient_name=$patient_name&A_date=$A_date'> Edit </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=add.php>ADD a new Appoinment</a>";
echo "</table> \n";
	echo "<p><a href='search.php? A_date=$A_date'>Search by Date</a>";
?>