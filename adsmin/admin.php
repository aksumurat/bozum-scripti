<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["chip"])){
	
echo "<form action=\"login.php\" method=\"POST\">
<table align=\"center\">
<tr>
<td>Kullanici Adi</td>
<td>:</td>
<td><input type=\"text\" name=\"username\"></td>
</tr>
<tr>
<td>Sifre</td>
<td>:</td>
<td><input type=\"password\" name=\"password\"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type=\"submit\" value=\"Giriş\"></td>
</tr>
</table>
</form>";
}else{
	include('setting.php');
?>
<html>		
<head>
<title>Hoşgeldin admin</title>
<style>
body {background-color: ffff;}
.layout {
  width: 100%;
  display: grid;
  grid-template-rows: 1fr;
  grid-template-columns: repeat(4, 1fr);
  gap: 8px;
}
 .kirmizi {
        background-color: #FB6090;
    }
	 .sari {
        background-color: #F7D6D0;
    }
	 .yesil {
        background-color: #FFC5D0;
    }
	.mor {
        background-color: #821D30;

    }
	.vertical-center {
  margin: 0;
  position: absolute;
  top: 20%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script type="text/javascript">
function sil(id){
	$('#ssonuc').html('Silindi');
	jQuery.ajax({
		type : 'GET',
		url : 'sildo.php',
		data : "id="+id,
		success: function(ssonuc){		
			$('#ssonuc').html(ssonuc);
		}
	})
}
</script>
<script type="text/javascript">
function send(){
$('#scss').slideDown('slow');
$("#scss").html('Ekleniyor ...');
$.ajax({
type:'POST',
url:'ekledo.php',
data:$('#ekle').serialize(),
success:function(cevap){
$("#scss").html(cevap)
}
})
}
</script>

<script type="text/javascript">
function popupwindow(url, title, w, h) {
  wLeft = window.screenLeft ? window.screenLeft : window.screenX;
  wTop = window.screenTop ? window.screenTop : window.screenY;

  var left = wLeft + (window.innerWidth / 2) - (w / 2);
  var top = wTop + (window.innerHeight / 2) - (h / 2);
  return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
}
</script>
<script type="text/javascript">
            $(document).ready(function() 
            { 
                $('a').click(function() 
                    {
                        $(this).hide(); 
                    });
            });
        </script>
</head>
<body>	
	



<section class="layout">
  <div class="yesil" align="center"><p align="center"><strong>Paket Ekle</strong></p>
  <p align="center"><strong>Site Görüntüsü Sağlığı Açısından 6 Ürün İle Sınırlandırın ve ya 3 ve katları şeklinde paket girişi yapın.</strong></p>
<form id="ekle">
<input name="ad" type="text" onfocus="this.value=''" value="ürün adı" /> <br /> 
<input name="aciklama" type="text" onfocus="this.value=''" value="ürün açıklama" /> <br /> 
<input name="oran" type="text" onfocus="this.value=''" value="% Oran" /> <br /> 
<input name="satir1" type="text" onfocus="this.value=''" value="satir1" /> <br /> 
<input name="satir2" type="text" onfocus="this.value=''" value="satir2" /> <br /> 
<input name="satir3" type="text" onfocus="this.value=''" value="satir3" /> <br /> 
<input name="satir4" type="text" onfocus="this.value=''" value="satir4" /> <br /> 
<input name="satir5" type="text" onfocus="this.value=''" value="satir5" /> <br /> 
<span style="color: red" id="scss"></span>
<input type="button" onclick="send();" value="Ekle" />
</form></div>
  <div class="sari" align="center"><p><strong>Paket Düzenle</strong></p>
<p><?php
$query = $db->query("SELECT * FROM urun1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){ ?>
	  
	  <li><button onclick="popupwindow('duzenle.php?id=<?php print $row['id']; ?>', 'hello', 400, 400)">
   <?php print $row['ad']; ?>
</button></li>
	 <?php
     }
}
?></p></div>
  <div class="kirmizi" align="center"><p><strong>Paket Sil</strong></p>
<?php
$query = $db->query("SELECT * FROM urun1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){ ?>
	<li><a href="javascript:void(0)" onclick="sil('<?php print $row['id']; ?>')"><?php print $row['ad']; ?> </a></li>
	<span style="color: red" id="ssonuc"></span> 
	 <?php
     }
}
?></div>
<div class="mor" align="center"><?php
echo "<a href=\"logout.php\" class=\"vertical-center\"><button>Çıkış Yap</button></a>";
}
?></div>
</section>

</body>
</html>