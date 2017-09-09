<?php
include("sayfalar/bag.php");
global $id;
$id=$_GET['d'];
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


global $saatDizi;
$sorgu2=mysqli_query($vt,"select * from dersprogrami where id=1");
while($ogrenci2=mysqli_fetch_array($sorgu2))
	{     
		$saatDizi[]=$ogrenci2['dersSaati'];
		
		
		}

global $dersPDizi;


for($ii=1;$ii<=5;$ii++){

$sorgu3=mysqli_query($vt,"select * from dersprogrami where id=$ii");

while($ogrenci3=mysqli_fetch_array($sorgu3))
	{     
	    
		$dersPDizi[]=$ogrenci3['dersAdi']."<br>";
		
		
		}
		}
       



?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil Sayfası</title>

<link rel="stylesheet" href="menu.css" type="text/css" media="screen"/>
<link href="profil.css" rel="stylesheet" type="text/css" />
<script src="javascript/dersprogrami.js" language="javascript" type="text/javascript"></script>
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
       	      <h6><img src="img/takvim.png" width="1000" height="1000" />Haftalık Ders Programı</h6></div>
            <div style="border:1px solid #09C; border-radius:10px; width:98%; margin-left:1%; margin-bottom:5px; margin-top:-40px;">
            <p>&nbsp;</p>
            <table width="95%" border="1" align="center" class="TabloForm">
              <tr>
                <td colspan="8" align="center"><div>HAFTALIK DERS PROGRAMI</div></td>
              </tr>
              <tr>
                <td colspan="8" align="center"><div><?php echo $adi.' '.$soyad; ?></div></td>
              </tr>
              <tr>
                <td width="17%" align="center"><div></div></td>
                <td width="11%" align="center"><div id="G1">Pazartesi</div></td>
                <td width="13%" align="center"><div id="G2">Salı</div></td>
                <td width="12%" align="center"><div id="G3">Çarşamba</div></td>
                <td width="12%" align="center"><div id="G4">Perşembe</div></td>
                <td width="12%" align="center"><div id="G5">Cuma</div></td>
        
              </tr>
              <tr>
                <td align="center"><div id="S1"><?php echo $saatDizi[0]; ?></div></td>
                <td align="center"><div id="G1D1"><?php echo $dersPDizi[0]; ?></div></td>
                <td align="center"><div id="G2D1"><?php echo $dersPDizi[8]; ?></div></td>
                <td align="center"><div id="G3D1"><?php echo $dersPDizi[16]; ?></div></td>
                <td align="center"><div id="G4D1"><?php echo $dersPDizi[24]; ?></div></td>
                <td align="center"><div id="G5D1"><?php echo $dersPDizi[32]; ?></div></td>
                
                
              </tr>
              <tr>
                <td align="center"><div id="S2"><?php echo $saatDizi[1]; ?></div></td>
                <td align="center"><div id="G1D2"><?php echo $dersPDizi[1]; ?></div></td>
                <td align="center"><div id="G2D2"><?php echo $dersPDizi[9]; ?></div></td>
                <td align="center"><div id="G3D2"><?php echo $dersPDizi[17]; ?></div></td>
                <td align="center"><div id="G4D2"><?php echo $dersPDizi[25]; ?></div></td>
                <td align="center"><div id="G5D2"><?php echo $dersPDizi[33]; ?></div></td>
            
                
              </tr>
              <tr>
                <td align="center"><div id="S3"><?php echo $saatDizi[2]; ?></div></td>
                <td align="center"><div id="G1D3"><?php echo $dersPDizi[2]; ?></div></td>
                <td align="center"><div id="G2D3"><?php echo $dersPDizi[10]; ?></div></td>
                <td align="center"><div id="G3D3"><?php echo $dersPDizi[18]; ?></div></td>
                <td align="center"><div id="G4D3"><?php echo $dersPDizi[26]; ?></div></td>
                <td align="center"><div id="G5D3"><?php echo $dersPDizi[34]; ?></div></td>
               
              </tr>
              <tr>
                <td align="center"><div id="S4"><?php echo $saatDizi[3]; ?></div></td>
                <td align="center"><div id="G1D4"><?php echo $dersPDizi[3]; ?></div></td>
                <td align="center"><div id="G2D4"><?php echo $dersPDizi[11]; ?></div></td>
                <td align="center"><div id="G3D4"><?php echo $dersPDizi[19]; ?></div></td>
                <td align="center"><div id="G4D4"><?php echo $dersPDizi[27]; ?></div></td>
                <td align="center"><div id="G5D4"><?php echo $dersPDizi[35]; ?></div></td>
                
              </tr>
              <tr>
                <td align="center"><div id="S5"><?php echo $saatDizi[4]; ?></div></td>
                <td align="center"><div id="G1D5"><?php echo $dersPDizi[4]; ?></div></td>
                <td align="center"><div id="G2D5"><?php echo $dersPDizi[12]; ?></div></td>
                <td align="center"><div id="G3D5"><?php echo $dersPDizi[20]; ?></div></td>
                <td align="center"><div id="G4D5"><?php echo $dersPDizi[28]; ?></div></td>
                <td align="center"><div id="G5D5"><?php echo $dersPDizi[36]; ?></div></td>
              
              </tr>
              <tr>
                <td align="center"><div id="S6"><?php echo $saatDizi[5]; ?></div></td>
                <td align="center"><div id="G1D6"><?php echo $dersPDizi[5]; ?></div></td>
                <td align="center"><div id="G2D6"><?php echo $dersPDizi[13]; ?></div></td>
                <td align="center"><div id="G3D6"><?php echo $dersPDizi[21]; ?></div></td>
                <td align="center"><div id="G4D6"><?php echo $dersPDizi[29]; ?></div></td>
                <td align="center"><div id="G5D6"><?php echo $dersPDizi[37]; ?></div></td>
               
              </tr>
              <tr>
                <td align="center"><div id="S7"><?php echo $saatDizi[6]; ?></div></td>
                <td align="center"><div id="G1D7"><?php echo $dersPDizi[6]; ?></div></td>
                <td align="center"><div id="G2D7"><?php echo $dersPDizi[14]; ?></div></td>
                <td align="center"><div id="G3D7"><?php echo $dersPDizi[22]; ?></div></td>
                <td align="center"><div id="G4D7"><?php echo $dersPDizi[30]; ?></div></td>
                <td align="center"><div id="G5D7"><?php echo $dersPDizi[38]; ?></div></td>
                
              </tr>
              <tr>
                <td align="center"><div id="S8"><?php echo $saatDizi[7]; ?></div></td>
                <td align="center"><div id="G1D8"><?php echo $dersPDizi[7]; ?></div></td>
                <td align="center"><div id="G2D8"><?php echo $dersPDizi[15]; ?></div></td>
                <td align="center"><div id="G3D8"><?php echo $dersPDizi[23]; ?></div></td>
                <td align="center"><div id="G4D8"><?php echo $dersPDizi[31]; ?></div></td>
                <td align="center"><div id="G5D8"><?php echo $dersPDizi[39]; ?></div></td>
              
              </tr>
              <tr>
                <td colspan="8" align="center"><div id="uyari">Lütfen Derslerinize Zamanında ve Düzenli Olarak Gidiniz.</div></td>
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

var SaatD=new Array("");
var DersD=new Array("");
var SaatDersToplam=new Array("");
for(var i=1; i<9; i++){		
		for(var j=1; j<9;j++){
			 SaatD[j]="Saat - "+document.getElementById('S'+j).textContent;
			 DersD[j]=document.getElementById('G'+i+'D'+j).textContent;
			 SaatDersToplam[i]=SaatDersToplam[i]+SaatD[j]+"  "+DersD[j]+" .";
			}
}
		
		
		

		</script>
</html>
