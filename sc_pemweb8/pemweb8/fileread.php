<?php
$namafile = "data.txt";
$handle = fopen ($namafile, "r");
if (!$handle) {
echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
$isi = fgets ($handle, 2048);
$isi2 = fgets ($handle, 20);
$isi3 = fgets ($handle, 20);
echo "Isi 1 : $isi<br>";
echo "Isi 2 : $isi2<br>";
echo "Isi 3 : $isi3<br>";
}
fclose($handle);
?>