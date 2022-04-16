<?php
if (mail("a.rastegaef2016@yandex.ru", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: a.rastegaef2016@yandex.ru \r\n"))
{
   echo "сообщение успешно отправлено";
} else {
   echo "при отправке сообщения возникли ошибки";
}

?>