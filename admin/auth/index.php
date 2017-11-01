<?php

session_start();

require_once '../../vendor/libs/functions.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php require_once '../includes/header.html'; ?>

	<link rel="stylesheet" type="text/css" href="../../assets/css/form-auth.css">

	<script src="../../vendor/jquery/jquery.min.js"></script>
	<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<h2>Fancy Login / Registration form</h2>
	</div>
</div>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">

<?php flash(); ?>

<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li class="nav-item active">
        	<a class="nav-link" data-toggle="tab" href="#sectionA">Sign In</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" data-toggle="tab" href="#sectionB">Join us!</a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div class="innter-form">
            <form class="sa-innate-form" action="../auth.php" method="post">
	            <label>Email Address</label>
	            <input type="text" name="user_name">
	            <label>Password</label>
	            <input type="password" name="user_password">
	            <button type="submit" name="login">Sign In</button>
	            <a href="">Forgot Password?</a>
            </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="sectionB" class="tab-pane fade">
			<div class="innter-form">
            <form class="sa-innate-form" action="../auth.php" method="post">
	            <label>Name</label>
	            <input type="text" name="user_name">
	            <label>Email Address</label>
	            <input type="text" name="user_email">
	            <label>Password</label>
	            <input type="password" name="user_password_new">
	            <label>Password</label>
	            <input type="password" name="user_password_repeat">
	            <button type="submit" name="register">Join now</button>
	            <p>By clicking Join now, you agree to hifriends's User Agreement, Privacy Policy, and Cookie Policy.</p>
            </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>
</html>