<?php
// database connection code
if(isset($_POST['in_date']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'Adri@324','royalpalace');

// get the post records

$in_date = $_POST['in_date'];
$out_date = $_POST['out_date'];
$adult = $_POST['adult'];
$children = $_POST['children'];
$room_type = $_POST['room_type'];

// database insert SQL code
$sql = "INSERT INTO `booking` ('id', 'in_date', 'out_date', 'adult', 'children', 'room_type') VALUES ('0', '$in_date', '$out_date', '$adult', '$children', '$room_type')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}