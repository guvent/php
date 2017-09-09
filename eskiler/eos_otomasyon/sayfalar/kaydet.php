<?php
$git="ogrencibilgi";
require 'bag.php';
 
function ogrenciBilgi(){
	echo 
	'<form action="kaydet.php" method="post" >';
	//ögrenci bilgileri//
    echo '<h3>Ögrenci Bilgileri</h3>
	
			 <table  border="1">
				  
				  <tr>
					<td>Öğrenci Adı :</td>
					<td><input type="text" id="ogrenciAdi" name="ogrenciAdi"></input></td>
				  </tr>
				  <tr>
					<td>Öğrenci Soyadı :</td>
					<td><input type="text" id="ogrenciSoyadi" name="ogrenciSoyadi"></input></td>
				  </tr>
				  <tr>
					<td>Öğrenci TC :</td>
					<td><input type="text" id="ogrenciTc" name="ogrenciTc"></input></td>
				  </tr>
				  <tr>
					<td>Öğrenci Telefonu :</td>
					<td><input type="text" id="ogrenciTel" name="ogrenciTel"></input></td>
				  </tr>
				  <tr>
					<td>Öğrenci E-Posta :</td>
					<td><input type="text" id="ogrenciEposta" name="ogrenciEposta"></input></td>
				  </tr>		  
				  
		</table>';
		
		//ögrenci bilgileri//
		// Ögrenci Alınan Dersler //
		
		echo '<h3>Ögrenci Alınan Dersler</h3>';
		echo ' <table border="1">';
		for($i=1; $i<=6;$i++){
			
			echo '<tr>
					<td>'.$i.'</td>
					<td>
						<select id="dersSecim'.$i.'">	
						<option value="Türkçe I: Yazılı Anlatım">Türkçe I: Yazılı Anlatım</option>
						<option value="Eğitim Bilimine Giriş">Eğitim Bilimine Giriş</option>
						<option value="Atatürk İlkeleri ve İnkılâp Tarihi I">Atatürk İlkeleri ve İnkılâp Tarihi I</option>
						<option value="Yabancı Dil I">Yabancı Dil I</option>
						<option value="Eğitimde Bilişim Teknolojileri I">Eğitimde Bilişim Teknolojileri I</option>
						<option value="Matematik I">Matematik I</option>
						</select>
					</td>
					<td>
						<select id="dersHocaSecim'.$i.'">	
						<option value="HÜSEYİN SEÇER">HÜSEYİN SEÇER</option>
						<option value="Ahmet Ragıp ÖZPOLAT">Ahmet Ragıp ÖZPOLAT</option>
						<option value="Yusuf Ziya KESKİN">Yusuf Ziya KESKİN</option>
						<option value="GÜN KARAHAN4">OGÜN KARAHAN</option>
						<option value="RECEP ÖZ">RECEP ÖZ</option>
						<option value="Matematik I">Matematik I</option>
						</select>
					</td>
					<td><select id="dersKrediSecimi'.$i.'">	
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						</select></td>
				 	 </tr>';
				 

			
			}
		
	 echo ' </table>';
			
		//**************************//		
				
		
		// Ders Programı //
		
			echo '<h3>Ögrenci Alınan Dersler</h3>';
		echo ' <table border="1">';
		for($i=1; $i<=6;$i++){
			
			echo '<tr>
					<td>'.$i.'</td>
					<td>
						<select id="dersSecim'.$i.'">	
						<option value="Türkçe I: Yazılı Anlatım">Türkçe I: Yazılı Anlatım</option>
						<option value="Eğitim Bilimine Giriş">Eğitim Bilimine Giriş</option>
						<option value="Atatürk İlkeleri ve İnkılâp Tarihi I">Atatürk İlkeleri ve İnkılâp Tarihi I</option>
						<option value="Yabancı Dil I">Yabancı Dil I</option>
						<option value="Eğitimde Bilişim Teknolojileri I">Eğitimde Bilişim Teknolojileri I</option>
						<option value="Matematik I">Matematik I</option>
						</select>
					</td>
					<td>
						<select id="dersHocaSecim'.$i.'">	
						<option value="HÜSEYİN SEÇER">HÜSEYİN SEÇER</option>
						<option value="Ahmet Ragıp ÖZPOLAT">Ahmet Ragıp ÖZPOLAT</option>
						<option value="Yusuf Ziya KESKİN">Yusuf Ziya KESKİN</option>
						<option value="GÜN KARAHAN4">OGÜN KARAHAN</option>
						<option value="RECEP ÖZ">RECEP ÖZ</option>
						<option value="Matematik I">Matematik I</option>
						</select>
					</td>
					<td><select id="dersKrediSecimi'.$i.'">	
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						</select></td>
				 	 </tr>';
				 

			
			}
		
	 echo ' </table>';	  

	
	 						
   echo '</form>';
	
}

/*$sorgu="INSERT INTO ogrencibilgi (adi,soyad,tc,tel,eposta) values ('osman','horasan','123456','500000','ohorasan')";
 
if (mysqli_query($vt, $sorgu)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sorgu . "<br>" . mysqli_error($vt);
}*/
?>



<?php
ogrenciBilgi();
 ?>