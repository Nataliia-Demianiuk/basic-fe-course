<?php

$recepient = "natpalm2525@gmail.com";
$sitename = "Назва сайту";

$name = trim($_POST["name1"]);
$email = trim($_POST["email1"]);
$text = trim($_POST["text1"]);
$message = "Ім_я: $name \nEmail: $email \nТекст: $text";

$pagetitle = "Нова заявка з сайту \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>