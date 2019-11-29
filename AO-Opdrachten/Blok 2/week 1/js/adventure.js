
    
var description = document.getElementById("description");
var image = document.getElementById("image");
var button1 = document.getElementById("button1");
var button2 = document.getElementById("button2");
var button3 = document.getElementById("button3");
var inventoryItem = document.getElementById("inventoryItem");

var key = false;
var wapen = false
var handboeien2 = false

function startGame(){
  inventoryItem.style.display = 'none';
  button1.innerHTML = "Start";
  button1.setAttribute('onclick','begin()');
  button2.style.display = 'none';
  button3.style.display = 'none';
  description.innerHTML = "  <h2> Maak je keuze!! </h2> <br> <br> Je bent gepakt bij een  bankoverval. <br>  Je hebt 20 jaar celstraf gekregen. <br> Jij gaat uit de gevangenis ontsnappen!!";
}

function begin(){
description.innerHTML = "<h2> Maak je keuze!! </h2> <br> <br> Je kan op de pauze wachten en de omgeving verkennen. <br> Of je wordt helemaal boos en sloopt alles in je cel!";
image.src ='img/tralies.jpg'
button1.innerHTML = "Wachten op de pauze";
button1.setAttribute('onclick','pauze()');
button2.style.display = 'inline-block';
 button2.innerHTML = "Boos worden";
 button2.setAttribute('onclick','boosWorden()');
}

function boosWorden(){
  description.innerHTML = " <h2> (fout!!) </h2> <br> <br> Je werd boos en werd uit je cel gehaald en meegenomen en in de isoleercel gestopt!!";
  button1.innerHTML = "Ga terug";
button1.setAttribute('onclick','begin()');
button2.style.display = 'none';
}

function pauze(){
  image.src ='img/vechten.jpg'
  description.innerHTML = "<h2> Maak je keuze!! </h2> <br> <br> Het is pauze. Je loopt met de rest naar de luchtplaats. <br> Op de buitenplaats komt er een groepje naar je toe. <br> De leider geeft je een stoot en pakt je vast en zegt: laat zien dat je een man bent en doe wat. <br> <br> Je slaat hem terug!";
  button1.innerHTML = "Vechten";
  button1.setAttribute('onclick','vechten()');
  button2.style.display = 'none';
}

function vechten(){
  image.src ='img/afmaken.jpg'
  description.innerHTML = "<h2> Maak je keuze!! </h2> <br> <br> Je pakt hem bij zen keel en hij begint je te slaan. <h4> Je geeft hem een goede linker hij wankelt!</h4>  <p> Je kan het afmakenm. </p> <br>"; 
  button1.innerHTML = "Geef hem een goede rechter!";
  button1.setAttribute('onclick','afmaken()');
  button2.style.display = 'inline-block';
 button2.innerHTML = "Geef hem een goede linker!";
 button2.setAttribute('onclick','afmaken()');
 button3.style.display = 'inline-block';
 button3.innerHTML = "Geef hem een hoge schop!";
 button3.setAttribute('onclick','afmaken()');
}

function afmaken(){
  image.src ='img/groep.jpg'
  description.innerHTML = "<h2> Maak je keuze!! </h2> <br> <br> De politie grijpt in!! <br> Jullie worden beiden voor 10 dagen in de isoleercel gestopt. <br> na 10 dagen ben je er uit en mag je weer pauze houden. <br> Dezelfde groep komt weer naar je toe maar dit keer helpt een andere groep jouw en laten de andere groep weg gaan. <br> Bart geeft je een hand en zegt: kom met ons mee. ";
  button1.innerHTML = "Ga mee";
  button1.setAttribute('onclick','meeGaan()');
  button2.style.display = 'none';
  button3.style.display = 'none';
}

function meeGaan(){
  image.src ='img/meegaan.jpg'
  description.innerHTML = "<h2> Maak je keuze!! </h2> <br> <br> Bart neemt je apart en zegt: ik zie je hele tijd overal kijken en heb een gevoel dat je hier ook niet lang wilt blijven. <br> Doe je mee met een ontsnapping?";
  button1.innerHTML = "Nee laat me met rust";
  button1.setAttribute('onclick','nee()');
  button2.style.display = 'inline-block';
  button2.innerHTML = "Ja natuurlijk";
  button2.setAttribute('onclick','jaa()');
}

function nee(){
  button1.innerHTML = "Ga terug";
  button1.setAttribute('onclick','meeGaan()');
  description.innerHTML = "<h2> Fout!! </h2> <br> <br> In je eentje kan je niet ontsnappen!!";
  button2.style.display = 'none';
}

function jaa(){
  image.src ='img/stalendeur.jpg'
  description.innerHTML = "<h2> Maak je keuze!! </h2> <br> <br> Jullie lopen rustig zonder opgemerkt te worden naar de deur waar alle spullen liggen. <br> Als jullie om de hoek zijn kunnen jullie niet meer gezien worden omdat het om de hoek is.";
  button2.style.display = 'none';
  button1.innerHTML = "Maak de deur open";{
  if(key == true){
  button1.setAttribute('onclick','openDeur()');
  } else{
  button1.setAttribute('onclick',' keyNodig()');
}
  }

}

function keyNodig(){
  image.src ='img/sleutelbos.jpg'
  description.innerHTML = "<h2> Fout!! </h2> <br> <br> Jullie hebben een sleutel nodig <br> ";
  button1.innerHTML = "Haal de sleutel";
  button1.setAttribute('onclick','vraag()');
}

function vraag(){
  image.src ='img/politie.jpg'
  description.innerHTML = "<h2> Maak je keuze!! </h2> <br> <br> Bart legt je het plan uit. <br> Voordat we kunnen ontsnappen hebben we een sleutel nodig naar de kamer waar alle spullen liggen. <br> De sleutel ligt naast de bewaker als jij hem afleid voor ons dan pakken we de sleutel. <br> <br> Maak een keuze hoe je hem afleid!";
  button1.innerHTML = "Wanneer moet ik naar de cel?";
  button1.setAttribute('onclick','fouteVraag()');
  button2.style.display = 'inline-block';
  button2.innerHTML = "Ga op de grond liggen en doe of je pijn hebt";
  button2.setAttribute('onclick','nepPijn()');

}

 function fouteVraag(){
   description.innerHTML = "<h2> Fout!! </h2> <br> <br> Het is een te korte vraag de bewaker gaf antwoord en ging weer terug.";
   button1.innerHTML = "Ga terug";
   button1.setAttribute('onclick','vraag()');
   button2.style.display = 'none';
  
 }

 function nepPijn(){
 key = true
  jaa();
   description.innerHTML = "<h2> Maak je keuze!! </h2> <br> <br> Ze hebben de sleutel te pakken. <br> Ga weer rustig terug naar de kamer waar alle spullen liggen. ";
  button1.innerHTML = "Ga erheen";
 button1.setAttribute('onclick',' jaa()');
  
 }

 function openDeur(){
  image.src ='img/wapens.jpg'
  description.innerHTML = "<h2> Maak je keuze!! </h2> De kamer is er ligt van alles. <br> Wapens, Handboeien, communicatie middelen en kleding! <br>";
  button1.innerHTML= "Wapens";
  button1.setAttribute('onclick','wapens()'); 
  button2.style.display = 'inline-block';
  button2.innerHTML = "Handboeien";
  button2.setAttribute('onclick','handboeien()');
 }

 function wapens(){
   wapen = true
  image.src ='img/kledingwapens.jpg'
  description.innerHTML = "<h2> Maak je keuze!! </h2> Je komt uit de kamer en ineens staat er een politie agent met een wapen op je te richten. <br> Je zoekt dekking <br> hij schiet op je. ";
  button1.innerHTML= "Wacht tot hij moet reloaden en schiet dan.";
  button1.setAttribute('onclick','wachten()'); 
    button2.innerHTML = "Schiet terwijl hij op jou schiet";
  button2.setAttribute('onclick','schieten()');
}

function schieten(){
  image.src ='img/dead.jpg'
  description.innerHTML = "<h2> Fout!! </h2> <br> <br> Je ging schieten maar hij schoot ook en je werd geraakt en je gaat dood! ";
  button1.innerHTML = "Ga terug";
 button1.setAttribute('onclick',' wapens()');
 button2.style.display = 'none';
}

function handboeien(){
 handboeien2 = true
 image.src ='img/handboeien.jpg'
 description.innerHTML = "<h2> Maak je keuze!! </h2> <br> <br> Je hebt de handboeien gepakt!!  ";
 button1.innerHTML = "Ga terug";{
 if(wapen == true){
 button1.setAttribute('onclick',' vastbinden()');
 }else{
  button1.setAttribute('onclick',' openDeur()');
  }
 }
 button2.style.display = 'none';

}

function wachten(){
  image.src ='img/handboeien.jpg'
  description.innerHTML = "<h2> Maak je keuzen!! </h2> <br> <br> Je schoot hem in zijn been! <br> Je moet hem vastbinden! <br> en kleding in zijn mond stoppen! "
  button2.style.display = 'none';
  button1.innerHTML = "Bind hem vast";{
    if(handboeien2 == true){
      button1.setAttribute('onclick',' vastbinden()');
    }else{
      button1.setAttribute('onclick',' handnodig()');
    }
  }
} 

function handnodig(){
  image.src ='img/handboeien.jpg'
  description.innerHTML = "<h2> Maak je keuzen!! </h2> Je hebtt handboeien nodig haal ze!!";
  button1.innerHTML = "Haal de handboeien!";
  button1.setAttribute('onclick',' handboeien()');
  button2.style.display = 'none';
}

function vastbinden(){
  image.src ='img/handboeien.jpg'
  description.innerHTML = "<h2> Maak je keuzen!! </h2> goedzoo";
  button1.innerHTML = "Jaaa!";
  button1.setAttribute('onclick',' #()');
  button2.style.display = 'none';
}

startGame();


// inventoryItem.style.display = 'none';
// button1.innerHTML = "help";
// button1.setAttribute('onclick','level2()');
// button2.style.display = 'none';
// button3.style.display = 'none';
// }

// function level2(){
// image.src ='img/tralies.jpg'
// button1.innerHTML = "slaan";
// button1.setAttribute('onclick','getShovel()');
// button2.style.display = 'inline-block';
// button2.innerHTML = "ga terug";
// button3.style.display = 'inline-block';
// button3.innerHTML = "verder";
// }

// function getShovel(){
//   shovel = treu;
//   level2();
// }