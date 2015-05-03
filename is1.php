<html>
    <head>
    <h3>Hangi tür restoranda yemek yemeyi tercih edersiniz?</h3>
	<style type="text/css">
	body{ background-image : url('background.jpg');
		background-size : cover ;
	}
	</style>
    </head>
    <body>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="JavaScript">
	

    function checkButton(){
        if(document.form1.tr.checked == true){
            document.write("Türk Yemekleri seçildi.");
			window.location.replace("istr1.html");
        } else if(document.form1.deniz.checked == true){
            document.write("Deniz Ürünleri seçildi.");
			window.location.replace("isdeniz1.html");
        }else if(document.form1.fastfood.checked == true){
            document.write("Fastfood seçildi.");
			window.location.replace("isfastfood1.html");
        }else if(document.form1.akdeniz.checked == true){
            document.write("Akdeniz Yemekleri seçildi.");
			window.location.replace("isakdeniz1.html");
        }
    }
   
    </script>
	
	<form name="form1">
    <input type="radio" name=tr>Türk Yemekleri
    <br>
    <input type="radio" name=deniz>Deniz Ürünleri
    <br>
	<input type="radio" name=fastfood>Fast Food
    <br>
	<input type="radio" name=akdeniz>Akdeniz Yemekleri
    <br>
    <INPUT type="button" value="İleri" onClick='checkButton()'>
    </form>
    </body>
    </html>