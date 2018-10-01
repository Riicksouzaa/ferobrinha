<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 18/07/2018
 * Time: 10:23
 */


$q = $SQL->prepare("SELECT count(*) as `players_cast`, sum(`spectators`) as `spectators` FROM `live_casts`");
$q->execute([]);
$q = $q->fetchAll();
//$q = $SQL->prepare("SELECT * FROM live_casts where player_id != :id");
//$q->execute(['id' => 0]);
//$q->fetch();

var_dump($q);
