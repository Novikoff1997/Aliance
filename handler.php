<?php
$username = htmlspecialchars($_POST['username']);
$userphone = htmlspecialchars($_POST['userphone']);

$token = '7943971722:AAGfP4hlg1OV8CDZXJF41lxb-eBe0LqigpE';
$chat_id = '-4566051360';

$formData = array(
  'Клиент: '=> $username,
  'Телефон: '=> $userphone,
);

foreach ($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");
if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
};

echo 'Ваше имя:' . $username . '<br>' . 'Ваш номер телефона:' . $userphone;
