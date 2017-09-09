function voiceStartCallback() {
        console.log("Voice started");		
		recognition.stop();
		document.getElementById('results').value="";
    }
	
function voiceEndCallback() {
        console.log("Voice ended");		
		recognition.start();
		document.getElementById('results').value="";
    }
    
    var parameters = {
        onstart: voiceStartCallback,
        onend: voiceEndCallback
    }
function soyle(metin,index){	
var DiziMetin=new Array();
DiziMetin[index]=metin;
responsiveVoice.speak(DiziMetin[index],'Turkish Female',parameters);	
	 }


        
	
	
function GunleriOku(){
	
	for(var i=1; i<6;i++)
			   {  
			   if((document.getElementById('G'+i).textContent).toLowerCase()==(document.getElementById('results').value).toLowerCase()){   
			
				   
				   soyle(SaatDersToplam[i]+ document.getElementById('uyari').textContent);
				   
				   
			   }
			   
			   }
			
	
}
	
	 
function ProgramiOku(){
	soyle('Ders Programı Sayfasına , Hoş Geldiniz. Sizin İçin , Hangi Günün Programını , Söylememi İstersiniz',0);
	setInterval(function(){
		   
		   if(document.getElementById('results').value!="")
		   {		  
			  GunleriOku();			  
		   }
		   
		},3000);
	}
