<?php
	// пример использования SendMailSmtpClass.php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$f = fopen("file.txt", "a");
fwrite($f, $_POST['count']);
fclose($f);
}
     ?>