<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["chip"])){
	
echo "Ne diyor Sakıp Sabancı yetkiler yetkiler yetkiler";
}else{

header ("Content-Type: text/html; charset=utf-8");
include('setting.php');

$ad = filter_var($_POST['ad'], FILTER_SANITIZE_STRING);
$aciklama = filter_var($_POST['aciklama'], FILTER_SANITIZE_STRING);
$oran = filter_var($_POST['oran'], FILTER_SANITIZE_STRING);
$satir1 = filter_var($_POST['satir1'], FILTER_SANITIZE_STRING);
$satir2 = filter_var($_POST['satir2'], FILTER_SANITIZE_STRING);
$satir3 = filter_var($_POST['satir3'], FILTER_SANITIZE_STRING);
$satir4 = filter_var($_POST['satir4'], FILTER_SANITIZE_STRING);
$satir5 = filter_var($_POST['satir5'], FILTER_SANITIZE_STRING);


 $ekle = $db->prepare("INSERT INTO urun1(ad,aciklama,oran,satir1,satir2,satir3,satir4,satir5)
    VALUES(:ad, :aciklama, :oran, :satir1, :satir2, :satir3, :satir4, :satir5)");
$ekle->execute(array(
"ad" => "$ad",
"aciklama" => "$aciklama",
"oran" => "$oran",
"satir1" => "$satir1",
"satir2" => "$satir2",
"satir3" => "$satir3",
"satir4" => "$satir4",
"satir5" => "$satir5"
));


}
?>