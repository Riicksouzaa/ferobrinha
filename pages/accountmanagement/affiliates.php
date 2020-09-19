<?php

/**
 * Created by PhpStorm.
 * User: Ricardo Souza
 * Date: 24/08/2019
 * Time: 14:00
 */

$form_add_affiliates = "
<form id='form_add_affiliate' method='post' action='?subtopic=accountmanagement&action=affiliates_api'>
<input type='hidden' value='addAfiliate' name='type'/>
<input type='hidden' name='id_affiliate_father' value='1' />
</form>
";
$btn = [
    "<button id='add_affiliate'>Quero ser a merda de um afiliado!!!!</button>",
//    $make_custom_button(true, '', 'submit', 'Left', null),
//    $make_custom_button(true, 'cancel', 'cancel', 'Right', '_red')
];

$main_content .= "<div class='TableContainer'>";
$main_content .= $make_content_header("Seja um afiliado meu bom.");
$main_content .= $make_table_header();
$main_content .= $form_add_affiliates;
$main_content .= $make_multiple_buttons($btn);
$main_content .= $make_table_footer();
$main_content .= "</div>";

$form_nivel_afiliado = "
<form id='form_add_nivel_affiliate' method='post' action='?subtopic=accountmanagement&action=affiliates_api'>
<input type='hidden' value='addNivelAffiliate' name='type'/>
<input type='text' name='name_nivel_affliate' placeholder='Digita um nome ae krl'/>
<input type='text' name='desc_nivel_affliate' placeholder='qual a descrição dessa karalha?'/>
</form>";

$btn_nivel_affiliate = [
//    "<button id='add_nivel_affiliate'>Quero adicionar o nível de afiliado agora</button>",
    $make_custom_button(true,'add_nivel_affiliate', 'submit', 'Left', '_green' )
];

$main_content .= "<br/>";
$main_content .= "<br/>";
$main_content .= "<br/>";
$main_content .= "<div class='TableContainer'>";
$main_content .= $make_content_header("Cadastre um nível de Afiliado..");
$main_content .= $make_table_header();
$main_content .= $form_nivel_afiliado;
$main_content .= $make_multiple_buttons($btn_nivel_affiliate);
$main_content .= $make_table_footer();
$main_content .= "</div>";


