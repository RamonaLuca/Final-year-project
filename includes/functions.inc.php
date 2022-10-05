<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
	$result;
	if(empty($name) || empty($email) || empty($username) || empty($pwd)  || empty($pwdRepeat) ) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidUid($username) {
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidEmail($email) {
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
	$result;
	if($pwd !==  $pwdRepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function uidExists($conn, $username, $email) {
	$sql = "SELECT * FROM clienti WHERE username = ? OR email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmteșuat");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
	$sql = "INSERT INTO clienti (nume, email, username, parola) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=eroare");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../login.php?error=succes");
	exit();
}

function emptyInputLogin($username, $pwd) {
	$result;
	if(empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username, $username);

	if($uidExists === false) {
		header("location: ../login.php?error=logareeșuată");
		exit();
	}

	$pwdHashed = $uidExists["parola"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if($checkPwd === false) {
		header("location: ../login.php?error=logareeșuată");
		exit();
	}
	else if ($checkPwd === true) {
		session_start();
		$_SESSION["userid"] =  $uidExists["id"];
		$_SESSION["useruid"] =  $uidExists["username"];
		header("location: ../home.php");
		exit();
	}
}
