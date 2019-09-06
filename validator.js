

function validate(){
    var yValid = document.getElementById("yValid");
    var y = document.forms["mainForm"]["y"].value;
    var valid = true;
    if (isNaN(y)||y<-5 || y>5){
        yValid.innerHTML = ("Incorrect input values");
        valid = false;

    }

    var R1 = document.getElementById("R1");
    var R1_5 = document.getElementById("R1_5");
    var R2 = document.getElementById("R2");
    var R2_5 = document.getElementById("R2_5");
    var R3 = document.getElementById("R3");

   /* if (!R1.checked && !R1_5.checked &&
        !R2.checked && !R2_5.checked &&
        !R3.checked){
        valid = false;
        document.getElementById("rValid").innerHTML = "Please enter the required values";


    } */


    var count = 0;

    if (R1.checked) count++;
    if (R1_5.checked) count++;
    if (R2.checked) count++;
    if (R2_5.checked) count++;
    if (R3.checked) count++;

    if (count > 1 || count == 0)  {
        valid = false;
        document.getElementById("rValid").innerHTML = ("Choose one R value");

    }

    return valid;


}