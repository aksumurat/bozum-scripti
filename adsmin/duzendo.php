<?php
include("ayar.php");
error_reporting(E_ALL ^ E_DEPRECATED);

session_start();
if(!isset($_SESSION["chip"])){
	
echo "Ne diyor Sakıp Sabancı yetkiler yetkiler yetkiler";
}else{

header ("Content-Type: text/html; charset=utf-8");
include('setting.php');
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$ad = filter_var($_POST['ad'], FILTER_SANITIZE_STRING);
$aciklama = filter_var($_POST['aciklama'], FILTER_SANITIZE_STRING);
$oran = filter_var($_POST['oran'], FILTER_SANITIZE_STRING);
$satir1 = filter_var($_POST['satir1'], FILTER_SANITIZE_STRING);
$satir2 = filter_var($_POST['satir2'], FILTER_SANITIZE_STRING);
$satir3 = filter_var($_POST['satir3'], FILTER_SANITIZE_STRING);
$satir4 = filter_var($_POST['satir4'], FILTER_SANITIZE_STRING);
$satir5 = filter_var($_POST['satir5'], FILTER_SANITIZE_STRING);

if (empty($id)) {
echo 'ID Alınamadı !';
}
else{
$query = $db->prepare("UPDATE urun1 SET ad = :ad, aciklama = :aciklama, oran = :oran, satir1 = :satir1, satir2 = :satir2, satir3 = :satir3, satir4 = :satir4, satir5 = :satir5 WHERE id = :id");
$update = $query->execute(array(
':ad' => $ad,
':aciklama' => $aciklama,
':oran' => $oran,
':satir1' => $satir1,
':satir2' => $satir2,
':satir3' => $satir3,
':satir4' => $satir4,
':satir5' => $satir5,
':id' => $id
));
if ( $update ){
print "Oldu O iş";
} 
else{
$error = $query->errorInfo();
echo "MySQL Error: " . $error;
}
}

}
?>