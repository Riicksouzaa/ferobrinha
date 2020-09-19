<?php
if(!defined('INITIALIZED'))
    exit;
?>
<!DOCTYPE HTML>
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
    <?php if ($_REQUEST['subtopic'] == "houses") {
        $ch = (isset($_REQUEST['town']) ? $towns_list[$_REQUEST['town']] : (isset($_REQUEST['show']) ? $_REQUEST['show'] : null));
    } ?>
    <title><?= $config['server']['serverName'] . (isset($_REQUEST['subtopic']) ? " - " . ucfirst($_REQUEST['subtopic']) : '') . (isset($_REQUEST['action']) ? " - " . ucfirst(strip_tags(htmlspecialchars(trim($_REQUEST['action'])))) : "") . (isset($ch) ? " - " . ucfirst(strip_tags(htmlspecialchars(trim($ch)))) : "") ?>
        - Free Multiplayer Online Role Playing Game</title>
    <meta name="author" content="Ricardo Souza - Codenome">
    <meta name="keywords" content="free online game, free multiplayer game, free online rpg, free mmorpg, mmorpg, mmog,
    online role playing game, online multiplayer game, internet game, online rpg, rpg">
    <!-- META TAGS OPENGRAPH-->
    <meta property="og:title"
          content="<?= $config['server']['serverName'] . (isset($_REQUEST['subtopic']) ? " - " . ucfirst($_REQUEST['subtopic']) : '') . (isset($_REQUEST['action']) ? " - " . ucfirst($_REQUEST['action'] = strip_tags(htmlspecialchars(trim($_REQUEST['action'])))) : "") . (isset($ch) ? " - " . ucfirst(strip_tags(htmlspecialchars(trim($ch)))) : "") ?>"/>
    <meta property="og:url"
          content="<?= strtolower($config['base_url'] . strip_tags(htmlspecialchars(trim($_SERVER['REQUEST_URI'])))); ?>"/>
    <meta property="og:type" content="<?php if ($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])) {
        echo 'profile';
    } else {
        echo 'website';
    } ?>"/>
    <meta property="og:description" content="I'm using the best Gesior for tibia ot servers."/>
    <meta property="og:image" content="<?php if ($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])) {
        echo strtolower($config['base_url'] . "player_portrait.php?name=" . strip_tags(htmlspecialchars(trim(urlencode($_REQUEST['name'])))));
    } else {
        echo strtolower($config['base_url'] . "layouts/tibiacom/images/global/header/" . Website::getWebsiteConfig()->getValue('background_image_name'));
    } ?>"/>
    <meta property="og:image:alt"
          content="<?php if ($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])) {
              echo "Player -> " . ucfirst(strip_tags(htmlspecialchars(trim($_REQUEST['name']))));
          } else {
              echo "background tibiano";
          } ?>"/>
    <meta property="og:image:width"
          content="<?php if ($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])) {
              echo '498';
          } else {
              echo '1600';
          } ?>"/>
    <meta property="og:image:height"
          content="<?php if ($_REQUEST['subtopic'] == "characters" && isset($_REQUEST['name'])) {
              echo '500';
          } else {
              echo '800';
          } ?>"/>
    <meta property="og:locale" content="pt_BR"/>
    <!-- ##FIM META TAGS OPENGRAPH-->

    <!-- META TAGS FACEBOOK-->
    <meta property="fb:app_id" content="<?= $config['social']['fbappid'] ?>"/>
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
    <?php if($_REQUEST['subtopic'] == "calendario"){?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            .InfoBarNumbers{
                top: 0 !important;
            }
            .InfoBarSmallElement {
                margin-left: 5px;
                position: relative;
                margin-top: -2px;
            }
        </style>
    <?php } ?>
    <link href="<?php echo $layout_name; ?>/css/ferobra.min.css<?php echo $css_version;?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $layout_name; ?>/css/iziModal.min.css<?php echo $css_version; ?>" rel="stylesheet"
          type="text/css">
    <link href="<?php echo $layout_name; ?>/css/Toast.min.css<?php echo $css_version; ?>" rel="stylesheet"
          type="text/css">
    <?php
    if ($_REQUEST['subtopic'] == "latestnews" || $_REQUEST['subtopic'] == "newsarchive")
//        echo '<link href="'.$layout_name.'/css/news.min.css'.$css_version.'" rel="stylesheet" type="text/css">';
        ?>
    <?php $subtopic = $_REQUEST['subtopic']; ?>
</head>

<body onbeforeunload="SaveMenu();"
      style="background-image:url(<?php echo $layout_name; ?>/images/global/header/<?= Website::getWebsiteConfig()->getValue('background_image_name') ?>);
          background-size: 100%;
          background-position: top center;
          background-repeat: no-repeat;
          "
      onunload="SaveMenu();"
      onload="SetFormFocus();"
      data-twttr-rendered="true">

<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<!--<script src="--><?php //echo $layout_name; ?><!--/js/jquery-ui.core.js--><?php //echo $css_version;?><!--" ></script>-->
<!--<script src="--><?php //echo $layout_name; ?><!--/js/jquery-ui.widgets.js--><?php //echo $css_version;?><!--" ></script>-->
<script src="<?php echo $layout_name; ?>/js/jquery-ui.min.js<?php echo $css_version;?>" ></script>
<script src="<?php echo $layout_name; ?>/js/jquery.mask.js<?php echo $css_version;?>"></script>
<script src="<?php echo $layout_name; ?>/js/ajaxcip.js<?php echo $css_version;?>"></script>
<?php if($subtopic == 'adminpanel'){?>
    <script src="<?php echo $layout_name; ?>/js/ajaxmonteiro.js<?php echo $css_version;?>"></script>
<?php } ?>
<script src="<?php echo $layout_name; ?>/js/iziModal.min.js<?php echo $css_version;?>"></script>
<!--Tiny Editor -->
<script type="text/javascript" src="./vendor/tinymce/tinymce/tinymce.min.js"></script>
<!--    <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vct6772xi5zrh195yd6scyhdke2ldwlubrpqq024580vr62v'></script>-->
<script src="<?php echo $layout_name; ?>/js/iziToast.min.js<?php echo $css_version;?>"></script>
<?php
if($_REQUEST['subtopic'] == "createaccount") echo '<script src="'.$layout_name.'/js/create_character.js'.$css_version.'"></script>';
?>
<script type="text/javascript">
    iziToast.settings({
        icon:'material-icons',
        titleSize:'10pt',
        titleColor:'#5A2800',
        messageSize:'10pt',
        messageColor:'#5A2800',
        backgroundColor:'#D4C0A1',
        progressBarColor:'rgba(90,40,0,.8)',
        // progressBarColor:'url(./layouts/tibiacom/images/global/content/table-headline-border.gif)',
        closeOnEscape: true,
        overlay:true,
        overlayClose: true,
    });
    tinymce.init({
        selector: "textarea",  // change this value according to your HTML
        plugins : [
            "autolink",
            "link",
            "image",
            "lists",
            "preview"
            // "textcolor"
        ],
        // toolbar: "undo redo | forecolor backcolor",
        a_plugin_option: false,
        skin: 'lightgray',
        themes: "modern",
        language: "pt_BR",
        a_configuration_option: 400
    });
</script>
<script>
    let loginStatus=0;
    loginStatus='<?php if($logged){ ?>true<?php } else { ?>false<?php } ?>';
    <?php if ($_REQUEST['subtopic'] == 'accountmanagement' && $_REQUEST['action'] == 'donate'){?>
    let activeSubmenuItem='donate';
    <?php }elseif($_REQUEST['subtopic'] == "accountmanagement" && $_REQUEST['action'] == 'buychar'){?>
    let activeSubmenuItem='buychar';
    <?php }elseif($_REQUEST['subtopic'] == "accountmanagement" && $_REQUEST['action'] == 'sellchar'){?>
    let activeSubmenuItem='sellchar';
    <?php }elseif($_REQUEST['subtopic'] == "events"){?>
    <?php $ev = new Events();?>
    <?php $kappa = $ev->getArrGroupNames();?>
    let activeSubmenuItem='<?php echo array_search($_REQUEST['name'],$kappa);?>';
    <?php }else{?>
    let activeSubmenuItem='<?php echo $subtopic; ?>';
    <?php }?>
    let JS_DIR_IMAGES=0;
    JS_DIR_IMAGES='<?php echo $layout_name; ?>/images/';
    let JS_DIR_ACCOUNT=0;
    JS_DIR_ACCOUNT='';
    let g_FormName='';
    let g_FormField='';
    let g_Deactivated=false;
    let g_FlashClientInPopUp= true;
</script>
<!--<script>
    if(top.location != window.location) {
        g_FlashClientInPopUp = false;
    }
</script>-->
<script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="<?php echo $layout_name; ?>/js/pace.min.js<?php echo $css_version;?>" data-pace-options='{ "startOnPageLoad": false, "ajax": false}'></script>
<script src="<?php echo $layout_name; ?>/js/generic.js<?php echo $css_version;?>"></script>
<script src="<?php echo $layout_name; ?>/js/initialize.js<?php echo $css_version;?>"></script>
<!--<script src="<?php echo $layout_name; ?>/js/swfobject.js<?php echo $css_version;?>" ></script>-->
<?php if($_REQUEST['subtopic'] == "accountmanagement") { ?>
    <script type="text/javascript">
        function openGameWindow(a_URL)
        {
            let Height = 768;
            let Width = 1024;
            let Top = (screen.height - Height) / 2;
            let Left = (screen.width - Width) / 2;
            let NewWindow = window.open(a_URL + '&window=2',
                "Tibia",
                "width=" + Width + ",height=" + Height + ",top=" + Top + ",left=" + Left + ",dependent=no,hotkeys=no,location=no,menubar=no,resizable=yes,scrollbars=no,status=no,toolbar=no"
            );
            if (NewWindow != null) {
                NewWindow.focus();
            }
        }
    </script>
<?php } ?>
<!--    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js--><?php //echo $css_version;?><!--"></script>-->
<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="se-pre-con"></div>
<div id="preloader"><div class="p"><p class="ml16">CODENOME</p></div></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <div id="DeactivationContainer" onclick="DisableDeactivationContainer();"></div>
    <div id="MainHelper1">
        <div id="MainHelper2">
            <div id="Bodycontainer">
                <div id="ContentRow">
                    <div id="MenuColumn">
                        <div id="LeftArtwork">
                            <a href="./?subtopic=latestnews">
                                <img id="TibiaLogoArtworkTop"
                                     src="<?php echo $layout_name; ?>/images/global/header/<?=Website::getWebsiteConfig()->getValue('websitelogo')?>"
                                     alt="<?php echo $config['server']['serverName']?>"
                                     name="<?php echo $config['server']['serverName']?>"
                                >
                            </a>
                        </div>

                        <div id="Loginbox">
                            <div id="LoginTop" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/box-top.gif)"></div>
                            <div id="BorderLeft" class="LoginBorder" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif)"></div>
                            <div id="LoginButtonContainer" style="background-image:url(<?php echo $layout_name; ?>/images/global/loginbox/loginbox-textfield-background.gif)">
                                <div id="PlayNowContainer"><form class="MediumButtonForm" action="?subtopic=accountmanagement" method="post"><input type="hidden" name="page" value="overview"><div class="MediumButtonBackground" style="background-image:url(<?php echo $layout_name; ?>/images/global/buttons/mediumbutton.gif)" onmouseover="MouseOverMediumButton(this);" onmouseout="MouseOutMediumButton(this);"><div class="MediumButtonOver" style="background-image:url(<?php echo $layout_name; ?>/images/global/buttons/mediumbutton-over.gif)" onmouseover="MouseOverMediumButton(this);" onmouseout="MouseOutMediumButton(this);"></div><input class="MediumButtonText" type="image" name="Play Now" alt="Play Now" src="<?php echo $layout_name; ?>/images/global/buttons/mediumbutton_playnow.png"></div></form>
                                </div>
                            </div>
                            <div class="Loginstatus" style="background-image:url(<?php echo $layout_name; ?>/images/global/loginbox/loginbox-textfield-background.gif)">
                                <div id="LoginstatusText"
                                     onclick="LoginstatusTextAction(this);"
                                     onmouseover="MouseOverLoginBoxText(this);"
                                     onmouseout="MouseOutLoginBoxText(this);">
                                    <div id="LoginstatusText_1"
                                         class="LoginstatusText"
                                         style="background-image: url(<?php echo $layout_name; ?>/images/global/loginbox/loginbox-font-create-account.gif);">
                                    </div>
                                    <div id="LoginstatusText_2"
                                         class="LoginstatusText"
                                         style="background-image: url(<?php echo $layout_name; ?>/images/global/loginbox/loginbox-font-create-account-over.gif);">
                                    </div>
                                </div>
                            </div>
                            <div id="BorderRight" class="LoginBorder" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif)"></div>
                            <div id="LoginBottom" class="Loginstatus" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/box-bottom.gif)"></div>
                        </div>

                        <div class="SmallMenuBox" style="top: 4px;" >
                            <div id="LoginTop" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/box-top.gif)" ></div>
                            <div id="BorderLeft" class="LoginBorder" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif); height: 39px;" ></div>
                            <div id="LoginButtonContainer" style="background-image:url(<?php echo $layout_name; ?>/images/global/loginbox/loginbox-textfield-background.gif)" >
                                <div id="PlayNowContainer" ><form class="MediumButtonForm" action="?subtopic=downloadclient&step=downloadagreement" method="post" ><div class="MediumButtonBackground" style="background-image:url(<?php echo $layout_name; ?>/images/global/buttons/mediumbutton.gif)" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);" ><div class="MediumButtonOver" style="background-image:url(<?php echo $layout_name; ?>/images/global/buttons/mediumbutton-over.gif)" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);" ></div><input class="MediumButtonText" type="image" name="Download" alt="Download" src="<?php echo $layout_name; ?>/images/global/buttons/mediumbutton_download.png" /></div></form></div>
                            </div>
                            <div id="BorderRight" class="LoginBorder" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif); height: 39px;" ></div>
                            <div id="LoginBottom" class="Loginstatus" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/box-bottom.gif); top: 39px;" ></div>
                        </div>

                        <?php include_once "menu/menu.php";?>

                        <script>InitializePage();</script>
                    </div>
                    <div id="ContentColumn">
                        <div id="Content" class="Content">
                            <div id="ContentHelper">
                                <div id="preload">
                                    <?php

                                    if ( ! session_id() ) @ session_start();

                                    $last = null;
                                    if (!isset($_SESSION)) {
                                        $_SESSION = [];
                                    }

                                    if (isset($_SESSION['server_status_last_check'])) {
                                        $last = $_SESSION['server_status_last_check'];
                                    }
                                    if ($last == null || time() > $last + 30) {
                                        $_SESSION['server_status_last_check'] = time();
                                        $_SESSION['server_status'] = $config['status']['serverStatus_online'];
                                    }

                                    $infobar = Website::getWebsiteConfig()->getValue('info_bar_active');

                                    if($_SESSION['server_status'] == 1){
                                        $qtd_players_online = $SQL->prepare("SELECT count(*) as total from `players_online`");
                                        $qtd_players_online->execute([]);
                                        $qtd_players_online = $qtd_players_online->fetch();
                                        if($qtd_players_online["total"] == "1"){
                                            $players_online = ($infobar ? $qtd_players_online["total"].' Player Online' : $qtd_players_online["total"].'<br/>Player Online');
                                        }else{
                                            $players_online = ($infobar ? $qtd_players_online["total"].' Players Online' : $qtd_players_online["total"].'<br/>Players Online');
                                        }
                                    }
                                    else{
                                        $players_online = ($infobar ? 'Server Offline' : 'Server<br/>Offline');
                                    }
                                    ?>
                                    <?php if(Website::getWebsiteConfig()->getValue('info_bar_active')){?>
                                    <div id="PlayersOnline" class="Box">
                                        <div class="Corner-tl" style="background-image:url(layouts/tibiacom/images/global/content/corner-tl.gif);"></div>
                                        <div class="Corner-tr" style="background-image:url(layouts/tibiacom/images/global/content/corner-tr.gif);"></div>
                                        <div class="Border_1" style="background-image:url(layouts/tibiacom/images/global/content/border-1.gif);"></div>
                                        <div class="BorderTitleText" style="background-image:url(layouts/tibiacom/images/global/content/newsheadline_background.gif); height: 28px;">
                                            <div class="InfoBar">
                                                <?php if(Website::getWebsiteConfig()->getValue('info_bar_cast')){?>
                                                    <?php
                                                    $playersCast = $SQL->prepare("SELECT count(*) as `players_cast`, sum(`spectators`) as `spectators` FROM `live_casts`");
                                                    $playersCast->execute([]);
                                                    $playersCast = $playersCast->fetchAll();
                                                    ?>
                                                    <a class="InfoBarBlock" href="./?subtopic=castsystem">
                                                        <img class="InfoBarBigLogo" src="layouts/tibiacom/images/global/header/info/icon-cast.png">
                                                        <span class="InfoBarNumbers" <?php if($_REQUEST['subtopic'] == 'characters' && $_REQUEST['name']){ echo "style='top:0'"; }?>><img class="InfoBarSmallElement" src="layouts/tibiacom/images/global/header/info/icon-streamers.png">
                                                            <span class="InfoBarSmallElement"><?= (isset($playersCast['players_cast']) == null ? 0 : $playersCast['players_cast'])  ?></span><img class="InfoBarSmallElement" src="layouts/tibiacom/images/global/header/info/icon-viewers.png">
                                                            <span class="InfoBarSmallElement"><?= (isset($playersCast['spectators']) == 0 ? 0 : $playersCast['spectators']) ?></span>
                                                        </span>
                                                    </a>
                                                <?php }?>
                                                <?php if(Website::getWebsiteConfig()->getValue('info_bar_twitch')){?>
                                                <a class="InfoBarBlock" href="https://www.twitch.tv/directory/game/Tibia" target="_blank">
                                                    <img class="InfoBarBigLogo" src="layouts/tibiacom/images/global/header/info/icon-twitch.png">
                                                    <span class="InfoBarNumbers" <?php if($_REQUEST['subtopic'] == 'characters' && $_REQUEST['name']){ echo "style='top:0'"; }?>><img class="InfoBarSmallElement" src="layouts/tibiacom/images/global/header/info/icon-streamers.png">
                                                        <span class="InfoBarSmallElement"><?= $twitch_a?></span><img class="InfoBarSmallElement" src="layouts/tibiacom/images/global/header/info/icon-viewers.png">
                                                        <span class="InfoBarSmallElement"><?= $twitch_c?></span>
                                                    </span>
                                                </a>
                                                <?php }?>
                                                <?php if(Website::getWebsiteConfig()->getValue('info_bar_youtube')){?>
                                                <a class="InfoBarBlock" href="https://gaming.youtube.com/game/UCccW6i67_MlXxwqBMh0emYA" target="_blank">
                                                    <img class="InfoBarBigLogo" src="layouts/tibiacom/images/global/header/info/icon-youtube.png">
                                                    <span class="InfoBarNumbers" <?php if($_REQUEST['subtopic'] == 'characters' && $_REQUEST['name']){ echo "style='top:0'"; }?>>
                                                        <img class="InfoBarSmallElement" src="layouts/tibiacom/images/global/header/info/icon-streamers.png">
                                                        <span class="InfoBarSmallElement">0</span>
                                                        <img class="InfoBarSmallElement" src="layouts/tibiacom/images/global/header/info/icon-viewers.png">
                                                        <span class="InfoBarSmallElement">0</span>
                                                    </span>
                                                </a>
                                                <?php }?>
                                                <?php if(Website::getWebsiteConfig()->getValue('info_bar_forum')){?>
                                                <a href="http://forum.tibia.com/forum/?action=announcement&amp;announcementid=87&amp;boardid=89516">
                                                    <img class="InfoBarBigLogo" src="layouts/tibiacom/images/global/header/info/icon-download.png">
                                                    <span class="InfoBarNumbers" <?php if($_REQUEST['subtopic'] == 'characters' && $_REQUEST['name']){ echo "style='top:0'"; }?>>
                                                        <span class="InfoBarSmallElement">Fankit</span>
                                                    </span>
                                                </a>
                                                <?php }?>
                                                <?php if(Website::getWebsiteConfig()->getValue('info_bar_online')){?>
                                                <a  style="float: right; min-width: 107px" href="<?php echo $config['base_url']?>?subtopic=worlds">
                                                    <img class="InfoBarBigLogo" src="layouts/tibiacom/images/global/header/info/icon-players-online.png">
                                                    <span class="InfoBarNumbers" <?php if($_REQUEST['subtopic'] == 'characters' && $_REQUEST['name']){ echo "style='top:0'"; }?>>
                                                        <span class="InfoBarSmallElement show_online_data"><?php echo $players_online; ?></span>
                                                        <?php if(Website::getWebsiteConfig()->getValue('info_bar_online_botton_table')){?>
                                                            <?php $maxPlayers = ($config['server']['maxPlayers'] == 0 ? 500 : $config['server']['maxPlayers']);?>
                                                            <?php $qtdOnline = ($qtd_players_online["total"] == null ? 0 : $qtd_players_online["total"]);?>
                                                            <?php $serverStatus = $_SESSION['server_status'];?>
                                                            <table class="InfoBarSmallElement" style="margin-left: 18px;background-color: black;width: 85%;" cellspacing="2">
                                                                <tbody>
                                                                <tr>
                                                                    <td style="background: <?php if($serverStatus != 1 ){echo 'red';} elseif($qtdOnline >= $maxPlayers){ echo 'red';} elseif($qtdOnline >= $maxPlayers/6*1){ echo 'green';} else { echo 'black'; }?>;padding: 1px; border: 1px solid #ffffff;"></td>
                                                                    <td style="background: <?php if($serverStatus != 1 ){echo 'red';} elseif($qtdOnline >= $maxPlayers){ echo 'red';} elseif($qtdOnline >= $maxPlayers/6*2){ echo 'green';} else { echo 'black'; }?>;padding: 1px; border: 1px solid #ffffff;"></td>
                                                                    <td style="background: <?php if($serverStatus != 1 ){echo 'red';} elseif($qtdOnline >= $maxPlayers){ echo 'red';} elseif($qtdOnline >= $maxPlayers/6*3){ echo 'green';} else { echo 'black'; }?>;padding: 1px; border: 1px solid #ffffff;"></td>
                                                                    <td style="background: <?php if($serverStatus != 1 ){echo 'red';} elseif($qtdOnline >= $maxPlayers){ echo 'red';} elseif($qtdOnline >= $maxPlayers/6*4){ echo 'green';} else { echo 'black'; }?>;padding: 1px; border: 1px solid #ffffff;"></td>
                                                                    <td style="background: <?php if($serverStatus != 1 ){echo 'red';} elseif($qtdOnline >= $maxPlayers){ echo 'red';} elseif($qtdOnline >= $maxPlayers/6*5){ echo 'green';} else { echo 'black'; }?>;padding: 1px; border: 1px solid #ffffff;"></td>
                                                                    <td style="background: <?php if($serverStatus != 1 ){echo 'red';} elseif($qtdOnline >= $maxPlayers){ echo 'red';} elseif($qtdOnline >= $maxPlayers/6*6){ echo 'green';} else { echo 'black'; }?>;padding: 1px; border: 1px solid #ffffff;"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        <?php } ?>
                                                    </span>
                                                </a>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="Border_1" style="background-image:url(layouts/tibiacom/images/global/content/border-1.gif);"></div>
                                        <div class="CornerWrapper-b">
                                            <div class="Corner-bl" style="background-image:url(layouts/tibiacom/images/global/content/corner-bl.gif);"></div>
                                        </div>
                                        <div class="CornerWrapper-b">
                                            <div class="Corner-br" style="background-image:url(layouts/tibiacom/images/global/content/corner-br.gif);"></div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <script type="text/javascript" src="<?php echo $layout_name; ?>/js/newsticker.js<?php echo $css_version ?>"></script>
                                    <?php echo $news_content; ?>
                                    <div id="NewsArchive" class="Box">
                                        <div class="Corner-tl" style="background-image:url(<?php echo $layout_name; ?>/images/global/content/corner-tl.gif);"></div>
                                        <div class="Corner-tr" style="background-image:url(<?php echo $layout_name; ?>/images/global/content/corner-tr.gif);"></div>
                                        <div class="Border_1" style="background-image:url(<?php echo $layout_name; ?>/images/global/content/border-1.gif);"></div>
                                        <div class="BorderTitleText" style="background-image:url(<?php echo $layout_name; ?>/images/global/content/title-background-green.gif);"></div>
                                        <?php
                                        $headline = ucfirst($_REQUEST['subtopic']);
                                        if($_REQUEST['subtopic'] == "latestnews")
                                            $headline = "News";
                                        elseif($_REQUEST['subtopic'] == "accountmanagement"){
                                            $headline = "Account Management";
                                            if($_REQUEST['action'] == "buychar")
                                                $headline = "Buy Char";
                                            if($_REQUEST['action'] == "sellchar")
                                                $headline = "Sell Char";
                                        }
                                        elseif($_REQUEST['subtopic'] == "createaccount")
                                            $headline = "Create Account";
                                        elseif($_REQUEST['subtopic'] == "whoisonline")
                                            $headline = "Who is Online";
                                        elseif($_REQUEST['subtopic'] == "adminpanel")
                                            $headline = "Admin Panel";
                                        elseif($_REQUEST['subtopic'] == "tankyou")
                                            $headline = "Thank You";
                                        ?>
                                        <div class="ContentBoxHeadline header-text"><?PHP echo ucwords(str_replace('_', ' ', strtolower($headline))); ?></div>
                                        <div class="Border_2">
                                            <div class="Border_3">
                                                <div class="BoxContent" style="background-image:url(<?php echo $layout_name; ?>/images/global/content/scroll.gif);">
                                                    <?php echo $main_content; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Border_1" style="background-image:url(<?php echo $layout_name; ?>/images/global/content/border-1.gif);"></div>
                                        <div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url(<?php echo $layout_name; ?>/images/global/content/corner-bl.gif);"></div></div>
                                        <div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(<?php echo $layout_name; ?>/images/global/content/corner-br.gif);"></div></div>
                                    </div>
                                </div>
                                <div id="ThemeboxesColumn">
                                    <div id="DeactivationContainerThemebox" onclick="DisableDeactivationContainer();"></div>
                                    <?php if(Website::getWebsiteConfig()->getValue('info_bar_active')){?>
                                    <div id="RightArtwork">
                                        <img id="Monster" src="<?php echo $layout_name; ?>/images/global/header/monsters/dragonlord.gif" alt="Monster of the Week">
                                        <img id="Pedestal" src="<?php echo $layout_name; ?>/images/global/header/pedestal.png" alt="Monster Pedestal">
                                        <!--<div id="PlayersOnline" onclick="window.location = '?subtopic=worlds';"><?php echo $players_online; ?></div>-->
                                    </div>
                                    <?php } else {?>
                                        <div id="RightArtwork">
                                            <img id="MonsterAndOnline" src="<?php echo $layout_name; ?>/images/global/header/monsters/dragonlord.gif" alt="Monster of the Week">
                                            <img id="PedestalAndOnline" style="" src="<?php echo $layout_name; ?>/images/global/header/pedestal-and-online.gif" alt="Monster Pedestal and Online">
                                            <div id="PlayersOnline" onclick="window.location = '?subtopic=worlds';"><?php echo $players_online; ?></div>
                                        </div>
                                    <?php }?>
                                    <div id="Themeboxes">
                                        <?php include_once "widgets/widgets.php"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Footer">
                        <!--<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>-->
                        Copyright by <a href="https://www.cipsoft.com" target="_new"><b>CipSoft GmbH</b></a>. All rights reserveds<br>
                        <b>Edited by.: <a class="codenome-font"  href="https://codenome.com">Code nome</a></b><br>
                        <a href=?subtopic=forum><b>Game Forum</b></a> | <a href=<?php echo $config['social']['facebook']; ?>><b>Facebook</b></a> | <a href=?subtopic=team><b>Support Game</b></a><br>
                    </div>
                </div>
            </div>
            <div id="HelperDivContainer" style="background-image: url(<?php echo $layout_name; ?>/images/global/content/scroll.gif);">
                <div class="HelperDivArrow" style="background-image: url(<?php echo $layout_name; ?>/images/global/content/helper-div-arrow.png);"></div>
                <div id="HelperDivHeadline"></div>
                <div id="HelperDivText"></div>
                <center><img class="Ornament" src="<?php echo $layout_name; ?>/images/global/content/ornament.gif"></center><br>
            </div>
        </div>
    </div>

    <script>
        // disable all control elements which are not part of the content container element
        if (g_Deactivated === true) {
            $(document).ready(function() {
                document.getElementById('Monster').setAttribute('onclick', '');
                document.getElementById('PlayersOnline').setAttribute('onclick', '');
                document.getElementById('DeactivationContainer').setAttribute('onclick', '');
                document.getElementById('LoginButtonContainer').style.zIndex = '1';
                document.getElementById('DeactivationContainer').style.display = 'block';
                document.getElementById('DeactivationContainer').style.zIndex = '50';
                document.getElementById('DeactivationContainerThemebox').style.display = 'block';
                document.getElementById('Monster').style.cursor = 'auto';
                document.getElementById('PlayersOnline').style.cursor = 'auto';
                document.getElementById('ThemeboxesColumn').style.opacity = '0.30';
                document.getElementById('ThemeboxesColumn').style.MozOpacity = '0.30';
                // document.getElementById('ThemeboxesColumn').filters.alpha.opacity = '0.75';
                document.getElementById('ThemeboxesColumn').style.filter = 'alpha(opacity=50); opacity: 0.30';
            });
        }
    </script>
    <script>
        $(document).ready(function(){

            //Check to see if the window is top if not then display button
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('.scrollToTop').fadeIn();
                } else {
                    $('.scrollToTop').fadeOut();
                }
            });

            //Click event to scroll to top
            $('.scrollToTop').click(function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });

        });
    </script>
    <div class="scrollToTop"><!--<p class="scrollToTopText">BACK</p>--></div>
    <script>
        $(document).ready(function () {
            setInterval(function () {
                $.getJSON("./?subtopic=get_online_data", function (data) {
                    $("span.show_online_data").text(data).fadeIn('fast');
                });
            }, 10000);
        });
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            let js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&autoLogAppEvents=1&version=v2.12&appId=1722335358003085';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php if ($config['base_url'] !== Website::getWebsiteConfig()->getValue('testurl')){?>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-7578487823587656",
                enable_page_level_ads: true
            });
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110963342-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-110963342-1');
        </script>
    <?php } ?>
    <!-- float facebook like box start -->
    <script id="float_fb" src="<?=$layout_name?>/js/fb_float_plugin.js<?php echo $css_version;?>" data-href="<?=$config['social']['facebook']?>" async></script>
    <script id="float_discord" src="<?=$layout_name?>/js/discord_float_plugin.js<?php echo $css_version;?>" data-id="<?=Website::getWebsiteConfig()->getValue('discord_widget_id');?>&theme=dark" async></script>
    <!-- float facebook like box end -->
    <script src="<?php echo $layout_name; ?>/js/ouibounce.min.js<?php echo $css_version;?>"></script>
    <script src="<?php echo $layout_name; ?>/js/stream-online.js<?php echo $css_version;?>"></script>
    <script src="<?php echo $layout_name; ?>/js/picpayPaymentTracker.js<?php echo $css_version;?>"></script>

    <?php if($_REQUEST['subtopic']=='accountmanagement' && $_REQUEST['action']=='affiliates'){?>
        <script src="<?php echo $layout_name; ?>/js/affiliates.js<?php echo $css_version;?>"></script>
    <?php } ?>
    <script>let blockAdBlock = false</script>
    <script src="<?php echo $layout_name; ?>/js/bl.js<?php echo $css_version;?>"></script>

    <script>
    blockAdBlock = new BlockAdBlock({
        checkOnLoad: true,
        resetOnEnd: true
    });
    function adBlockNotDetected() {
        //do nothing
    }

    function adBlockDetected() {
        let adblock = ouibounce(false,{
            cookieName: 'UsingAdBlock',
            delay: 900,
            timer: 20 * 1000,
            callback: function () {
                iziToast.show({
                    title: "OPSSS!",
                    message: "Opa, verifiquei aqui que você está utilizando <b>adblock</b>. Considere desativar o mesmo pois assim estará nos ajudando a trazer mais conteúdo de qualidade para comunidade tibiana.",
                    timeout: 0,
                    position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
                });
            }
        });
        adblock.fire({timer: 20 * 1000});
        adblock.disable({cookieExpire: 1});
    }

    // Recommended audit because AdBlock lock the file 'blockadblock.js'
    // If the file is not called, the variable does not exist 'blockAdBlock'
    // This means that AdBlock is present
    if(typeof blockAdBlock === 'undefined') {
        adBlockDetected();
    } else {
        blockAdBlock.on(true, adBlockDetected).onNotDetected(adBlockNotDetected);
        blockAdBlock.setOption({
            checkOnLoad: true
        });
    }
    </script>
<?php if(Website::getWebsiteConfig()->getValue('ouibounce_isActive')){?>
    <?php if($_REQUEST['subtopic'] == "latestnews" || !isset($_REQUEST['subtopic'])){?>
    <script src="<?php echo $layout_name; ?>/js/ouibounce.min.js<?php echo $css_version;?>"></script>
    <script>
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return undefined;
        }
        if(getCookie("codenomeLoader") === undefined){

            let paceBounce = ouibounce(false,
                {
                    cookieName:"codenomeLoader",
                    cookieExpire:1,
                    sitewide:false,
                    aggressive: true,
                    callback:function (){
                        Pace.paceOptions = {
                            ajax: true,
                            document: true,
                            initialRate:1,
                            catchupTime : 10000,
                            minTime:1000,
                            maxProgressPerFrame:1,
                            ghostTime: Number.MAX_SAFE_INTEGER,
                            checkInterval :{
                                checkInterval: 10000
                            },
                            eventLag : {
                                minSamples: 10,
                                sampleCount: 300000000,
                                lagThreshold: 1
                            }
                        };
                        $("#preloader").show()
                        $(".p").show()

                        var textWrapper = document.querySelector('.ml16');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        anime.timeline({loop: false})
                            .add({
                                targets: '.ml16 .letter',
                                translateY: [-100,0],
                                easing: "easeOutExpo",
                                duration: 1400,
                                delay: (el, i) => 30 * i
                            }).add({
                            targets: '.ml16',
                            opacity: .8,
                            duration: 500,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                        Pace.start()
                        Pace.on('done', function() {
                            anime.timeline({loop: false})
                                .add({
                                    targets: '.ml16 .letter',
                                    translateY: [0,-100],
                                    easing: "easeOutExpo",
                                    duration: 600,
                                    delay: (el, i) => 30 * i
                                }).add({
                                targets: '.ml16',
                                opacity: 0,
                                duration: 100,
                                easing: "easeOutExpo",
                                delay: 1000
                            });
                            $('#MainHelper1').delay(0).animate({top: '100%'}, 0, $.bez([0.19,1,0.22,1]));
                            $('.p').delay(500).animate({top: '30%', opacity: '0'}, 3000, $.bez([0.19,1,0.22,1]));
                            $('#preloader').delay(500).animate({top: '-100%'}, 2000, $.bez([0.19,1,0.22,1]));
                            $('#MainHelper1').delay(0).animate({top: '0'}, 2000, $.bez([0.19,1,0.22,1]));
                        });
                    }
                });
            paceBounce.fire();
            paceBounce.disable();
        }
    </script>
<?php }?>
<?php if($_REQUEST['subtopic'] != "accountmanagement" && $_REQUEST['action'] != "donate"){?>
    <script src="<?php echo $layout_name; ?>/js/ouibounce.min.js<?php echo $css_version;?>"></script>
    <script>
        let modal = document.getElementById('ouibounce-modal');
        let bounce = ouibounce($("#ouibounce-modal")[0],
            {
                cookieName:"bounceFire",
                cookieExpire:1,
                sitewide:true,
                callback:function (){
                    $("#ouibounce-modal").show();
                }
            });

        $('body').on('click', function() {
            $('#ouibounce-modal').hide();
        });
        $('#ouibounce-modal .modal-footer').on('click', function() {
            $('#ouibounce-modal').hide();
        });
        $('#ouibounce-modal .modal').on('click', function(e) {
            e.stopPropagation();
        });
    </script>
    <!-- Ouibounce Modal -->
    <div id="ouibounce-modal">
        <div class="underlay"></div>
        <div class="modal">
            <div class="modal-title">
                <h3>Opaaaaaaa apareci...</h3>
            </div>

            <div class="modal-body">
                <p>Eu apareci por aqui em!</p>
                <br>
                <p>
                    Olá meu querido, você foi contemplado com uma propaganda diferenciada. <br>
                    Sim, isso aqui é um recurso desse lindo website. <br>
                    Você pode utiliza-lo gratuitamente pois o mesmo foi liberado na interweb. <br>
                    Mas caso precise de novos sistemas ou aprender como tudo isso aqui funciona estarei disponível para um bate-papo.
                </p>
                <br>
                <p>Caso tenha interesse você pode mandar um e-mail para: <a href="mailto:souzaariick@gmail.com">souzaariick@gmail.com</a>.</p>

                <form>
                    <p class="form-notice">*Estou aguardando seu contato!</p>
                </form>
            </div>

            <div class="modal-footer">
                <p>no thanks</p>
            </div>
        </div>
    </div>
<?php }?>
<?php }?>
   <?php include_once "promo/promo.php"; ?>
</body>
</html>
