<?php
/********************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus
session yang ada.
*********************************************************/

session_start();
if (isset($_SESSION['Login'])) {
    unset ($_SESSION);
    session_destroy();

    // set the expiration date to one hour ago
    setcookie("id", "", time() - 3600);
    setcookie("key", "", time() - 3600);

    header('Location: '.'login.php');
    die();
}

else {
    header('Location: '.'home.php');
    die();
}
?>