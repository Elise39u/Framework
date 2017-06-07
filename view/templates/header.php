<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Play a game?</title>
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="<?= URL ?>css/bootstrap.min.css"> -->
<link rel="stylesheet" href="<?= URL ?>css/style.css">

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="<?= URL ?>css/bootstrap-theme.min.css"> -->

<!-- Latest compiled and minified JavaScript -->
<script src="<?=  URL ?>js/bootstrap.min.js"></script>
</head>
<body>
<div class="plaatje">

    <!-- Use Sessions to display the stats on screen -->
    <ul>
        <li>Attack: <strong><?php if (isset($_SESSION['atk'])) { echo $_SESSION['atk']; } ?></strong></li>
        <li>Defence: <strong><?php if (isset($_SESSION['deg'])) { echo $_SESSION['def']; } ?></strong></li>
        <li>Magic: <strong><?php if(isset($_SESSION['magic'])) { echo $_SESSION['magic']; } ?></strong></li>
        <li>Gold in hand: <strong><?php if (isset($_SESSION['gold'])) { echo $_SESSION['gold']; } ?></strong></li>
        <li>Current HP/MaxHP: <strong><?php if(isset($_SESSION['curhp'])) {echo $_SESSION['curhp'];} ?>
                /<?php if(isset($_SESSION['maxhp'])) {echo $_SESSION['maxhp'];} ?></strong>
        <li>Gold Inbank: <strong><?php if(isset($_SESSION['bankgd'])){ echo $_SESSION['bankgd'];} ?></strong></li>
        <li>Current level: <strong><?php if (isset($_SESSION['lvl'])) {echo $_SESSION['lvl'];} ?></strong></li>
        <li>Experience: <strong><?php if (isset($_SESSION['exp'])) {echo $_SESSION['exp'];} ?></strong></li>
        <li>Experience needed until level <strong><?php if (isset($_SESSION['lvl'])) {echo $_SESSION['lvl']+1;} ?>
                :<?php if(isset($_SESSION['exp_rem'])) {echo $_SESSION['exp_rem'];} ?></strong></li>
    </ul>

    <!-- Use Sessions to display the npcs on screen -->
    <ul>
        <p class="H1l">Npc`s in your party</p>
        <!-- Npc`s party comes here -->
    </ul>
