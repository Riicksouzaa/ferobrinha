<?php

$file = __DIR__ . "/curioso.json";

$newjson = array("cu" => 0, "curioso" => 0);
file_put_contents($file, json_encode($newjson));

$json = json_decode(file_get_contents($file), TRUE);

var_dump($newjson, $json);


var_dump(json_decode(file_get_contents($file), TRUE));


