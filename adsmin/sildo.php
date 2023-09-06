<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["chip"])){
	
echo "Ne diyor Sakıp Sabancı yetkiler yetkiler yetkiler";
}else{

require_once('setting.php');
$query = $db->prepare("DELETE FROM urun1 WHERE id = :id");
$delete = $query->execute(array(
'id' => $_GET['id']
));
$db = null;

}

?>