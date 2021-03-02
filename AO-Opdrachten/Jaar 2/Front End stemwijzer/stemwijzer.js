
var title = document.getElementById("title");
var logo = document.getElementById("logo");
var statement = document.getElementById("statement");
var btnPro = document.getElementById("btnEens");
var btnMening = document.getElementById("btnMening");
var btnContra = document.getElementById("btnOneens");
var btnStart = document.getElementById("start");
var btnResult =  document.getElementById("resultaat");
var btnPrevious =  document.getElementById("btnPrevious");
var btnNext = document.getElementById("btnNext");

var p1 = document.getElementById("p1");
var p2 = document.getElementById("p2");
var p3 = document.getElementById("p3");
var score1 = document.getElementById("score1");
var score2 = document.getElementById("score2");
var score3 = document.getElementById("score3");
var scoren = document.getElementById("scorens");



var questions = 0;
var pro = 0;
var geenMening = 0;
var contra = 0;


start.onclick = function(){
  btnPro.style.display = 'inline-block';
  btnContra.style.display = 'inline-block';
  btnMening.style.display = 'inline-block';
  btnStart.style.display = 'none'; 
  logo.style.display = 'none';
  title.innerHTML = subjects[0].title;
  statement.innerHTML = subjects[0].statement;
  }



btnPro.onclick = function(){
  answers[questions] = "pro";
  pro++
  console.log(answers);
  }

btnMening.onclick = function(){
  answers[questions] = "geen mening";
  geenMening++
  console.log(answers);
  }
    
btnContra.onclick = function(){
  answers[questions] = "contra";
  contra++
  console.log(answers);
  }


buttons.onclick = function(){
  console.log(questions);
  questions0();
  if( questions === subjects.length -1){
    title.style.display = 'none';
    statement.style.display = 'none';
    btnPro.style.display = 'none';
    btnContra.style.display = 'none';
    btnMening.style.display = 'none';
    btnPrevious.style.display = 'none';
    btnResult.style.display = 'inline-block'; 
    }
    else{ 
      questions++
      title.innerHTML = subjects[ questions].title;
      statement.innerHTML = subjects[ questions].statement;
      }
  }

  function questions0(){
    if(questions === 1){
      btnPrevious.style.display = 'none';
      }else{
        btnPrevious.style.display = 'inline-block';
    }
  }



btnPrevious.onclick = function(){
  console.log(questions);
  questions0();
  questions--
  title.innerHTML = subjects[questions].title;
  statement.innerHTML = subjects[questions].statement;
  }


btnResult.onclick =function(){
  logo.style.display = 'inline-block';
  btnResult.style.display = 'none'; 
  for(index = 0; index < answers.length; index++){

 var answer = answers[index];

 subjects[index].parties.forEach(function(party){
 var partyanswer = party.position;
 if(answer == partyanswer){
   var correctparty = chosenParty.find(partyName => partyName.name == party.name);

   if(correctparty != null){
       correctparty.score++;
  }

}
    })
  }

  chosenParty.sort(compare);

   scoren.style.display = 'inline-block';
  document.getElementById("p1").innerHTML = chosenParty[chosenParty.length - 1].name;
  document.getElementById("p2").innerHTML = chosenParty[chosenParty.length - 2].name;
  document.getElementById("p3").innerHTML = chosenParty[chosenParty.length - 3].name;
  document.getElementById("score1").innerHTML = 'Score: ' +  chosenParty[chosenParty.length - 1].score;
  document.getElementById("score2").innerHTML = 'Score: ' +  chosenParty[chosenParty.length - 2].score;
  document.getElementById("score3").innerHTML = 'Score: ' +  chosenParty[chosenParty.length - 3].score;

  console.log(chosenParty);
}
 
function compare(a , b){
  if(a.score < b.score){
    return -1;
  }
  if(a.score == b.score){
    return 0;
  }
  if(a.score > b.score){
    return 1;
  }
}





  
