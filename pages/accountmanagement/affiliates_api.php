<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Souza
 * Date: 19/08/2019
 * Time: 21:22
 */

if ($logged) {
    $affiliates = new Affiliates();

    switch ($_REQUEST['type']) {
        case 'addAfiliate':
            $add = $affiliates->addAffiliate($account_logged->getID(), 1, $account_logged->getName(), $affiliates->create_hash(235), 1);
            echo json_encode($add);
            die();
            break;

        case 'addNivelAffiliate':
            $nivel = $affiliates->addNivelAffiliate($_POST['name_nivel_affliate'], utf8_decode($_POST['desc_nivel_affliate']));
            echo json_encode($nivel);
            die();
            break;

        case 'getAllNivelAffiliate':
            $affiliateNivel = $affiliates->getAllNivelAffiliate();
            var_dump(json_encode($affiliateNivel, JSON_UNESCAPED_UNICODE));
            die();
            break;

        default:
            $status = "error";
            $msg = "Ta maluco fion?";
            $maluco[] = ["status" => $status, "msg" => $msg];
            echo json_encode($maluco);
            die();
            break;
    }
}