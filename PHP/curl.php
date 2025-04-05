<?php

$curl = curl_init();
$url = 'https://git.selfmade.ninja/api/v4/users/';
$token = "selfmade.ninja.H76Z9x7yy2Jd3NfYbcR7";
$headers = [
    "Private-Token: $token",
];

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);

if(curl_errno($curl)){
    echo "error";
}

system("echo $response >> /Users/umarfarooq/Documents/Developer/code-playground/file.txt");