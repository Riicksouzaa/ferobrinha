<?php

$file = __DIR__ . "curioso.json";

$json = json_decode(file_get_contents($file), TRUE);

$newjson = array("cu" => $json["cu"]++, "curioso" => $json["curioso"]++);

file_put_contents($file, json_encode($newjson));

echo $file;


