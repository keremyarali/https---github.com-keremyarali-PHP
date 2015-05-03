<html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<head>

</head>
<body bgcolor="#F1EBEB">
<?php
echo "<font face='Avenir Next'>Seçimlerinize göre aday restoranlar aşağıda listelenmiştir";
$baglan=mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("thesis",$baglan);

$islema=mysql_query("SELECT kimle.kisibilgileri,tur.turbilgileri,ortam.ortambilgi,restoran.restoranadi,yer.isim,butce.butcearalik,url.url_add FROM restoran INNER JOIN kimle ON kimle.kim_id=restoran.kim_id INNER JOIN tur ON tur.tur_id=restoran.tur_id INNER JOIN ortam ON ortam.ortam_id=restoran.ortam_id INNER JOIN yer ON yer.yer_id=restoran.yer_id INNER JOIN butce ON butce.butce_id=restoran.butce_id INNER JOIN url ON url.url_id=restoran.url_id AND kimle.kim_id='1' AND ortam.ortam_id='2' AND tur.tur_id='1' AND yer.yer_id='34' AND butce.butce_id='11'");


if($islema==FALSE){
die(mysql_error());
}


while($row=mysql_fetch_array($islema)){
$url=$row['url_add'];
$restoranadi=$row['restoranadi'];
echo '<br>';
echo "<p><a href='$url'>$restoranadi</p></a>";
}







?>