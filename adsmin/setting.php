<?php


error_reporting(E_ALL ^ E_DEPRECATED);
if (stristr(htmlentities($_SERVER['PHP_SELF']), "setting.php")) {
	echo "<script>alert('Lameeeeer');</script>";
	die();
}
try {
$db = new PDO("mysql:host=localhost;dbname=dbadı;charset=utf8", "kullanıcıadı", "12345");
} catch ( PDOException $e ){
print $e->getMessage();
}













$site_url="";
$site_adi="Site Title";
$site_slogan="Site Slogan";
$site_meta="Online chip bozdurmak isteyen kullanıcıların faydalanabileceği bir tek sayfa scripti";
$site_keyword="chip,maximus,axess,bla,bla,bla,";
$site_hakkinda="Site hakkında buraya gelecek";
$site_tlf="+90-595-426-36-71";
$site_tlf_text="İşlem yapmak istiyorum.";

?>