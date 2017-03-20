<?php

require(ROOT . "model/RegisterModel.php");

function index()
{
	render("home/index");	
}

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$prefire = $_POST['prefire'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	Checker($firstname, $prefire, $lastname, $email, $username, $password);
}