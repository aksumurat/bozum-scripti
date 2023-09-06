<?php
header ("Content-Type: text/html; charset=utf-8");
$user = "yonetici";
$pass = "12345";
if (stristr(htmlentities($_SERVER['PHP_SELF']), "ayar.php")) {
	echo "<script>alert('Lameeeeer');</script>";
	die();
}
?>