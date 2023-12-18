

var viz3d = 400;
var minimalBP = 500;
var fullBP = 2000;
var engPart = 1600 + 800 +800 +800;
var communication = 500;

function pricingCalc(){

    var option1 = document.querySelector("#houseArea").value * 10;
    var conditions = [];

    if (document.querySelector("#question1").checked ){
        conditions.push(option1);
    }

    if (document.querySelector("#question2").checked ){
        conditions.push(viz3d);
    }

    if (document.querySelector("#question3").checked ){
        conditions.push(minimalBP);
    }

    if (document.querySelector("#question4").checked ){
        conditions.push(fullBP);
    }

    if (document.querySelector("#question5").checked ){
        conditions.push(engPart);
    }

    if (document.querySelector("#question6").checked ){
        conditions.push(communication);
    }

    var sum = 0;
    for (let i=0; i<conditions.length; i++){
        sum += conditions[i];
    }

    document.querySelector("#outputNumber").innerHTML = sum;

}

