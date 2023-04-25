<?php
$curl = curl_init();
$tgl = date('d/m/Y');
$token = "xV8hyTl9c3bzj8Frp48mqd6QyrU9blb9PqnqlxuEHA7SCe4UTiJDxMvi1WCCN0g2";
$payload = [
    "data" => [
        [
            // 'phone' => '120363048743786485',
            'phone' => '120363028904083970',
            'message'=> [
                'title' => [
                    'type' => 'text',
                    'content' => '*#[INFORMASI]#*',
                ],
                
                'content' => "Selamat pagi, berikut adalah informasi, agenda serta status Layanan Publik & Internal Pemerintah Kota Denpasar.\n----------------------------------- \n*/Info Layanan* \nTgl: ".$tgl."\nStats: _*[Layanan Normal]*_. \nInfo: https://status.denpasarkota.go.id \n----------------------------------- \n*/Info Agenda* \n----------------------------------- \n*/Berita* \n\n#-----------------------------------# \nhttps://s.id/tim-spbe-dps \n#-----------------------------------#",
                'footer' => '~ TIM SPBE Kominfo Denpasar',
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
curl_setopt($curl, CURLOPT_URL,  "https://jogja.wablas.com/api/v2/send-template");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($curl);
curl_close($curl);
echo "<pre>";
print_r($result);

?>