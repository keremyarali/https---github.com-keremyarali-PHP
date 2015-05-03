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
            <li><a href="firstdisplay1.html">Hadi Bulalım!</a>
            </li>
            <li><a href="restoranistek.html">Restoran ekle</a>
            
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
echo "<font face='Avenir Next'>Üzgünüz,seçimlerinize göre uygun restoran bulamadık";
$baglan=mysql_connect("localhost","root")or die(mysql_error());
mysql_select_db("thesis",$baglan);

?>