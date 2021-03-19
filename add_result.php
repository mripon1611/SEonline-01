<?php
	$dn = $_GET["dn"];
	$pn = $_GET["pn"];
    $ad = $_GET["ad"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO appointment VALUES ( '', '$dn', '$pn','$ad' )" )
		or die("Can not execute query");

	echo "Record inserted:<br> doctor_name = $dn <br> patient_name = $pn <br> A_date = $ad";

	echo "<p><a href=viewall.php>View all records</a>";
?>