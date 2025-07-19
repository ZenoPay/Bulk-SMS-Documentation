$recipients = ["255713570435", "255652449389", "255714027079"];
$data = [
    "recipients" => $recipients,
    "message" => "Promosheni ya Sokabet inaendelea!",
    "sender_id" => "Sokabet",
    "message_type" => "marketing"
];

$ch = curl_init("https://zenoapi.com/api/sms/bulk/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "x-api-key: your_api_key_here",
    "Content-Type: application/json"
]);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
