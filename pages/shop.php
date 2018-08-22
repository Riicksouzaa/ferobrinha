<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 18/07/2018
 * Time: 10:23
 */

$verificaExistenciaStorage = function ($storage) use ($SQL, $account_logged) {
    
    /** @var Player $players */
    $players = $account_logged->getPlayers();
    if(!empty($players)){
        foreach ($players->data as $key => $value){
            $id = $value['id'];
            $storage = $SQL->prepare("SELECT * FROM player_storage where player_id = :id and value = :storage");
            $storage->execute(['id'=> $id, 'storage' => $storage]);
            if($storage->rowCount() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
};

$verificaExistenciaStorage(123456);