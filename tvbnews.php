<?php
header('Content-Type: application/json');

$endpoint = 'https://inews-api.tvb.com/news/checkout/live/hd/ott_C_h264?profile=safari';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $endpoint);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

$data = json_decode($result);

$m3u8 = $data->content->url->hd;

echo $m3u8;

header("Location: $m3u8");

// Closing
curl_close($ch);

?>
