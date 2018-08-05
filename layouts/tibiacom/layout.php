<?php
if(!defined('INITIALIZED'))
    exit;
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
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
    <link href="<?php echo $layout_name; ?>/css/ferobra.min.css<?php echo $css_version;?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $layout_name; ?>/css/iziModal.min.css<?php echo $css_version;?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $layout_name; ?>/css/Toast.min.css<?php echo $css_version;?>" rel="stylesheet" type="text/css">
    <?php
    if($_REQUEST['subtopic'] == "latestnews" || $_REQUEST['subtopic'] == "newsarchive")
//        echo '<link href="'.$layout_name.'/css/news.min.css'.$css_version.'" rel="stylesheet" type="text/css">';
    ?>
    <?php $subtopic = $_REQUEST['subtopic'];?>
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
    <script src="<?php echo $layout_name; ?>/js/iziToast.min.js<?php echo $css_version;?>"></script>
    <script src="<?php echo $layout_name; ?>/js/ouibounce.min.js<?php echo $css_version;?>"></script>
    <?php
    if($_REQUEST['subtopic'] == "createaccount") echo '<script src="'.$layout_name.'/js/create_character.js'.$css_version.'"></script>';
    ?>
    <script>
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
    </script>
    <script>
        var loginStatus=0;
        loginStatus='<?php if($logged){ ?>true<?php } else { ?>false<?php } ?>';
        <?php if ($_REQUEST['subtopic'] == 'accountmanagement' && $_REQUEST['action'] == 'donate'){?>
        var activeSubmenuItem='donate';
        <?php }elseif($_REQUEST['subtopic'] == "accountmanagement" && $_REQUEST['action'] == 'buychar'){?>
        var activeSubmenuItem='buychar';
        <?php }elseif($_REQUEST['subtopic'] == "accountmanagement" && $_REQUEST['action'] == 'sellchar'){?>
        var activeSubmenuItem='sellchar';
        <?php }else{?>
        var activeSubmenuItem='<?php echo $subtopic; ?>';
        <?php }?>
        var JS_DIR_IMAGES=0;
        JS_DIR_IMAGES='<?php echo $layout_name; ?>/images/';
        var JS_DIR_ACCOUNT=0;
        JS_DIR_ACCOUNT='';
        var g_FormName='';
        var g_FormField='';
        var g_Deactivated=false;
        var g_FlashClientInPopUp= true;
    </script>
    <!--<script>
        if(top.location != window.location) {
            g_FlashClientInPopUp = false;
        }
    </script>-->
    <script src="<?php echo $layout_name; ?>/js/generic.js<?php echo $css_version;?>"></script>
    <script src="<?php echo $layout_name; ?>/js/initialize.js<?php echo $css_version;?>"></script>
    <!--<script src="<?php echo $layout_name; ?>/js/swfobject.js<?php echo $css_version;?>" ></script>-->
    <?php if($_REQUEST['subtopic'] == "accountmanagement") { ?>
        <script type="text/javascript">
            function openGameWindow(a_URL)
            {
                var Height = 768;
                var Width = 1024;
                var Top = (screen.height - Height) / 2;
                var Left = (screen.width - Width) / 2;
                var NewWindow = window.open(a_URL + '&window=2',
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
</head>

<body onbeforeunload="SaveMenu();"
      style="background-image:url(<?php echo $layout_name; ?>/images/global/header/background-artwork.jpg);
              background-size: 100%;
              background-position: top center;
              background-repeat: no-repeat;
              "
      onunload="SaveMenu();"
      onload="SetFormFocus();"
      data-twttr-rendered="true">
<div class="se-pre-con"></div>
<?php if(Website::getWebsiteConfig()->getValue('ouibounce_isActive')){?>
    <?php if($_REQUEST['subtopic'] != "accountmanagement" && $_REQUEST['action'] != "donate"){?>
    <script>
        var modal = document.getElementById('ouibounce-modal');
        var bounce = ouibounce($("#ouibounce-modal")[0],
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
                <h3>Perae Karai...</h3>
            </div>
    
            <div class="modal-body">
                <p>Valeu ai por esperar!</p>
                <br>
                <p>Eai meu bom... Beleza? Então, ta afim de usar esse website em seus projetos? Ele é bem maneiro e com alguns recursos únicos, um deles é o Pagseguro com lightbox, onde os usuários não precisam sair do site pra finalizar suas doações ao server.</p>
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
    <div id="DeactivationContainer" onclick="DisableDeactivationContainer();"></div>
    <div id="MainHelper1">
        <div id="MainHelper2">
            <div id="Bodycontainer">
                <div id="ContentRow">
                    <div id="MenuColumn">
                        <div id="LeftArtwork">
                            <a href="./?subtopic=latestnews">
                                <img id="TibiaLogoArtworkTop"
                                     src="<?php echo $layout_name; ?>/images/global/header/tibia-logo-artwork-top.png"
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
    
                        <div id="Menu">
                            <div id="MenuTop" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/box-top.gif);"></div>
                            <div id="news" class="menuitem">
                                    <span onclick="MenuItemAction('news')">
                                        <div class="MenuButton" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
                                            <div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                                                <span id="news_Lights" class="Lights" style="visibility: hidden;">
                                                    <div class="light_lu" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ld" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ru" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                </span>
                                                <div id="news_Icon" class="Icon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-news.gif);"></div>
                                                <div id="news_Label" class="Label" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-news.gif);"></div>
                                                <div id="news_Extend" class="Extend" style="background-image: url(<?php echo $layout_name; ?>/images/global/general/minus.gif);"></div>
                                            </div>
                                        </div>
                                    </span>
                                <div id="news_Submenu" class="Submenu">
                                    <a href="?subtopic=latestnews">
                                        <div id="submenu_latestnews" data-menu="news" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_latestnews" class="ActiveSubmenuItemIcon" style="background-image: url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_latestnews" class="SubmenuitemLabel">Latest News</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=newsarchive">
                                        <div id="submenu_newsarchive" data-menu="news" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_newsarchive" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_newsarchive" class="SubmenuitemLabel">News Archive</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
    
                            <div id="community" class="menuitem">
                                <span onclick="MenuItemAction('community')">
                                        <div class="MenuButton" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
                                            <div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                                                <span id="community_Lights" class="Lights" style="visibility: visible;">
                                                    <div class="light_lu" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ld" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ru" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                </span>
                                                <div id="community_Icon" class="Icon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-community.gif);"></div>
                                                <div id="community_Label" class="Label" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-community.gif);"></div>
                                                <div id="community_Extend" class="Extend" style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
                                            </div>
                                        </div>
                                    </span>
                                <div id="community_Submenu" class="Submenu">
                                    <a href="?subtopic=characters">
                                        <div id="submenu_characters" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_characters" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_characters" class="SubmenuitemLabel">Characters</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=buychar">
                                        <div id="submenu_buychar" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_buychar" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_buychar" class="SubmenuitemLabel">Buy Characteres</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <?php if($logged){?>
                                        <a href="?subtopic=accountmanagement&action=sellchar">
                                            <div id="submenu_sellchar" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                                <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                                <div id="ActiveSubmenuItemIcon_sellchar" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                                <div id="ActiveSubmenuItemLabel_sellchar" class="SubmenuitemLabel">Sell Characteres</div>
                                                <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            </div>
                                        </a>
                                    <?php }?>
                                    <a href="?subtopic=worlds">
                                        <div id="submenu_worlds" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                                <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                                <div id="ActiveSubmenuItemIcon_worlds" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                                <div id="ActiveSubmenuItemLabel_worlds" class="SubmenuitemLabel">Worlds</div>
                                                <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            </div>
                                    </a>
                                    <a href="?subtopic=highscores">
                                        <div id="submenu_highscores" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_highscores" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_highscores" class="SubmenuitemLabel">Highscores</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=killstatistics">
                                        <div id="submenu_killstatistics" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_killstatistics" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_killstatistics" class="SubmenuitemLabel">Kill Statistics</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=houses">
                                        <div id="submenu_houses" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_houses" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_houses" class="SubmenuitemLabel">Houses</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=guilds">
                                        <div id="submenu_guilds" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel">Guilds</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=polls">
                                        <div id="submenu_polls" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_polls" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_polls" class="SubmenuitemLabel">Polls</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="forum" class="menuitem">
                                    <span onclick="MenuItemAction('forum')">
                                        <div class="MenuButton" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
                                            <div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                                                <span id="forum_Lights" class="Lights" style="visibility: visible;">
                                                    <div class="light_lu" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ld" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ru" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                </span>
                                                <div id="forum_Icon" class="Icon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-forum.gif);"></div>
                                                <div id="forum_Label" class="Label" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-forum.gif);"></div>
                                                <div id="forum_Extend" class="Extend" style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
                                            </div>
                                        </div>
                                    </span>
                                <div id="forum_Submenu" class="Submenu">
                                    <a href="?subtopic=forum">
                                        <div id="submenu_forum" data-menu="forum" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_forum" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_forum" class="SubmenuitemLabel">Server Forum</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
    
                            <div id="account" class="menuitem">
                                <span onclick="MenuItemAction('account')">
                                        <div class="MenuButton" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
                                            <div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                                                <span id="account_Lights" class="Lights" style="visibility: visible;">
                                                    <div class="light_lu" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ld" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ru" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                </span>
                                                <div id="account_Icon" class="Icon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-account.gif);"></div>
                                                <div id="account_Label" class="Label" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-account.gif);"></div>
                                                <div id="account_Extend" class="Extend" style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
                                            </div>
                                        </div>
                                    </span>
                                <div id="account_Submenu" class="Submenu">
                                    <a href="?subtopic=accountmanagement&page=overview">
                                        <div id="submenu_accountmanagement" data-menu="account" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_accountmanagement" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_accountmanagement" class="SubmenuitemLabel">Account Management</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <?php if($group_id_of_acc_logged >= $config['site']['access_admin_panel']) { ?>
                                        <a href="?subtopic=adminpanel">
                                            <div id="submenu_adminpanel" data-menu="account" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                                <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                                <div id="ActiveSubmenuItemIcon_adminpanel" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                                <div id="ActiveSubmenuItemLabel_adminpanel" class="SubmenuitemLabel">Admin Panel</div>
                                                <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                    <?php if(!$logged){ ?>
                                        <a href="?subtopic=createaccount">
                                            <div id="submenu_createaccount" data-menu="account" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                                <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                                <div id="ActiveSubmenuItemIcon_createaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                                <div id="ActiveSubmenuItemLabel_createaccount" class="SubmenuitemLabel">Create Account</div>
                                                <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                    <a href="?subtopic=downloadclient&step=downloadagreement">
                                        <div id="submenu_downloadclient" data-menu="account" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_downloadclient" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_downloadclient" class="SubmenuitemLabel">Download Client</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=lostaccount">
                                        <div id="submenu_lostaccount" data-menu="account" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_lostaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_lostaccount" class="SubmenuitemLabel">Lost Account</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
    
                            <div id="library" class="menuitem">
                                    <span onclick="MenuItemAction('library')">
                                        <div class="MenuButton" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
                                            <div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                                                <span id="library_Lights" class="Lights" style="visibility: visible;">
                                                    <div class="light_lu" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ld" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ru" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                </span>
                                                <div id="library_Icon" class="Icon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-library.gif);"></div>
                                                <div id="library_Label" class="Label" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-library.gif);"></div>
                                                <div id="library_Extend" class="Extend" style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
                                            </div>
                                        </div>
                                    </span>
                                <div id="library_Submenu" class="Submenu">
                                    <a href="?subtopic=experiencetable">
                                        <div id="submenu_experiencetable" data-menu="library" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_experiencetable" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_experiencetable" class="SubmenuitemLabel">Experience Table</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=serverinfo">
                                        <div id="submenu_serverinfo" data-menu="library" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_serverinfo" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_serverinfo" class="SubmenuitemLabel">Server Info</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
    
                            <div id="support" class="menuitem">
                                    <span onclick="MenuItemAction('support')">
                                        <div class="MenuButton" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
                                            <div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                                                <span id="support_Lights" class="Lights" style="visibility: visible;">
                                                    <div class="light_lu" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ld" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ru" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                </span>
                                                <div id="support_Icon" class="Icon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-support.gif);"></div>
                                                <div id="support_Label" class="Label" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-support.gif);"></div>
                                                <div id="support_Extend" class="Extend" style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
                                            </div>
                                        </div>
                                    </span>
                                <div id="support_Submenu" class="Submenu">
                                    <a href="?subtopic=tibiarules">
                                        <div id="submenu_tibiarules" data-menu="support" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_tibiarules" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_tibiarules" class="SubmenuitemLabel"><?=$config['server']['serverName'];?> Rules</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=team">
                                        <div id="submenu_team" data-menu="support" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_team" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_team" class="SubmenuitemLabel"><?=$config['server']['serverName'];?> Support</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                <?php if($_REQUEST["subtopic"] == "erro"){?>
                                    <a href="?subtopic=erro">
                                        <div id="submenu_erro" data-menu="support" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_erro" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_erro" class="SubmenuitemLabel">Erro</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                <?php } ?>
                                <?php if (isset($_SESSION['account'])){?>
                                    <a href="?subtopic=ticket">
                                        <div id="submenu_ticket" data-menu="support" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_ticket" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_ticket" class="SubmenuitemLabel">Ticket Support</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                <?php } ?>
                                </div>
                            </div>
                            <div id="shop" class="menuitem">
                                    <span onclick="MenuItemAction('shop')">
                                        <div class="MenuButton" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
                                            <div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                                                <span id="shop_Lights" class="Lights" style="visibility: visible;">
                                                    <div class="light_lu" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ld" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ru" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                </span>
                                                <div id="shop_Icon" class="Icon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-shops.gif);"></div>
                                                <div id="shop_Label" class="Label" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-shops.gif);"></div>
                                                <div id="shop_Extend" class="Extend" style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
                                            </div>
                                        </div>
                                    </span>
                                <div id="shop_Submenu" class="Submenu">
                                    <a href="?subtopic=shop">
                                        <div id="submenu_shop" data-menu="shop" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_shop" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_shop" class="SubmenuitemLabel">Shop</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <a href="?subtopic=accountmanagement&action=donate">
                                        <div id="submenu_donate" data-menu="shop" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_donate" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_donate" class="SubmenuitemLabel">Donate</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>
                                    <?php if($_REQUEST['subtopic'] == 'tankyou'){?>
                                        <a>
                                            <div id="submenu_tankyou" data-menu="shop" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                                <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                                <div id="ActiveSubmenuItemIcon_tankyou" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                                <div id="ActiveSubmenuItemLabel_tankyou" class="SubmenuitemLabel">Thank You!</div>
                                                <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="MenuBottom" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/box-bottom.gif);"></div>
                        </div>
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
                                        $qtd_players_online = $SQL->query("SELECT count(*) as total from `players_online`")->fetch();
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
                                                    <a class="InfoBarBlock" href="./">
                                                        <img class="InfoBarBigLogo" src="layouts/tibiacom/images/global/header/info/icon-cast.png">
                                                        <span class="InfoBarNumbers" <?php if($_REQUEST['subtopic'] == 'characters' && $_REQUEST['name']){ echo "style='top:0'"; }?>><img class="InfoBarSmallElement" src="layouts/tibiacom/images/global/header/info/icon-streamers.png">
                                                        <span class="InfoBarSmallElement">0</span><img class="InfoBarSmallElement" src="layouts/tibiacom/images/global/header/info/icon-viewers.png">
                                                        <span class="InfoBarSmallElement">0</span>
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
                                                        <span class="InfoBarSmallElement">17</span>
                                                        <img class="InfoBarSmallElement" src="layouts/tibiacom/images/global/header/info/icon-viewers.png">
                                                        <span class="InfoBarSmallElement">661</span>
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
                                                <a style="float: right" href="<?php echo $config['base_url']?>?subtopic=worlds">
                                                    <img class="InfoBarBigLogo" src="layouts/tibiacom/images/global/header/info/icon-players-online.png">
                                                    <span class="InfoBarNumbers" <?php if($_REQUEST['subtopic'] == 'characters' && $_REQUEST['name']){ echo "style='top:0'"; }?>>
                                                        <span class="InfoBarSmallElement show_online_data"><?php echo $players_online; ?></span>
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
                                        <img id="ContentBoxHeadline" class="Title" src="headline.php?text=<?PHP echo ucwords(str_replace('_', ' ', strtolower($headline))); ?>" alt="Contentbox headline">
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
                                        <?php include_once "widgets/widget_rank.php"?>
                                        <?php include_once "widgets/widget_supportButton.php"?>
                                        <?php include_once "widgets/widget_buycharButton.php"?>
                                        <?php include_once "widgets/widget_PremiumBox.php"?>
                                        <?php include_once "widgets/widget_Serverinfobox.php"?>
                                        <?php include_once "widgets/widget_NetworksBox.php"?>
                                        <?php include_once "widgets/widget_CurrentPollBox.php"?>
                                        <?php include_once "widgets/widget_CastleWarBox.php"?>
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
    <script type="text/javascript">
        // disable all control elements which are not part of the content container element
        if (g_Deactivated == true) {
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
            var js, fjs = d.getElementsByTagName(s)[0];
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
    <script src="<?php echo $layout_name; ?>/js/pace.min.js<?php echo $css_version;?>" data-pace-options='{ "elements": false, "startOnPageLoad": true, "ajax": false, "restartOnRequestAfter": false }'></script>
    <!-- float facebook like box start -->
    <script id="float_fb" src="<?=$layout_name?>/js/fb_float_plugin.js<?php echo $css_version;?>" data-href="<?=$config['social']['facebook']?>" async></script>
    <!-- float facebook like box end -->
</body>
</html>