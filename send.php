<?php
	include "smsGateway.php";

	session_start();

	$_SESSION['usname'] = $_POST['username'];
	$_SESSION['pass'] = $_POST['pass'];
	$_SESSION['id'] = $_POST['id'];
	$usname = $_SESSION['usname'];
	$pass = $_SESSION['pass'];
	$id = $_SESSION['id'];
	$smsGateway = new smsGateway($usname ,$pass);

	$deviceID = $id;
	$number = $_POST['nomer'];
	$message = $_POST['pesan'];

	$options = [

	    //'send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes
	    //'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent

	];

	//Please note options is no required and can be left out
	$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options); 	
	header("Location: index.php");
?>