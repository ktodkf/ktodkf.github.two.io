<?php
 $directory = 'data/';
 if (!(file_exists($directory))){
 	mkdir($directory, 0777, true);
 }
 $directory = $directory . $_POST['phone_number'] . '.txt';
 $info = fopen($directory, 'w');
 fwrite($info, 'Имя: ' . $_POST['first_name'] . "\n");
 fwrite($info, 'Номер телефона: ' . $_POST['phone_number'] . "\n");
 fclose($info);
 echo "Заявка отправлена успешно!";