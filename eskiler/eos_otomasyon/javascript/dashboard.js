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
function soyle1(metin1,index1){	
var DiziMetin1=new Array();
DiziMetin1[index1]=metin1;
responsiveVoice.speak(DiziMetin1[index1],'Turkish Female',parameters);	
	 }
/*menü icerigi */

function MenuBir(){	 	  
		  soyle1('Öğrenci Bilgilendime Menüsü Okunuyor '+a ,'Lütfen Ulaşmak İstediginiz Menüyü Söyleyiniz',1);
		  setInterval(function(){
			  if(document.getElementById('results').value!="")
			  {
if(document.getElementById('OBUM1').textContent.toLowerCase()==document.getElementById('results').value.toLowerCase()){                   window.location.href=document.getElementById("l1").href;}
else if(document.getElementById('OBUM2').textContent.toLowerCase()==document.getElementById('results').value.toLowerCase()){                   window.location.href=document.getElementById("l2").href;}
else if(document.getElementById('OBUM3').textContent.toLowerCase()==document.getElementById('results').value.toLowerCase()){                   window.location.href=document.getElementById("l3").href;}
else if(document.getElementById('OBUM4').textContent.toLowerCase()==document.getElementById('results').value.toLowerCase()){                   window.location.href=document.getElementById("l4").href;}
else if(document.getElementById('OBUM5').textContent.toLowerCase()==document.getElementById('results').value.toLowerCase()){                   window.location.href=document.getElementById("l5").href;}
else if(document.getElementById('OBUM6').textContent.toLowerCase()==document.getElementById('results').value.toLowerCase()){                   window.location.href=document.getElementById("l6").href;}
else if(document.getElementById('OBUM7').textContent.toLowerCase()==document.getElementById('results').value.toLowerCase()){                   window.location.href=document.getElementById("l7").href;}

			
				else{
					  window.location.href="admin.php";
					}  
				  
				  
				  }
			  
			  },3000);
		 }


/***********************/
	 
	 
	function oku(){
		
		
			MenuBir();
			
			
		
		}
	