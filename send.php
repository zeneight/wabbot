<?php
$curl = curl_init();
$token = "sOowZ5JsCRUQaGc2S0dwj2EHYDLy5MU79DGo4astFOQTe88ltwO7aGxVuAoOYpUP";
$data = [
    'phone' => '120363028904083970',
    'message' => 'im hungry from API',
    'isGroup' => 'true',
];
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        "Authorization: $token",
    )
);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_URL,  "https://jogja.wablas.com/api/send-message");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($curl);
curl_close($curl);
echo "<pre>";
print_r($result);

?>