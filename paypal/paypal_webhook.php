<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24/03/2018
 * Time: 23:41
 */

require 'config.php';
try {
    $output = \PayPal\Api\WebhookEventType::availableEventTypes($apiContext);
    var_dump($output->getEventTypes());
} catch (Exception $ex) {
    var_dump($ex);
   exit(1);
}
return $output;