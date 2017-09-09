


/* Gerçek Degişkenler Tanımlandı */

/**************************************/

/* konuşmayı degişkene atama fonksiyon */



/******************************************/

/* Ses Konuşma Başlama ve Bitme Durumu */
function voiceStartCallback() {
        console.log("Voice started");		
		recognition.stop();	//Ses Algılama Durdurma	(recognition.js) 
		document.getElementById('results').value="";
    }
	
function voiceEndCallback() {
        console.log("Voice ended");		
		recognition.start();//Ses Algılama Başlatma (recognition.js)
		
		}
	
   

 var parameters = {
        onstart: voiceStartCallback,
        onend: voiceEndCallback
    }
/**************************************/

/* Konuşma Fonksiyonu Oluşturuldu */

function sesliKonus(konusulacakMetin,konusmaDili){	
	responsiveVoice.speak(konusulacakMetin,konusmaDili,parameters);	
	}

/**************************************/

/* sesli okuma Methodu */
function soyle(metin,index){	
var DiziMetin=new Array();
DiziMetin[index]=metin;
responsiveVoice.speak(DiziMetin[index],'Turkish Female',parameters);	
	 }

/************************************/


/* Ses Komutu İle Devam Edilsinmi / Edilmesinmi ( Evet - Hayır ) */   
function sesliKomut(){	
	document.getElementById('kullaniciAdi').value="";
	document.getElementById('kullaniciSifre').value="";
	soyle('Sesli Komut Sistemi İle Devam Etmek İstermisiniz.',0);
	setInterval(function(){
	if(document.getElementById('results').value=="Evet")
	{
		
		sesliKullaniciAdiKomut();
		
		}
		else if(document.getElementById('results').value=="Hayır"){
			soyle('Sesli Komut Sistemi Devre Dışı Bırakıldı',0);
			
			 
			 }
	   
		
		
		},3000);
}
/**************************************/


/* Sesli Kullanıcı Girişi Yapma */
function sesliKullaniciAdiKomut(){	

    soyle('Lütfen Kullanıcı Adınızı Söyleyiniz',1);
	setInterval(function(){ 
			
	       
	  
	  
	      if(document.getElementById('results').value!="")
			{			
				if(document.getElementById('kullaniciAdi').value==""){
							var ali=document.getElementById('results').value;
							var str =ali;
                            var newStr = str.replace(/\s+/g, '');

    							
				document.getElementById('kullaniciAdi').value=newStr;
				
				sesliKullaniciSifreKomut();			
				
				}
		    }
			
		
		
	
		},3000); 
	}




/*************************************/

/* Sesli Kullanıcı Girişi Yapma */

function sesliKullaniciSifreKomut(){
	
	soyle('Lütfen Kullanıcı Şifrenizi Söyleyiniz',2)
	setInterval(function(){if(document.getElementById('results').value!="")
	{		
		if(document.getElementById('kullaniciSifre').value==""){
							var str =document.getElementById('results').value;;
                            var newStr = str.replace(/\s+/g, '');

							  document.getElementById('kullaniciSifre').value=newStr;
							  soyle('Kullanıcı Adınız ve Şifreniz Girildi',3);
							  setTimeout(function(){
								   document.form1.submit();
								  },3000);
							  }
		
		
		}},3000); 
	
	}

/**********************************/
