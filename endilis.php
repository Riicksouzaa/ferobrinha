<?php

$file = __DIR__ . "/curioso.json";

$json = json_decode(file_get_contents($file), TRUE);

$newjson = array("cu" => $json["cu"]++, "curioso" => $json["curioso"]++);
var_dump($newjson, $json);

file_put_contents($file, json_encode($newjson));

var_dump(json_decode(file_get_contents($file), TRUE));


