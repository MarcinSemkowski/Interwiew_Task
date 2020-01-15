function changeColor(){
     var color1 = document.getElementById("color1").value;
     var color2 = document.getElementById("color2").value;
    $("#1").css("background-color",color1);
    $("#2").css("background-color",color2);
    $("#3").css("background-color",color1);
    $("#4").css("background-color",color2);
    $("#5").css("background-color",color1);
    
}


function net(){
    for(var i =1; i <= 5; i++){
     var netString = document.getElementById('c' +i).innerText;
    
      var fValue =  parseFloat(netString);
        if(fValue > 1000.00){
            $('#r' + i).css('background-color','#aeff34');
        }
    }
    
}



function count(){

    
for(var i =1; i <= 5; i++){    
var netString = document.getElementById('c' + i).innerText;
var vatString = document.getElementById('vat' +i).innerText;
var qtyString = document.getElementById('qty' + i).innerText;    
    
var netF = parseFloat(netString);
    
var vatI = parseInt(vatString);
var qtyInt = parseInt(qtyString);    

    
    if(Number.isInteger(vatI)){
      
   var kB = document.getElementById("kb" +i).innerHTML = netF + (netF * vatI / 100);
    var wN = document.getElementById("wn" + i).innerHTML =  netF * qtyInt; 
    var wB = document.getElementById("wb"+i).innerHTML = kB * qtyInt;        
    }else{
           
   var kB = document.getElementById("kb" +i).innerHTML = netF + 0;
    var wN = document.getElementById("wn" + i).innerHTML =  netF * qtyInt; 
    var wB = document.getElementById("wb"+i).innerHTML = kB * qtyInt;        
    }
    
    

   
    

}
    
}