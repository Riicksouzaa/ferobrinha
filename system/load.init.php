<?php
if (!defined('INITIALIZED'))
    exit;

$time_start = microtime(true);
session_start();

function autoLoadClass ($className)
{
    if (!class_exists($className))
        if (file_exists('./classes/' . strtolower($className) . '.php'))
            include_once('./classes/' . strtolower($className) . '.php');
        else
            new Error_Critic('#E-7', 'Cannot load class <b>' . $className . '</b>, file <b>./classes/class.' . strtolower($className) . '.php</b> doesn\'t exist');
}

spl_autoload_register('autoLoadClass');

//load acc. maker config to $config['site']
/** @var array $config */
$config = array();
include('./config/config.php');
//load server config $config['server']
if (Website::getWebsiteConfig()->getValue('useServerConfigCache')) {
    // use cache to make website load faster
    if (Website::fileExists('./config/server.config.php')) {
        $tmp_php_config = new ConfigPHP('./config/server.config.php');
        $config['server'] = $tmp_php_config->getConfig();
    } else {
        // if file isn't cached we should load .lua file and make .php cache
        $tmp_lua_config = new ConfigLUA(Website::getWebsiteConfig()->getValue('serverPath') . 'config.lua');
        $config['server'] = $tmp_lua_config->getConfig();
        $tmp_php_config = new ConfigPHP();
        $tmp_php_config->setConfig($tmp_lua_config->getConfig());
        $tmp_php_config->saveToFile('./config/server.config.php');
    }
} else {
    $tmp_lua_config = new ConfigLUA(Website::getWebsiteConfig()->getValue('serverPath') . 'config.lua');
    $config['server'] = $tmp_lua_config->getConfig();
}
$outfits = new Outfits(Website::getWebsiteConfig()->getValue('Outfits_path'));
$mounts = new Mounts(Website::getWebsiteConfig()->getValue('Mounts_path'));
$items = new New_items(Website::getWebsiteConfig()->getValue('Itens_path'));

/**
 * @param $id
 * @return mixed
 */
$getItemByItemId = function ($id) use ($items) {
    return $items->getItemByItemId($id);
};
/**
 * @param $player_id
 * @return array|bool
 */
$getPlayerMountsByPlayerId = function ($player_id) use ($mounts) {
    $player = new Player();
    $player->loadById($player_id);

    $p = [];
    for ($i = 0; $i < 10; $i++) {
        $var = (10000000 + 2001);
        $var = $var + $i;
        if ($player->getStorage($var) != null) {
            $p[$i]['key'] = $var;
            $p[$i]['storage'] = $player->getStorage($var);
        }
    }
    if ($p != NULL) {
        foreach ($p as $storages) {
            $teste = $mounts->getMountsByKey($storages['key']);
            foreach ($teste as $mount) {
                if (((1 << (($mount['id'] - 1) % 31)) & $storages['storage'])) {
                    $top = $mounts->getMountsById($mount['id']);
                    $kappa[] = $top;
                }
            }
        }
        return $kappa;
    } else {
        return false;
    }
};
/**
 * @param $player_id
 * @return array|bool
 */
$getPlayerOutfitsByPlayerId = function ($player_id) use ($outfits) {
    $player = new Player();
    $player->loadById($player_id);
    $sex = $player->getSex();
    $p = [];
    for ($i = 1; $i <= 500; $i++) {
        $var = (10000000 + 1000);
        $var = $var + $i;
        if ($player->getStorage($var) != null) {
            $p[] = $player->getStorage($var);
        }
    }
    if ($p != null) {
        $t = [];
        foreach ($p as $key => $value) {
            $q = $outfits->getOutfitByLooktype(0, $value >> 16);
            if ($q != null) {
                $q['addon'] = $value - $q['storage'];
                $t[] = $q;
            }
        }
        foreach ($p as $key => $value) {
            $q = $outfits->getOutfitByLooktype(1, $value >> 16);
            if ($q != null) {
                $q['addon'] = $value - $q['storage'];
                $t[] = $q;
            }
        }
        return $t;
    } else {
        return false;
    }
};

/**
 * @param string $name
 * @return string
 */
$make_content_header = function ($name){
  $q = '
<div class="CaptionContainer">
    <div class="CaptionInnerContainer">
        <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span> 
        <span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>   
        <div class="Text">'.$name.'</div>
        <span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
        <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionEdgeLeftBottom"></span>
        <span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
    </div>
</div>  
  ';
  return $q;
};
/**
 * @param string $class
 * @return string
 */
$make_table_header = function ($class = 'Table3'){
    $q = '
<table class="'.$class.'" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td>
                <div class="InnerTableContainer">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="TableShadowContainerRightTop">
                                        <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
                                    </div>
                                    <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
                                        <div class="TableContentContainer">
                                            <table class="TableContent" width="100%">
                                                <tbody>';
    return $q;
};
/** @var $make_table_header */
/**
 * @return string
 */
$make_table_footer = function (){
    $q = '
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="TableShadowContainer">
                                        <div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
                                            <div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
                                            <div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>';
    return $q;    
};

// remove magic quotes, to make it compatible with some bad PHP configurations, 'stripslashes' in scripts is not needed anymore!
if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
    while (list($key, $val) = each($process)) {
        foreach ($val as $k => $v) {
            unset($process[$key][$k]);
            if (is_array($v)) {
                $process[$key][stripslashes($k)] = $v;
                $process[] = &$process[$key][stripslashes($k)];
            } else
                $process[$key][stripslashes($k)] = stripslashes($v);
        }
    }
    unset($process);
}