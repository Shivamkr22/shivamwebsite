<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$host ="host=ec2-52-21-136-176.compute-1.amazonaws.com";
$port =" port = 5432";
$dbname ="dbname = d8bprvr31te9vk";
$credentials =" user =gppsxkighkcijs  password =9e754c8b60d337bb5ed0eaaf6ec9b3c0584c51ba18c24f8467d6a889b1b6a4f7";
$con = pg_connect( "$host $port $dbname $credentials");

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage');";

// insert in database 
$rs = pg_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}else{
echo "Contact not Inserted";
}

?>
