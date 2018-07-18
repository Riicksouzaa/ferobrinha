<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 17/07/2018
 * Time: 10:37
 */

/**
 * @param $msg
 * @param $status
 * @return array
 */
function ajax ($msg, $status)
{
    $aj = [];
    $aj['msg'] = $msg;
    $aj['status'] = $status;
    
    return $aj;
}

;

/**
 * @param $name
 * @param $desc
 * @param $button
 * @return mixed
 */
$create_category = function ($name, $desc, $button) use ($SQL) {
    $create = $SQL->prepare("INSERT INTO z_shop_category (name, `desc`, button) VALUES (:nome, :descr, :button)");
    $create->execute(['nome' => $name, 'descr' => $desc, 'button' => $button]);
    if ($create->errorInfo()[0] === "00000") {
        return json_encode(ajax('Categoria inserida com sucesso.', TRUE));
    }else{
        return json_encode(ajax('error', FALSE));
    }
};

var_dump($create_category('teste', 'Ata', '_sbutton_getextraservice.gif'));


die();

$main_content .= $make_double_archs('AJAX SHOP SYSTEM');
$main_content .= "<div class='TableContainer'>";
$main_content .= $make_content_header("TESTE");
$main_content .= $make_table_header();
$main_content .= "<tr><td>AAAAAAAAAAAAAAA</td></tr>";
$main_content .= $make_table_footer();
$main_content .= "</div>";