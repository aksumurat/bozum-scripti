<?php
header ("Content-Type: text/html; charset=utf-8");
session_start();
ob_start();
session_destroy();
echo "Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>