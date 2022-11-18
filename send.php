<?php
$to = "info@carboland.ru";
$extra = "Из: ".$_POST['email']."\r\nReply-To: ".$_POST['email']."\r\n";
$subject = "Сообщение от ".$_POST['name']."";
$mess = "Имя и фамилия: ".$_POST['name']."\nE-mail: ".$_POST['email']."\nТелефон: ".$_POST['phone']."\nТема: ".$_POST['subject']."\nСообщение:\n".$_POST['text']."";
mail ($to, $subject, $mess, $extra);
?>
<html><head>
<meta http-equiv="refresh" content="0; url=request#contact">
<title>Перенаправление...</title>
</head><body></body></html>