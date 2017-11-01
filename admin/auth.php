<?php

session_start();

require_once '../config.php';
require_once '../vendor/libs/auth/authregister.php';
require_once '../vendor/libs/auth/authlogin.php';
require_once '../vendor/libs/functions.php';

if (isset($_POST['register'])) {

	$redirect = 'auth';
	$registration = new Registration(); // create a new registration object - registration happens here

	setflash($registration->errors, 'fail');
	if (empty($registration->errors)) {
		setflash($registration->messages, 'success');
	}

} elseif (isset($_POST['login'])) {

	$redirect = 'auth';
	$login = new login();

	setflash($login->errors, 'fail');
	if (empty($login->errors)) {
		setflash($login->messages, 'success');
		$redirect = 'users';
	}
} elseif (isset($_GET['logout'])) {
	
	$login = new login();
	$redirect = 'auth';
}

redirect(URL . 'admin/' . $redirect);