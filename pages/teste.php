<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 26/07/2018
 * Time: 02:05
 */


$sel = $SQL->query("SELECT * FROM player_items where player_id = 30")->fetchAll();
var_dump($sel);
foreach ($sel as $t){
    
    $teste = new Item();
    $teste->setID($sel[0]['itemtype']);
    $teste->setSID($sel[0]['sid']);
    $teste->setPID($sel[0]['pid']);
    $teste->setCount($sel[0]['count']);
    $teste->setAttributes($sel[0]['attributes']);
    $teste->getAttributesList();
    var_dump($teste);
}

