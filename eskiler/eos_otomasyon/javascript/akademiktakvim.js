function voiceStartCallback() {
        console.log("Voice started");		
		recognition.stop();
		document.getElementById('results').value="";
    }
	
function voiceEndCallback() {
        console.log("Voice ended");		
		recognition.start();
		document.getElementById('results').value="";
		git();
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
function git(){
	window.location.href="admin.php";
	}

function akademik(){
	for(var i=0; i<=0;i++)
			   {
			
				   
				   soyle(document.getElementById('tablo').textContent +'- okunuyor -'+AKAD[i]+ document.getElementById('uyari').textContent);		   
				   
				   
			   }
	 
	
	}
        
	
	

	 
function ProgramiOku(){
			
    setTimeout(function(){akademik();},2000);
	
	}
