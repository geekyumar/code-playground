<?php

$data = [
    'name' => 'boss uh da kena part 2',
    'email' => 'sivajitheboss@sivajifoundation.com',
    'mobile' => '12345',
    'subject' => 'na po pora paadha, singa paadha.. pert 2',
    'message' => 'na oru vaati sonna 100 vaati sonna maari.. part 2'
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://sanjaikumaran.online/forms/contact.php');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

for ($i = 0; $i < 100; $i++) {
    $response = curl_exec($ch);
    echo "Request $i sent successfully.\n";
}


if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    echo 'Response from server: ' . $response;
}

curl_close($ch);