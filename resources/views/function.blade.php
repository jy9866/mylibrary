<?php
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'mylibrary');
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $email, $errors;

	// grap form values
	$username = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				return Redirect::to('/');
			}else{
				$_SESSION['user'] = $logged_in_user;
				return Redirect::to('/');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
