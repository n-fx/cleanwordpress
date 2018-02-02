<?php
//header("Content-Type: application/json;charset=utf-8");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.wistia.com/v1/projects/hexk4mesp5.json?api_password=a0c49f6d838e0752737262c238fa02a655e6e861");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = array();
$headers[] = 'Authorization: apikey a0c49f6d838e0752737262c238fa02a655e6e861';

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec ($ch);

curl_close ($ch);
header('Content-type: application/json');
echo  $server_output;
?>