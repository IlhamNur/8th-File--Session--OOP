<?php
if (isset($_POST['Upload'])) {
    $dir_upload = "images/";
    if(!file_exists('images')) {
        mkdir('images');
    }

    $nama_file = $_FILES['img']['name'];
    
    if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        $cek = move_uploaded_file ($_FILES['img']['tmp_name'], $dir_upload.$nama_file);
        
        if ($cek) {
            $judul = $_POST['judul'];
            $tag = $_POST['tag'];
            $isi = $_POST['isi'];
            $img = $dir_upload.$nama_file;

            //Format data yang akan diparsing
            $data = "\n $judul|$tag|$isi|$img";
      
            //Buka file data.txt, kemudian tuliskan isi variabel di atas ke dalam data.txt
            $fh = fopen("data.txt", "a");
            fwrite($fh, $data);

            //Tutup file data.txt
            fclose($fh);

            //Keterangan bila data berhasil diinput
            header("Location:". "home.php");
            die();
        } 
        
        else {
            die ("File gagal diupload");
        }

    }
}
?>