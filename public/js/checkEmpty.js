function isTableEmpty(){

    
    var table = document.getElementById('inp');
    var historyBoxDiv = document.getElementById('historyBox');
    
    
    if(table.childNodes.length === 0){
        alert("Таблицата е празна!\n Моля, извършете процедура, за да създадете история. :)");
        window.location.replace("./index.html")
    } else {
        historyBoxDiv.style.display = 'block';
    }
    


}