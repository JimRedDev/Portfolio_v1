var calcFormation = "";
var solution = "";
var negState = false;

function toScreen(symbol) {
  calcFormation += symbol;
  document.getElementById('display').value = calcFormation;
}

function clearScreen() {
  calcFormation = "";
  document.getElementById('display').value = calcFormation;
}

function calcSolve() {
  solution = eval(calcFormation);
  document.getElementById('display').value = "Calculation too big!";
  document.getElementById('display').value = solution;
  calcFormation = "";

}
 function amend() {
   calcFormation = calcFormation.slice(0, -1);
   document.getElementById('display').value = calcFormation;
 }

 function negNumber() {
   if(negState == false){
     calcFormation = "-" + calcFormation;
     negState = true;
   }else{
     while(calcFormation.charAt(0) === '-'){
       calcFormation = calcFormation.substring(1);
     }
     negState = false;
   }
   document.getElementById('display').value = calcFormation;

 }
