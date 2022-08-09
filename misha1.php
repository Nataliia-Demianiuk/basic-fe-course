<?php
$new_message="нове повідомлення"
error_reporting (error_reporting);

if (isset ($_POST['name1'])) {$name1=$_POST['name1']; if ($name1 == '') {unset($name1);}}
if (isset ($_POST['email'])) {$email1=$_POST['email1']; if ($email1 == '') {unset($email1);}}
if (isset ($_POST['text1'])) {$text1=$_POST['text1']; if ($text1 == '') {unset($text1);}}
if (isset ($_POST['sab'])) {$sab=$_POST['sab']; if ($sab == '') {unset($sab);}}

if (isset($name1)){
    $name1=stripslashes($name1);
    $name1=htmlspecialchars($name1);
}
if (isset($email1)){
    $email1=stripslashes($email1);
    $email1=htmlspecialchars($email1);
}
if (isset($text1)){
    $text1=stripslashes($text1);
    $text1=htmlspecialchars($text1);
}
$address="natpalm2525@gmail.com"
$note_text="Тема : $new_message \r\n Ім'я : $name1 \r\n Email : $email1 \r\n Додаткова інформація : $text1";

if (isset($name1) && isset ($sab)) {
    mail ($address,$new_message,$note_text,"Content-type:text/plain");
    echo "<p style='color:green;'Шановний(-на) $name1 Ваше повідомлення успішно відправлено. Дякуємо. Ми Вам невдовзі відповімо на Вашу електронну адресу $email1></p>";
    
}