<?php
$namafile = "data.txt";
$handle = fopen ($namafile, "r");
if (!$handle) {
echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
echo "<b>Isi file : </b><br>";
// while ($isi = fgets ($handle, 2048)) {
// echo "$isi<br>";
// }
while (!feof($handle)) {
$buffer = fgets($handle, 4096);
echo $buffer."<br>";
}
}
fclose($handle);
?>