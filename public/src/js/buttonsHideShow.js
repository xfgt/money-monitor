

    

function hideShowIncome(){
var fundsDiv = document.getElementById('fundsField');
var expencesDiv = document.getElementById('expencesField');

var submitDivIn = document.getElementById('SubmitDivIn');
var submitDivOut = document.getElementById('SubmitDivOut');

var fundsDiv_border = document.getElementById('fundsField');
var expencesDiv_border = document.getElementById('expencesField');
        
    if(fundsDiv.style.display = 'none' && submitDivIn.style.display == 'none'){
        fundsDiv.style.display = 'block';
        submitDivIn.style.display = 'block';
        fundsDiv_border.style.border = 'dashed 1px black';

        expencesDiv.style.display = 'none';
        submitDivOut.style.display = 'none';
        expencesDiv_border.style.border ='none';
    } else {
        fundsDiv.style.display = 'none';
        submitDivIn.style.display = 'none';
        fundsDiv_border.style.border = 'none';

        expencesDiv.style.display = 'none';
        submitDivOut.style.display = 'none';
        expencesDiv_border.style.border ='none';
    }


/*
    1
    document.getElementById('fundsField').style.display = 'block';
    document.getElementById('expencesField').style.display = 'none';
    document.getElementById('SubmitDivIn').style.display = 'block';
    document.getElementById('fundsField').style.border = 'solid 1px black';

*/
}



function hideShowOutcome(){
    var fundsDiv = document.getElementById('fundsField');
var expencesDiv = document.getElementById('expencesField');

var submitDivIn = document.getElementById('SubmitDivIn');
var submitDivOut = document.getElementById('SubmitDivOut');

var fundsDiv_border = document.getElementById('fundsField');
var expencesDiv_border = document.getElementById('expencesField');
    
    if(expencesDiv.style.display = 'none' && submitDivOut.style.display == 'none'){
        
        expencesDiv.style.display = 'block';
        submitDivOut.style.display = 'block';
        expencesDiv_border.style.border = 'dashed 1px black';
        
        fundsDiv.style.display = 'none';
        submitDivIn.style.display = 'none';
        fundsDiv_border.style.border = 'none';
        


    } else {
        expencesDiv.style.display = 'none';
        submitDivOut.style.display = 'none';
        expencesDiv_border.style.border ='none';

        fundsDiv.style.display = 'none';
        submitDivIn.style.display = 'none';
        fundsDiv_border.style.border = 'none';
    }


/*
    2  
    document.getElementById('fundsField').style.display = 'none';
    document.getElementById('expencesField').style.display = 'block';
    document.getElementById('SubmitDivOut').style.display = 'block';
    document.getElementById('expencesField').style.border = 'solid 1px black';
*/
}








