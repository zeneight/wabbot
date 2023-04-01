<?php
$curl = curl_init();
$token = "sOowZ5JsCRUQaGc2S0dwj2EHYDLy5MU79DGo4astFOQTe88ltwO7aGxVuAoOYpUP";
$code_otp = "12213";
$payload = [
    "data" => [
        [
            'phone' => '120363028904083970',
            'message'=> [
                'title' => [
                    'type' => 'text',
                    'content' => '#> Pengumuman <#',
                ],
                'buttons' => [
                    'url' => [
                        'display' => 'Lihat',
                        'link' => "https://zeneight.xyz",
                    ],
                ],
                'content' => "Ini sangat Darurat! Seorang pemuda sedang mengalami sakit hati yang paling dalam. Your verification code: *$code_otp*",
                'footer' => '~TIM SPBE Kominfo Denpasar',
            ],
            'isGroup' => 'true',
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
curl_setopt($curl, CURLOPT_URL, "https://jogja.wablas.com/api/v2/send-template");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($curl);
curl_close($curl);
echo "<pre>";
print_r($result);

?>