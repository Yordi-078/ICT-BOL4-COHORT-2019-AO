var prijsFris = 2.00;
var prijsBier = 3.20;
var prijsWijn = 2.50;

var prijsBitterballen = 3.50;
var prijsFrikandelletjes = 4.00;
var prijsKroketjes = 4.50;

var fris = 0;
var bier = 0;
var wijn = 0;
var bitterballen = 0;
var frikandel = 0;
var kroket = 0;

function drinken(){

    var str = prompt('Dit is het menu van drinken.\n fris \n bier \n wijn\n Wat wilt u bestellen?')

    ober = str.toLowerCase();
  
  
    while(ober != 'stop'){

        if(ober == 'fris'){
             fris = prompt('Hoeveel fris wilt u bestellen? $2.00')
            document.write("Kosten Fris $", fris*prijsFris+"<br>");
        }

        else if(ober == 'bier'){
             bier = prompt('Hoeveel bier wilt u bestellen? $3.20')
            document.write("Kosten Bier $", bier*prijsBier+"<br>");
        }

        else if(ober == 'wijn'){
             wijn = prompt('Hoeveel wijn wilt u bestellen? $2.50')
            document.write("Kosten Wijn $", wijn*prijsWijn+"<br>");
        }

        str = prompt('Wilt u nog iets anders bestellen \n fris \n bier \n wijn \n (stop) om af te rekenen')
        ober = str.toLowerCase();
        

        }

         ober = prompt('Wilt u daar nog wat eten bij? typ (eten) voor eten. Typ (stop) om af te rekenen')
         if(ober == 'eten'){
          eten()
        }

       else  if(ober == "stop"){
         afrekenen();
         return;
        }   
}

function afrekenen(){
    alert('Afrekenen');


    
var totaalFris= fris*prijsFris;
var totaalBier= bier*prijsBier;
var totaalWijn= wijn*prijsWijn;
var totaalBitterballen= bitterballen*prijsBitterballen;
var totaalFrikandelletjes= frikandel*prijsFrikandelletjes;
var totaalKroketjes= kroket*prijsKroketjes;

document.write("Totaal Prijs: $",totaalFris+totaalBier+totaalWijn+totaalBitterballen+totaalFrikandelletjes+totaalKroketjes);




    }
       
function eten(){

    var ober3 = prompt('Dit is het menu van eten. \n bitterballen \n frikandelletjes \n kroketjes \n Wat wilt u bestellen?')

        while(ober3 != 'stop'){

        if(ober3 == 'bitterballen'){
          bitterballen = prompt('Hoeveel wilt u bestellen?(8 stuks) $2.00')
         document.write("Kosten Bitterballen $", bitterballen*prijsBitterballen+"<br>");
        }


        else if(ober3 == 'frikandelletjes'){
          frikandel = prompt('Hoeveel wilt u bestellen?(8 stuks) $3.20')
         document.write("Kosten frikandellen $", frikandel*prijsFrikandelletjes+"<br>");
        }

        else if(ober3 == 'kroketjes'){
          kroket = prompt('Hoeveel wilt u bestellen?(8 stuks) $2.50')
         document.write("Kosten kroketten $", kroket*prijsKroketjes+"<br>");
        }
        ober3 = prompt('Wilt u nog iets anders bestellen \n bitterballen \n frikandelletjes \n kroketjes \n (stop) om af te rekenen')
        }

        ober3 = prompt('Wilt u daar nog wat drinken bij? typ (drinken) voor eten. Typ (stop) om af te rekenen')
         if(ober3 == 'drinken'){
             drinken()
            }

        else if(ober3 == "stop"){
            afrekenen();
            return;
            }   

}

