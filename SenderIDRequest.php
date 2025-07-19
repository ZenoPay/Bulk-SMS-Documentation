$curl = curl_init();

$data = [
    "sender_id" => "Sokabet",
    "description" => "Betting Platform"
];

curl_setopt_array($curl, [
    CURLOPT_URL => "https://zenoapi.com/api/sms/sender-ids/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        "x-api-key: your_api_key_here",
        "Content-Type: application/json"
    ]
]);

$response = curl_exec($curl);
curl_close($curl);

echo $response;
