<?php
$curl = curl_init();
$tgl = date('d/m/Y');
$token = "xV8hyTl9c3bzj8Frp48mqd6QyrU9blb9PqnqlxuEHA7SCe4UTiJDxMvi1WCCN0g2";

$agenda = "- agenda 1 [08.00]\n- agenda 2 [10.00]\n Info: https://s.id/agenda-kominfo-dps";

$payload = [
    "data" => [
        [
            // 'phone' => '120363048743786485',
            'phone' => '120363028904083970',
            // 'message'=> "*[INFORMASI]*\nSelamat pagi, berikut adalah informasi, agenda, berita serta status Layanan Publik & Internal di lingkungan Pemerintah Kota Denpasar.\n------------------------------------- \nTgl: _*".$tgl."*_ \n------------------------------------- \n*## Info Layanan ##* \nStats: _*[Layanan Normal]*_ \nInfo: https://s.id/status-dps \n------------------------------------- \n*## Info Agenda ##* \n".$agenda." \n------------------------------------- \n*## Info Lainnya ##* \n- deskripsi, dll. \n\n#-------------------------------------# \n~ Tim SPBE Denpasar ~ \nhttps://s.id/tim-spbe-dps \n#-------------------------------------#",

            'message'=> "*[INFORMASI]*\nSelamat pagi, berikut adalah informasi, agenda, berita serta status Layanan Publik & Internal di lingkungan Pemerintah Kota Denpasar.\n------------------------------------- \nTgl: _*".$tgl."*_ \n------------------------------------- \n*## Info Layanan ##* \nPublik: _*[Normal]*_ \nInternal: _*[Normal]*_ \nhttps://s.id/status-dps \n-------------------------------------  \n\n#-------------------------------------# \n~ Tim SPBE Denpasar ~ \nhttps://s.id/tim-spbe-dps \n#-------------------------------------#",
            'isGroup' => 'true'
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
curl_setopt($curl, CURLOPT_URL,  "https://jogja.wablas.com/api/v2/send-message");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($curl);
curl_close($curl);
echo "<pre>";
print_r($result);

?>