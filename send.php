<?php
$curl = curl_init();
$token = "xV8hyTl9c3bzj8Frp48mqd6QyrU9blb9PqnqlxuEHA7SCe4UTiJDxMvi1WCCN0g2";
// $data = [
//     'phone' => '120363028904083970',
//     'message' => 'im hungry from API',
//     'isGroup' => 'true',
// ];
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
                        'display' => 'wablas.com',
                        'link' => 'https://wablas.com',
                    ],
                    'call' => [
                        'display' => 'contact us',
                        'phone' => '081223644xxx',
                    ],
                    'quickReply' => ["reply 1","reply 2"],
                ],
                'content' => "Selamat pagi, berikut adalah laporan hasil pengecekan Layanan Publik & Internal Pemerintah Kota Denpasar. \n\nHASIL: [*Semua layanan berjalan normal*]. \n\nUntuk informasi lebih lanjut silahkan lihat situs di bawah ini, terima kasih.\nhttps://status.denpasarkota.go.id",
                'footer' => '~TIM SPBE Kominfo Denpasar',
            ],
            'isGroup' => 'true',
        ]
    ]
];
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        "Authorization: $token",
    )
);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
// curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
curl_setopt($curl, CURLOPT_URL, "https://jogja.wablas.com/api/send-message");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($curl);
curl_close($curl);
echo "<pre>";
print_r($result);

?>