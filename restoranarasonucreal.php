<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes, maximum-scale=2.0">
    <title>Luogo</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <body bgcolor="#F1EBEB">
    <nav class="nav">
        <img id="canberk-logo" src="images/Luogo.jpg" />
   <ul id="menu">
            <li><a href="index.html">Ana Sayfa</a>
            </li>
            <li><a href="hakkimizda.html">Hakkımızda</a>
            </li>
            <li><a href="firstdisplay1.html">Hadi Bulalım!</a>
            </li>
           </ul>

</nav>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</html>
<?php
header("Content-Type: text/html; charset=ISO-8859-9");
require('db.php');
mysql_select_db("thesis");
$search = mysql_real_escape_string(trim($_POST['ara']));
$findrestoran=mysql_query("SELECT tur.turbilgileri,kimle.kisibilgileri,restoranreal.restoranadi,url.url_add,engelliler.engellilerbilgi,otopark.otoparktur,cocukoyunodasi.cocukoyunodasi_tur,canlimuzik.canlimuzik_tur,dismekan.dismekan_tur,organikurun.organiktur FROM restoranreal INNER JOIN tur ON tur.tur_id=restoranreal.tur_id INNER JOIN kimle ON kimle.kim_id=restoranreal.kim_id INNER JOIN cocukoyunodasi ON cocukoyunodasi.cocukoyunodasi_id=restoranreal.cocukoyunodasi_id INNER JOIN url ON url.url_id=restoranreal.url_id INNER JOIN engelliler ON engelliler.engelli_id=restoranreal.engelli_id INNER JOIN otopark ON otopark.otopark_id=restoranreal.otopark_id INNER JOIN canlimuzik ON canlimuzik.canlimuzik_id=restoranreal.canlimuzik_id INNER JOIN dismekan ON dismekan.dismekan_id=restoranreal.dismekan_id INNER JOIN organikurun ON organikurun.organik_id=restoranreal.organik_id WHERE turbilgileri LIKE '%$search%' OR turbilgileri LIKE '%$search%' OR engellilerbilgi LIKE '%$search%' OR otoparktur LIKE '%$search%' OR cocukoyunodasi_tur LIKE '%$search%'OR canlimuzik_tur LIKE '%$search%'OR dismekan_tur LIKE '%$search%'OR organiktur LIKE '%$search%' ");


if($findrestoran==FALSE){
die(mysql_error());
}

if($_POST['ara']=='uygun'){
echo "<font face='Avenir Next'>Engelli dostu restoran seçildi";
while($row=mysql_fetch_array($findrestoran)){
$url=$row['url_add'];
$restoranadi=$row['restoranadi'];
echo '<br>';
echo "<font face='Avenir Next'><p><a href='$url'>$restoranadi</p></a>";
}
}
echo "<table border='1'>";
if($_POST['ara']=='organikurunvar'){
echo "<font face='Avenir Next'>Organik ürün restoranı seçildi";
while($row=mysql_fetch_array($findrestoran)){
$url=$row['url_add'];
$restoranadi=$row['restoranadi'];
echo "<tr>";
echo "<td>";
echo "<td>Kategori</td>";
$kimle=$row['kisibilgileri'];
$turbilgi=$row['turbilgileri'];
echo "</tr>";
echo"<td>";
echo "Restoran Adı";
echo "<font face='Avenir Next'><p><a href='$url'>$restoranadi</p></a>";
echo "<td>";
echo "$kimle";
echo "$turbilgi";

}
}
if($_POST['ara']=='canlimuzikvar'){
echo "<font face='Avenir Next'>Canlı müzik seçildi";
while($row=mysql_fetch_array($findrestoran)){
$url=$row['url_add'];
$restoranadi=$row['restoranadi'];
echo '<br>';
echo "<font face='Avenir Next'><p><a href='$url'>$restoranadi</p></a>";
}
}

if($_POST['ara']=='var'){
echo "<font face='Avenir Next'>Otopark seçildi";
while($row=mysql_fetch_array($findrestoran)){
$url=$row['url_add'];
$restoranadi=$row['restoranadi'];
echo '<br>';
echo "<p><font face='Avenir Next'><a href='$url'>$restoranadi</p></a>";
}
}
if($_POST['ara']=='oyunodasivar'){
echo "<font face='Avenir Next'>Oyun odası seçildi";
while($row=mysql_fetch_array($findrestoran)){
$url=$row['url_add'];
$restoranadi=$row['restoranadi'];
echo '<br>';
echo "<p><font face='Avenir Next'><a href='$url'>$restoranadi</p></a>";
}
}
if($_POST['ara']=='dismekanvar'){
echo "<font face='Avenir Next'>Dış mekan seçildi";
while($row=mysql_fetch_array($findrestoran)){
$url=$row['url_add'];
$restoranadi=$row['restoranadi'];
echo '<br>';
echo "<p><font face='Avenir Next'><a href='$url'>$restoranadi</p></a>";
}
}

if($_POST['ara']!='deniz'){
if($_POST['ara']!='tr'){
if($_POST['ara']!='uygun'){
if($_POST['ara']!='var'){
if($_POST['ara']!='canlimuzikvar'){
if($_POST['ara']!='oyunodasivar'){
if($_POST['ara']!='dismekanvar'){
if($_POST['ara']!='organikurunvar'){
if($_POST['ara']!='akdeniz'){
if($_POST['ara']!='fastfood'){
echo "<font face='Avenir Next'>Sonuç bulunamadı";
}
}
}
}
}
}
}
}
}
}
echo "<table border='1'>";

while($row=mysql_fetch_array($findrestoran)){
$url=$row['url_add'];
$restoranadi=$row['restoranadi'];
$turbilgileri=$row['turbilgileri'];
echo "<tr>";
echo "<td>";
echo "<td>Kategori</td>";
$kimle=$row['kisibilgileri'];
$turbilgi=$row['turbilgileri'];
echo "</tr>";
echo"<td>";
echo "Restoran Adı";
echo "<font face='Avenir Next'><p><a href='$url'>$restoranadi</p></a>";
echo "<td>";
echo "$kimle";
echo "$turbilgileri";
}



?>
</html>