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
            <li><a href="restoranistek.html">Mekanlar</a>
            
            </li>
        </ul>

</html>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<form action="restoranarasonucreal.php" method="post" placeholder="TR,Deniz">
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
?>
<html>
<body>

<meta charset="utf-8">

</body>
</html>


<iframe src="" width="400" align="right" height="300" frameborder="0" style="border:0"">
</iframe>



</html>
<?php

$baglan=mysql_connect("localhost","root")or die(mysql_error());
require('db.php');
mysql_select_db("thesis",$baglan);
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET NAMES 'utf8'");

$islema=mysql_query("SELECT * FROM restorandetay WHERE restoranadi='Öz Hacıbey Kebap'");

if($islema==FALSE){
die(mysql_error());
}
while($listele=mysql_fetch_array($islema)){
echo "<font face='Avenir Next'>Restoran adı:$listele[restoranadi]";
echo "<br>Restoran adresi:$listele[restoranadres]";

}
?>

<html>
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").slideToggle();
    });
});
</script>
</head>
<body>
<?php
$baglan=mysql_connect("localhost","root")or die(mysql_error());
require('db.php');
mysql_select_db("thesis",$baglan);
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET NAMES 'utf8'");

$islema=mysql_query("SELECT * FROM restorandetay WHERE restoranadi='Öz Hacıbey Kebap'");

if($islema==FALSE){
die(mysql_error());
}

while($listele=mysql_fetch_array($islema)){
echo "<button><b><p>Restoran detay</p><font face='Avenir Next'>$listele[restoranadi]</p></b></button>";
echo "<b><p> Engelliler için -> $listele[engelliler]</p>";
echo "<p>$listele[kablosuzinternet]";
echo "<p>Ödeme çeşitleri:$listele[ödeme]";
echo "<p>$listele[otopark]";
echo "<p>$listele[paketservis]";
echo "<p>Çocuklar için:$listele[oyunodasi]";
echo "<p>$listele[rezervasyonolanagi]";
echo "<p>$listele[diyetmenü]";
echo "<p>$listele[klimasistemi]";
}
?>
<?php
echo "<p align='right'><font face='Avenir Next'>Restoran'ın haritada görünümü";

?>


<?php
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<p>";
echo "Dilerseniz bu kategorideki diğer restoranları inceleyebilirsiniz:";
echo "</p>";

$baglan=mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("thesis",$baglan);

$islema=mysql_query("SELECT tur.turbilgileri,ortam.ortambilgi,restoranreal.restoranadi,yer.isim,url.url_add FROM restoranreal INNER JOIN tur ON tur.tur_id=restoranreal.tur_id INNER JOIN ortam ON ortam.ortam_id=restoranreal.ortam_id INNER JOIN yer ON yer.yer_id=restoranreal.yer_id INNER JOIN url ON url.url_id=restoranreal.url_id AND ortam.ortam_id='2' AND tur.tur_id='1' AND yer.yer_id='34' AND restoranreal.kim_id='1'");

while($row=mysql_fetch_array($islema)){
$url=$row['url_add'];
$restoranadi=$row['restoranadi'];
echo "<p>";
echo '<br>';
echo "<a href='$url'>$restoranadi</p></a>";
}




?> 	
<html>
<br>

</html>	
