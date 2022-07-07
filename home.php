<!DOCTYPE HTML>
<html>
<head>
  <title>MY BLOG - HOME</title>
</head>
  <body>
    <?php
      $txt_file = file_get_contents('data.txt');
      $rows = explode("\n", $txt_file);
      array_shift($rows);

      $counter_file="counter.txt";
      if (!file_exists ($counter_file)) { 
      fopen ($counter_file, "w");
      }

      $file = fopen($counter_file,"r");

      $counter = fread($file,10);
      fclose($file);

      $counter++;

      echo "<h2>Selamat Datang pengunjung ke - $counter</h2>";
      $file = fopen($counter_file, "w");
      fwrite($file,$counter);
      fclose($file);

      session_start();
      if (!isset($_SESSION["Login"])) {
          echo 'Masuk agar dapat menambah postingan <a href="login.php"><button>Login</button></a></br></br>';
      }

      else {
          echo '<a href="logout.php"><button>LOGOUT</button></a>';
          echo '<a href="posting.php"><button>Tambah Postingan</button></a></br>';
      }

      echo '<h1>MY BLOG</h1>';
      $i=1;

      foreach($rows as $row => $data) {

        //Memisahkan Item Data dari Pemisah |, array pada PHP dimulai pada index ke-0
        $row_data = explode('|', $data);

        $info[$row]['judul'] = $row_data[0];
        $info[$row]['tag'] = $row_data[1];
        $info[$row]['isi'] = $row_data[2];
        $info[$row]['img'] = $row_data[3];

        //Menampilkan Data
        echo '<h2> Postingan ke- '. $i++ .'</h2>';
        echo '<h3>' . $info[$row]['judul'] . '</h3><br/>';
        echo '<img src='.$info[$row]['img'].' style="height: 500px;"><br/><br/>';
        echo '<b>' . $info[$row]['tag'] . '</b><br/><br/>';
        echo $info[$row]['isi'] . '<br />';
        echo "<hr>";
      }
    ?>
  </body>
</html> 