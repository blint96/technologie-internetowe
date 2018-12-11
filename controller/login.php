<?php
/**
 * Login controller
 */

// load header
loadTemplate('misc/head.php');

// data
$data = [];
$data['errors'] = [];

// check credentials
if($_POST) {
	$login = $_POST['login'];
	$password = $_POST['password'];

	if(!isset($login) || !isset($password) || strlen($login) == 0 || strlen($password) == 0) {
		$data['errors'][] = "Nie można zostawić wolnych pól";
	}

	if(count($data['errors']) == 0) {
		$db = Database::getInstance();
		$query = "SELECT * FROM users WHERE login = ? AND pass = ?";
		$stmt = $db->stmt_init();

		$stmt->prepare($query);
		$stmt->bind_param("ss", $login, sha1($password));

		$stmt->execute();
		$result = $stmt->get_result();

		$fetchUser = $result->fetch_array(MYSQLI_NUM);
		if($fetchUser === NULL)
			$data['errors'][] = "Wpisano bledny login lub haslo";

		if($fetchUser) {
			$_SESSION['user_id'] = $fetchUser[0];
			header('Location: index.php');
		}
	}
}

// load controller template
loadTemplate('login.php', $data);

// load footer
loadTemplate('misc/foot.php');