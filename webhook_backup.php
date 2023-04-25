<?php
header("Content-Type: text/plain");
/**
* all data POST sent from  https://jogja.wablas.com
* you must create URL what can receive POST data
* we will sent data like this:

* id = message ID - string
* phone = sender phone - string
* message = content of message - string
* pushName = Sender Name like contact name - string (optional)
* groupSubject = Group Name - string (optional)
* timestamp = time send message
* file = name of the file when receiving media message (optional)
* url = url file media message (optional)
* messageType = text/image/document/video/audio/location - string
* mimeType = type file (optional)
* deviceId = unix ID device
* sender = phone number device - integer
*/
$content = json_decode(file_get_contents('php://input'), true);

$id = $content['id'];
$pushName = $content['pushName'];
$isGroup = $content['isGroup'];
if ($isGroup == true) {
    $subjectGroup = $content['group']['subject'];
    $ownerGroup = $content['group']['owner'];
    $decriptionGroup = $content['group']['desc'];
    $partisipanGroup = $content['group']['participants'];
}
$message = $content['message'];
$phone = $content['phone'];
$messageType = $content['messageType'];
$file = $content['file'];
$mimeType = $content['mimeType'];
$deviceId = $content['deviceId'];
$sender = $content['sender'];
$timestamp = $content['timestamp'];

if ($message=="<~ Sudah") {
    echo "Selamat! Anda sudah berhasil menjadi yang terbaik";
} else if ($message=="<~ Belum") {
    echo "aduuh! Pesanmu: ".$message." Coba buka link ini dulu: https://pcsbali.id";
}

?>