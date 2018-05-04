<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23/04/2018
 * Time: 01:31
 */

try {
    $product_id = $payment_data['ServiceID'];
    if ($config['mp']['sandboxMode']) {
        $mp = new MP($config['mp']['SANDBOX_CLIENT_ID'], $config['mp']['SANDBOX_CLIENT_SECRET']);
    } else {
        $mp = new MP($config['mp']['CLIENT_ID'], $config['mp']['CLIENT_SECRET']);
    }
//                        $mp->sandbox_mode($config['mp']['sandboxMode']);
    $price = (array_keys($config['donate']['offers'][intval($product_id)])[0] / 100);
    $qnt = array_values($config['donate']['offers'][intval($product_id)])[0];
    $purl = $config['base_url'].'layouts/tibiacom/images/payment/serviceid_'.($product_id >= 5 ? '5' : $product_id).'.png';
    $preference_data = [
        "items" => [
            [
                "id" => $product_id,
                "title" => $config['sale']['productName'],
                "currency_id" => "BRL",
                "picture_url" => $purl,
                "description" => $qnt . " " . $config['sale']['productName'],
                "category_id" => "Coins",
                "quantity" => 1,
                "unit_price" => $price
            ]
        ],
        "notification_url" => $config['base_url'] . "mp_ipn.php",
        "external_reference" => $account_logged->getName() . '-' . $product_id,
    ];
    $preference = $mp->create_preference($preference_data);
    $main_content .= "<div style='text-align: center'>";
    $main_content .= '
                    <script type="text/javascript">
                    function execute_my_onreturn (json) {
                        if (json.collection_status==\'approved\'){
                            alert (\'Pago acreditado\');
                        } else if(json.collection_status==\'pending\'){
                            alert (\'El usuario no completó el pago\');
                        } else if(json.collection_status==\'in_process\'){
                            alert (\'El pago está siendo revisado\');
                        } else if(json.collection_status==\'rejected\'){
                            alert (\'El pago fué rechazado, el usuario puede intentar nuevamente el pago\');
                        } else if(json.collection_status==null){
                            alert (\'El usuario no completó el proceso de pago, no se ha generado ningún pago\');
                        }
                    }
                    </script>
                    
                    <a href="' . ($config['mp']['sandboxMode'] == TRUE ? $preference["response"]["sandbox_init_point"] : $preference["response"]["init_point"]) . '" name="MP-Checkout" class="lightblue-Rn-L-Ar-Br" mp-mode="modal" onreturn="execute_my_onreturn();">Pagar</a>
		            <!--<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>-->
		            <!--<script type="text/javascript" src="https://www.mercadopago.com/org-img/jsapi/mptools/buttons/render.js"></script>-->
		            <script type="text/javascript" src=" https://secure.mlstatic.com/mptools/render.js"></script>
                ';
    $main_content .= "</div>";
} catch (MercadoPagoException $e) {
    echo $e->getMessage();
}