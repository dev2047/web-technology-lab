function validateform(){ 
      
    if (document.gateways.name.value == "") {
        alert("Enter a name");
        document.gateways.name.focus();
        return false;
    }
    if (!/^[a-zA-Z]*$/g.test(document.gateways.name.value)) {
        alert("Invalid characters in name");
        document.gateways.name.focus();
        return false;
    }
    if(!/^[A-Z]/g.test(document.gateways.name.value)){
        alert("First Letter in name should be uppercase!")
        gateways.name.focus();
        return false;
    }
    // if(gateways.password.value.length < 6) {
    // alert("Error: Password must contain at least six characters!");
    // gateways.password.focus();
    // return false;
    // }
    re = /[0-9]/;
    if(!re.test(gateways.password.value)) {
    alert("Error: password must contain at least one number (0-9)!");
    gateways.password.focus();
    return false;
    }
    re = /[a-z]/;
    if(!re.test(gateways.password.value)) {
    alert("Error: password must contain at least one lowercase letter (a-z)!");
    gateways.password.focus();
    return false;
    }
    re = /[A-Z]/;
    if(!re.test(gateways.password.value)) {
    alert("Error: password must contain at least one uppercase letter (A-Z)!");
    gateways.password.focus();
    return false;
    }
    if(document.gateways.age.value < 0){
        alert("Age cannot be negative!")
        gateways.age.focus();
        return false;
    }

    document.cookie = "name=" + document.gateways.name.value;
    document.cookie = "phone=" + document.gateways.phone.value;
}

function validateKeyStrokes(event) {
    var charCode = (event.which) ? event.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function validateKeyStrokesDigit(event) {
    var charCode = (event.which) ? event.which : event.keyCode;
    if (!(charCode > 31 && (charCode < 48 || charCode > 57))) {
        return false;
    }
    return true;
}