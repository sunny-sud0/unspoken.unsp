<?php
// database connection code
if(isset($_POST['txt_to']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txt_to = $_POST['txt_to'];
$txt_from = $_POST['txt_from'];
$txt_msg = $_POST['txt_msg'];
$txt_color = $_POST['txt_color'];




// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fld_to`, `fld_from`, `fld_msg`, `fld_color`) VALUES ('0', '$txt_to', '$txt_from','$txt_msg','$txt_color')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header("Location: submitted.php");
	exit();
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>