<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 26/07/2018
 * Time: 02:05
 */

$key = "70121d79d9e95fb9a9d71d11a531cfa4";
$token = "6f72d98da664d91ad2476e300026a897696a78d75c7644bfe141812238bfc3d9";
$base_url = "https://api.trello.com/1/";

$headers = [];
$data = [
    'key' => $key,
    'token' => $token,
    'idList' => "5c5109f6ca31b74a00ddc06f",
    'name' => "Este teste foi gerado a partir de uma página PHP.",
    'desc' => "Olá, meus queridos, por gentileza desconsiderar esse card, pois estamos testando a API do trello, em breve esse mesmo será apagado agradeço a compreensão.",
    'pos' => 'bottom'
];
$response = Unirest\Request::post($base_url."cards", $headers, $data);
var_dump($response);

//$house = new House_loader(null,null,null, "C:\\xampp\\htdocs\\empire-house.xml");
//var_dump($house);
//$house->iterateHouses();

