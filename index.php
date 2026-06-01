<?php

header('Content-Type: application/json');

if (!isset($_GET['uid']) || empty($_GET['uid'])) {
    echo json_encode([
        "success" => false,
        "message" => "UID is required"
    ]);
    exit;
}

$uid = urlencode($_GET['uid']);

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.tricksxtech.in/bgmi/v2/?uid={$uid}",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_TIMEOUT => 30,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    echo json_encode([
        "success" => false,
        "error" => curl_error($ch)
    ]);
    curl_close($ch);
    exit;
}

curl_close($ch);

$data = json_decode($response, true);

echo json_encode([
    "success" => true,
    "status" => $httpCode,
    "data" => $data
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
