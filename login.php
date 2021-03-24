<?php
require 'config/config.php';

// comment to show E_NOTICE [undefinied variable etc.], comment if you want make script and see all errors
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);

// true = show sent queries and SQL queries status/status code/error message
define('DEBUG_DATABASE', false);
define('INITIALIZED', true);

if (!defined('ONLY_PAGE'))
    define('ONLY_PAGE', true);

// check if site is disabled/requires installation
include_once('./system/load.loadCheck.php');

// fix user data, load config, enable class auto loader
include_once('./system/load.init.php');

// DATABASE
include_once('./system/load.database.php');
if (DEBUG_DATABASE)
    Website::getDBHandle()->setPrintQueries(true);

// DATABASE END

$input = json_decode(file_get_contents("php://input"));
switch ($input->type ? $input->type : '') {

    case "cacheinfo":
		$playersonline = $SQL->query("SELECT * FROM `players_online`")->fetchAll();
        $statistics = [
						'playersonline' => (count($playersonline[0])),
						'twitchstreams' => 1000,
						'twitchviewer' => 1000,
						'gamingyoutubestreams' => 1000,
						'gamingyoutubeviewer' => 1000
					];
        echo json_encode($statistics);
    break;

    case "boostedcreature":
		// still name to figure out creature raceid's and work with server to boost the creature
		$boostedcreature["boostedcreature"] = true;
		$boostedcreature["raceid"] = 2;
        echo json_encode($boostedcreature);
        break;

	case "login":

/*error example:
{
    "errorCode":3,
    "errorMessage":"Account name or password is not correct."
}*/

# Declare variables with array structure
$characters = array();
$playerData = array();
$data = array();
$isCasting = false;

# error function
function sendError($msg){
    $ret = array();
    $ret["errorCode"] = 3;
    $ret["errorMessage"] = $msg;

    die(json_encode($ret));
}

# getting infos
	$request = file_get_contents('php://input');
	$result = json_decode($request, true);

# account infos
	$accountName = $result["accountname"];
	$password = $result["password"];
# game port
	$port = 7172;

# check if player wanna see cast list
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
		$level = $character->getLevel();
		$outfitid = $character->getLookType();
		$headcolor = $character->getLookHead();
		$torsocolor = $character->getLookBody();
		$legscolor = $character->getLookLegs();
		$detailcolor = $character->getLookFeet();
		$addonflags = $character->getLookAddons();
		settype($level, "int");
		settype($outfitid, "int");
		settype($headcolor, "int");
		settype($torsocolor, "int");
		settype($legscolor, "int");
		settype($detailcolor, "int");
		settype($addonflags, "int");
		$char = array("worldid" => 0,
            "name" => $character->getName(),
            "ismale" => $character->getSex() == 1,
            "tutorial" => false,
            "outfitid" => $outfitid,
            "level" => $level,
            "headcolor" => $headcolor,
            "torsocolor" => $torsocolor,
            "legscolor" => $legscolor,
            "detailcolor" => $detailcolor,
            "addonflags" => $addonflags,
            "vocation" => $character->getVocationName(),
            "ishidden" => $character->isHidden() == 1);
            $characters[] = $char;
		}
	}
	$port = 7173;
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
		$level = $character->getLevel();
		$outfitid = $character->getLookType();
		$headcolor = $character->getLookHead();
		$torsocolor = $character->getLookBody();
		$legscolor = $character->getLookLegs();
		$detailcolor = $character->getLookFeet();
		$addonflags = $character->getLookAddons();
		settype($level, "int");
		settype($outfitid, "int");
		settype($headcolor, "int");
		settype($torsocolor, "int");
		settype($legscolor, "int");
		settype($detailcolor, "int");
		settype($addonflags, "int");
		$char = array("worldid" => 0,
            "name" => $character->getName(),
            "ismale" => $character->getSex() == 1,
            "tutorial" => false,
            "outfitid" => $outfitid,
            "level" => $level,
            "headcolor" => $headcolor,
            "torsocolor" => $torsocolor,
            "legscolor" => $legscolor,
            "detailcolor" => $detailcolor,
            "addonflags" => $addonflags,
            "vocation" => $character->getVocationName(),
            "ishidden" => $character->isHidden() == 1);
        $characters[] = $char;
    }

    $lastLogin = $account->getLastLogin();
    $premiumAccount = $account->isPremium();
    $timePremium = time() + ($account->getPremDays() * 86400);
}
$session = array(
	"fpstracking" => false,
	"optiontracking" => false,
	"isreturner" => true,
	"returnernotification" => false,
	"showrewardnews" => false,
	"sessionkey" => $accountName . "\n" . $password,
	"lastlogintime" => $lastLogin,
    "ispremium" => $premiumAccount,
    "premiumuntil" => $timePremium,
    "status" => "active",
	"stayloggedin" => true
);

	if ($config['server']['worldType'] == "pvp") {
		$pvptype = 0;
	}
		else if ($config['server']['worldType'] == "no-pvp") {
			$pvptype = 1;
		}
		else if ($config['server']['worldType'] == "pvp-enforced") {
			$pvptype = 2;
		}
		else {
			$pvptype = 0; //default value
		}

$world = array(
	"id" => 0,
	"name" => $config['server']['serverName'],
	"externaladdress" => $config['server']['ip'],
	"externalport" => $port,
	"previewstate" => 0,
    "location" => "BRA",
	"externaladdressunprotected" => $config['server']['ip'],
	"externaladdressprotected" => $config['server']['ip'],
	"externalportunprotected" => $port,
	"externalportprotected" => $port,
	"pvptype" => $pvptype,
	"anticheatprotection" => false
);

$worlds = array($world);
$data["session"] = $session;
$playerData["worlds"] = $worlds;
$playerData["characters"] = $characters;
$data["playdata"] = $playerData;
$data["survey"] = $survey;

echo json_encode($data);
}
