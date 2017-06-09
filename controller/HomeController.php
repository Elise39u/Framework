<?php

function index()
{
	render("home/index");	
}

function checkLogin() {
    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $prefix = $_POST['prefix'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        var_dump($firstname, $prefix, $lastname, $username, $password, $email);
    }
}