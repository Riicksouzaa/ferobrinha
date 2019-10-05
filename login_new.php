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

$startdate1 = new DateTime("2019-08-01 05:00:00", new DateTimeZone("America/Sao_Paulo"));
$FinalDate1 = new DateTime("2019-08-24 00:00:00", new DateTimeZone("America/Sao_Paulo"));

$eventlist = [];

for ($i = 0; $i < 40; $i++) {
    $eventlist["eventlist"][] = [
        "colordark" => "#64162b",
        "colorlight" => "#7a1b34",
        "description" => "{$i}",
        "enddate" => 1561968000 + $i * 3000,
        "isseasonal" => true,
        "name" => "VSF {$i}",
        "startdate" => 1559376000 + $i * 3000
    ];
}
$eventlist["lastupdatetimestamp"] = 1566535079;


$input = json_decode(file_get_contents("php://input"));
switch ($input->type ? $input->type : '') {

    case "cacheinfo":
        $playersonline = $SQL->query("SELECT * FROM `players_online`")->fetchAll();
        $statistics = [
            'playersonline' => (count($playersonline[0])),
            'twitchstreams' => 456,
            'twitchviewer' => 678,
            'gamingyoutubestreams' => 910,
            'gamingyoutubeviewer' => 112
        ];
        echo json_encode($statistics);
        break;

    case "eventschedule":
//        $teste = '{"eventlist":[{"colordark":"#64162b","colorlight":"#7a1b34","description":"Remember that June is the month of flowers. If you have collected any seeds, exchange them for a flower pot with the dryad Rosemarie. But beware, wild dryads are roaming the lands again.","enddate":1561968000,"isseasonal":true,"name":"Flower Month","startdate":1559376000},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1560585600,"isseasonal":false,"name":"Full Moon","startdate":1560326400},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1561449600,"isseasonal":false,"name":"Last Creep Standing","startdate":1561017600}],"lastupdatetimestamp":1566535079}';
//        $teste = '{"eventlist":[{"colordark":"#64162b","colorlight":"#7a1b34","description":"Remember that June is the month of flowers. If you have collected any seeds, exchange them for a flower pot with the dryad Rosemarie. But beware, wild dryads are roaming the lands again.","enddate":1561968000,"isseasonal":true,"name":"Flower Month","startdate":1559376000},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1560585600,"isseasonal":false,"name":"Full Moon","startdate":1560326400},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1561449600,"isseasonal":false,"name":"Last Creep Standing","startdate":1561017600},{"colordark":"#64162b","colorlight":"#7a1b34","description":"Avert the wrath of evil spirits! Help the good witches to create a powerful spirit brew. Gather exotic ingredients and protect the witches\' cauldron from the forces of destruction.","enddate":1561449600,"isseasonal":false,"name":"Bewitched","startdate":1561104000},{"colordark":"#1d5263","colorlight":"#24657b","description":"XP/Skill Event! Killing monsters yields more experience and skill points.","enddate":1561968000,"isseasonal":false,"name":"XP/Skill Event","startdate":1561708800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1563177600,"isseasonal":false,"name":"Full Moon","startdate":1562918400},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1564041600,"isseasonal":false,"name":"Last Creep Standing","startdate":1563609600},{"colordark":"#64162b","colorlight":"#7a1b34","description":"If you are a real gourmet, ask Jean Pierre in the Darama desert for some delicious and exceptional recipes. August is undoubtedly the month of hot cuisine! Bon appetit!","enddate":1567324800,"isseasonal":true,"name":"Hot Cuisine Month","startdate":1564646400},{"colordark":"#1d5263","colorlight":"#24657b","description":"Spawn Rate Event! Monsters respawn at a faster rate.","enddate":1564992000,"isseasonal":false,"name":"Rapid Respawn","startdate":1564732800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1565856000,"isseasonal":false,"name":"Full Moon","startdate":1565596800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1566720000,"isseasonal":false,"name":"Last Creep Standing","startdate":1566288000},{"colordark":"#64162b","colorlight":"#7a1b34","description":"A powerful ancient weapon meant to be sleeping forever has awoken deep under Vengoth. With thirst for revenge and burning rage she will destroy the world - unless you fight her back.","enddate":1567843200,"isseasonal":false,"name":"Rise of Devovorga","startdate":1567324800},{"colordark":"#1d5263","colorlight":"#24657b","description":"XP/Skill Event! Killing monsters yields more experience and skill points.","enddate":1568016000,"isseasonal":false,"name":"XP/Skill Event","startdate":1567756800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1568534400,"isseasonal":false,"name":"Full Moon","startdate":1568275200},{"colordark":"#7A4C1F","colorlight":"#935416","description":"Mysterious letters with coloured powders can now be found everywhere. Choose your wizard and make your friends join your cause - what is your true colour?","enddate":1569225600,"isseasonal":false,"name":"Colours of Magic","startdate":1568534400},{"colordark":"#7A4C1F","colorlight":"#935416","description":"Winterberries can now be found all over Tibia! The Combined Magical Winterberry Society wants YOU to help gathering them to create the juice that keeps the magic in the world flowing - good treading!","enddate":1570521600,"isseasonal":false,"name":"Annual Autumn Vintage","startdate":1569916800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1571126400,"isseasonal":false,"name":"Full Moon","startdate":1570867200},{"colordark":"#7A4C1F","colorlight":"#935416","description":"Winterberries can now be found all over Tibia! The Combined Magical Winterberry Society wants YOU to help gathering them to create the juice that keeps the magic in the world flowing - good treading!","enddate":1571904000,"isseasonal":false,"name":"Annual Autumn Vintage","startdate":1571299200},{"colordark":"#235c00","colorlight":"#2d7400","description":"This is the time of witches, ghosts and vampires. Look out for the Mutated Pumpkin and the Halloween Hare to make your flesh crawl.","enddate":1572771600,"isseasonal":false,"name":"Halloween Event","startdate":1572512400},{"colordark":"#64162b","colorlight":"#7a1b34","description":"Now that the veil between the worlds is thin, darkness is striving to break through. Lucius calls for Lightbearers to keep sacred light basins burning for four days. Don\'t let even one go out or all hope is lost.","enddate":1573808400,"isseasonal":false,"name":"Lightbearer","startdate":1573462800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1573808400,"isseasonal":false,"name":"Full Moon","startdate":1573549200},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1574672400,"isseasonal":false,"name":"Last Creep Standing","startdate":1574240400},{"colordark":"#235c00","colorlight":"#2d7400","description":"It\'s the most wonderful time of the year - but beware of the Grynch Clan Goblins! Have you been good all year? Then Santa might have a present for you.","enddate":1577782800,"isseasonal":false,"name":"Christmas","startdate":1576141200},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1576400400,"isseasonal":false,"name":"Full Moon","startdate":1576141200},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1577264400,"isseasonal":false,"name":"Last Creep Standing","startdate":1576832400},{"colordark":"#64162b","colorlight":"#7a1b34","description":"The days are getting colder and grisly, shaggy creatures are roaming the lands. Are you brave enough to face their queen in her frozen lair? Anyhow, don\'t forget: You are already halfway out of the dark!","enddate":1578646800,"isseasonal":false,"name":"Winterlight Solstice","startdate":1577005200},{"colordark":"#235c00","colorlight":"#2d7400","description":"Make a wish in the magical night between the years and perhaps a dream will come true. Don\'t forget to visit Ned Nobel and buy some fireworks. Happy New Year!","enddate":1578042000,"isseasonal":false,"name":"New Year","startdate":1577437200},{"colordark":"#235c00","colorlight":"#2d7400","description":"Let\'s celebrate! It\'s Tibia\'s birthday! Join us for the party and take part in the festivities! Many exciting activities await you. Try your luck on the pi\\xF1ata dragons. Visit the islands Vigintia and Nostalgia for fun things like can knockdown and a treasure hunt, or take a trip down memory lane.","enddate":1578646800,"isseasonal":false,"name":"Tibia Anniversary","startdate":1578387600},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1579078800,"isseasonal":false,"name":"Full Moon","startdate":1578819600},{"colordark":"#64162b","colorlight":"#7a1b34","description":"Search for traces of the First Dragon and his descendants. Find out if there is more to the tale of a beautiful festive garment that has been lost ever since it fell into its claws.","enddate":1581498000,"isseasonal":false,"name":"The First Dragon","startdate":1578992400},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1579942800,"isseasonal":false,"name":"Last Creep Standing","startdate":1579510800},{"colordark":"#64162b","colorlight":"#7a1b34","description":"Celebrate a huge costume party! Visit Stan in Venore to buy fancy costumes, colourful party hats and funny trumpets. Have a great carnival party with all of your friends.","enddate":1583053200,"isseasonal":true,"name":"Carnival Month","startdate":1580547600},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1581757200,"isseasonal":false,"name":"Full Moon","startdate":1581498000},{"colordark":"#235c00","colorlight":"#2d7400","description":"Romantic times! Buy Valentine\'s cakes, flower bouquets, heart backpacks and other romantic items for your loved one from Valentina in Greenshore.","enddate":1581757200,"isseasonal":false,"name":"Valentine\'s Day","startdate":1581670800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1582621200,"isseasonal":false,"name":"Last Creep Standing","startdate":1582189200},{"colordark":"#64162b","colorlight":"#7a1b34","description":"Defeat the invading cake golems and build a bridge to a legendary island reachable only once a year. There you will have to face a challenge unlike any before. Grab your fork and be ready.","enddate":1582707600,"isseasonal":false,"name":"A Piece of Cake","startdate":1582275600},{"colordark":"#64162b","colorlight":"#7a1b34","description":"Make sure you collect your daily reward. If the golden sun welcomes you at the shrine all daily rewards will be doubled.","enddate":1585728000,"isseasonal":true,"name":"Double Daily Reward Month","startdate":1583053200},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1584262800,"isseasonal":false,"name":"Full Moon","startdate":1584003600},{"colordark":"#7A4C1F","colorlight":"#935416","description":"Mysterious letters with coloured powders can now be found everywhere. Choose your wizard and make your friends join your cause - what is your true colour?","enddate":1584954000,"isseasonal":false,"name":"Colours of Magic","startdate":1584262800},{"colordark":"#64162b","colorlight":"#7a1b34","description":"An ice bridge now connects Svargrond to a frosty island, where monsters and a strange frozen creature have been sighted.","enddate":1588320000,"isseasonal":true,"name":"Chyllfroest","startdate":1585728000},{"colordark":"#64162b","colorlight":"#7a1b34","description":"Enjoy a whole month of pranks! Hoaxette is offering special spellwands, pillows and presents that all have some funny effects. One final advice: Always treat jesters well, you never know if they seek revenge one day.","enddate":1588320000,"isseasonal":true,"name":"Prank Month","startdate":1585728000},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1586937600,"isseasonal":false,"name":"Full Moon","startdate":1586678400},{"colordark":"#64162b","colorlight":"#7a1b34","description":"There are unusual activities in almost all known dragon lairs. Lots of dragon eggs have been sighted in their caves.","enddate":1587628800,"isseasonal":false,"name":"Spring into Life","startdate":1587024000},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1587801600,"isseasonal":false,"name":"Last Creep Standing","startdate":1587369600},{"colordark":"#64162b","colorlight":"#7a1b34","description":"When does a mother\'s burden become a hero\'s burden? When a demon mother decides to take a few days off. Guard her horrible children to avert her wrath. But be warned: Demon babies might prove too hot to handle.","enddate":1589443200,"isseasonal":false,"name":"Demon\'s Lullaby","startdate":1588838400},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1589529600,"isseasonal":false,"name":"Full Moon","startdate":1589270400},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1590393600,"isseasonal":false,"name":"Last Creep Standing","startdate":1589961600},{"colordark":"#64162b","colorlight":"#7a1b34","description":"Remember that June is the month of flowers. If you have collected any seeds, exchange them for a flower pot with the dryad Rosemarie. But beware, wild dryads are roaming the lands again.","enddate":1593590400,"isseasonal":true,"name":"Flower Month","startdate":1590998400},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1592208000,"isseasonal":false,"name":"Full Moon","startdate":1591948800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1593072000,"isseasonal":false,"name":"Last Creep Standing","startdate":1592640000},{"colordark":"#64162b","colorlight":"#7a1b34","description":"Avert the wrath of evil spirits! Help the good witches to create a powerful spirit brew. Gather exotic ingredients and protect the witches\' cauldron from the forces of destruction.","enddate":1593072000,"isseasonal":false,"name":"Bewitched","startdate":1592726400},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1594800000,"isseasonal":false,"name":"Full Moon","startdate":1594540800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1595664000,"isseasonal":false,"name":"Last Creep Standing","startdate":1595232000},{"colordark":"#64162b","colorlight":"#7a1b34","description":"If you are a real gourmet, ask Jean Pierre in the Darama desert for some delicious and exceptional recipes. August is undoubtedly the month of hot cuisine! Bon appetit!","enddate":1598947200,"isseasonal":true,"name":"Hot Cuisine Month","startdate":1596268800},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1597478400,"isseasonal":false,"name":"Full Moon","startdate":1597219200},{"colordark":"#735D10","colorlight":"#8B6D05","description":"Participate in a fun challenge of wits and agility. The trials of Kurik to test the mortals and fool around with them will lead you to a test of your reactions and luck.","enddate":1598342400,"isseasonal":false,"name":"Last Creep Standing","startdate":1597910400},{"colordark":"#64162b","colorlight":"#7a1b34","description":"A powerful ancient weapon meant to be sleeping forever has awoken deep under Vengoth. With thirst for revenge and burning rage she will destroy the world - unless you fight her back.","enddate":1599465600,"isseasonal":false,"name":"Rise of Devovorga","startdate":1598947200},{"colordark":"#735D10","colorlight":"#8B6D05","description":"The moon is full! Beware, lycanthropic creatures like werewolves, werefoxes or werebears roam the lands now. And they are more aggressive and numerous than usual.","enddate":1600156800,"isseasonal":false,"name":"Full Moon","startdate":1599897600},{"colordark":"#7A4C1F","colorlight":"#935416","description":"Mysterious letters with coloured powders can now be found everywhere. Choose your wizard and make your friends join your cause - what is your true colour?","enddate":1600848000,"isseasonal":false,"name":"Colours of Magic","startdate":1600156800}],"lastupdatetimestamp":1566535079}';
//        echo $teste;

        echo $eventlist;
        break;


    case "categorycounts":

        $gamenews = [
            [
                'campaignid' => 0,
                'category' => 'MAJOR UPDATES',
                'headline' => '<p>Summer Update 2019</p>',
                'id' => '56',
                'index' => '0',
                'message' => '<center>\n<table style=\"height: 88px;\" width=\"406\">\n<tbody>\n<tr>\n<td style=\"width: 396px; vertical-align: top;\"><center>&nbsp;<img src=\"https://static.tibia.com/images/news/summer2019.jpg\" width=\"479\" height=\"379\" />\n<p>If you would like to find out more, check the <a href=\"http://www.tibia.com/news/?subtopic=newsarchive&amp;id=5141\">release news</a> on our website.</p>\n</center></td>\n</tr>\n</tbody>\n</table>\n</center>',
                'publishdate' => 1564387200,
                'type' => 'REGULAR'
            ]];
        $schedule['idOfNewestReadEntry'] = 56;
        $schedule['isreturner'] = false;
        $schedule['maxeditdate'] = 1564416295;
        $schedule['showrewardnews'] = true;
        echo json_encode($schedule);
        break;


    case "categorycounts":

        $gamenews = [
            [
                'campaignid' => 0,
                'category' => 'MAJOR UPDATES',
                'headline' => '<p>Summer Update 2019</p>',
                'id' => '56',
                'index' => '0',
                'message' => '<center>\n<table style=\"height: 88px;\" width=\"406\">\n<tbody>\n<tr>\n<td style=\"width: 396px; vertical-align: top;\"><center>&nbsp;<img src=\"https://static.tibia.com/images/news/summer2019.jpg\" width=\"479\" height=\"379\" />\n<p>If you would like to find out more, check the <a href=\"http://www.tibia.com/news/?subtopic=newsarchive&amp;id=5141\">release news</a> on our website.</p>\n</center></td>\n</tr>\n</tbody>\n</table>\n</center>',
                'publishdate' => 1564387200,
                'type' => 'REGULAR'
            ]];
        $schedule['idOfNewestReadEntry'] = 56;
        $schedule['isreturner'] = false;
        $schedule['maxeditdate'] = 1564416295;
        $schedule['showrewardnews'] = true;
        echo json_encode($schedule);
        break;

    case "boostedcreature":

        //youburromen? EU NAO SEI ISSO  TESTE AI  EPA tinha um errinho ali kkk vê agr

        $result = $SQL->prepare("SELECT `value` FROM `global_storage` WHERE `key` = '56541'");
        $result->execute([]);

        $raceid = $result->fetchAll();

        $boostedcreature["boostedcreature"] = true;
        $boostedcreature["raceid"] = (int)$raceid[0]['value'];


        /// EU JA DISSE QUE VOCE É GOSTOSO?
        echo json_encode($boostedcreature);
        break;

    case "login":


# Declare variables with array structure
        $characters = array();
        $playerData = array();
        $data = array();
        $isCasting = false;

# error function
        function sendError($msg)
        {
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
            foreach ($casts as $cast) {
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
                        "ismale" => (($character->getSex() == 1) ? true : false),
                        "tutorial" => false,
                        "outfitid" => $outfitid,
                        "level" => $level,
                        "headcolor" => $headcolor,
                        "torsocolor" => $torsocolor,
                        "legscolor" => $legscolor,
                        "detailcolor" => $detailcolor,
                        "addonflags" => $addonflags,
                        "vocation" => $character->getVocationName(),
                        "ishidden" => (($character->isHidden() == 1) ? true : false));
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

            foreach ($account->getPlayersList() as $character) {
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
                    "ismale" => (($character->getSex() == 1) ? true : false),
                    "tutorial" => false,
                    "outfitid" => $outfitid,
                    "level" => $level,
                    "headcolor" => $headcolor,
                    "torsocolor" => $torsocolor,
                    "legscolor" => $legscolor,
                    "detailcolor" => $detailcolor,
                    "addonflags" => $addonflags,
                    "vocation" => $character->getVocation(),
                    "ishidden" => (($character->isHidden() == 1) ? true : false));
                $characters[] = $char;
            }

            $lastLogin = $account->getLastLogin();
            $premiumAccount = ($account->isPremium()) ? true : false;
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
        } else if ($config['server']['worldType'] == "no-pvp") {
            $pvptype = 1;
        } else if ($config['server']['worldType'] == "pvp-enforced") {
            $pvptype = 2;
        } else {
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