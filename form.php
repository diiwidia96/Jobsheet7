
<html>
<body>
<?php
$kampusku ="STEKOM";
$alamat1 ="jL. Majapahit 304 Semarang";
$alamat2 ="jL. Majapahit 605 Semarang";
echo"<form action=\"linkform4.php\"method=\"post\">":
echo"Mengirim 3 variabel sekaligus ke halaman link4.php<br>";
echo"<input name=\"Kampusku\" type=\"hidden\"value=\"$kampusku\">";
echo"<input name=\"alamat1\" type=\"hidden\"value=\"$alamat1a\">";
echo"<input name=\"alamat2\" type=\"hidden\"value=\"$alamat2\">";
echo"<input name=\"Kirim\" type=\"submit\"value=\"$kirimkan\">";
echo"</form>"
?>
</body>
</html>
