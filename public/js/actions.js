const time = new Date();


var balance = 0.00;
var newBalance = 0.00;

var counter = 0;

var income = 0.00;
var outcome = 0.00;

var income_args = document.getElementById("incomeFundsContainer_textfieldArguments").value;
var outcome_args = document.getElementById("expencesContainer_textfieldArguments").value;

var type, i, money, reason;



function loadBalance(){
  newBalance = document.getElementById("f_balance").innerHTML = newBalance;
}

function add(){
  counter++;
  income = Number(document.getElementById("incomeFundsContainer_numberfield").value);
  balance += income;
  newBalance = document.getElementById("f_balance").innerHTML = balance;
  
  // type = document.getElementById("type").innerHTML = "+";
  // i = document.getElementById("i").innerHTML = counter;
  // timeCount();
  // money = document.getElementById("money").innerHTML = income;
  // reason = document.getElementById("reason").innerHTML = income_args;
  var trtr = document.getElementById("tbl").innerHTML +=
    "<td>+</td>" + 
    "<td>" + counter + "</td>" + 
    "<td>" + timeCount() + "</td>" + 
    "<td>" + income + "</td>" + 
    "<td>" + income_args + "</td>";
  

}

function get(){
  counter++;
  outcome = Number(document.getElementById("expencesContainer_numberfield").value);
  balance -= outcome;
  newBalance = document.getElementById("f_balance").innerHTML = balance;

  // type = document.getElementById("type").innerHTML = "-";
  // i = document.getElementById("i").innerHTML = counter;
  // timeCount();
  // money = document.getElementById("money").innerHTML = outcome;
  // reason = document.getElementById("reason").innerHTML = outcome_args;

  var trtr = document.getElementById("tbl").innerHTML +=
    "<td>-</td>" + 
    "<td>" + counter + "</td>" + 
    "<td>" + timeCount() + "</td>" + 
    "<td>" + outcome + "</td>" + 
    "<td>" + outcome_args + "</td>";

}