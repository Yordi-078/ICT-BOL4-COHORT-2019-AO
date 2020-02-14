
var random = words[Math.floor(Math.random() * words.length)];
raadWoord = random.split('');
var currentRow = 1;

setFirstLetterOnBord();

function setFirstLetterOnBord(){
    console.log(raadWoord);
    document.getElementById("r"+currentRow+"c" + 0).innerHTML = raadWoord[0];
}

function check(){
    raadWoordx = random.split('');
    woord = document.getElementById('woord').value;
    woord = woord.toLowerCase();
    woordArray = woord.split('');
    
    console.log(woordArray);
    for(i=0; i< woordArray.length; i++){
        document.getElementById("r"+currentRow+"c" + i).innerHTML=woordArray[i]; 
    }   
    for(a=0; a< woordArray.length; a++){
        document.getElementById("r"+currentRow+"c" + a).style.backgroundColor='white';                        
        if(woordArray[a] == raadWoordx[a]){
            document.getElementById("r"+currentRow+"c" + a).style.backgroundColor='green';
            raadWoordx[a] = "*";
            woordArray[a] = "-";
        }
    }
    for(a=0; a< woordArray.length; a++){
        if(raadWoordx.indexOf(woordArray[a])> -1){
            var pos =  raadWoordx.indexOf(woordArray[a]);
            document.getElementById("r"+currentRow+"c" + a).style.backgroundColor='yellow';
            raadWoordx[a] = "*";
            woordArray[pos] = "-";
        }
    } 
    currentRow = currentRow +1;
    console.log((woordArray[a])
}
    
    
    


    
    
    


	
	
	
	
	
	

	
	

	
	
	

