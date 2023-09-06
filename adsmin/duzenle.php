<?php
header ("Content-Type: text/html; charset=utf-8");
include('setting.php');

 $single = $db->prepare('SELECT * FROM urun1 WHERE id = :id');
    $single->execute(array('id' => $_GET['id']));
    while($row = $single->fetch()) {

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
function send(){
$('#scss').fadeOut('slow');
$("#scss").html('updateniyor ...');
$.ajax({
type:'POST',
url:'duzendo.php',
data:$('#update').serialize(),
success:function(cevap){
$("#scss").html(cevap)
}
})
}
</script>

<form id="update">
<input name="ad" type="text" onfocus="this.value=''" value="<?php print $row['ad']; ?>" /> <br /> 
<input name="aciklama" type="text" onfocus="this.value=''" value="<?php print $row['aciklama']; ?>" /> <br /> 
<input name="oran" type="text" onfocus="this.value=''" value="<?php print $row['oran']; ?>" /> <br /> 
<input name="satir1" type="text" onfocus="this.value=''" value="<?php print $row['satir1']; ?>" /> <br /> 
<input name="satir2" type="text" onfocus="this.value=''" value="<?php print $row['satir2']; ?>" /> <br /> 
<input name="satir3" type="text" onfocus="this.value=''" value="<?php print $row['satir3']; ?>" /> <br /> 
<input name="satir4" type="text" onfocus="this.value=''" value="<?php print $row['satir4']; ?>" /> <br /> 
<input name="satir5" type="text" onfocus="this.value=''" value="<?php print $row['satir5']; ?>" /> <br /> 
<input name="id" type="hidden" onfocus="this.value=''" value="<?php print $row['id']; ?>" /> <br />
<span style="color: red" id="scss"></span>
<input type="button" onclick="send();" value="Düzenle" />
</form>
		<?php
    }
?>