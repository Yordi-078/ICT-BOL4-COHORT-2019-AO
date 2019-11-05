var prijsfris = 2.00;
var prijsbier = 3.20;
var prijswijn = 2.50;



function drinken(){
    
        var menudrinken = prompt('Dit is het menu van drinken.\n Fris \n Bier \n Wijn\n Wat wilt u bestellen?')


        if(menudrinken == 'Fris'){
            var fris = prompt('Hoeveel fris wilt u bestellen? $2.00')
            document.write("Kosten Fris $", fris*prijsfris+"<br>");{
             }       
             }

    
        if(menudrinken == 'Bier'){
            var bier = prompt('Hoeveel bier wilt u bestellen? $3.20')
            document.write("Kosten Bier $", bier*prijsbier+"<br>");{
        }
        }
        if(menudrinken == 'Wijn'){
            var wijn = prompt('Hoeveel wijn wilt u bestellen? $2.50')
            document.write("Kosten Wijn $", wijn*prijswijn+"<br>");{
            }
            }

            var meer = prompt('Wil je nog meer bestellen (Typ 1) of afrekenen? (Typ 2)')        
            if(meer == 1){
                var menudrinken2 = prompt('Dit is het menu van drinken.\n Fris \n Bier \n Wijn\n Wat wilt u bestellen?')   

            if(menudrinken2 == 'Fris'){
                 var fris2 = prompt('Hoeveel fris wilt u bestellen? $2.00')
                 document.write("Kosten Fris $", fris2*prijsfris+"<br>");{
                 }       
                 }

            if(menudrinken2 == 'Bier'){
                var bier2 = prompt('Hoeveel bier wilt u bestellen? $3.20')
                document.write("Kosten Bier $", bier2*prijsbier+"<br>");{
                }
                }

             if(menudrinken2 == 'Wijn'){
                 var wijn2 = prompt('Hoeveel wijn wilt u bestellen? $2.50')
                document.write("Kosten Wijn $", wijn2*prijswijn+"<br>");{
                  }
                  }

    }
    }


    
    



    

function eten(){
    prompt('Dit is het menu van eten. \n Wat wilt u bestellen?')
}

