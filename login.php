<?php
/****************************************************
Nama file : login.php
Ini merupakan contoh penciptaan session. Perintah 
session_start() harus ditaruh di perintah pertama tanpa
spasi di depannya. Perintah session_start() harus ada
pada setiap halaman yang berhubungan dengan session
*****************************************************/
session_start();

//cookie check 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id']; 
    $key = $_COOKIE['key'];

    //cookie create 
    $value = 'user';
    $value2 = '123';

    //user check 
    if ($id = $value && $key == $value2){
        $_SESSION['login'] = true;
    }
}

/*************************************************************

Ini merupakan contoh  pemeriksaan session. Pemeriksaan 
session biasanya dilakukan jika suatu halaman memiliki

akses terbatas. Misalnya harus login terlebih dahulu.
**************************************************************/

//pemeriksaan session
if (isset($_SESSION['Login'])) { //jika sudah login
    //menampilkan isi session
    header('Location: '.'home.php');
    die();
}

if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $value = 'user';
    $value2 = '123';

    //periksa login
    if ($user == $value && $pass = $value2) {

        //cek session
        $_SESSION['Login'] = true;

        //cek remember me
        if (isset($_POST["remember"])) {
            //buat cookie
            //setcookie('login', 'true', time()+ 3600);
            setcookie("id", $value, time()+3600); //expire in 1hour
            setcookie("key", $value2, time()+3600); //expire in 1hour
        }

        //menuju ke halaman pemeriksaan session
        header('Location: '.'home.php');
        die();
    }

    $error = true;
} 

else { //session belum ada artinya belum login
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>MY BLOG - LOGIN</title>
</head>
    <body>
    <h2>Login Here...</h2>
        <?php include "form.php";
            $form = new Form ("","Login");
            $form->addField ("user", "USERNAME", "text");
            $form->addField ("pass", "PASSWORD", "password");
            $form->displayForm();
        ?>
    </body>
</html>
<?php } ?>