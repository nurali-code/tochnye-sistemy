<?php


$name = $_POST['name'];
$contact = $_POST['tel'];
$arr = array(
	'👤 Имя: ' => $name,
	'📞 Телефон: ' => $contact,
);

foreach($arr as $key => $value) {
	$txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");