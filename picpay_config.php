<?php
require_once "config/config.php";
require_once "vendor/autoload.php";

use Picpay\Seller;

$seller = new Seller($config['picpay']['x-picpay-token'], $config['picpay']['x-seller-token']);