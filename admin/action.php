<?php

session_start();

require_once '../config.php';
require_once '../vendor/libs/database.php'; // require database library
require_once '../vendor/libs/functions.php';

extract($_POST);
extract($_GET); // extract $_GET into var

$db = new database(); // initialize database object

if (isset($_POST['add'])) {

	switch ($data) {
		
		default:
			# code...
			break;
	}
}

if (isset($_POST['update'])) {

	switch ($data) {
		case 'user':
			$redirect = 'users';

			if ($db->update(array(
				'name' => $name,
				'email' => $email,
				'role' => $role
				), $id, 'users')) {
				
				setFlash(array('User has been updated'), 'success');
			}
			break;
		
		default:
			# code...
			break;
	}
}

if (isset($_GET['delete'])) {

	switch ($data) {case 'user':
			$redirect = 'users';

			if ($db->delete($delete, 'users')) {

				setFlash(array('User has been deleted'), 'success');
			}
			break;
		
		default:
			# code...
			break;
	}
}

redirect(URL . 'admin/' . $redirect);