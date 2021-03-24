<?php
if (!defined('INITIALIZED'))
    exit;

$time_start = microtime(TRUE);
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
$config = [];
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

/**
 * @param string $name
 * @param string $sm_text
 * @var          $make_content_header
 * @return string
 */
$make_content_header = function ($name, $sm_text = '') {
    if ($sm_text && $sm_text != '') {
        $sm_text = '<div style="float: right"><small><span>' . $sm_text . '</small></span></div>';
    }
    return '
<div class="CaptionContainer">
    <div class="CaptionInnerContainer">
        <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
        <div class="Text" style="min-height: 17px"><div style="float: left">' . $name . '</div> ' . $sm_text . '</div>
        <span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
        <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionEdgeLeftBottom"></span>
        <span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
    </div>
</div>
  ';
};

/**
 * @param string  $class Table3
 * @param string  $align ''
 * @param boolean $stripped
 * @var           $make_table_footer
 * @return string
 */
$make_table_header = function ($class = 'Table3', $align = '', $stripped = FALSE) {
    return '
<table class="' . $class . '" cellpadding="0" cellspacing="0" align="' . $align . '">
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
                                            <table class="TableContent' . ($stripped ? ' TableStripped ' : ' ') . '" width="100%">
                                                <tbody>';
};

/**
 * @var $make_table_footer
 * @return string
 */
$make_table_footer = function () {
    return '
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
};

/**
 * @var string $make_double_archs
 * @return string
 */
$make_double_archs = function ($title) {
    return '
<div style="text-align: -webkit-center !important;">
    <table>
        <tbody>
            <tr>
                <td><img src="./layouts/tibiacom/images/global/content/headline-bracer-left.gif"></td>
                <td style="text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;">' . $title . '</td>
                <td><img src="./layouts/tibiacom/images/global/content/headline-bracer-right.gif"></td>
            </tr>
        </tbody>
    </table>
</div>
  ';
};

// remove magic quotes, to make it compatible with some bad PHP configurations, 'stripslashes' in scripts is not needed anymore!
//if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
//    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
//    while (list($key, $val) = each($process)) {
//        foreach ($val as $k => $v) {
//            unset($process[$key][$k]);
//            if (is_array($v)) {
//                $process[$key][stripslashes($k)] = $v;
//                $process[] = &$process[$key][stripslashes($k)];
//            } else
//                $process[$key][stripslashes($k)] = stripslashes($v);
//        }
//    }
//    unset($process);
//}
