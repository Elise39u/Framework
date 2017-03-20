<?php

function Checker($firstname, $prefire, $lastname, $email, $username, $password) {
     $db = openDatabaseConnection();

     $queryCheck = "SELECT * FROM user WHERE username=:username";
     $querySelect = $db->prepare($queryCheck);
     $querySelect->execute(array(
     	':username' => $username
     	));

     $pdo = PDO::FETCH_BOUND;
     $resultaat = $querySelect->$pdo;
     var_dump($resultaat);
     if ($querySelect < 0) {
     	echo "Nothing has been found";
     } elseif ($querySelect == 1) {

     } else {
     	Register($firstname, $prefire, $lastname, $email, $username, $password);
     }
}

function Register($firstname, $prefire, $lastname, $email, $username, $password) { 
     $sql = "INSERT INTO user(firstname, prefire, lastname, email, username, password) VALUES(:firstname, :prefire, :lastname, :email, :username, :password)";
     $query = $db->prepare($sql);
     $query->execute(array(
		':firstname' => $firstname,
		':prefire' => $prefire,
		':lastname' => $lastname,
		':email' => $email,
		':username' => $username,
		':password' => $password
		));

	$db = null;
}