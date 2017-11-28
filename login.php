<?php
/**
 * Created by Notepad++.
 * User: Malucooo - Erick Nunes
 * Remaked of login.php by JLCVP and parts of login.php by Monteiro. Thanks for both!
 * Date: 18/09/17
 * Time: 03:01
 */
require 'config/config.php';
// comment to show E_NOTICE [undefinied variable etc.], comment if you want make script and see all errors
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);
define('DEBUG_DATABASE', false);
define('INITIALIZED', true);
if (!defined('ONLY_PAGE'))
    define('ONLY_PAGE', true);
include_once('./system/load.loadCheck.php');
include_once('./system/load.init.php');
include_once('./system/load.database.php');
if (DEBUG_DATABASE)
    Website::getDBHandle()->setPrintQueries(true);
$characters = array();
$playerData = array();
$data = array();
$isCasting = false;
function sendError($msg){
    $ret = array();
    $ret["errorCode"] = 3;
    $ret["errorMessage"] = $msg;
    
    die(json_encode($ret));
}
$request = file_get_contents('php://input');
$result = json_decode($request, true);
$accountName = $result["accountname"];
$password = $result["password"];
$port = $config['server']['gameProtocolPort'];
if (strtolower($accountName) == "cast")
	$isCasting = true;
if ($isCasting) {
	$casts = $SQL->query("SELECT `player_id` FROM `live_casts`")->fetchAll();
	if (count($casts[0]) == 0)
		sendError("There is no live casts right now!");
	foreach($casts as $cast) {
		$character = new Player();
		$character->load($cast['player_id']);
		
		if ($character->isLoaded()) {
			$char = array("worldid" => 0, "name" => $character->getName(), "ismale" => (($character->getSex() == 1) ? true : false), "tutorial" => false);
			$characters[] = $char;
		}			
	}
	$port = $config['server']['liveCastPort'];
	$lastLogin = 0;
	$premiumAccount = true;
	$timePremium = 0;
} else {
	$account = new Account();
	$account->find($accountName);
	
	if (!$account->isLoaded())
		sendError("Failed to get account. Try again!");
	if ($account->getPassword() != Website::encryptPassword($password))
		sendError("The password for this account is wrong. Try again!");
	
	foreach($account->getPlayersList() as $character) {
		$char = array("worldid" => 0, "name" => $character->getName(), "ismale" => (($character->getSex() == 1) ? true : false), "tutorial" => false);
		$characters[] = $char;
	}
	
	$lastLogin = $account->getLastLogin();
	$premiumAccount = ($account->isPremium()) ? true : false;
	$timePremium = time() + ($account->getPremDays() * 86400);
}
$session = array(
	"fpstracking" => false,
	"isreturner" => true,
	"returnernotification" => false,
	"showrewardnews" => false,
	"sessionkey" => $accountName . "\n" . $password,
	"lastlogintime" => $lastLogin,
    "ispremium" => $premiumAccount,
    "premiumuntil" => $timePremium,
    "status" => "active"	
);
$world = array(
	"id" => 0,
	"name" => $config['server']['serverName'],
	"externaladdress" => $config['server']['ip'],
	"externalport" => $port,
	"previewstate" => 0,
    "location" => "BRA",
    "anticheatprotection" => false
);

$worlds = array($world);
$data["session"] = $session;
$playerData["worlds"] = $worlds;
$playerData["characters"] = $characters;
$data["playdata"] = $playerData;
echo json_encode($data);