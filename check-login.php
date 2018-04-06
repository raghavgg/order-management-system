<?php
	// Getting Post Variables
	include_once("./common/common.php");
	$dbh = Oms::db_connect();
	$POST = Common_function::cleanme($_POST);
	$username = $POST['username'];
	$password = $POST['password'];
	$result = Login::checkLogin($dbh, $username, $password);
	if(!empty($result))
	{
		session_start();
		$_SESSION['username'] = $result['email'];
		$_SESSION['name'] = $result['first_name']." ".$result['last_name'];
		$_SESSION['phone'] = $result['phone'];
		$_SESSION['id'] = $result['id'];
		header("Location: ./user/");
	}
	else		
	{
		header("Location: index.php");
	}
?>