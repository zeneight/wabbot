<?php
$curl = curl_init();
$token = "xV8hyTl9c3bzj8Frp48mqd6QyrU9blb9PqnqlxuEHA7SCe4UTiJDxMvi1WCCN0g2";
$data = [
    'phone' => '6281238921686',
    'title' => 'template text',
    'template_type' => 'text',
    'message' => 'sending template message from api1',
    'url_display' => 'wablas.com',
    'url_link' => 'https://wablas.com',
    'contact_display' => 'contact us',
    'contact_diplay' => '6281238921686',
    'reply1' => 'reply 1',
    'reply2' => 'reply 2',
    'reply3' => 'reply 3',
    'footer' => 'footer template here',
];

curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        "Authorization: $token",
    )
);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_URL,  "https://jogja.wablas.com/api/send-template-from-local");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($curl);
curl_close($curl);
echo "<pre>";
print_r($result);

?>
