<?php
$temp=$_GET['temp'];
exec("redis-cli -h localhost set \"house/temp/userrequested\" \"$temp\"");
exec("mosquitto_pub -h 192.168.1.3 -t 'house/temp/userrequested' -m $temp -r");
header("Location:index.php");
?>
