<!-- Запись формы в файл -->
<?php
$name = $_POST['name']; // собираем введенные данные и записываемв переменные
$email = $_POST['email'];
$number = $_POST['number'];
$comment = $_POST['comment'];

$text .= '<b>Имя: </b>' . "$name \n"; 
$text .= '<b>Email: </b>' . "$email \n"; 
$text .= '<b>Номер: </b>'. "$number \n";
$text .= '<b>Сообщение: </b>' . "$comment \n" . '<hr>' . "\n";
  if (!empty($name) && !empty($email) && !empty($number)) //если все переменные имеют значения выполняем запись в файл
    {
    $file = fopen ("orders.txt", "a+"); //открываем для перезаписи файл orders.txt лежаший в одной папке с текущей страницей
    fwrite ($file,$text); // пишем в файл
    fclose ($file); // закрываем файл
    } 
?>