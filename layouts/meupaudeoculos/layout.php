<?php
if(!defined('INITIALIZED'))
    exit;
?>



<html>


<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width">-->
    <meta name="viewport" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language" content="pt-br">
    <?php $p = new Player();?>
    <?php if($_REQUEST['subtopic'] == "accountmanagement" && $_REQUEST['action'] == "buychar"){ $p->loadById($_REQUEST['id']); $ch = (isset($_REQUEST['id']) ? $p->getName() : null);}?>
    <?php if($_REQUEST['subtopic'] == "characters"){$ch = (isset($_REQUEST['name']) ? $_REQUEST['name'] : null);}?>
    <?php if($_REQUEST['subtopic'] == "guilds"){$ch = (isset($_REQUEST['GuildName']) ? $_REQUEST['GuildName'] : null);}?>
    <?php if($_REQUEST['subtopic'] == "worlds"){$ch = (isset($_REQUEST['world']) ? $_REQUEST['world'] : null);}?>
    <?php if($_REQUEST['subtopic'] == "highscores"){$ch = (isset($_REQUEST['list']) ? $highscores_list[$_REQUEST['list']]." - ".$vocations_list[$_REQUEST['profession']].($_REQUEST['profession']>0?($_REQUEST['profession']<10?"s":null):null) : "Experience Points - ALL");}?>
    <?php if($_REQUEST['subtopic'] == "houses"){$ch = (isset($_REQUEST['town']) ? $towns_list[$_REQUEST['town']] : (isset($_REQUEST['show']) ? $_REQUEST['show'] : null));}?>
    <title><?=$config['server']['serverName'].(isset($_REQUEST['subtopic'])? " - ".ucfirst($_REQUEST['subtopic']) :'').(isset($_REQUEST['action'])?" - ".ucfirst(strip_tags(htmlspecialchars(trim($_REQUEST['action'])))):"").(isset($ch)?" - ".ucfirst(strip_tags(htmlspecialchars(trim($ch)))):"")?> - Free Multiplayer Online Role Playing Game</title>
    <meta name="author" content="Ricardo Souza - Codenome">
    <meta name="keywords" content="free online game, free multiplayer game, free online rpg, free mmorpg, mmorpg, mmog,
    online role playing game, online multiplayer game, internet game, online rpg, rpg">
    <!-- META TAGS OPENGRAPH-->
    <meta property="og:title" content="<?=$config['server']['serverName'].(isset($_REQUEST['subtopic'])? " - ".ucfirst($_REQUEST['subtopic']) :'').(isset($_REQUEST['action'])?" - ".ucfirst($_REQUEST['action'] = strip_tags(htmlspecialchars(trim($_REQUEST['action'])))):"").(isset($ch)?" - ".ucfirst(strip_tags(htmlspecialchars(trim($ch)))):"")?>"/>
    <meta property="og:url" content="<?=strtolower($config['base_url'].strip_tags(htmlspecialchars(trim($_SERVER['REQUEST_URI']))));?>"/>
    <meta property="og:type" content="<?php if($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])){echo 'profile';}else{echo 'website';}?>"/>
    <meta property="og:description" content="I'm using the best Gesior for tibia ot servers."/>
    <meta property="og:image" content="<?php if($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])){echo strtolower($config['base_url']."player_portrait.php?name=".strip_tags(htmlspecialchars(trim(urlencode($_REQUEST['name'])))));}else{echo strtolower($config['base_url']."layouts/tibiacom/images/global/header/background-artwork.jpg");}?>"/>
    <meta property="og:image:alt" content="<?php if($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])){echo "Player -> ".ucfirst(strip_tags(htmlspecialchars(trim($_REQUEST['name']))));}else{echo "background tibiano";}?>"/>
    <meta property="og:image:width" content="<?php if($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])){echo '498';}else{echo '1600';}?>"/>
    <meta property="og:image:height" content="<?php if($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])){echo '500';}else{echo '800';}?>"/>
    <meta property="og:locale" content="pt_BR"/>
    <!-- ##FIM META TAGS OPENGRAPH-->

    <!-- META TAGS FACEBOOK-->
    <meta property="fb:app_id" content="<?=$config['social']['fbappid']?>"/>
    <!-- ##FIM META TAGS FACEBOOK-->

    <!-- META TAGS TWITTER-->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="<?=$config['social']['twitter']?>"/>
    <meta name="twitter:creator" content="<?=$config['social']['twittercreator']?>"/>
    <!-- ##FIM META TAGS TWITTER-->

    <!--META TAGS BROWSER COLOR-->
    <!--CHROME-->
    <meta name="theme-color" content="<?=$config['site']['darkborder']?>">
    <!--SAFFARI-->
    <meta name="apple-mobile-web-app-status-bar-style" content="<?=$config['site']['darkborder']?>">
    <!--Windows-->
    <meta name="msapplication-navbutton-color" content="<?=$config['site']['darkborder']?>">
    <!--##FIM META TAGS BROWSER COLOR-->

    <!--  regular browsers -->
    <link rel="shortcut icon" href="<?php echo $layout_name; ?>/images/global/general/favicon.ico" type="image/x-icon">
    <!-- For iPad with high-resolution Retina display running iOS = 7: -->
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $layout_name; ?>/images/global/general/apple-touch-icon-152x152.png">
    <!-- For iPad with high-resolution Retina display running iOS = 6: -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $layout_name; ?>/images/global/general/apple-touch-icon-144x144.png">
    <!-- For iPhone with high-resolution Retina display running iOS = 7: -->
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $layout_name; ?>/images/global/general/apple-touch-icon-120x120.png">
    <!-- For iPhone with high-resolution Retina display running iOS = 6: -->
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $layout_name; ?>/images/global/general/apple-touch-icon-114x114.png">
    <!-- For the iPad mini and the first- and second-generation iPad on iOS = 7: -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $layout_name; ?>/images/global/general/apple-touch-icon-76x76.png">
    <!-- For the iPad mini and the first- and second-generation iPad on iOS = 6: -->
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $layout_name; ?>/images/global/general/apple-touch-icon-72x72.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon" href="<?php echo $layout_name; ?>/images/global/general/apple-touch-icon.png">
    <!-- Fallback for older devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo $layout_name; ?>/images/global/general/apple-touch-icon-precomposed.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo $layout_name; ?>/css/meupaudeoculos.min.css<?php echo $css_version;?>" rel="stylesheet" type="text/css">
    <?php
    if($_REQUEST['subtopic'] == "latestnews" || $_REQUEST['subtopic'] == "newsarchive")
//        echo '<link href="'.$layout_name.'/css/news.min.css'.$css_version.'" rel="stylesheet" type="text/css">';
        ?>
    <?php $subtopic = $_REQUEST['subtopic'];?>
</head>
<!---->
<!--<head>-->
<!---->
<!---->
<!--    <title>UO Renaissance : History Perfected : A Renaissance era Ultima Online Free Shard </title>-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
<!--    <meta name="description" content="Renaissance is the best Ultima Online free play server based on balanced and perfected renaissance era mechanics.  Play this free MMORPG and enjoy an Ultima Online server that actually feels like classic UO! Develop your Avatar and explore all that UO Renaissance has to offer.">-->
<!--    <meta name="keywords" content="uo, uor, uo:r,uo renaissance, uorenaissance, ultima online, second age, uo second age, uo pvp, uo t2a, t2a uo, uo free shard, uo free server, classic">-->
<!--    <meta name="author" content="Telamon">-->
<!--    <meta name="Rating" content="General">-->
<!--    <meta name="Robots" content="INDEX,FOLLOW">-->
<!--    <link rel="stylesheet" href="style.css" type="text/css">-->
<!--    <link rel="stylesheet" href="info.css" type="text/css">-->
<!--    <link rel="stylesheet" href="/themes/default/default.css" type="text/css" media="screen">-->
<!--    <!--<link rel="stylesheet" href="/themes/light/light.css" type="text/css" media="screen" />-->
<!--    <link rel="stylesheet" href="/themes/dark/dark.css" type="text/css" media="screen" />-->
<!--    <link rel="stylesheet" href="/themes/bar/bar.css" type="text/css" media="screen" />-->-->
<!--    <link rel="stylesheet" href="/nivo-slider.css" type="text/css" media="screen">-->
<!--</head>-->
<body style="zoom: 1;">

<div id="container">
    <table class="pagecontainer">
        <tbody><tr>
            <td style="width:718px; text-align:center">
                <a href="http://www.uorenaissance.com/"><img src="http://www.uorenaissance.com/images/logoclick.png" width="687" height="100" alt="Ultima Online Renaissance Logo"></a>
            </td>
            <td class="onlineplayers"> <!--style="background-image: url(http://www.uorenaissance.com/images/header1.png); width:255px;">-->
                <table style="table-layout:fixed; width:300px;border-style:none;">
                    <tbody><tr>
                        <td style="width:140px; border-style:none; text-align:center;">
                            <p class="header">
                                <a class="header" href="http://www.uorenaissance.com/downloads/UO_Renaissance_Client_Full.exe">UOR PC Package</a><br>
                                <a class="header" href="http://www.uorenaissance.com/downloads/UO%20Renaissance.dmg">UOR Mac Package</a><br>
                                <a class="header" href="http://www.uorenaissance.com/downloads/Razor_Latest.exe">Razor 1.0.13.4</a><br>
                                <a class="header" href="http://uorenaissance.com/download">Downloads Page</a>
                            </p></td>
                        <td style="width:75px; border-style:none; text-align:right">
                            <p class="header">
                                Online: &nbsp;<br>
                                Peak: &nbsp;<br>
                                Items: &nbsp;<br>
                                Uptime: &nbsp;
                            </p>
                        </td>
                        <td style="width:75px; border-style:none; text-align:left">
                            <p class="header">
                                <a class="header" href="http://www.uorenaissance.com/serverstatus">
                                    472
                                    <br>
                                    884	<br></a>
                                <a class="header" href="http://www.uorenaissance.com/items/">10,320,995</a><br>
                                <a class="header" href="http://uorforum.com/forums/patch-notes.14/">54d 18h</a>
                            </p>
                        </td>
                    </tr>
                    </tbody></table>
            </td>
        </tr>


        <tr>
            <td colspan="3" style="text-align:center;border-style:none;padding:18px 0px 20px 0px;">
                <table style="border-style:none; width:1040px;">
                    <tbody><tr>
                        <td colspan="1" style="width:330px; text-align:center;border:none;padding: 0px 10px 0px 25px;">
                            <a class="banner" href="http://uorforum.com/forums/patch-notes.14/" target="_blank">Patch 86 - April 27th <br>Easter Rewards, Bugfixes &amp; More!</a>
                        </td>
                        <td colspan="1" style="width:335px;text-align:center;border-style:none;padding: 0px 10px 0px 30px;">
                            <!--<a class="banner" href="http://www.uorenaissance.com/?page=vendor_detail&amp;id="><br/>
                            </a>-->
                            <!--<a class="banner" href="http://uorforum.com/threads/notice-to-hotmail-live-mail-outlook-email-users.16219/">We are experiencing hotmail/live/outlook email<br>
                            issues.  Please use an alternate address in the meantime!</a>-->
                            <!--<a class="banner" href="http://uorforum.com/threads/official-faction-discussion-planned-changes-thread.33248/">Faction Discussion Megathread!<br>
                            Come share your thoughts and ideas!</a>-->
                            <a class="banner" href="http://uorforum.com/threads/server-status-connection-issues-denial-of-service-attacks.36544/">Server Status, Connection Issues<br> Denial of Service Attacks</a><br>
                            <!--<a class="banner" href="http://uorforum.com/threads/irc-status.14190/">IRC/Chatroom Status Update<br>
                            Services should be restored soon!</a>-->
                            <!--<a class="banner" href="http://uorforum.com/forums/" target="_blank">Notice: Game server is experiencing a large scale Denial<br>
                             of Service Attack.  Server will return shortly. </a>-->
                        </td>
                        <td colspan="1" style="width:320px;text-align:left;border-style:none;padding: 0px 5px 0px 25px;">
                            <form method="post" action="http://www.uorenaissance.com/search/?page=search">
                                <!--<img src="/images/Search-icon_small.png" alt="Ultima Online Renaissance Logo"/>-->
                                <input type="search" name="search" results="5" id="search" maxlength="25" value="" tabindex="1" placeholder="Compendium, Player, Guild, Item Search">
                                <input type="submit" style="position: absolute; height: 0px; width: 0px; border-style: none; padding: 0px;" tabindex="-1">
                            </form>
                        </td>
                    </tr>
                    </tbody></table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:center;border-style:none;padding:0px;"></td>
        </tr>
        </tbody></table>
    <link rel="stylesheet" href="http://www.uorenaissance.com/info.css" type="text/css"><table class="main">
        <tbody><tr class="mainbody">
            <td class="leftpane" style="vertical-align:top">
                <div id="left">
                    <div class="menuheadernew">
                        <h1 class="itemname3">COMMUNITY</h1>
                        <div class="menucontentnew">
                            <a href="http://uorforum.com"><img src="http://www.uorenaissance.com/images/forum_icon2.png" width="25" height="24" style="vertical-align:middle" alt="Ultima Online Renaissance Forums"></a>
                            <a href="http://uorforum.com/">Forums</a>
                            <div class="menupadding"></div>
                            <a href="http://www.uorenaissance.com/bugtracker/"><img src="http://www.uorenaissance.com/images/mantis_icon.png" width="25" height="25" style="vertical-align:middle" alt="Ultima Online Renaissance Forums"></a>
                            <a href="http://www.uorenaissance.com/bugtracker/">Bug Tracker</a>
                            <div class="menupadding"></div>
                            <a href="https://discord.gg/9JtUTdP"><img src="http://www.uorenaissance.com/images/discord.png" width="101" height="32" style="vertical-align:middle" alt="Ultima Online Renaissance Discord"></a>
                            <a href="https://discord.gg/9JtUTdP"><img src="https://img.shields.io/discord/565638357720367114.svg?color=%23000000&amp;logo=discord&amp;logoColor=8d7625"></a><br>
                            <div class="menupadding"></div>
                            <a href="http://www.uorenaissance.com/irc" onclick="window.open(&quot;/irc&quot;,&quot;UORIRC&quot;,&quot;menubar=no,width=920,height=500,toolbar=no,resizable=yes&quot;);return false;" title="Please be patient while the IRC Web Client loads."><img src="http://www.uorenaissance.com/images/irc_icon.png" width="25" height="25" style="vertical-align:middle" alt="Ultima Online Renaissance IRC"></a>
                            <a href="http://www.uorenaissance.com/irc" onclick="window.open(&quot;/irc&quot;,&quot;UORIRC&quot;,&quot;menubar=no,width=920,height=500,toolbar=no,resizable=yes&quot;);return false;" title="Please be patient while the IRC Web Client loads.">IRC Chatroom</a>
                            irc.chat4all.org <br>
                            Port: 6667<br>
                            Channel: #Renaissance
                            <div class="menupadding"></div>
                            <a href="http://uorforum.com/threads/uoam-guide.2294/"><img src="http://www.uorenaissance.com/images/uoam_icon.png" width="25" height="25" style="vertical-align:middle" alt="Ultima Online Ventrillo"></a>
                            <a href="http://uorforum.com/threads/uoam-guide.2294/">UOAM Server</a>
                            uoam.uorenaissance.com<br>
                            Port:&nbsp;2000
                            <div class="menupadding"></div>
                            <a href="http://www.youtube.com/user/uorenaissance?feature=mhee"><img src="http://www.uorenaissance.com/images/youtube.png" width="20" height="22" title="Renaissance Youtube Channel" alt="Ultima Online Renaissance Youtube Channel"></a>&nbsp;
                            <a href="https://twitter.com/UORenaissance"><img src="http://www.uorenaissance.com/images/twitter.png" width="20" height="22" title="Renaissance Twitter" alt="Ultima Online Renaissance Twitter"></a>&nbsp;
                            <a href="http://www.uorenaissance.com/blog"><img src="http://www.uorenaissance.com/images/blog1.png" width="22" height="22" title="Renaissance Blog" alt="Renaissance Blog"></a>&nbsp;
                            <a href="http://www.uorenaissance.com/categorylist/Comic"><img src="http://www.uorenaissance.com/images/comic_icon2.png" width="22" height="22" title="Renaissance Comic Strips" alt="Renaissance Comic Strips"></a>&nbsp;
                            <a href="http://www.facebook.com/UltimaOnlineRenaissance"><img src="http://www.uorenaissance.com/images/facebook.png" width="20" height="22" title="Renaissance Facebook Page" alt="Ultima Online Renaissance Facebook Page"></a>

                        </div>
                    </div>
                    <div class="navmenu">
                        <!-- Start css3menu.com BODY section -->
                        <ul id="css3menu1" class="topmenu">
                            <li class="topmenutop"><a href="http://www.uorenaissance.com/map/index.php?zoom=5&amp;lon=1494&amp;lat=2480&amp;coords=1323,1624" style="width:160px;"><span class="top"><h1>UO World Map</h1></span></a></li>
                            <li class="topmenumiddle"><a href="http://www.uorenaissance.com/list/GettingStarted/P" style="width:160px;"><span class="middle"><h1>Getting Started</h1></span></a>
                                <ul>
                                    <li class="submenutopend"><a href="http://www.uorenaissance.com/download"><img src="http://www.uorenaissance.com/images/lpane/download1.png" height="16" width="16" alt="">Downloads</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/connecting"><img src="http://www.uorenaissance.com/images/lpane/server_from_client.png" height="16" width="16" alt="">Connecting to UO:R</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Razor/P"><img src="http://www.uorenaissance.com/images/lpane/razor.png" height="16" width="16" alt="">Razor Guide</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/GettingStarted/P"><img src="http://www.uorenaissance.com/images/lpane/signpost.png" height="16" width="16" alt="">Getting Started Guides</a></li>
                                    <li class="submenubottomend"><a href="http://uorforum.com/threads/faq-frequently-asked-questions.1283/"><img src="http://www.uorenaissance.com/images/lpane/question_and_answer.png" height="16" width="16" alt="">Renaissance F.A.Q.</a></li>
                                </ul>
                            </li>
                            <li class="topmenumiddle"><a href="http://www.uorenaissance.com/info" style="width:160px;"><span class="middle"><h1>The Compendium</h1></span></a>
                                <ul>
                                    <li class="submenutop"><a href="http://www.uorenaissance.com/info/The_World" style="width:155px;"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" height="18" width="18" alt="">The World</span></a>
                                        <ul>
                                            <li class="submenutopend"><a href="http://www.uorenaissance.com/list/Town/S1"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" height="18" width="18" alt="">Towns</span></a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/PlayerTown/S1"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" height="18" width="18" alt="">Player Run Towns</span></a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Dungeons/S1"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" height="18" width="18" alt="">Dungeons</span></a></li>
                                            <li class="submenubottomend"><a href="http://www.uorenaissance.com/list/POI/S1"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" height="18" width="18" alt="">Points of Interest</span></a></li>
                                        </ul>
                                    </li>
                                    <!--<li class="submenumiddle"><a href="http://www.uorenaissance.com/list/T2A/P" style="width:155px;"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" width="16" height="16" alt=""/>The Lost Lands (T2A)</span></a>
                                        <ul>
                                            <li class="submenutopend"><a href="http://www.uorenaissance.com/list/T2ATown/S1"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" height="18" width="18" alt=""/>Towns</span></a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/categorylist/T2A/Dungeon"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" height="18" width="18" alt=""/>Dungeons</span></a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/categorylist/T2A/POI"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" height="18" width="18" alt=""/>Points of Interest</span></a></li>
                                            <li class="submenubottomend"><a href="http://www.uorenaissance.com/categorylist/T2A/Transit"><span><img src="http://www.uorenaissance.com/images/lpane/world.png" height="18" width="18" alt=""/>Lost Land Entrances</span></a></li>
                                        </ul>
                                    </li>-->
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Achievements/P" style="width:155px;"><span><img src="http://uorenaissance.com/images/star.png" height="16" width="16" alt="">Achievement System</span></a></li>
                                    <li class="submenumiddle"><a href="http://www.uorenaissance.com/list/Skill/M" style="width:155px;"><span><img src="http://www.uorenaissance.com/images/lpane/scroll2.png" height="16" width="16" alt="">Skills</span></a>
                                        <ul>
                                            <li class="submenutopend"><a href="http://www.uorenaissance.com/list/Combat/S1"><span><img src="http://www.uorenaissance.com/images/lpane/favicon.png" height="16" width="16" alt="">Combat</span></a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Crafting/S1"><span><img src="http://www.uorenaissance.com/images/lpane/hammer.png" height="16" width="16" alt="">Crafting</span></a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Creatures/S1"><span><img src="http://www.uorenaissance.com/images/lpane/troll.png" height="16" width="16" alt="">Creatures</span></a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Magical/S1"><span><img src="http://www.uorenaissance.com/images/lpane/book_red.png" height="16" width="16" alt="">Magical</span></a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Lore/S1"><span><img src="http://www.uorenaissance.com/images/lpane/books.png" height="16" width="16" alt="">Lore &amp; Knowledge</span></a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Rogue/S1"><span><img src="http://www.uorenaissance.com/images/lpane/spy.png" height="16" width="16" alt="">Rogue</span></a></li>
                                            <li class="submenubottomend"><a href="http://www.uorenaissance.com/list/Misc/S1"><span><img src="http://www.uorenaissance.com/images/lpane/campfire16x.gif" height="16" width="16" alt="">Miscellaneous</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/bestiary" style="width:155px;"><span><img src="http://www.uorenaissance.com/mobs/dragon.png" height="20" width="20" alt="">Bestiary</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/categorylist/Ability" style="width:155px;"><span><img src="http://www.uorenaissance.com/images/items2/Item%200x0E2D.png" height="16" width="16" alt="">Special Skills</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/BulkOrders/P" style="width:155px;"><span><img src="http://www.uorenaissance.com/images/lpane/bodbook1.png" height="16" width="16" alt="">Bulk Order System</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/categorylist/Stats" style="width:155px;"><span><img src="http://www.uorenaissance.com/images/lpane/heart.png" height="16" width="16" alt="">Player Stats</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Spells/M" style="width:155px;"><span><img src="http://www.uorenaissance.com/images/lpane/book_red.png" height="16" width="16" alt="">Spells</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Housing/P" style="width:155px;"><span><img src="http://www.uorenaissance.com/images/villa.png" height="20" width="20" alt="">Houses</span></a></li>
                                    <li class="submenubottomend"><a href="http://www.uorenaissance.com/list/Faction/P" style="width:155px;"><span><img src="http://www.uorenaissance.com/images/lpane/flag_red.png" height="16" width="16" alt="Ultima Olline Factions">Factions</span></a></li>
                                </ul>
                            </li>
                            <li class="topmenumiddle"><a href="http://www.uorenaissance.com/myuormain" style="width:160px;"><span class="middle"><h1>my Renaissance</h1></span></a>
                                <ul>
                                    <li class="submenutopend"><a href="http://www.uorenaissance.com/players/online"><span><img src="http://www.uorenaissance.com/images/lpane/u6.png" height="16" width="16" alt="">Online Characters</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/players/all"><span><img src="http://www.uorenaissance.com/images/lpane/u6.png" height="16" width="16" alt="">All Characters</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/guilds"><img src="http://www.uorenaissance.com/images/lpane/guildstone.png" height="16" width="16" alt="">Guilds</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/items/A"><img src="http://www.uorenaissance.com/images/lpane/chart.png" height="16" width="16" alt="">Item Database</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/worldeconomy"><img src="http://www.uorenaissance.com/images/chest.png" height="16" width="16" alt="">World Economy</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/vendor_list"><img src="http://www.uorenaissance.com/images/goldvalue.png" height="16" width="16" alt="">Vendor List</a></li>
                                    <li class="submenumiddle"><a href="http://www.uorenaissance.com/factionstatus" style="width:160px;"><span><img src="http://www.uorenaissance.com/images/lpane/favicon.png" height="16" width="16" alt="">Faction Status</span></a>
                                        <ul>
                                            <li class="submenutopend"><a href="http://www.uorenaissance.com/faction/TrueBrit"><img src="http://www.uorenaissance.com/images/lpane/flag_purple.png" height="16" width="16" alt="">True Britannians</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/faction/SL"><img src="http://www.uorenaissance.com/images/lpane/flag_green.png" height="16" width="16" alt="">Shadowlords</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/faction/CoM"><img src="http://www.uorenaissance.com/images/lpane/flag_blue.png" height="16" width="16" alt="">Council of Mages</a></li>
                                            <li class="submenubottomend"><a href="http://www.uorenaissance.com/faction/Minax"><img src="http://www.uorenaissance.com/images/lpane/flag_red.png" height="16" width="16" alt="">Minax</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/skillstats"><img src="http://www.uorenaissance.com/images/lpane/scroll2.png" height="16" width="16" alt="">Skill Statistics</a></li>
                                    <li class="submenubottomend"><a href="http://www.uorenaissance.com/categorylist/Achievements"><img src="http://www.uorenaissance.com/images/lpane/award_star_gold_3.png" height="16" width="16" alt="">Achievements</a></li>
                                </ul>
                            </li>
                            <li class="topmenumiddle"><a href="http://www.uorenaissance.com/events/All/50" style="width:160px;"><span class="middle"><h1>Event Info</h1></span></a>
                                <ul>
                                    <li class="submenutopend"><a href="http://uorenaissance.com/eventschedule/CST"><span><img src="http://www.uorenaissance.com/images/calendaricon.png" height="16" width="16" alt="">Event Schedule</span></a></li>
                                    <li class="submenumiddleend"><a href="http://uorenaissance.com/events/All/50"><span><img src="http://www.uorenaissance.com/images/events.png" height="16" width="16" alt="">Event Results</span></a></li>
                                    <li class="submenumiddle"><a href="http://uorforum.com/threads/events-101-capture-the-flag.842/"><span><img src="http://www.uorenaissance.com/images/ctficon.png" height="16" width="16" alt="">Capture the Flag (CTF)</span></a>
                                        <ul>
                                            <li class="submenutopend"><a href="http://uorforum.com/threads/events-101-capture-the-flag.842/"><img src="http://www.uorenaissance.com/images/lpane/forums.png" height="16" width="16" alt="">Guide to CTF Events</a></li>
                                            <li class="submenumiddleend"><a href="http://uorenaissance.com/events/CTF/50"><img src="http://www.uorenaissance.com/images/events.png" height="16" width="16" alt="">Event Results</a></li>
                                            <li class="submenubottomend"><a href="http://www.uorenaissance.com/pvpleaderboard/10"><img src="http://www.uorenaissance.com/images/leadericon.png" height="16" width="16" alt="">Leaderboards</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenumiddle"><a href="http://uorforum.com/threads/the-renaissance-tournament-system.9085/"><span><img src="http://www.uorenaissance.com/images/tourneyicon.png" height="16" width="16" alt="">Tournaments</span></a>
                                        <ul>
                                            <li class="submenutopend"><a href="http://uorforum.com/threads/the-renaissance-tournament-system.9085/"><img src="http://www.uorenaissance.com/images/lpane/forums.png" height="16" width="16" alt="">Guide to Tournaments</a></li>
                                            <li class="submenumiddleend"><a href="http://uorenaissance.com/events/Tournament/50"><img src="http://www.uorenaissance.com/images/events.png" height="16" width="16" alt="">Event Results</a></li>
                                            <li class="submenubottomend"><a href="http://www.uorenaissance.com/pvpleaderboard/4"><img src="http://www.uorenaissance.com/images/leadericon.png" height="16" width="16" alt="">Leaderboards</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenumiddle"><a href="http://uorforum.com/threads/the-renaissance-duel-system.3228/"><span><img src="http://www.uorenaissance.com/images/duelicon.png" height="16" width="16" alt="">Duel System</span></a>
                                        <ul>
                                            <li class="submenutopend"><a href="http://uorforum.com/threads/the-renaissance-duel-system.3228/"><img src="http://www.uorenaissance.com/images/lpane/forums.png" height="16" width="16" alt="">Duel System Guide</a></li>
                                            <li class="submenumiddleend"><a href="http://uorenaissance.com/events/Duels/50"><img src="http://www.uorenaissance.com/images/events.png" height="16" width="16" alt="">Recent Duel Results</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/2"><img src="http://www.uorenaissance.com/images/leadericon.png" height="16" width="16" alt="">5x Mage Leaderboard</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/3"><img src="http://www.uorenaissance.com/images/leadericon.png" height="16" width="16" alt="">7x Mage Leaderboard</a></li>
                                            <li class="submenubottomend"><a href="http://www.uorenaissance.com/pvpleaderboard/1"><img src="http://www.uorenaissance.com/images/leadericon.png" height="16" width="16" alt="">7x Standard Leaderboard</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenubottom"><a href="http://www.uorenaissance.com"><span><img src="http://www.uorenaissance.com/images/halloweenicon.png" height="16" width="16" alt="">Holiday Events</span></a>
                                        <ul>
                                            <li class="submenutopend"><a href="http://www.uorenaissance.com/list/Valentines/P"><img src="http://www.uorenaissance.com/images/hearticon.png" height="16" width="16" alt="">Valentines</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Easter/P"><img src="http://www.uorenaissance.com/images/Clothing/Item%200x09B5.png" alt="">Easter</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com"><img src="http://www.uorenaissance.com/images/stpattyicon.png" height="16" width="16" alt="">St. Patricks Day</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com"><img src="http://www.uorenaissance.com/images/4thicon.png" height="16" width="16" alt="">4th of July</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com"><img src="http://www.uorenaissance.com/images/shardicon.png" height="16" width="16" alt="">Shard Anniversary</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com"><img src="http://www.uorenaissance.com/images/halloweenicon.png" height="16" width="16" alt="">Halloween</a></li>
                                            <li class="submenumiddleend"><a href="http://www.uorenaissance.com"><img src="http://www.uorenaissance.com/images/tkicon.png" height="16" width="16" alt="">Thanksgiving</a></li>
                                            <li class="submenubottomend"><a href="http://www.uorenaissance.com"><img src="http://www.uorenaissance.com/images/xmasicon.png" height="16" width="16" alt="">Christmas</a></li>
                                        </ul>
                                    </li>
                                    <!--<li class="submenubottom"><a href="http://www.uorenaissance.com"><span><img src="http://www.uorenaissance.com/images/ddicon.png" height="16" width="16" alt=""/>Double Domination</span></a>
                                        <ul>
                                            <li><a href="http://www.uorenaissance.com"><img src="http://www.uorenaissance.com/images/events.png" height="16" width="16" alt=""/>Coming Soon!</a></li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </li>
                            <li class="topmenumiddle"><a href="http://www.uorenaissance.com/list/Skill/M" style="width:160px;"><span class="middle"><h1>Skills</h1></span></a>
                                <ul>
                                    <li class="submenutopend"><a href="http://www.uorenaissance.com/list/Combat/S1"><span><img src="http://www.uorenaissance.com/images/lpane/favicon.png" height="16" width="16" alt="">Combat</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Crafting/S1"><span><img src="http://www.uorenaissance.com/images/lpane/hammer.png" height="16" width="16" alt="">Crafting</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Creatures/S1"><span><img src="http://www.uorenaissance.com/images/lpane/troll.png" height="16" width="16" alt="">Creatures</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Magical/S1"><span><img src="http://www.uorenaissance.com/images/lpane/book_red.png" height="16" width="16" alt="">Magical</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Lore/S1"><span><img src="http://www.uorenaissance.com/images/lpane/books.png" height="16" width="16" alt="">Lore &amp; Knowledge</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Rogue/S1"><span><img src="http://www.uorenaissance.com/images/lpane/spy.png" height="16" width="16" alt="">Rogue</span></a></li>
                                    <li class="submenubottomend"><a href="http://www.uorenaissance.com/list/Misc/S1"><span><img src="http://www.uorenaissance.com/images/lpane/campfire16x.gif" height="16" width="16" alt="">Miscellaneous</span></a></li>
                                </ul>
                            </li>
                            <li class="topmenumiddle"><a href="http://www.uorenaissance.com/images/lpane/chart.png" style="width:160px;"><span class="middle"><h1>Item Info</h1></span></a>
                                <ul>
                                    <li class="submenutopend"><a href="http://www.uorenaissance.com/items/"><img src="http://www.uorenaissance.com/images/lpane/chart.png" height="16" width="16" alt="">Item Database</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Weapon/M"><span><img src="http://www.uorenaissance.com/images/lpane/swords.png" width="16" height="16" alt="">Weapons</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Armor/M"><span><img src="http://www.uorenaissance.com/images/armor_icon.png" height="16" width="16" alt="">Armor</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/itemlist/Shield"><span><img src="http://www.uorenaissance.com/images/shield_icon.png" height="16" width="16" alt="">Shields</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Item/M"><span><img src="http://uorenaissance.com/images/items2/Item%200x14ED.png" alt="">General Items</span></a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Spawning/P"><span><img src="http://www.uorenaissance.com/info/images/SkullCandle.png" height="16" width="16" alt="">Spawning Rares</span></a></li>
                                    <li class="submenubottomend"><a href="http://www.uorenaissance.com/list/Unique/P"><span><img src="http://www.uorenaissance.com/info/images/CoveredChair.png" height="16" width="16" alt="">Unique Rares</span></a></li>
                                </ul>
                            </li>
                            <li class="topmenumiddle"><a href="http://www.uorenaissance.com/pvmleaderboard" style="width:160px;"><span class="middle"><h1>Leaderboards</h1></span></a>
                                <ul>
                                    <li class="submenutopend"><a href="http://www.uorenaissance.com/pvmleaderboard"><img src="http://www.uorenaissance.com/images/lpane/troll.png" height="16" width="16" alt="">Player vs Monster</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/1"><img src="http://www.uorenaissance.com/images/lpane/certificate.png" height="16" width="16" alt="">Standard 7x Rankings</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/2"><img src="http://www.uorenaissance.com/images/lpane/certificate.png" height="16" width="16" alt="">Mage 5x Rankings</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/3"><img src="http://www.uorenaissance.com/images/lpane/certificate.png" height="16" width="16" alt="">Mage 7x Rankings</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/4"><img src="http://www.uorenaissance.com/images/lpane/u6.png" height="16" width="16" alt="">Overall PvP Rankings</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/5"><img src="http://www.uorenaissance.com/images/lpane/u6.png" height="16" width="16" alt="">Standard PvP Rankings</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/6"><img src="http://www.uorenaissance.com/images/lpane/blood2.png" height="16" width="16" alt="">Murderer Rankings</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/7"><img src="http://www.uorenaissance.com/mobs/dragon.png" height="16" width="16" alt="">Controlled Rankings</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/pvpleaderboard/8"><img src="http://www.uorenaissance.com/images/lpane/favicon.png" height="16" width="16" alt="">Faction Combat</a></li>
                                    <li class="submenubottomend"><a href="http://www.uorenaissance.com/pvpleaderboard/9"><img src="http://www.uorenaissance.com/images/lpane/guildstone.png" height="16" width="16" alt="">Guild Combat</a></li>
                                    <!--<li><a href="http://www.uorenaissance.com/?page=m_default_list&amp;ktype=kills_guild"><img src="lpane_files/css3menu1/guildstone.png" alt=""/>Guild Combat</a></li>
                                    <li><a href="http://www.uorenaissance.com/?page=m_default_list&amp;ktype=kills_ctf"><img src="lpane_files/css3menu1/flag_yellow.png" alt=""/>Capture the Flag</a></li>
                                    <li><a href="http://www.uorenaissance.com/?page=m_default_list&amp;ktype=kills_tournament"><img src="lpane_files/css3menu1/tourney.png" alt=""/>Tournament Combat</a></li>-->
                                </ul>
                            </li>

                            <li class="topmenumiddle"><a href="http://uorforum.com/" style="width:160px;"><span class="middle"><h1>Community</h1></span></a>
                                <ul>
                                    <li class="submenutopend"><a href="http://uorforum.com/"><img src="http://www.uorenaissance.com/images/lpane/forums.png" height="16" width="16" alt="">Forums</a></li>
                                    <li class="submenumiddleend"><a href="http://www.facebook.com/UltimaOnlineRenaissance"><img src="http://www.uorenaissance.com/images/facebook_16.png" height="18" width="16" alt="">Facebook</a></li>
                                    <li class="submenumiddleend"><a href="http://www.youtube.com/user/uorenaissance"><img src="http://www.uorenaissance.com/images/youtube_16.png" height="18" width="16" alt="">Youtube</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Comic/P"><img src="http://www.uorenaissance.com/images/comic.png" height="16" width="16" alt="">UOR Comics</a></li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/list/Tales/P"><img src="http://www.uorenaissance.com/images/blue_book.png" height="17" width="15" alt="">Tales from UOR</a>
                                        <!--<ul>
                                            <li><a href="http://www.uorenaissance.com/categorylist/Tales"><img src="http://www.uorenaissance.com/images/blue_book.png" width="15" height="17" alt=""/>Village of Paws</a></li>
                                        </ul>-->
                                    </li>
                                    <li class="submenumiddleend"><a href="http://www.uorenaissance.com/?page=news&amp;month=All&amp;year=2013"><img src="http://www.uorenaissance.com/images/news.png" width="16" height="16" alt="">2013 News</a></li>
                                    <li class="submenubottomend"><a href="http://www.uorenaissance.com/?page=news&amp;month=All&amp;year=2014"><img src="http://www.uorenaissance.com/images/news.png" width="16" height="16" alt="">2014 News</a></li>
                                </ul>
                            </li>
                            <li class="topmenumiddleend"><a href="http://www.uorenaissance.com/conduct" style="width:160px;"><span class="middle"><h1>Code of Conduct</h1></span></a></li>
                            <li class="topmenubottom"><a href="http://www.uorenaissance.com/support" style="width:160px;"><span class="bottom"><h1>Shard Support</h1></span></a></li>
                        </ul>
                    </div>
                    <!--<a href="http://www.hitbox.tv/UORenaissance"><img src="http://www.uorenaissance.com/images/worldcam.png" alt="" title="UOR World Cam"/></a>
                    <iframe width="190" height="107" src="http://hitbox.tv/#!/embed/UORenaissance?autoplay=true" frameborder="0" allowfullscreen></iframe>-->
                    <div class="menuheadernew">
                        <h1 class="itemname3">PvP LEADERS</h1>
                        <div class="menucontentnew2">
                            <table class="contentcontainer">
                                <tbody><tr>
                                    <td class="header1" colspan="2">
                                        <a href="http://www.uorenaissance.com/pvpleaderboard/2"><h1 class="leaderboardheader">5x Mage Duelists</h1></a>
                                    </td>
                                    <!--<td class="header2">
                                        <h1 class="leaderboardheader">Wins</h1>
                                    </td>-->
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/60758">Pax Romain</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">643</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/412495">Cobrinha</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">458</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/65192">Isabel</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">145</h1>
                                    </td>
                                </tr>
                                </tbody></table>
                            <br>
                            <table class="contentcontainer">
                                <tbody><tr>
                                    <td class="header1" colspan="2">
                                        <a href="http://www.uorenaissance.com/pvpleaderboard/1"><h1 class="leaderboardheader">7x Duelists</h1></a>
                                    </td>
                                    <!--<td class="header1">
                                        <h1 class="leaderboardheader">Wins</h1>
                                    </td>-->
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/1446353">Juana Fight</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">322</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/60758">Pax Romain</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">330</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/402174">hax romain</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">205</h1>
                                    </td>
                                </tr>
                                </tbody></table>
                            <br>
                            <table class="contentcontainer">
                                <tbody><tr>
                                    <td class="header1" colspan="2">
                                        <a href="http://www.uorenaissance.com/pvpleaderboard/3"><h1 class="leaderboardheader">7x Mage Duelists</h1></a>
                                    </td>
                                    <!--<td class="header2">
                                        <h1 class="leaderboardheader">Wins</h1>
                                    </td>-->
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/889763">Syncopations</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">52</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/470798">Xlandor</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">46</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/115736">Tom the Immortal</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">36</h1>
                                    </td>
                                </tr>
                                </tbody></table>
                        </div></div>

                    <div class="menuheadernew">
                        <h1 class="itemname3">PvM LEADERS</h1>
                        <div class="menucontentnew2">
                            <table class="contentcontainer">
                                <tbody><tr>
                                    <td class="header1" colspan="2">
                                        <h1 class="leaderboardheader">Lifetime Leaderboard</h1>
                                    </td>
                                    <!--<td class="header2">
                                        <h1 class="leaderboardheader">Kills</h1>
                                    </td>-->
                                </tr>
                                </tbody></table>
                            <table class="contentcontainer">
                                <tbody><tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/1123911">ValoriVinyl</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">296,850</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/12044">AkirA</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">269,101</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/13716">Vella</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">220,872</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/58368">Angry Leprechaun</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">213,895</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/654041">Angry Cupid</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">213,552</h1>
                                    </td>
                                </tr>
                                </tbody></table>
                            <br>
                            <table class="contentcontainer">
                                <tbody><tr>
                                    <td class="header1" colspan="2">
                                        <h1 class="leaderboardheader">2018 Leaderboard</h1>
                                    </td>
                                    <!--<td class="header2">
                                        <h1 class="leaderboardheader">Kills</h1>
                                    </td>-->
                                </tr>
                                </tbody></table>
                            <table class="contentcontainer">
                                <tbody><tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/961143">Pirlo</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">85,213</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/33723">Oriannucia</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">80,542</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/750033">Lablina</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">79,881</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/12044">AkirA</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">75,350</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col1">
                                        <h1 class="leaderboardlist"><a href="http://www.uorenaissance.com/player/395729">Nildro-Hain</a></h1>
                                    </td>
                                    <td class="col2">
                                        <h1 class="leaderboardscore">72,163</h1>
                                    </td>
                                </tr>
                                </tbody></table>
                        </div></div>

                </div>
                <br>
                <br>
                <br>
                <br>
            </td>
            <td style="vertical-align:top;">
                <div id="infocontainer">
                    <div class="fullheader">
                        <h1 class="itemname">Welcome to UO Renaissance</h1>
                    </div>
                    <div class="fullbody">
                        <div class="uormainheader">
                            <table>
                                <!--<col width="590"/><col width="205"/>-->
                                <tbody><tr>
                                    <td class="banners">
                                        <div class="slider-wrapper theme-default">
                                            <div id="slider" class="nivoSlider">

                                                <!-- Christmas <a href="http://uorforum.com/threads/a-renaissance-christmas-event-dark-magic-awakens.29616/"><img src="http://www.uorenaissance.com/images/IceFortress.jpg" data-thumb="images/IceFortress.jpg" alt="Ice Fortress Event Expansion" /></a>
                                                <a href="http://uorforum.com/threads/a-renaissance-christmas-event-dark-magic-awakens.29616/"><img src="http://www.uorenaissance.com/images/IceFortress.jpg" data-thumb="images/IceFortress.jpg" alt="Ice Fortress Event Expansion" /></a>
                                                <a href="http://uorforum.com/threads/a-renaissance-christmas-event-dark-magic-awakens.29616/"><img src="http://www.uorenaissance.com/images/SantasLair.jpg" data-thumb="images/SantasLair.jpg" alt="Santa's Lair Event" /></a>
                                                <a href="http://uorforum.com/threads/a-renaissance-christmas-event-dark-magic-awakens.29616/"><img src="http://www.uorenaissance.com/images/HiddenVillage.jpg" data-thumb="images/SantasLair.jpg" alt="Hidden Village Event" /></a>
                                                <a href="http://uorforum.com/threads/a-renaissance-christmas-event-dark-magic-awakens.29616/"><img src="http://www.uorenaissance.com/images/KrampusLair.jpg" data-thumb="images/KrampusLair.jpg" alt="Krampus Lair Continent Event" /></a>
                                                <a href="http://uorforum.com/threads/a-renaissance-christmas-event-dark-magic-awakens.29616/"><img src="http://www.uorenaissance.com/images/WhiteWitchLair.jpg" data-thumb="images/WhiteWitchLair.jpg" alt="White Witch Lair Event Expansion" /></a>
                                                <a href="http://uorforum.com/threads/a-renaissance-christmas-event-dark-magic-awakens.29616/"><img src="http://www.uorenaissance.com/images/KrampusLair.jpg" data-thumb="images/KrampusLair.jpg" alt="Krampus Lair Continent Event" /></a>
                                                <a href="http://uorforum.com/threads/a-renaissance-christmas-event-dark-magic-awakens.29616/"><img src="http://www.uorenaissance.com/images/WhiteWitchLair.jpg" data-thumb="images/WhiteWitchLair.jpg" alt="White Witch Lair Event Expansion" /></a>-->

                                                <!--<a href="http://uorforum.com/threads/renaissance-hacked-character-names-have-been-compromised.9676/"><img src="http://www.uorenaissance.com/images/Hacked.jpg" data-thumb="images/Hacked.jpg" alt="Hacked!" /></a>-->

                                                <!--<a href="http://uorforum.com/threads/happy-3rd-anniversary-renaissance.12102/"><img src="http://www.uorenaissance.com/images/3rd.jpg" data-thumb="images/3rd.jpg" alt="3rd Anniversary" /></a>-->
                                                <!--<a href="http://uorforum.com/threads/happy-easter-worldwide-event-march-26th-to-april-4th.16155"><img src="http://www.uorenaissance.com/images/Easter.jpg" data-thumb="images/Easter.jpg" alt="Easter" /></a>-->
                                                <!--<a href="http://uorforum.com/threads/cupid-returns-a-unique-holiday-event.15608/"><img src="http://www.uorenaissance.com/images/Valentines2016.jpg" data-thumb="images/CupidBanner.jpg" alt="Valentines Event" /></a>-->
                                                <!--<a href="http://uorforum.com/threads/happy-4th-anniversary-renaissance.18407/"><img src="http://www.uorenaissance.com/images/Anniv.jpg" data-thumb="images/bonding.jpg" alt="House Decor 2016" /></a>-->
                                                <!--<a href="http://uorforum.com/threads/happy-4th-anniversary-renaissance.18407/"><img src="http://www.uorenaissance.com/images/Anniv.jpg" data-thumb="images/bonding.jpg" alt="House Decor 2016" /></a>-->
                                                <!--<a href="http://uorforum.com/threads/night-of-horrors-challenge-event-halloween-2016.19452/"><img src="http://www.uorenaissance.com/images/Halloween2016Banner.jpg" data-thumb="images/bonding.jpg" alt="Halloween 2016" /></a>-->
                                                <!--<a href="http://uorforum.com/threads/happy-easter-worldwide-event-april-8th-to-april-23rd.22999/"><img src="http://www.uorenaissance.com/images/Easter2017Banner.jpg" data-thumb="images/Easter2017Banner.jpg" alt="Easter 2017" /></a>-->


                                                <!--<a href="http://uorforum.com/threads/happy-5th-anniversary-renaissance.25623/"><img src="http://www.uorenaissance.com/images/5thBanner.jpg" data-thumb="images/5thBanner.jpg" alt="5th Anniversary" /></a>-->

                                                <!--<a href="http://uorforum.com/threads/night-of-horrors-challenge-event-halloween-2017.27874/"><img src="http://www.uorenaissance.com/images/Halloween2017Banner.jpg" data-thumb="images/Halloween2017Banner.jpg" alt="Halloween Event" /></a>-->
                                                <!--<a href="http://uorforum.com/threads/2017-anniversary-house-decorating-contest.25936/"><img src="http://www.uorenaissance.com/images/HouseDecor2017.jpg" data-thumb="images/HouseDecor2017.jpg" alt="House Decor Contest 2017" /></a>-->

                                                <!--<a href="http://uorforum.com/threads/2018-easter-egg-hunt-event.32245/"><img src="http://www.uorenaissance.com/images/Easter_2018.jpg" data-thumb="images/Easter.jpg" alt="Easter" /></a>-->



                                                <!--<a href="http://uorforum.com/threads/uo-renaissance-art-contest-2mil-in-prizes.26839/"><img src="http://www.uorenaissance.com/images/ArtContestbanner.jpg" data-thumb="images/ArtContestbanner.jpg" alt="Art Contest" /></a>-->
                                                <a href="http://uorforum.com/threads/happy-halloween-2019-renaissance-event-megathread.45232/" class="nivo-imageLink" style="display: none;"><img src="http://www.uorenaissance.com/images/Halloween2019.jpg" data-thumb="images/Halloween2019.jpg" alt="Halloween Event" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <!--<a href="http://uorforum.com/threads/happy-7th-anniversary-renaissance-global-event-starting-september-1st.44170/"><img src="http://www.uorenaissance.com/images/7thAnnivBanner.jpg" data-thumb="images/3rd.jpg" alt="7th Anniversary" /></a>-->
                                                <a href="http://uorforum.com/threads/the-zookeepers-quest-patch-52-pet-bonding-expansion.4831/" class="nivo-imageLink" style="display: none;"><img src="http://www.uorenaissance.com/images/bonding.jpg" data-thumb="images/bonding.jpg" alt="Bonding Expansion" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <a href="http://uorforum.com/threads/renaissance-blog-anti-afk-gather-sell-system.486/" class="nivo-imageLink" style="display: none;"><img src="http://www.uorenaissance.com/images/banner1.jpg" data-thumb="images/banner1.jpg" alt="Anti AFK Gathering System" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <a href="http://uorforum.com/threads/renaissance-blog-creating-the-fortress.270/" class="nivo-imageLink" style="display: none;"><img src="http://www.uorenaissance.com/images/banner2.jpg" data-thumb="images/banner2.jpg" alt="Fortress Keep Perfected" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <a href="http://uorforum.com/threads/renaissance-blog-ancient-soss.1709/" class="nivo-imageLink" style="display: block;"><img src="http://www.uorenaissance.com/images/banner3.jpg" data-thumb="images/banner3.jpg" alt="Fishing Perfected" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <a href="http://www.uorenaissance.com/pvmleaderboard/" class="nivo-imageLink" style="display: none;"><img src="http://www.uorenaissance.com/images/banner4.jpg" data-thumb="images/banner4.jpg" alt="Player vs Monster Leaderboard" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <a href="http://uorforum.com/threads/renaissance-blog-the-platinum-system.1501/" class="nivo-imageLink" style="display: none;"><img src="http://www.uorenaissance.com/images/banner5.jpg" data-thumb="images/banner5.jpg" alt="Platinum Rewards" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <a href="http://uorforum.com/threads/renaissance-blog-perfecting-stone-crafting-aka-masonry.1487/" class="nivo-imageLink" style="display: none;"><img src="http://www.uorenaissance.com/images/banner6.jpg" data-thumb="images/banner6.jpg" alt="Stone Crafting / Masonry Perfected" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <a href="http://www.uorenaissance.com/items/R" class="nivo-imageLink" style="display: none;"><img src="images/banner7.jpg" data-thumb="http://www.uorenaissance.com/images/banner7.jpg" alt="Extensive Item Database" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <a href="http://www.uorenaissance.com/map/index.php?zoom=5&amp;lon=1494&amp;lat=2480&amp;coords=1323,1624" class="nivo-imageLink" style="display: none;"><img src="http://www.uorenaissance.com/images/banner8.jpg" data-thumb="images/banner8.jpg" alt="Interactive World Map" style="width: 811px; visibility: hidden; display: inline;"></a>
                                                <img class="nivo-main-image" src="http://www.uorenaissance.com/images/banner3.jpg" style="display: inline; height: 304px;"><div class="nivo-caption"></div><div class="nivo-directionNav"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div><div class="nivo-slice" name="0" style="left: 0px; width: 811px; height: 304px; opacity: 1; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-0px;"></div><div class="nivo-slice" name="1" style="left: 54px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-54px;"></div><div class="nivo-slice" name="2" style="left: 108px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-108px;"></div><div class="nivo-slice" name="3" style="left: 162px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-162px;"></div><div class="nivo-slice" name="4" style="left: 216px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-216px;"></div><div class="nivo-slice" name="5" style="left: 270px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-270px;"></div><div class="nivo-slice" name="6" style="left: 324px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-324px;"></div><div class="nivo-slice" name="7" style="left: 378px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-378px;"></div><div class="nivo-slice" name="8" style="left: 432px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-432px;"></div><div class="nivo-slice" name="9" style="left: 486px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-486px;"></div><div class="nivo-slice" name="10" style="left: 540px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-540px;"></div><div class="nivo-slice" name="11" style="left: 594px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-594px;"></div><div class="nivo-slice" name="12" style="left: 648px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-648px;"></div><div class="nivo-slice" name="13" style="left: 702px; width: 54px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-702px;"></div><div class="nivo-slice" name="14" style="left: 756px; width: 55px; height: 304px; opacity: 0; overflow: hidden;"><img src="http://www.uorenaissance.com/images/banner3.jpg" style="position:absolute; width:811px; height:auto; display:block !important; top:0; left:-756px;"></div></div>
                                        </div>
                                        <script type="text/javascript" src="http://www.uorenaissance.com/scripts/jquery-1.9.0.min.js"></script>
                                        <script type="text/javascript" src="http://www.uorenaissance.com/scripts/jquery.nivo.slider.js"></script>
                                        <script type="text/javascript">
                                            $(window).load(function() {
                                                $('#slider').nivoSlider
                                                ({
                                                    pauseTime: 7500, // How long each slide will show
                                                    startSlide: 0, // Set starting Slide (0 index)
                                                    controlNav: false, // 1,2,3... navigation
                                                    randomStart: false, // Start on a random slide
                                                    effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
                                                    directionNav: true // Next & Prev navigation
                                                });
                                            });
                                        </script>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="banners">
                                        <br>
                                        &nbsp; &nbsp; UO:Renaissance is an Ultima Online free-shard, based on Renaissance era mechanics, without the influences of Trammel.
                                        <br><br>
                                        &nbsp; &nbsp; Designed and operated by passionate PvM and PvP experienced staff, that do not play here, this recreation aims to perfect what we all loved about Ultima Online before its decline. A highly immersive game with seemingly limitless possibilities coupled with risk vs reward, this world is what the players make of it.  Offering an extensive crafting system with the best free shard economy, PvP mechanics with more templates than you'll have the time for and PvM with more challenge and data than ever before.
                                        <br><br>
                                        &nbsp; &nbsp; This is the shard to play on if you want to truly enjoy Ultima Online.
                                        <br><br>
                                        <img src="http://www.uorenaissance.com/images/HeaderBullet1.png" height="25" width="800" alt="Ultima Online Renaissance Separator">
                                        <!--<h1 class="uor"> &nbsp; &nbsp; Read the Compendium or browse our PvP and PvM Leaderboards for a taste of the information available. Think you can take the spot of #1 dragon slayer in the lands? Login and get started today!</h1>-->
                                    </td>
                                </tr>

                                <tr>
                                    <td class="banners">
                                        <table>
                                            <tbody><tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/the-great-spawning-rare-guide-players-edition.1983/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/forums_guide.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/coming-soon-to-uo-renaissance-future-patch-q-a.11947/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/PatchDiscuss.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/vlars-offical-list-of-memorable-irc-quotes.2241/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/forum_discussion.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hottopics">
                                                    <a href="http://uorforum.com/threads/the-great-spawning-rare-guide-players-edition.1983/" target="_blank">The Great Spawning Rare Guide</a><br>
                                                    &nbsp;&nbsp;by Rezon &amp; Gideon Jura							</td>
                                                <td class="hottopics">
                                                    <a href="http://uorforum.com/threads/coming-soon-to-uo-renaissance-future-patch-q-a.11947/" target="_blank">Coming Soon to UO:R - Future Patch Q&amp;A</a><br>
                                                    &nbsp;&nbsp;by Chris							</td>
                                                <td class="hottopics">
                                                    <a href="http://uorforum.com/threads/vlars-offical-list-of-memorable-irc-quotes.2241/" target="_blank">Offical List of Memorable IRC Quotes!</a><br>
                                                    &nbsp;&nbsp;by Vlar							</td>
                                            </tr>
                                            <tr>
                                                <td class="news" colspan="3">
                                                    <br>
                                                    <img src="http://www.uorenaissance.com/images/HeaderBullet2.png" height="25" width="800" alt="Ultima Online Renaissance Seperator">
                                                </td>
                                            </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="banners">
                                        <table>
                                            <tbody><tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/pirate-tamer-voyage-summer-ocean-event.41702/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/PirateEvent.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/pirate-tamer-voyage-summer-ocean-event.41702/" target="_blank">Pirate Tamer Voyage - Player Run Event</a>
                                                    <p class="newsbody">Thats right, Pirate tamers are out at sea all summer! <br>
                                                        Fishermen beware, these pirates take no prisoners. <br>
                                                        If you dont have what it takes to tangle with their tames, SAIL AWAY. <br>
                                                        For those who do fight, treasure awaits the victor in the enemies cargo hatch.<br>
                                                        <a href="http://uorforum.com/threads/pirate-tamer-voyage-summer-ocean-event.41702/">Event Post </a><br></p>
                                                    <h1 class="newsitemfooter">April / May 2019 by Keza</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href=" http://uorforum.com/threads/6th-anniversary-fishing-tournament.41313/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Fishing3.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href=" http://uorforum.com/threads/6th-anniversary-fishing-tournament.41313/" target="_blank">6th Anniversary Summer Fishing Tournament - Results</a>
                                                    <p class="newsbody">Congrats to the winners! <br>
                                                        <br>
                                                        Biggest Fish: <img src="http://uorenaissance.com/medals/1.png"> Sofa King    <img src="http://uorenaissance.com/medals/2.png"> Davos Seaworth   <img src="http://uorenaissance.com/medals/3.png"> Jack Sparrow <br>
                                                        <br>
                                                        Smallest Fish: <img src="http://uorenaissance.com/medals/1.png"> Intelligence <img src="http://uorenaissance.com/medals/2.png"> Fisher Calvin <img src="http://uorenaissance.com/medals/3.png"> Boop <br>
                                                        <br>
                                                        <a href="http://uorforum.com/threads/6th-anniversary-fishing-tournament.41313/">Event Post </a><br></p>
                                                    <h1 class="newsitemfooter">May 15th, 2019 by Zyler</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/pvp-tourny-1v1-saturday-may-18th-11pm-est-hosted-by-pvg.41927/" class="cssmouseover1"><img src="http://uorenaissance.com/images2/News/tourney1.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/pvp-tourny-1v1-saturday-may-18th-11pm-est-hosted-by-pvg.41927/" target="_blank">Saturday Night Fights by Majestic</a>
                                                    <p class="newsbody">Congrats to the winners of Saturday Night Fights!<br>
                                                        <img src="http://uorenaissance.com/medals/1.png"> <a href="http://www.uorenaissance.com/player/1242988">Harry Beavers</a>     <br>
                                                        <img src="http://uorenaissance.com/medals/2.png"> <a href="http://www.uorenaissance.com/player/1157474">Maria Brink</a>    <br>
                                                        <img src="http://uorenaissance.com/medals/3.png"> <a href="http://www.uorenaissance.com/player/410307">Goodfella</a>     <br>
                                                        <br>
                                                        Make sure to attend the next tournament on 5/18/2019!   <a href="http://uorforum.com/threads/pvp-tourny-1v1-saturday-may-18th-11pm-est-hosted-by-pvg.41927/">For details and times check here</a></p>
                                                    <h1 class="newsitemfooter">May 11th, 2019 by Majestic</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href=" http://uorforum.com/threads/6th-anniversary-fishing-tournament.41313/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Fishing3.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href=" http://uorforum.com/threads/6th-anniversary-fishing-tournament.41313/" target="_blank">6th Anniversary Summer Fishing Tournament</a>
                                                    <p class="newsbody">Test your fishing Prowess and Luck! <br>
                                                        Can you land the elusive 200 stone whopper? <br>
                                                        Or the shame of the smallest fish??<br>
                                                        Millions In Prizes! <br>
                                                        <a href="http://uorforum.com/threads/6th-anniversary-fishing-tournament.41313/">Event Post </a><br></p>
                                                    <h1 class="newsitemfooter">May 1st to May 6th, 2019 by Zyler</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-86-april-28th-easter-event-update-bugfixes-more.41498/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch86.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-86-april-28th-easter-event-update-bugfixes-more.41498/" target="_blank">Patch 86 - April 27th, 2019</a>
                                                    <p class="newsbody">- Easter Event Reward Store Update!<br>
                                                        - New 7th Edition Hues!<br>
                                                        - Short list of quality of life fixes!<br>
                                                        - Monster Loot Changes!<br>
                                                        - Additional protections for young players<br>
                                                        - Custom Region Updates!<br>
                                                        - <a href="http://uorforum.com/threads/patch-86-april-28th-easter-event-update-bugfixes-more.41498/">Patch 86 Details</a></p>
                                                    <h1 class="newsitemfooter">April 27th, 2019 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-april-2019.41277/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots5.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-april-2019.41277/" target="_blank">Top Shots Photography Contest - April 2019</a>
                                                    <p class="newsbody">Aprils Top Shots Contest is now open!<br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        Make sure to take part - <a href="http://uorforum.com/threads/top-shots-april-2019.41277/">April Top Shots Contest! </a><br></p>
                                                    <h1 class="newsitemfooter">April 1st to April 30th, 2019 by Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-march-2019.40664/unread" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots4.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-march-2019.40664/unread" target="_blank">Top Shots Photography Contest - March 2019</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Ron Jeremy <br>
                                                        2nd Place - Kiryana <br>
                                                        3rd Place - Pedigar <br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-april-2019.41277/">April Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">March 31st, 2019 by Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-february-2019.39936/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots3.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-february-2019.39936/" target="_blank">Top Shots Photography Contest - February 2019</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place -  Tiago <br>
                                                        2nd Place - Wylwrk <br>
                                                        3rd Place - Merliln8666<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-march-2019.40664/unread">March Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">Februart 28th, 2019 by Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-82-august-30th-6th-anniversary-event-lots-of-fixes.33595/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch85.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-82-august-30th-6th-anniversary-event-lots-of-fixes.33595/" target="_blank">Patch 85 - Feburary 10th, 2019</a>
                                                    <p class="newsbody">- Belated Christmas Store Update!<br>
                                                        - Massive Christmas Lotto Added! Over 60 Prizes!<br>
                                                        - Marble Isle Platinum Raffle!<br>
                                                        - New Item The Runebook Pen!<br>
                                                        - Small of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-85-february-10th-reward-store-updates-raffle-valentines-event.39964/">Patch 85 Details</a></p>
                                                    <h1 class="newsitemfooter">Feburary 10th, 2019 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-january-2019-closed.39243/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots2.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-january-2019-closed.39243/" target="_blank">Top Shots Photography Contest - January 2019</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Ron Jeremy  <br>
                                                        2nd Place - Karrelan <br>
                                                        3rd Place -  K1w1uk <br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-february-2019.39936/">February Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">January 31st, 2019 by Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-december-2018-closed.38700/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots1.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-december-2018-closed.38700/" target="_blank">Top Shots Photography Contest - December 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place Tie -  Khal Des<br>
                                                        1st Place Tie-  Hollywood <br>
                                                        1st Place Tie -  K1w1uk<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-january-2019-closed.39243/">December Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">December 31st, 2018 by Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-november-2018.37784/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots5.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-november-2018.37784/" target="_blank">Top Shots Photography Contest - November 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Evil Dead <br>
                                                        2nd Place - The Crooked Warden <br>
                                                        3rd Place - K1w1uk<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-september-2018.36451/">September Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">November 30th, 2018 by Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-october-2018.37332/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots4.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-october-2018.37332/" target="_blank">Top Shots Photography Contest - October 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Warren Buffet <br>
                                                        2nd Place - Jordan <br>
                                                        3rd Place - Blendax<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-september-2018.36451/">September Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">October 31st, 2018 by Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-84-october-23rd-happy-halloween-night-of-horrors-expansion.36954/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch84.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-84-october-23rd-happy-halloween-night-of-horrors-expansion.36954/" target="_blank">Patch 84 - October 23rd, 2019</a>
                                                    <p class="newsbody">- Happy Halloween, Night of Horrors Expansion!<br>
                                                        - 25 New Monsters!<br>
                                                        - 80 New Rare Item Drops!<br>
                                                        - New Rare Spawns!<br>
                                                        - Extremely Rare Dragon Dyes!<br>
                                                        - <a href="http://uorforum.com/threads/patch-84-october-23rd-happy-halloween-night-of-horrors-expansion.36954/">Patch 84 Details</a></p>
                                                    <h1 class="newsitemfooter">October 23rd, 2019 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-september-2018.36451/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots3.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-september-2018.36451/" target="_blank">Top Shots Photography Contest - September 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Earsnot <br>
                                                        2nd Place - Infnatry, Steely Dan <br>
                                                        3rd Place - Arnold Lutz<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-october-2018.37332/">October Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">September 30th, 2018 by Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-83-september-25th-minor-hotfix-for-faction-atrophy-critical-issues.36573/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch83.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-83-september-25th-minor-hotfix-for-faction-atrophy-critical-issues.36573/" target="_blank">Patch 83 - September 25th, 2018</a>
                                                    <p class="newsbody">- Faction Atrophy Fix!<br>
                                                        - Variety of quality of life fixes!<br>
                                                        - Bonded Pet stat loss update!<br>
                                                        - Small of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-83-september-25th-minor-hotfix-for-faction-atrophy-critical-issues.36573/">Patch 83 Details</a></p>
                                                    <h1 class="newsitemfooter">September 25th, 2018 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/happy-6th-anniversary-renaissance-global-event-starting-august-31st.34932/page-3#post-347132" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/6thAnniversary.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/happy-6th-anniversary-renaissance-global-event-starting-august-31st.34932/page-3#post-347132" target="_blank">Renaissance 6th Anniversary Results!</a>
                                                    <p class="newsbody">Congratulations to the Winners of the 6th Anniversary Scavenger Hunt!<br>
                                                        - 1st Place - Gideon Jura with 38 Points<br>
                                                        - 2nd Place - Dale Cooper with 20 Points<br>
                                                        - 3rd Place - A Drake / Iva Biggen with 19 Points<br>
                                                        - Over 100 Prizes were selected from the prize room by our players!<br>
                                                        Thanks for making our 6th anniversary event a huge success!<br></p>
                                                    <h1 class="newsitemfooter">September 4th, 2018 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-82-august-30th-6th-anniversary-event-lots-of-fixes.33595/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch82.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-82-august-30th-6th-anniversary-event-lots-of-fixes.33595/" target="_blank">Patch 82 - August 30th, 2018</a>
                                                    <p class="newsbody">- Happy 6th Anniversary Renaissance!<br>
                                                        - 2 New Anniversary Hues Released!<br>
                                                        - Faction Fixes!<br>
                                                        - Monster Loot Changes!<br>
                                                        - Small of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-82-august-30th-6th-anniversary-event-lots-of-fixes.33595/">Patch 82 Details</a></p>
                                                    <h1 class="newsitemfooter">August 30th, 2018 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/happy-6th-anniversary-renaissance-global-event-starting-august-31st.34932/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/6thAnniversary.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/happy-6th-anniversary-renaissance-global-event-starting-august-31st.34932/" target="_blank">Renaissance 6th Anniversary Celebration Event</a>
                                                    <p class="newsbody">Happy 6th Anniversary Renaissance!<br>
                                                        - Join us for a shard wide scavenger hunt running from August 31st to Sept 2nd!<br>
                                                        - Log in between August 31st and Sept 7th for a special gift bag!<br>
                                                        - Two new hues to be released for the event!<br>
                                                        - Over 100 prizes available in the prize room!<br>
                                                        For more information  <a href="http://uorforum.com/threads/happy-6th-anniversary-renaissance-global-event-starting-august-31st.34932/"> click here!</a> <br></p>
                                                    <h1 class="newsitemfooter">September 1st, 2018 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-august-2018.35444/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots2.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-august-2018.35444/" target="_blank">Top Shots Photography Contest - August 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Earsnot <br>
                                                        2nd Place - Infnatry, Steely Dan <br>
                                                        3rd Place - Arnold Lutz<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-september-2018.36451/">September Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">August 30th, 2018 by Treasureman</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-july-2018.34809/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots1.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-july-2018.34809/" target="_blank">Top Shots Photography Contest - July 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Merlin8666 <br>
                                                        2nd - Nymeria <br>
                                                        3rd - Ben S<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-august-2018.35444/">August Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">July 31st, 2018 by Treasureman</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-june-2018.34140/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots6.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-june-2018.34140/" target="_blank">Top Shots Photography Contest - June 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Mr. Green <br>
                                                        2nd - The Dank Nugget <br>
                                                        3rd - Eskeleto<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-july-2018.34809/">July Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">June 30th, 2018 by Peace / Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-may-2018.33390/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots5.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-may-2018.33390/" target="_blank">Top Shots Photography Contest - May 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Evil Dead / Jill Stihl <br>
                                                        2nd - Eskeleto <br>
                                                        3rd - Mr Green / Paddy O Brien<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-june-2018.34140/">June Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">May 31st, 2018 by Peace / Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-april-2018.32412/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots4.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-april-2018.32412/" target="_blank">Top Shots Photography Contest - April 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Crunk Juice  <br>
                                                        2nd - con con con con <br>
                                                        3rd - LanDarr<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-may-2018.33390/">May Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">April 30th, 2018 by Peace / Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-81-april-1st-easter-st-patricks-event-updated.31708/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch81.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-81-april-1st-easter-st-patricks-event-updated.31708/" target="_blank">Patch 81 - April 1st 2018</a>
                                                    <p class="newsbody">- Happy Easter / St Patricks Day!<br>
                                                        - All new St Patricks Event!<br>
                                                        - Random instanced dungeons!<br>
                                                        - Small of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-81-april-1st-easter-st-patricks-event-updated.31708/">Patch 81 Details</a></p>
                                                    <h1 class="newsitemfooter">April 1st, 2018 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-march-2018.31594/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots3.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-march-2018.31594/" target="_blank">Top Shots Photography Contest - March 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - K1w1uk <br>
                                                        2nd - Evil Dead <br>
                                                        3rd - Holden<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-april-2018.32412/">April Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">March 31st, 2018 by Peace / Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-80-march-3rd-archery-updates-tons-of-fixes.29804/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch80.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-80-march-3rd-archery-updates-tons-of-fixes.29804/" target="_blank">Patch 80 - March 3rd 2018</a>
                                                    <p class="newsbody">- Archery Updates!<br>
                                                        - Character Transfers are back!<br>
                                                        - Copper System rollout!<br>
                                                        - Small of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-80-march-3rd-archery-updates-tons-of-fixes.29804/">Patch 80 Details</a></p>
                                                    <h1 class="newsitemfooter">March 3rd, 2018 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-february-2018.30947/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots2.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-february-2018.30947/" target="_blank">Top Shots Photography Contest - February 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Erlkonig <br>
                                                        2nd - El Horno <br>
                                                        3rd - Witchcraft<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-march-2018.31594/">March Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">February 28th, 2018 by Peace / Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-january-2018.29932/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots1.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-january-2018.29932/" target="_blank">Top Shots Photography Contest - January 2018</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Wylwrk <br>
                                                        2nd - Pax Romain <br>
                                                        3rd - Shad<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-february-2018.30947/">February Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">Janurary 31st, 2018 by Peace / Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/december-2017-top-shots.29194/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots6.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/december-2017-top-shots.29194/" target="_blank">Top Shots Photography Contest - December 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Lord Krake <br>
                                                        2nd - The Dark One <br>
                                                        3rd - Buga<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-january-2018.29932/">January Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">December 31st, 2017 by Peace / Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-79-december-19th-christmas-updates-moongate-update-more.29624/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch79.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-79-december-19th-christmas-updates-moongate-update-more.29624/" target="_blank">Patch 79 - December 19th 2017</a>
                                                    <p class="newsbody">- Massive Christmas Event Updates!<br>
                                                        - 2 New Christmas Dungeons, The White Witch Lair, and The Lair of Krampus!<br>
                                                        - New Rare Items!<br>
                                                        - Updated Christmas Store Items!<br>
                                                        - Public Moongate Quality of Life Update!<br>
                                                        - <a href="http://uorforum.com/threads/patch-79-december-19th-christmas-updates-moongate-update-more.29624/">Patch 79 Details</a></p>
                                                    <h1 class="newsitemfooter">December 19th, 2017 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-october-2017.27401/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots4.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-october-2017.27401/" target="_blank">Top Shots Photography Contest - October 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Hoominaga <br>
                                                        2nd - Witchcraft <br>
                                                        3rd - Soer<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/december-2017-top-shots.29194/">December Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">October 31st, 2017 by Peace / Landarr</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-78-october-20th-halloween-updated-minor-bugfixes.27649/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch78.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-78-october-20th-halloween-updated-minor-bugfixes.27649/" target="_blank">Patch 78 - October 20th 2017</a>
                                                    <p class="newsbody">- Happy Halloween!<br>
                                                        - Night of Horrors Event Updates!<br>
                                                        - Updated Halloween Rewards!<br>
                                                        - Ocllo Region Updates, Nujelm Land Rush!<br>
                                                        - <a href="http://uorforum.com/threads/patch-78-october-20th-halloween-updated-minor-bugfixes.27649/">Patch 78 Details</a></p>
                                                    <h1 class="newsitemfooter">October 20th, 2017 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-september-2017.26289/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots3.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-september-2017.26289/" target="_blank">Top Shots Photography Contest - September 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Crunk Juice <br>
                                                        2nd - Duke Cannon / LanDarr <br>
                                                        3rd - Zyler<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-october-2017.27401/">October Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">September 30th, 2017 by LanDarr /Peace</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-77-september-12th-guard-functionality-hotfix-ocllo-vesper-town-regions.26879/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch77.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-77-september-12th-guard-functionality-hotfix-ocllo-vesper-town-regions.26879/" target="_blank">Patch 77 - September 12th 2017</a>
                                                    <p class="newsbody">- Guard Functionality Fix!<br>
                                                        - Ocllo / Vesper / Nujelm Region Changes!<br>
                                                        - Home Security Fixes!<br>
                                                        - Small of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-77-september-12th-guard-functionality-hotfix-ocllo-vesper-town-regions.26879/">Patch 77 Details</a></p>
                                                    <h1 class="newsitemfooter">September 12th, 2017 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/happy-5th-anniversary-renaissance.25623/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/5thAnniversary.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/happy-5th-anniversary-renaissance.25623/" target="_blank">Renaissance 5th Anniversary Celebration Event</a>
                                                    <p class="newsbody">Happy 5th Anniversary Renaissance!<br>
                                                        - Join us for a shard wide scavenger hunt running from Sept 1st to Sept 4th!<br>
                                                        - Log in between Sept 1st and Sept 7th for a special gift bag!<br>
                                                        - Two new hues to be released for the event!<br>
                                                        - Over 100 prizes available in the prize room!<br>
                                                        For more information  <a href="http://uorforum.com/threads/happy-5th-anniversary-renaissance.25623/"> click here!</a> <br></p>
                                                    <h1 class="newsitemfooter">September 1st, 2017 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-august-2017.25611/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots2.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-august-2017.25611/" target="_blank">Top Shots Photography Contest - August 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - The Crooked Warden <br>
                                                        2nd - Mr Green <br>
                                                        3rd - Erlkonig<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-september-2017.26289/">September Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">August 31st, 2017 by LanDarr /Peace</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-76-august-31st-happy-5th-anniversary-dragon-den-opens.26167/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch76.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-76-august-31st-happy-5th-anniversary-dragon-den-opens.26167/" target="_blank">Patch 76 - August 31st 2017</a>
                                                    <p class="newsbody">- Dragons Den Treasure Map Dungeon Opens!<br>
                                                        - Massive staff tool improvement
                                                        - Qualify of life staff tools!<br>
                                                        - Small of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-76-august-31st-happy-5th-anniversary-dragon-den-opens.26167/">Patch 76 Details</a></p>
                                                    <h1 class="newsitemfooter">August 31st, 2017 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://www.uorenaissance.com/info/20170813_Event" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/event18.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://www.uorenaissance.com/info/20170813_Event" target="_blank">Magical Explosion in Moonglow - Town Invasion Event</a>
                                                    <p class="newsbody">-  <a href="https://www.youtube.com/watch?v=MOO9zWykrmk"> Video of the Town Invasion by Keza</a> <br>
                                                        -  <a href="http://uorforum.com/threads/happy-easter-worldwide-event-april-8th-to-april-23rd.22999/"> Event Forum Thread</a> <br>
                                                        -  <a href="http://uorforum.com/threads/about-the-town-invasion-last-night.25908/">Player Commentary by Scuba</a> <br><br><br></p>
                                                    <h1 class="newsitemfooter">August 13th, 2017 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-july-2017.24929/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots1.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-july-2017.24929/" target="_blank">Top Shots Photography Contest - July 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Rezon <br>
                                                        2nd - Scuba <br>
                                                        3rd - Kirby<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-august-2017.25611/">August Top Shots Contest! </a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">July 31st, 2017 by LanDarr /Peace</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-75-july-3rd-4th-of-july-rewards-guildstone-fix-more.23014/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch75.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-75-july-3rd-4th-of-july-rewards-guildstone-fix-more.23014/" target="_blank">Patch 75 - July 3rd 2017</a>
                                                    <p class="newsbody">- Happy 4th of July<br>
                                                        - Minor Combat Tweaks / Bugfixes!
                                                        - Home Security Fixes!<br>
                                                        - Small of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-75-july-3rd-4th-of-july-rewards-guildstone-fix-more.23014/">Patch 75 Details</a></p>
                                                    <h1 class="newsitemfooter">July 3rd, 2017 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-june-2017.24353/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots6.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-june-2017.24353/" target="_blank">Top Shots Photography Contest - June 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Landarr<br>
                                                        2nd Place - Kizama <br>
                                                        3rd Place - Evil Dead <br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-july-2017.24929/">July Top Shots Contest!</a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">June 30th, 2017 by LanDarr / Peace</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-may-2017.23594/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots5.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-may-2017.23594/" target="_blank">Top Shots Photography Contest - May 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Wylwrk<br>
                                                        2nd Place -  Lyta<br>
                                                        3rd Place -  LanDarr<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-june-2017.24353/">June Top Shots Contest!</a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">May 31st, 2017 by Cynic</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-april-2017.22982/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots4.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-april-2017.22982/" target="_blank">Top Shots Photography Contest - April 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - TBD<br>
                                                        2nd Place -  TBD<br>
                                                        3rd Place -  TBD<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-may-2017.23594/">May Top Shots Contest!</a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">April 30th, 2017 by Cynic</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-74-april-6th-easter-egg-hunt-bugfixes.21810/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch74.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-74-april-6th-easter-egg-hunt-bugfixes.21810/" target="_blank">Patch 74 - April 6th 2017</a>
                                                    <p class="newsbody">- 2017 Easter Egg Hunt!<br>
                                                        - For complete details and event times <a href="http://uorforum.com/threads/happy-easter-worldwide-event-april-8th-to-april-23rd.22999/"> click here</a> <br>
                                                        - Poison Spell Duel - Town Fix!<br>
                                                        - Small of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-74-april-6th-easter-egg-hunt-bugfixes.21810/">Patch 74 Details</a></p>
                                                    <h1 class="newsitemfooter">April 6th, 2017 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-march-2017.22229/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots2.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-march-2017.22229/" target="_blank">Top Shots Photography Contest - March 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - <br>
                                                        2nd Place -  <br>
                                                        3rd Place -  <br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-april-2017.22982/">April Top Shots Contest!</a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">March 31st, 2017 by Cynic</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-february-2017.21527/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots1.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-february-2017.21527/" target="_blank">Top Shots Photography Contest - February 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Ariadne <br>
                                                        2nd Place - Loxness<br>
                                                        3rd Place -  Kirby<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-march-2017.22229/">March Top Shots Contest!</a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">February 28th, 2017 by Cynic</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/patch-73-feburary-13th-valentines-event-combat-changes-more.19614/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/Patch73.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/patch-73-feburary-13th-valentines-event-combat-changes-more.19614/" target="_blank">Patch 73 - February 14th, 2017</a>
                                                    <p class="newsbody">- Valentines Event!<br>
                                                        - For complete details and event times <a href="http://uorforum.com/threads/cupid-returns-a-unique-holiday-event.15608/">check here!</a> <br>
                                                        - Combat Changes!<br>
                                                        - Massive performance updates!<br>
                                                        - List of misc bugfixes and performance improvements!<br>
                                                        - <a href="http://uorforum.com/threads/patch-73-feburary-13th-valentines-event-combat-changes-more.19614/">Patch 73 Details</a></p>
                                                    <h1 class="newsitemfooter">February 13th, 2017 by Chris</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-january-2017.20676/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots5.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-january-2017.20676/" target="_blank">Top Shots Photography Contest - January 2017</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - <br>
                                                        2nd Place -  <br>
                                                        3rd Place -  <br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-february-2017.21527/">February Top Shots Contest!</a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">January 31st, 2017 by Cynic</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="news">
                                                    <a href="http://uorforum.com/threads/top-shots-december-2016.20173/" class="cssmouseover1"><img src="http://www.uorenaissance.com/images2/News/topshots4.png" height="120" width="250" alt="Ultima Online Renaissance Forum Topic"></a>
                                                </td>
                                                <td class="newstext">
                                                    <a class="newsitemname" href="http://uorforum.com/threads/top-shots-december-2016.20173/" target="_blank">Top Shots Photography Contest - December 2016</a>
                                                    <p class="newsbody">Congrats to this months Top Shots contest winners!<br>
                                                        1st Place - Zyler<br>
                                                        2nd Place -  Rezon<br>
                                                        3rd Place -  LanDarr<br>
                                                        Make sure to take part in <a href="http://uorforum.com/threads/top-shots-january-2017.20676/">January Top Shots Contest!</a><br>
                                                        To collect your reward make sure to contact a staff member!</p>
                                                    <h1 class="newsitemfooter">December 31st, 2016 by Cynic</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sep" colspan="3">
                                                    <img src="http://www.uorenaissance.com/info/images/sep.gif" height="1" width="800" alt="Ultima Online Renaissance Separator">
                                                </td>
                                            </tr>

                                            </tbody></table>

                                    </td>
                                </tr>
                                </tbody></table>
                        </div></div>
                    <div class="fullfooter">
                    </div>
                </div>  <!--End Info Container-->
                <div id="footer">
                    <div class="fullheader">
                        <h1 class="itemname">UO:Renaissance Compendium</h1>
                    </div>
                    <div class="fullbody">
                        <div class="footertext">"When you do things right, people won't be sure that you've done anything at all."</div>
                        <div class="footerimage">
                            <a href="http://www.uorenaissance.com/info/">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_TheCompendium.png" title="The Ultima Online Renaissance Compendium" alt="The Ultima Online Renaissance Compendium">
                            </a>
                            <a href="http://www.uorenaissance.com/bestiary">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_Bestiary.png" title="The Ultima Online Renaissance Bestiary" alt="The Ultima Online Renaissance Bestiary">
                            </a>
                            <a href="http://www.uorenaissance.com/list/Housing/P">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_Housing.png" title="Ultima Online Renaissance Housing" alt="Ultima Online Renaissance Housing">
                            </a>
                            <a href="http://www.uorenaissance.com/list/Spells/M">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_Spells.png" title="Ultima Online Spells" alt="Ultima Online Spells">
                            </a>
                            <a href="http://www.uorenaissance.com/list/Skill/M">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_Skills.png" title="Ultima Online Skills" alt="Ultima Online Skills">
                            </a>
                        </div>
                        <div class="footerimage">
                            <a href="http://www.uorenaissance.com/list/BulkOrders/P">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_BulkOrders.png" title="The Ultima Online Renaissance Compendium" alt="The Ultima Online Renaissance Compendium">
                            </a>
                            <a href="http://www.uorenaissance.com/list/Achievements/P">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_Achievements.png" title="Ultima Online Renaissance Achievements" alt=" Ultima Online Renaissance Achievements">
                            </a>
                            <a href="http://www.uorenaissance.com/map/index.php?zoom=5&amp;lon=1494&amp;lat=2480&amp;coords=1323,1624">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_WorldMap.png" title="The Ultima Online Renaissance Interactive Map" alt="The Ultima Online Renaissance Interactive Map">
                            </a>
                            <a href="http://www.uorenaissance.com/items/">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_ItemDB.png" title="The Ultima Online Renaissance Item Database" alt="The Ultima Online Renaissance Item Database">
                            </a>
                            <a href="http://www.uorenaissance.com/list/GettingStarted/P">
                                <img class="footercatmouseover" src="http://www.uorenaissance.com/info/images/cats/Category_GettingStarted.png" title="Ultima Online Renaissance Getting Started" alt="Ultima Online Renaissance Getting Started">
                            </a>
                        </div>
                        <br>
                    </div>
                    <div class="bottomfullfooter">

                    </div>
                </div><!-- End Compendium Footer-->
            </td>
        </tr>


        </tbody></table></div></body></html>


