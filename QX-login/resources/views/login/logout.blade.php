<?php

session_start();

//if there is value
if(isset($_SESSION['user_id'])){
	//unset the value to logout
	unset($_SESSION['user_id']);
}

header("Location: home.blade.php");
die;

?>