<?php
/**
 *
 * @package        uam.skeleton
 * @subpackage  controllers
 * @author        Codenome Developpers - Main Developer: Ricardo <http://codenome.com>
 * @copyright    Copyright (c) 2018, Codenome. (http://myara.net/)
 * @license        GPL v3
 * @link        http://uam.codenome.com
 * @since        Version 0.0.1
 * @filesource
 */

/**
 * @param $status
 * @param $msg
 * @return array
 */
function getStatus ($status, $msg)
{
    $data = [];
    $data['error'] = $status;
    $data['msg'] = $msg;
    return $data;
}

/**
 * @param $player_id int
 * @param $price_type int
 * @param $price int
 * @return string
 */
$add_sell_character = function ($player_id, $price_type, $price) use ($account_logged, $config, $SQL) {
    $player_id = (int)$player_id;
    $price_type = (int)$price_type;
    $price = (int)$price;
    $player = new Player();
    $player->loadById($player_id);
    $account = new Account();
    $account->loadById($player->getAccountID());
    $date = new DateTime();
    $now = $date->format('Y-m-d H:i:s');
    $valid = date_add($date, date_interval_create_from_date_string('5 days'))->format('Y-m-d H:i:s');
    $price_coin = 0;
    $price_gold = 0;
    $price_type = ($price_type == 0 ? 0 : 1);
    if ($price_type == 0) {
        $price_coin = $price;
    } else {
        $price_gold = $price;
    }
    $status = [];
    $valida = $SQL->query("SELECT id_player FROM account_character_sale where id_player = {$player_id}")->rowCount();
    if ($account_logged->getID()) {
        if ($valida == 0) {
            if ($player->getAccountID() == $account_logged->getID()) {
                $query = $SQL->prepare("INSERT INTO `account_character_sale` 
                                   (`id_account`,`id_player`,`status`, `price_type`,`price_coins`,`price_gold`, `dta_insert`,`dta_valid`)
                                   VALUES (:account_id, :player_id, 0, :price_type, :price_coin, :price_gold, :now, :valid);");
                $query->execute(['account_id' => $player->getAccountID(), 'player_id' => $player_id, 'price_type' => $price_type, 'price_coin' => $price_coin, 'price_gold' => $price_gold, 'now' => $now, 'valid' => $valid]);

                $query = $SQL->prepare("UPDATE `players` SET `account_id` = :account_id WHERE `id` = :player_id;");
                $query->execute(['account_id' => $config['sell']['account_seller_id'], 'player_id' => $player_id]);
                $query = $SQL->prepare("INSERT INTO account_character_sale_history 
                                   (id_old_account, id_new_account, id_player, dta_sale) 
                                   VALUES (:account_id, NULL , :player_id, NULL);");
                $query->execute(['account_id' => $player->getAccountID(), 'player_id' => $player_id]);

                $data = getStatus(false, 'Player inserido com sucesso.');
                return json_encode($data);
            } else {
                $data = getStatus(true, 'O player que você tentou vender não pertence à essa account.');
                return json_encode($data);
            }
        } else {
            $data = getStatus(true, 'Esse player já está em venda.');
            return json_encode($data);
        }
    }
};

/**
 * @param $player_id
 * @return bool
 */
$remove_sell_characters = function ($player_id) use ($config, $SQL) {
    $player_id = (int)$player_id;
    $valida = $SQL->prepare("SELECT `id_account` FROM `account_character_sale` WHERE id_player = :id_player");
    $valida->execute(['id_player' => $player_id]);
//    var_dump($valida->rowCount(), $valida->fetchAll());
    if ($valida->rowCount() > 0) {
        $account_id = $valida->fetchAll()[0]['id_account'];
        $query = $SQL->prepare("UPDATE players SET account_id = :account_id WHERE id = :player_id");
        $query->execute(['account_id' => $account_id, 'player_id' => $player_id]);
        $query = $SQL->prepare("DELETE FROM `account_character_sale` WHERE `id_player` = :player_id");
        $query->execute(['player_id' => $player_id]);
        return true;
    } else {
        return false;
    }
};

/**
 * @param $player_id
 * @param $account_id
 * @return array
 */
$buy_character_in_sale = function ($player_id, $account_id) use ($config, $SQL) {
    $valida_acc = $SQL->prepare("SELECT id_player,id_account FROM account_character_sale WHERE id_player = :player_id AND id_account = :account_id");
    $valida_acc->execute(['player_id' => $player_id, 'account_id' => $account_id]);
    if ($valida_acc->rowCount() == 0) {

    } else {
        return getStatus(true, 'Você não pode comprar seu próprio personagem.');
    }
};
$main_content .= "<b>TEST</b>";


//$add_sell_character(20,200,500);
//$remove_sell_characters(20);
//var_dump($buy_character_in_sale(20, 7));