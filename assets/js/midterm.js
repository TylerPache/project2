//  function to validate visitor's date to current date 
function checkDate() {
    "use strict";
    var dateValid = true;
    var vdate = document.getElementById('visitDate').value;
    var today = new Date();
    console.log("Users date  = " + vdate);
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd;
    } // need this in case day number is one digit like 6
    if (mm < 10) {
        mm = '0' + mm;
    } // need this is month number is 1 digit like 4 

    var td = "" + yyyy + "-" + mm + "-" + dd;
    console.log("System date = " + td);

    if (vdate >= td) {
        document.getElementById('errorMessage').innerHTML = "  ** Warning:You cannot select today or the days after. **  ";
        document.getElementById("visitDate").style.borderColor = "red";
        document.getElementById("errorMessage").style.backgroundColor = 'pink';
        dateValid = false;
    } else {
        document.getElementById('errorMessage').innerHTML = "";
        document.getElementById("visitDate").style.border = null;
        document.getElementById("errorMessage").style = null;
        dateValid = true;
    } // end of else path

    return (dateValid);
} //end of function validate visitor's date to present date 




function checkIfRadioButtonSelected() {
    "use strict";
    var isChecked = false;
    var len = document.getElementsByName('fplace').length;
    var choices = new Array();
    for (var i = 0; i < len; i++) {
        if (document.getElementsByName('fplace')[i].checked) {
            choices.push(document.getElementsByName('fplace')[i].value);
        }
    } //end of for loop

    if (choices.length > 0) {
        isChecked = true;
        document.getElementsByTagName('fieldset')[0].style = null;
        document.getElementsByTagName('legend')[0].style = null;
    } else {
        document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
        document.getElementsByTagName('legend')[0].style.color = 'red';
    }

    return isChecked;

} //end of function checkIfRadioButtonSelected
function validateForm() {
    isvalid = true;
    radioButtonChecked = false;
    // alert(document.getElementById("visitDate").value);

    if (document.getElementById("visitor").value == '') {
        document.getElementById("visitor").style.borderColor = "red";
        document.getElementById("visitor").style.backgroundColor = 'pink';
        isvalid = false;
    } else {
        //  document.getElementById("visitor").style.border = null;
        //document.getElementById("visitor").style.backgroundColor = 'white';
        document.getElementById("visitor").style = null;
    }
    if (document.getElementById("visitDate").value == '') {
        document.getElementById("visitDate").style.borderColor = "red";
        document.getElementById("visitDate").style.backgroundColor = 'pink';
        isvalid = false;
    } else {
        //   document.getElementById("visitDate").style.border= "none";
        //	document.getElementById("visitDate").style.backgroundColor = 'white';
        document.getElementById("visitDate").style = null;
    }


    var radioButtonChecked = checkIfRadioButtonSelected();
    var correctDate = checkDate();

    return (isvalid && radioButtonChecked && correctDate);

} //end of javascript function validateForm

var other2 = document.getElementById('other_places');
other2.style.visibility = 'hidden';

function otherplaces() {
    //alert("JavaScript otherplaces()");

    var other = document.getElementById('other');
    console.log(other.attributes);
    if (other.checked == true) {
        console.log("turn other box visible");
        other2.style.visibility = 'visible';
    } else {
        other2.style.visibility = 'hidden';
    }

} //end of function 

function getOther() {
    alert("help");
    $_POST[other_places] = document.getElementById('other_places').value;
    var other_place = document.getElementById('other_places').value;
    alert("other_pets in function getOther() -->");
    console.log(other_place);
}

function turnoff() {
    var other = document.getElementById('other');
    other2.style.visibility = 'hidden';
    other2.value = "";
}

function validateComment() {
    "use strict";
    var isvalid = true;
    if (document.getElementById("commenter").value == '') {
        document.getElementById("commenter").style.borderColor = "red";
        document.getElementById("commenter").style.backgroundColor = 'pink';
        isvalid = false;
    } else {
        //  document.getElementById("visitor").style.border = null;
        //document.getElementById("visitor").style.backgroundColor = 'white';
        document.getElementsByClassName("name").style = null;
    }
    if (document.getElementById("comment").value == '') {
        document.getElementById("comment").style.borderColor = "red";
        document.getElementById("comment").style.backgroundColor = 'pink';
        isvalid = false;
    } else {
        document.getElementById("comment").style = null;
    }
    return (isvalid);
} //end of validate comment
