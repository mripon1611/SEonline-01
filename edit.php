<?php
	$id = $_GET["id"];
	$d_n = $_GET["doctor_name"];
	$p_n = $_GET["patient_name"];
    $a_d = $_GET["A_date"];

?>

<h1>Update Record</h1>

<form method=get action=edit_result.php>

	<input type=hidden name=id value='<?php echo $id; ?>'> <br>

	f0: <input type=text name=D_name value='<?php echo $d_n; ?>'>
	<p>
	f1: <input type=text name=P_name value='<?php echo $p_n; ?>'>
	<p>
	f1: <input type=text name=A_date value='<?php echo $a_d; ?>'>
	<p>
	<input type=submit value=Edit>
</form>