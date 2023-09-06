<?php header ("Content-Type: text/html; charset=utf-8"); ?>
<html>
<head>
<title>Bozum Yönetim</title>
</head>
<body>
<form action="login.php" method="POST">
<table align="center">
<tr>
<td>Kullanıcı Adı</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Şifre</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" value="Giriş"></td>
</tr>
</table>
</form>

</body>
</html>