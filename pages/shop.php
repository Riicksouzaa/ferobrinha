<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 18/11/2018
 * Time: 10:23
 */

$player = new Player();
$player->loadByName('Aspira');
$quest = $player->getPlayerQuestStatusByQuestName('Killing in the Name of...');

var_dump($quest);
