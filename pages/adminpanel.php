<?php
if (!defined('INITIALIZED'))
    exit;
if ($logged) {
    if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
        if ($action == "") {
            include "adminpanel/adminpanel.php";
        }
        if ($action == "manageplayers") {
            include "adminpanel/manageplayers.php";
        }
        if ($action == "history") {
            include "adminpanel/history.php";
        }
        if ($action == "historymore") {
            include "adminpanel/historymore.php";
        }
        if ($action == "sendPoints") {
            include "adminpanel/sendpoints.php";
        }
        if ($action == "shopmanage") {
            include "adminpanel/shopmanage.php";
        }
    }
}