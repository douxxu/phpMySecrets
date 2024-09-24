<?php

/*
By douxxu
github.com/douxxu
*/

/*
Allowed ips here
*/
$whitelisted_ips = [
    "127.0.0.1"
];

/*
The json that will be given after a get request with a whitelisted ip
*/
$JsonSecrets = '{
    "secrets": [
        {
            "id": 1,
            "secret": "This is secret 1."
        },
        {
            "id": 2,
            "secret": "This is secret 2."
        }
    ]
}';

function isWhitelisted($ip) {
    global $whitelisted_ips;
    return in_array($ip, $whitelisted_ips);
}

$user_ip = $_SERVER['REMOTE_ADDR'];

/*
Check if the IP address is whitelisted
*/
if (!isWhitelisted($user_ip)) {
    http_response_code(403); // Forbidden
    echo json_encode(["error" => "Access denied."]);
    exit;
}

/*
Decode the JsonSecrets json
*/
$secrets = json_decode($JsonSecrets, true);

header('Content-Type: application/json');
echo json_encode($secrets);
?>
