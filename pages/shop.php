<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 18/07/2018
 * Time: 10:23
 */


$players = $SQL->query('SELECT * FROM players order by experience desc ')->fetchAll();
foreach ($players as $key => $value) {
//    var_dump($value);
    $q = $SQL->prepare("UPDATE players SET level = :lv where id = :id");
    $q->execute(["lv" => 0, 'id' => $value['id']]);
    $lv = $value['level'];
    $lv--;
    $explvl = ((pow($lv, 3) * 50) - (pow($lv, 2) * 150) + (pow($lv, 1) * 400)) / 3;
    while ($explvl <= $value['experience']) {
        $explvl = ((pow($lv, 3) * 50) - (pow($lv, 2) * 150) + (pow($lv, 1) * 400)) / 3;
        $lv++;
    }
    $q = $SQL->prepare("UPDATE players SET level = :lv where id = :id");
    $q->execute(["lv" => --$lv, 'id' => $value['id']]);
    
}
