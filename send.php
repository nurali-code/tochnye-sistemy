<?php

$name = $_POST['name'];
$contact = $_POST['tel'];
$contact = preg_replace('/\D/', '', $contact);

$arr = array(
    '👤 Имя:' => $name,
    '📞 Телефон:' => "+$contact", 
);

$txt = "";
foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "\n";
}

$encodedText = urlencode($txt); // URL-кодирование текста

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=HTML&text={$encodedText}", "r");
