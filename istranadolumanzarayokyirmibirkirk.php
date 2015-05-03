<html>
<head>
    <meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes, maximum-scale=2.0">
    <title>Luogo</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <nav class="nav">
        <img id="canberk-logo" src="images/Luogo.jpg" />
   <ul id="menu">
            <li><a href="index1.html">Ana Sayfa</a>
            </li>
            <li><a href="hakkimizda.html">Hakkımızda</a>
            </li>
            <li><a href="firstdisplay.html">Hadi Bulalım!</a>
            </li>
            <li><a href="mekanlar.html">Mekanlar</a>
            
            </li>
        </ul>

</html>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<form action="restoranarasonuc2.php" method="post" placeholder="TR,Deniz">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="ara"  style="width:300px"; height="500" placeholder="Kategoriye göre restoran ara"/>
<input type="submit"  value="Ara"  name="arama yap">
</form>
</nav>

<body bgcolor="#F1EBEB">
<?php
require('db.php');
echo "<font face='Avenir Next'>Seçimlerinize göre aday restoranlar aşağıda listelenmiştir";
$baglan=mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("thesis",$baglan);

$islema=mysql_query("SELECT kimle.kisibilgileri,tur.turbilgileri,ortam.ortambilgi,restoran.restoranadi,yer.isim,butce.butcearalik,url.url_add FROM restoran INNER JOIN kimle ON kimle.kim_id=restoran.kim_id INNER JOIN tur ON tur.tur_id=restoran.tur_id INNER JOIN ortam ON ortam.ortam_id=restoran.ortam_id INNER JOIN yer ON yer.yer_id=restoran.yer_id INNER JOIN butce ON butce.butce_id=restoran.butce_id INNER JOIN url ON url.url_id=restoran.url_id AND kimle.kim_id='3' AND ortam.ortam_id='2' AND tur.tur_id='1' AND yer.yer_id='34' AND butce.butce_id='11'");


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