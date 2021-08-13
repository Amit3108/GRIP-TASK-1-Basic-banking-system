<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="sparks_bank";


$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("connection failed: ".mysqli_connect_error().'<hr>');
}

?>