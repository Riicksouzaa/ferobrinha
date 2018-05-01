<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 01/05/2018
 * Time: 15:26
 */

$url = "https://api.twitch.tv/helix/streams?first=100&game_id=19619";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HTTPHEADER, Array('Client-ID: 2f7bx36piv2sps61hnbloh7b0huorb'));
curl_setopt($curl, CURLOPT_POST, FALSE);
//curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$json = curl_exec($curl);
curl_close($curl);

$t = json_decode($json);

$twitch_c = 0;
$twitch_a = 0;
foreach ($t->data as $twitch) {
    $twitch_a++;
    $twitch_c = $twitch_c + $twitch->viewer_count;
}