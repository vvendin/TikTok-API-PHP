<?php
header("Content-Type: application/json");
include __DIR__."/../vendor/autoload.php";
$api = new \Sovit\TikTok\Api();
$result = $api->getNoWatermark("https://www.tiktok.com/@zachking/video/6829303572832750853");
echo json_encode($result,JSON_PRETTY_PRINT);
