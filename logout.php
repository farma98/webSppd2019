<?php
session_start();
session_destroy();
session_unset();

// Menghapus Cookie Secara otomatis
setcookie('id','',time() - 3600);
setcookie('key','',time() - 3600);

header('location:index.php');
?>