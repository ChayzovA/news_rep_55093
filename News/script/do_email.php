<?php
$message = 'Вы подписаны';

$email = $_POST['email'];
mail($email, 'Рассылка новостей', $message);

header ("Location: ../index.php");
?>