<?php
session_start();

require_once 'vendor/autoload.php';

$basic  = new \Nexmo\Client\Credentials\Basic('XXXXXXXX', 'XXXXXXXXXXXXXXXX');
$client = new \Nexmo\Client($basic);
$lada = $_POST['lada'];
$phone = $_POST['phone'];
$to = $lada . $phone;
$_SESSION['verificationCode'] = substr(md5(uniqid(rand(), true)), 6, 6);
$code = $_SESSION['verificationCode'];

	try {

		$message = $client->message()->send([
	    'to' => $to,
	    'from' => 'localhost',
	    'text' => "Your verification code is: $code"
	]);

	    header('Location: verify.php');

	} catch (Exception $e) {

		echo $e->getMessage();
	}
?>