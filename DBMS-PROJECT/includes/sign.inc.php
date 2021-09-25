<?php

if(isset($_POST["submit"])){
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$cnpwd = $_POST["cnpwd"];

	require_once 'dbh.inc.php';
	require_once 'func.inc.php';

	if(emptyInputSignup($name, $email, $username, $pwd, $cnpwd) !== false) {
		header("location: ../sign.php?error=emptyinput");
		exit();
	}
	
	if(invalidUid($username) !== false) {
		header("location: ../sign.php?error=invaliduid");
		exit();
	}

	if(invalidEmail($email) !== false) {
		header("location: ../sign.php?error=invalidemail");
		exit();
	}

	if(pwdMatch($pwd, $cnpwd) !== false) {
		header("location: ../sign.php?error=passwordsnotmatch");
		exit();
	}

	if(uidExists($conn, $username, $email) !== false) {
		header("location: ../sign.php?error=usernametaken");
		exit();
	}

	createUser($conn, $name, $email, $username, $pwd);

}

else{
	header("location: ../sign.php");
	exit();
}