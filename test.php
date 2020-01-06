<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
$fd = fopen("count.txt", 'w');
$str = implode($_POST);
fwrite($fd, $str);
fclose($fd);
print_r($_POST);
}
if($_SERVER['REQUEST_METHOD']=='GET'){
	$fr = fopen("count.txt", 'r');
	while(!feof($fr))
{
    $count = htmlentities(fgets($fr));
    echo $count;
}
}

?> 