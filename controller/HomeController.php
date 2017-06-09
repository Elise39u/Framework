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

function start() {
	render("home/start");
    $user = getAllPlayerStats();
    if (empty($user)) {
    } else {
        $_SESSION['atk'] = $user[0]['content'];
        $_SESSION['def'] = $user[1]['content'];
        $_SESSION['gold'] = $user[2]['content'];
        $_SESSION['maxhp'] = $user[3]['content'];
        $_SESSION['curhp'] = $user[4]['content'];
        $_SESSION['magic'] = $user[6]['content'];
        $_SESSION['bankgd'] = $user[9]['content'];
        $_SESSION['exp'] = $user[10]['content'];
        $_SESSION['exp_rem'] = $user[11]['content'];
        $_SESSION['lvl'] = $user[12]['content'];
    }
    $party = getPlayerParty();
    if (!$_SESSION['party_members']) {
        $_SESSION['party_members'] = array();
        foreach ($party as $partymemeber) {
            $_SESSION['party_members'][] = $partymemeber;
        }
    }
}

function logout() {
    session_destroy();
    render('home/index');
}