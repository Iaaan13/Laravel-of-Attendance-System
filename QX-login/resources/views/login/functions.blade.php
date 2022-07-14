<?php

function check_login($con){
	//checking if there is user id
	if(isset($_SESSION['user_id'])){
		$id = $_SESSION['user_id'];
		$query = "select * from qx_login where user_id = '$id' limit 1";

		//check if it real and if it is return the data
		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0){
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("location: home.blade.php");
	//die so code doesn't continue
	die;
}

function random_num($length){
	$text = "";
	if($length <5){
		$length = 5;
	}

	//assigning random num to user_id
	$len = rand(1,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}
	return $text;
}

?>