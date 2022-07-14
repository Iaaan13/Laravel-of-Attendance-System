<?php

$db = new mysqli("localhost","root","","qx_login");
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "qx_login";

$timezone = date_default_timezone_set("Asia/Manila");

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>