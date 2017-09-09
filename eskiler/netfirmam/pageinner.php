<head>
<meta http-equiv="content-type" content="charset=iso-8859-9"/>
</head>

<?php
	
	
	
	
	
?>
<script language="javascript" type="text/javascript">
function exect(amacid,hedefid)
{
	var amac;
	var amac2;
	var hedef;
	amac = document.getElementById(amacid).innerHTML;
	amac2 = document.getElementById(hedefid).innerHTML;
	hedef = document.getElementById(hedefid);
	hedef.innerHTML = amac2 + amac ;
	//alert(amac);
	
	}
function secen(secn)
{
	switch (secn)
	{
		case "op1":
		document.getElementById('op1').innerHTML;
		break;
		case "op2":
		
		break;
		case "op3":
		
		break;
		case "op4":
		
		break;
		
		
	}
	
	
}



</script>

<div id="main" style="text-align:center;height:300px ;width:1024px;position:inherit;">

<div style="width:98%;height:10%; "><div id="amac">
<table style="width:100%; border:none;">
<td style="width:78%; border:none;">
Nesne : <input type="text" id="nname" size="30"/>
&nbsp;&nbsp;
Yükseklik : <input type="text" id="nuyksek" size="10"/>
&nbsp;&nbsp;
Genişlik : <input type="text" id="ngenis" size="10"/>
&nbsp;&nbsp;
İçerik :&nbsp; <select id="secenek" onchange="secen(this.value)" >
  <option>Seçiminiz...</option>
  <option value="1">Resim</option>
  <option value="2">Bölümm</option>
  <option value="3">Menü;</option>
  <option value="4">Yazı</option>
</select>
</td><td style="width:15%; border:none;text-align:right;">
  <input type="button" value="Tamamla" id="okey" />
  <input type="button" value="Vazgeç" id="cancl" />
</td><td align="right"><input type="button" value="Düzenle..." /></td>
</table>
</div>
<div id="hedef">

</div>
<!----
<input style="visibility:hidden;position:inherit" type="button" value="Ekle..." onclick="exect('amac','hedef')"/>
--->
</div>

<div style="height:98%"><br />


</div>



</div>

<div id="op1" style="position:absolute;visibility:hidden">
<textarea style="width:90%;height:90%;"></textarea>
</div>
<div style="position:absolute;visibility:hidden">
<img src="" style="width:768px;height:120px" /><br /><br />
<input type="file" size="50" name="bannersec" id="bannersec" />
<input type="submit" value="Tamam..." />
</div><div id="op2" style="position:absolute;visibility:hidden">
<table width="789" height="270"><tr>
<td width="400"><div id="bolumizle"></div></td>
<td width="500">
Başlık : <input type="text" name="bbaslik" /><br /><br />
Bölüm Sayısı : <select><option selected="selected">2</option><option>3</option><option>4</option></select><br /><br />
Alt Bilgi : <select><option selected="selected">Alt Bilgi</option><option>Kontorller</option></select>
</td></tr></table></div>
<div id="op3" style="position:absolute;visibility:hidden">
<table width="712" height="249">
<tr><td width="374" height="39">

<div>
<table><tr><td><div contenteditable >Menu1</div></td></tr></table>
</div>

</td></tr><tr><td align="center">
<input type="button" value="Menü Ekle + " /><input type="button" value="Menü Çıkar - " />
</td></tr></table></div>
</div><div id="op4" style="position:absolute;visibility:hidden">
<table width="750" height="350"><tr>

<td width="253">
<div style="width:100%">
<table>
<tr><td>Menü 1</td></tr>
<tr><td>Menü 2</td></tr>
</table>
</div>
</td>

<td width="485" align="center">
<input type="button" value="Menü Ekle + " /><input type="button" value="Menü Çıkar - " />
</td></tr></table>

</div>