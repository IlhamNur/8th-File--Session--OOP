<?php
$namafile = "data.txt";
$handle = fopen ($namafile, "w");
if (!$handle) {
echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
fwrite ($handle, "Fakultas Matematika dan Ilmu Pengetahuan Alam\n");
fputs ($handle, "Universitas Sebelas Maret\n");
echo "<b>File berhasil ditulis</b>";
}
fclose($handle);
?>