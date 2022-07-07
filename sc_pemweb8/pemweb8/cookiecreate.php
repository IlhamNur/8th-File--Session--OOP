<?php
$value = 'Rizal';
$value2 = 'Rizal Aji';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); /* expire in 1hour */

echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookiecheck.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>