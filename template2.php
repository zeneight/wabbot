<?php
$curl = curl_init();
$token = "xV8hyTl9c3bzj8Frp48mqd6QyrU9blb9PqnqlxuEHA7SCe4UTiJDxMvi1WCCN0g2";
$payload = [
    "data" => [
        [
            'phone' => '6281238921686',
            'message'=> [
                'title' => [
                    'type' => 'text',
                    'content' => 'template text',
                ],
                'buttons' => [
                    'url' => [
                        'display' => 'wablas.com',
                        'link' => 'https://wablas.com',
                    ],
                    'call' => [
                        'display' => 'contact us',
                        'phone' => '081223644xxx',
                    ],
                    'quickReply' => ["reply 1","reply 2"],
                ],
                'content' => 'sending template message...',
                'footer' => 'footer template here',
            ],
            //'isGroup' => 'true',
        ]
    ]
];
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        "Authorization: $token",
        "Content-Type: application/json"
    )
);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
curl_setopt($curl, CURLOPT_URL,  "https://jogja.wablas.com/api/v2/send-template");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($curl);
curl_close($curl);
echo "<pre>";
print_r($result);

?>
