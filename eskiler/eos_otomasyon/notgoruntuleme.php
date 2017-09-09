<?php
include("sayfalar/bag.php");
global $id;
$id=$_GET['d'];

global $adDizi;
global $vizeDizi;
global $finalDizi;
global $basariDizi;
global $harfliDizi;

$sorgu2=mysqli_query($vt,"select * from dersnot where id=$id");
while($ogrenci2=mysqli_fetch_array($sorgu2))
	{  
	     
		$adDizi[]=$ogrenci2['dersAdi'];
		$vizeDizi[]=$ogrenci2['dersVizeNot'];
		$finalDizi[]=$ogrenci2['dersFinalNot'];
		$basariDizi[]=$ogrenci2['dersBasariNot'];
		$harfliDizi[]=$ogrenci2['dersHarfliNot'];
	  
	   
		}

$sorgu1=mysqli_query($vt,"select * from ogrencibilgi where id=$id");
	while($ogrenci1=mysqli_fetch_array($sorgu1))
	{  
	     global $adi , $soyad ,$tc,$tel,$eposta;
		 $adi=$ogrenci1['adi'];
		 $soyad=$ogrenci1['soyad'];
		 $tc=$ogrenci1['tc'];
		 $tel=$ogrenci1['tel'];
		 $eposta=$ogrenci1['eposta'];
	   
	  
	   
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil Sayfası</title>

<link rel="stylesheet" href="menu.css" type="text/css" media="screen"/>
<link href="profil.css" rel="stylesheet" type="text/css" />
<script src="javascript/notgoruntuleme.js"  language="javascript" type="text/javascript"></script>
<script src="javascript/jquery-2.1.4.min.js" language="javascript" type="text/javascript"></script>
<script src="javascript/responsive-voice.js" language="javascript" type="text/javascript"></script>
<script src="javascript/recognition-voice.js" language="javascript" type="text/javascript"></script>
<script>setTimeout(function(){ProgramiOku();},1000);</script>
</head>

<body>

<div class="site">
<div class="icerik">
  <div class="iceriksag">
	    <div class="icsgprofilresimi">
           	  <img src="img/profil.png" />
           	  <div class="icsgprYazi">
   	       <h3><?php echo $adi.' '.$soyad; ?></h3></div>
        </div>
        <div class="icsgpBilgi">
               <h5><img src="img/fakulteicon.png" /> BÖTE</h5>
              <h5><img src="img/klavyeicon.png" /><?php echo $tc; ?></h5>
              <h5><img src="img/Light-Mail-icon.png" /><?php echo $eposta; ?></h5>
              <h5><img src="img/telicon.png" /><?php echo $tel;?></h5>
              
              
        </div>
          <hr /><br />
            <div><h2><img src="img/yildiz.png" width="74" height="71" /> Menüler </h2></div>
            <div class="icsgpMenu">
     
<ul id="menu">   
	     <li><a href="akademiktakvim.php?d=<?php echo $id; ?>" class="last" id="l1"><div id="OBUM1">Akademik Takvim</div></a></li>
           	<li><a href="dersprogrami.php?d=<?php echo $id; ?>" class="last" id="l2"><div id="OBUM2">Haftalık Ders Programı</div></a></li>
                     <li><a href="sinavprogrami.php?d=<?php echo $id; ?>" class="last" id="l3"><div id="OBUM3">Sınav Programı</div></a></li>
                     <li><a href="devamdurumu.php?d=<?php echo $id; ?>" class="last" id="l4"><div id="OBUM4">Devamsızlık Durumu</div></a></li>
                     <li><a href="alinandersler.php?d=<?php echo $id; ?>" class="last" id="l5"><div id="OBUM5">Alınan Dersler</div></a></li>
            <li><a href="notgoruntuleme.php?d=<?php echo $id; ?>" class="last" id="l6"><div id="OBUM6">Ders Notu Görüntüleme</div></a></li>
                     <li><a href="logout.php" class="last" id="l7"><div id="OBUM7">Çıkış Yap</div></a></li>
                      
			  </ul>
            
            </div>
  </div>
  
  <div class="iceriksol">
   	    <div class="icslDuyurular">
       	    <div>
       	      <h6><img src="img/takvim.png" width="1000" height="1000" />NOT GÖRÜNTÜLEME </h6>
       	    </div>
            <div style="border:1px solid #09C; border-radius:10px; width:98%; margin-left:1%; margin-bottom:5px; margin-top:-40px;">
            <p>&nbsp;</p>
            <table width="95%" border="1" align="center" class="TabloForm">
              <tr>
                <td colspan="8" align="center" id="tablo"><div>NOT LİSTESİ </div></td>
              </tr>
              <tr>
                <td colspan="8" align="center" id="kullanici"><div ><?php echo $adi.' '.$soyad; ?></div></td>
              </tr>
              <tr>
                
                <td width="14%" align="center"><div id="DA">-Ders Adı-</div></td>
                <td width="13%" align="center"><div id="DH">-Ders Hocası-</div></td>
                <td width="12%" align="center"><div id="DV">-Vize Notu-</div></td>
                <td width="12%" align="center"><div id="DF">-Final Notu-</div></td>
                <td width="12%" align="center"><div id="DBN">-Başarı Notu-</div></td>
                <td width="12%" align="center"><div id="DHN">-Harfli Notu-</div></td>
              </tr>
              <tr>
              
                <td align="center"><div id="DA1">-<?php echo $adDizi[0]; ?>-</div></td>
                <td align="center"><div id="DH1">HÜSEYİN SEÇER</div></td>
                <td align="center"><div id="DV1"><?php echo $vizeDizi[0]; ?></div></td>
                <td align="center"><div id="DF1"><?php echo $finalDizi[0]; ?></div></td>
                <td align="center"><div id="DBN1"><?php echo $basariDizi[0]; ?></div></td>
                <td align="center"><div id="DHN1"><?php echo $harfliDizi[0]; ?></div></td>         
                
              </tr>
              <tr>
             
               <td align="center"><div id="DA2">-<?php echo $adDizi[1]; ?>-</div></td>
                <td align="center"><div id="DH2">Ahmet RAGIP</div></td>
                <td align="center"><div id="DV2"><?php echo $vizeDizi[1]; ?></div></td>
                <td align="center"><div id="DF2"><?php echo $finalDizi[1]; ?></div></td>
                <td align="center"><div id="DBN2"><?php echo $basariDizi[1]; ?></div></td>
                <td align="center"><div id="DHN2"><?php echo $harfliDizi[1]; ?></div></td> 
               
              </tr>
              <tr>                
                <td align="center"><div id="DA3">-<?php echo $adDizi[2]; ?>-</div></td>
                <td align="center"><div id="DH3">Yusuf Ziya KESKİN</div></td>
                <td align="center"><div id="DV3"><?php echo $vizeDizi[2]; ?></div></td>
                <td align="center"><div id="DF3"><?php echo $finalDizi[2]; ?></div></td>
                <td align="center"><div id="DBN3"><?php echo $basariDizi[2]; ?></div></td>
                <td align="center"><div id="DHN3"><?php echo $harfliDizi[2]; ?></div></td>       
              </tr>
              <tr>                
                <td align="center"><div id="DA4">-<?php echo $adDizi[3]; ?>-</div></td>
                <td align="center"><div id="DH4">OGÜN KARAHAN</div></td>
                <td align="center"><div id="DV4"><?php echo $vizeDizi[3]; ?></div></td>
                <td align="center"><div id="DF4"><?php echo $finalDizi[3]; ?></div></td>
                <td align="center"><div id="DBN4"><?php echo $basariDizi[3]; ?></div></td>
                <td align="center"><div id="DHN4"><?php echo $harfliDizi[3]; ?></div></td>           
              </tr>
			  <tr>                
                <td align="center"><div id="DA5">-<?php echo $adDizi[4]; ?>-</div></td>
                <td align="center"><div id="DH5">Recep ÖZ</div></td>
                <td align="center"><div id="DV5"><?php echo $vizeDizi[4]; ?></div></td>
                <td align="center"><div id="DF5"><?php echo $finalDizi[4]; ?></div></td>
                <td align="center"><div id="DBN5"><?php echo $basariDizi[4]; ?></div></td>
                <td align="center"><div id="DHN5"><?php echo $harfliDizi[4]; ?></div></td>           
              </tr>
			  <tr>                
                <td align="center"><div id="DA6">-<?php echo $adDizi[5]; ?>-</div></td>
                <td align="center"><div id="DH6">Yavuz SELİM</div></td>
                <td align="center"><div id="DV6"><?php echo $vizeDizi[5]; ?></div></td>
                <td align="center"><div id="DF6"><?php echo $finalDizi[5]; ?></div></td>
                <td align="center"><div id="DBN6"><?php echo $basariDizi[5]; ?></div></td>
                <td align="center"><div id="DHN6"><?php echo $harfliDizi[5]; ?></div></td>           
              </tr>
              <tr>
                <td colspan="8" align="center"><div id="uyari">-Derslerinizde Başarılar Dileriz.-</div></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            
            </div>
   	    </div>
  </div>
    
</div>
<div class="alt"><br />
      <table width="26%" border="0" align="center">
        <tr>
          <td colspan="4" align="center">Bilişim Üniversitesi Bütün Haklar Saklıdır.</td>
        </tr>
        <tr>
          <td width="34%" align="center"><a href="https://www.facebook.com/Bili%C5%9Fim-%C3%9Cniversitesi-736722539865742/"><img src="img/sface.png" width="20" height="20" /></a>
          <a href="https://www.instagram.com/bilisimuniversitesi/"><img src="img/sinstagram.png" width="20" height="20" /></a>
          <a href="https://twitter.com/bilisimuni"><img src="img/stwitter.png" width="20" height="20" /></a>
          <a href="https://www.youtube.com/channel/UCZtiD0fOL3b-m4EmCSSJ4Yg"><img src="img/syoutube.png" width="20" height="20" /></a></td>
        </tr>
        <tr>
          <td colspan="4" align="center">Css Tasarım Uzmanı</td>
        </tr>
      </table>
	  <label for="results"></label>
<textarea name="results" id="results" hidden=""></textarea>
</div>


</body>

<script>


var GNLTD=new Array("");

for(var i=0; i<=0; i++){	
for(var j=1;j<7;j++)	
			 GNLTD[i]=GNLTD[i]+
			 		  document.getElementById('DA').textContent+" , "+
			  		  document.getElementById('DA'+j).textContent+" , "+
			 		  document.getElementById('DH').textContent+" , "+
					  document.getElementById('DH'+j).textContent+" , "+
					  document.getElementById('DV').textContent+" , "+
					  document.getElementById('DV'+j).textContent+" , "+
					  document.getElementById('DF').textContent+" , "+
					  document.getElementById('DF'+j).textContent+" , "+
					  document.getElementById('DBN').textContent+" , "+
					  document.getElementById('DBN'+j).textContent+" , "+
					  document.getElementById('DHN').textContent+" , "+
					  document.getElementById('DHN'+j).textContent+" , ";
					
			}



</script>
</html>
