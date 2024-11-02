<?php

$ip = readline('Enter IP address: ');

$ip_chunk = explode('.', $ip);

if(count($ip_chunk) !== 4){
    $count = count($ip_chunk);
    die("Enter a valid IPv4 addres! your address has only $count segments!\n");
} 

foreach($ip_chunk as $chunks){
    if($chunks >= 0 && $chunks <= 255){
        continue;
    } else {
        die("The Segment values is lesser than 0 or exceeds 255!\n");
    }
}

echo "Your IPv4 format is right!\n";