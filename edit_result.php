<?php
	$id = $_GET["id"];
	$dn = $_GET["D_name"];
	$pn = $_GET["P_name"];
    $ad = $_GET["A_date"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE appointment SET doctor_name='$dn', patient_name='$pn',A_date='$ad' WHERE id = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br> doctor_name = $dn <br> patient_name = $pn <br> A_date = $ad";

	echo "<p><a href=viewall.php>READ all records</a>";
?>