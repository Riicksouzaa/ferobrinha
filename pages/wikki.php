<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 06/10/2018
 * Time: 17:11
 */

$wikki_menu = $SQL->prepare("SELECT * FROM atr_wikki_category");
$wikki_menu->execute([]);
$menu = $wikki_menu->fetchAll();
foreach ($menu as $key => $value) {
    if ($value['text'] == '' || empty($value['text']) || empty($value['descricao']) || $value['descricao'] == '') {
        unset($menu[$key]);
    }
}


if (!$_REQUEST['cat'] || $_REQUEST['cat'] == '' || empty($_REQUEST['cat']) || !intval($_REQUEST['cat'])) {
    $_REQUEST['cat'] = (int)1;
}
$cat_exixts = $SQL->prepare("SELECT * from atr_wikki_category where id_atr_wikki_category = :id ");
$cat_exixts->execute(['id' => $_REQUEST['cat']]);
if ($cat_exixts->rowCount() == 0) {
    $_REQUEST['cat'] = (int)1;
}
$cat_id = (int)intval($_REQUEST['cat']);
if (!$_REQUEST['sub'] || $_REQUEST['sub'] == '' || empty($_REQUEST['sub'] || !intval($_REQUEST['sub']))) {
    //do Nothing
    $sub_id = NULL;
} else {
    $sub_id = (int)intval($_REQUEST['sub']);
}

/** Abertura da DIV */
$main_content .= '
<style>
.BoxContent {
  padding: 0 !important;
}
</style>

<div id="tabs" style="min-height: 400px; overflow: hidden;">';
/** INICIADA UL DE MENU */
$main_content .= '
    <ul class="wiki_menu">
        <img class="wiki_logo" src="' . $layout_name . '/images/global/header/tibia-logo-artwork-top-astari-production.png">
        <!--
        <li class="menu_search">
            <form method="post" action="?subtopic=wikki&action=search">
                <input type="text" name="wiki-search" class="search_input" placeholder="Pesquisar..." required=""> <input class="search_icon" type="image" src="' . $layout_name . '/images/wikki/lupa.png">
            </form>
        </li>-->';
foreach ($menu as $key => $value) {
    $main_content .= '<li ' . ($cat_id == $value['id_atr_wikki_category'] ? 'class="active"' : '') . '><a href="?subtopic=wikki&cat=' . $value['id_atr_wikki_category'] . '">' . ucfirst(utf8_encode($value['nome'])) . '</a></li>';
}
/** FECHAMENTO UL MENU */
$main_content .= '</ul>';

$cat_id_content = $SQL->prepare("SELECT  c.id_atr_wikki_category as id,
                                           c.text as txt,
                                            c.nome as name,
                                             c.dta_insert as dt_insert,
                                              c.dta_update as dt_update,
                                               c.descricao as description
                                           from atr_wikki_category c
                                           where c.id_atr_wikki_category = :cid
                                           and c.is_active = 1");
$cat_id_content->execute(['cid' => $cat_id]);
$cat_id_content->setFetchMode(PDO::FETCH_ASSOC);
$cat_content = $cat_id_content->fetch();
$cat_content['is_subcat'] = FALSE;

$have_subcat = function () use ($SQL, $cat_id) {
    $sub = $SQL->prepare("SELECT cat.id_atr_wikki_category as cat_id,
                                    cat.nome as cat_name,
                                     sub.id_atr_wikki_subcategory as sub_cat_id,
                                      sub.name as name,
                                       sub.text as txt,
                                        sub.description as description,
                                         sub.is_active FROM atr_wikki_subcategory sub
                                    left join atr_wikki_category cat on sub.id_atr_wikki_category = cat.id_atr_wikki_category
                                    where sub.id_atr_wikki_category = :cid
                                    and sub.is_active = 1");
    $sub->execute(['cid' => $cat_id]);
    
    if ($sub->rowCount() > 0) {
        $sub->setFetchMode(PDO::FETCH_ASSOC);
        return $sub->fetchAll();
    }
    return FALSE;
};
if (isset($sub_id) && !empty($sub_id)) {
    $sub_id_content = $SQL->prepare("SELECT sub.id_atr_wikki_subcategory as id,
                                               sub.text as txt,
                                                sub.name as name,
                                                 sub.dta_insert as dt_insert,
                                                  sub.dta_update as dt_update,
                                                   sub.description as description,
                                                    sub.id_atr_wikki_category as cat_id,
                                                     a.nome as cat_name
                                               FROM atr_wikki_subcategory sub
                                               left join atr_wikki_category a on sub.id_atr_wikki_category = a.id_atr_wikki_category
                                               where sub.is_active = 1
                                               and sub.id_atr_wikki_subcategory = :sub_id
                                               and sub.id_atr_wikki_category = :cid");
    $sub_id_content->execute(['sub_id' => $sub_id, 'cid' => $cat_id]);
    $sub_id_content->setFetchMode(PDO::FETCH_ASSOC);
    if ($sub_id_content->rowCount() > 0) {
        $cat_content = $sub_id_content->fetch();
        $cat_content['is_subcat'] = TRUE;
    }
}


foreach ($cat_content as $key => $value) {
    $cat_content[$key] = utf8_encode($value);
}
$dt_insert = new DateTime($cat_content['dt_insert']);
$dt_insert = $dt_insert->format('d/m/Y H:i:s');
$dt_update = new DateTime($cat_content['dt_update']);
$dt_update = $dt_update->format('d/m/Y H:i:s');


/** Iniciado o content */
$main_content .= '
    <div class="wiki_content" id="tab">
        <h4 class="wiki_title">' . ucfirst($cat_content['name']) . '</h4>
        <div class="breadcumb">';
if ($cat_content['is_subcat']) {
    $main_content .= '<a href="?subtopic=wikki">Wikki</a> > <a href="?subtopic=wikki&cat=' . $cat_content['cat_id'] . '"> ' . ucfirst($cat_content['cat_name']) . '</a> > <a href="?subtopic=wikki&cat=' . $cat_content['cat_id'] . '&sub=' . $cat_content['id'] . '"> ' . ucfirst($cat_content['name']) . '</a>';
} else {
    $main_content .= '<a href="?subtopic=wikki">Wikki</a> > <a href="?subtopic=wikki&cat=' . $cat_content['id'] . '">' . ucfirst($cat_content['name']) . '</a>';
}
$main_content .= '
            <span class="wiki_edit">Postado em:<b class="wikki_time"> ' . $dt_insert . '</b></span><br>
            <span class="wiki_edit">Editado em:<b class="wikki_time"> ' . $dt_update . '</b></span>
        </div>
        <div class="wiki_text" id="div-wiki-61">
            <img class="wiki_logo" src="' . $layout_name . '/images/global/header/tibia-logo-artwork-top_astari.png">
            <div class="bbcode_center" style="text-align:center">
                <em>
                    <span class="med">
                        <span style="color:#d04a00">
                            ' . $cat_content['description'] . '
                            <br>
                        </span>
                    </span>
                </em>
            </div>
            <div class="bbcode_center" style="text-align:center"><span class="sma"></span></div>
            <hr style="border: 1px solid #efddc2;">
            ' . $cat_content['txt'] . '
            <hr style="border: 1px solid #efddc2;">
            <br>';
$submenus = $have_subcat();
if ($submenus) {
    $main_content .= '
        Abaixo Lista de ' . ucfirst($submenus[0]['cat_name']) . ' disponíveis no momento:
        <ul class="wiki_submenu">';
    /** LISTA DE SUBMENUS */
    foreach ($submenus as $key => $value) {
        foreach ($value as $kvalor => $kvalue) {
            $value[$kvalor] = utf8_encode($kvalue);
        }
        $main_content .= '
                <li>
                    <a href="?subtopic=wikki&cat=' . $value['cat_id'] . '&sub=' . $value['sub_cat_id'] . '">
                        ' . $value['name'] . ' -- ' . $value['description'] . '
                    </a>
                </li>';
    }
    $main_content .= '</ul>';
}
$main_content .= '
        </div>
    </div>';

/** FECHAMENTO */
$main_content .= '</div>';


