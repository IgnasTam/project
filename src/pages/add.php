<?php

if (!isset($_SERVER['HTTP_REFERER'])) {
	echo 'Direct request not allowed';

	exit;
}

$_SESSION['previous_request'] = $_POST;

if (! isset(
	$_POST['name'],
	$_POST['password'],
)) goBackWithError('Not all field properly filled');

// https://phpdelusions.net/pdo_examples/insert

$query = 'INSERT INTO `accounts` (username, password) VALUES (:name, :password);';


$stmt = $dbh->prepare($query);

$stmt->execute([
	'name' => $_POST['name'],
	'surname' => $_POST['surname'],
]);

header('Location: ' . $_SERVER['HTTP_REFERER']);

exit;