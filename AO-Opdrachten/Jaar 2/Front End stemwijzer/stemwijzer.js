var answers = []

var chosenParty = []

var partiesOnlyNames = []

var title = document.getElementById("title");
var logo = document.getElementById("logo");
var statement = document.getElementById("statement");
var btnPro = document.getElementById("btnEens");
var btnMening = document.getElementById("btnMening");
var btnContra = document.getElementById("btnOneens");
var btnStart = document.getElementById("start");
var btnPrevious =  document.getElementById("btnPrevious");
var btnNext = document.getElementById("btnNext");
var showPartiesCheck = document.getElementById("showPartiesCheck");
var checkedResult = document.getElementById("checkedResult");
var extraScore = document.getElementById("extraScore");
var thesesResult = document.getElementById("thesesResult");

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
  btnNext.style.display = 'inline-block';
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

btnNext.onclick = function(){
  console.log(answers);
  questions++
  title.innerHTML = subjects[questions].title;
  statement.innerHTML = subjects[questions].statement;
  hidePreviousButton();
  setColor();
}

buttons.onclick = function(){ 
  console.log(questions);
  hidePreviousButton();
  if( questions === subjects.length -2){
    btnNext.style.display = 'none';
  }
  if( questions === subjects.length -1){
    title.style.display = 'none';
    statement.style.display = 'none';
    btnPro.style.display = 'none';
    btnContra.style.display = 'none';
    btnMening.style.display = 'none';
    btnPrevious.style.display = 'none';
    btnNext.style.display = 'none';
    showPartiesCheck.style.display = 'inline-block';
  }
  else{
    questions++
    title.innerHTML = subjects[ questions].title;
    statement.innerHTML = subjects[ questions].statement;
  }
  setColor();
}

function hidePreviousButton(){
  if(questions === 1){
    btnPrevious.style.display = 'none';
  }else{
    btnPrevious.style.display = 'inline-block';
  }
}

btnPrevious.onclick = function(){
  hidePreviousButton();
  questions--
  title.innerHTML = subjects[questions].title;
  statement.innerHTML = subjects[questions].statement;
  setColor();
}

function result(){
  logo.style.display = 'inline-block';
  showPartiesCheck.style.display = 'none'; 

 for(index = 0; index < answers.length; index++){
   scoreplus(index);
 }

  chosenParty.sort(compare);
  scoren.style.display = 'inline-block';

 for(index = chosenParty.length -1; index > -1 ; index--){
    var partieNames = document.getElementById("partynames");
    var nameTextPartie = document.createElement("p");
    nameTextPartie.innerHTML = chosenParty[index].name +  '  ' + 'Score:' + chosenParty[index].score ;
    partieNames.appendChild(nameTextPartie);
    partieNames.className = "scorens2";
  }
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

function setColor(){
  btnPro.style.background = 'black';
  btnMening.style.background = 'black';
  btnContra.style.background = 'black';
  // btnContra.classList.remove('chosen');
  console.log(questions);
  if(answers[questions] == "pro"){
    btnPro.style.background = '#45c5e4';
    // btnPro.classList.add('chosen');
   }else if(answers[questions] == "geen mening"){
    btnMening.style.background = '#45c5e4';
   }else if(answers[questions] == "contra"){
    btnContra.style.background = '#45c5e4';
   }else{
    btnPro.style.background = 'black';
    btnMening.style.background = 'black';
    btnContra.style.background = 'black';
   }
}

function ShowPartiesCheck(){
  for(index = 0; index < parties.length; index++){
    var checkBox = document.createElement("INPUT");
    checkBox.setAttribute("type", "checkbox");
    checkBox.checked = true;

    var partieCheck = document.getElementById("partie");
    var partiesCheckText = document.createElement("p");

    partiesCheckText.innerHTML = parties[index].name;
    partieCheck.appendChild(checkBox);
    partieCheck.appendChild(partiesCheckText); 

    partiesCheckText.className = "text";
    checkBox.className = "checkBox";
  }
}
ShowPartiesCheck();

checkedResult.onclick = function(){
  var partieAnswers = document.getElementsByClassName("checkBox");
  // i=0;
  for(index = 0; index < parties.length; index++){
    if (partieAnswers[index].checked == true){
      // chosenParty[i] = {score: 0, name: parties[index].name}
      // i++;
      chosenParty.push({score: 0, name: parties[index].name})
    } 
  }
  showPartiesCheck.style.display = 'none';
  extraScore.style.display = 'inline-block'
  console.log(chosenParty);

  addCheckExtraScore();
}












function addCheckExtraScore(){
  for(index = 0; index < parties.length; index++){
    var checkBox = document.createElement("INPUT");
    checkBox.setAttribute("type", "checkbox");
  
    var theses = document.getElementById("theses");
    var thesesText = document.createElement("p");
  
    thesesText.innerHTML = subjects[index].title;
    theses.appendChild(checkBox);
    theses.appendChild(thesesText); 
  
    thesesText.className = "text2";
    checkBox.className = "checkBoxTheses";
  }
}

thesesResult.onclick = function(){
  var thesesAnswers = document.getElementsByClassName("checkBoxTheses");
  for(index = 0; index < parties.length; index++){
    if (thesesAnswers[index].checked == true){
      scoreplus(index);
    }
    }
  
  extraScore.style.display = 'none';
  result()
  console.log(chosenParty);
}

function scoreplus(index){
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