<?php

function getAllPlayerStats() {
    $db = openDatabaseConnection();

    $query = sprintf("SELECT * FROM player_stats 
    LEFT JOIN player ON player_stats.user_id=player.id WHERE player.Username=:username ORDER BY player_stats.stat_id");
    $queryExc = $db->prepare($query);
    $queryExc->execute(array(":username" => $_SESSION['username']));

    $db = null;
    return $queryExc->fetchAll();
}

function getPlayerParty() {
    $db = openDatabaseConnection();

    $query = sprintf("SELECT npc.Name FROM player_party
      LEFT JOIN npc ON player_party.npc_id=npc.id
      LEFT JOIN player ON player_party.player_id=player.id
      where player.Username = :username");

    $queryExc = $db->prepare($query);
    $queryExc->execute(array(":username" => $_SESSION['username']));

    $db = null;
    return $queryExc->fetchAll();
}