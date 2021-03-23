<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 02/06/2018
 * Time: 20:16
 */

$outfits = new Outfits();
$mounts = new Mounts();
$items = new New_items();

/**
 * @param $player_id
 * @return array|bool
 */
$getPlayerMountsByPlayerId = function ($player_id) use ($mounts) {
    return $mounts->getAllMountsByPlayerId($player_id);
};
/**
 * @param $player_id
 * @return array|bool
 */
$getPlayerOutfitsByPlayerId = function ($player_id) use ($outfits) {
    return $outfits->getPlayerOutfitsByPlayerId($player_id);
};
/**
 * @param $id
 * @return mixed
 */
$getItemByItemId = function ($id) use ($items) {
    return $items->getItemByItemId($id);
};

