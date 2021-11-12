// function validateform(){ 
      
//     if (document.reg.firstname.value == "") {
//         alert("Enter a name");
//         document.reg.name.focus();
//         return false;
//     }
//     if (!/^[a-zA-Z]*$/g.test(document.reg.firstname.value)) {
//         alert("Invalid characters in name");
//         document.reg.name.focus();
//         return false;
//     }
//     if(!/^[A-Z]/g.test(document.reg.firstname.value)){
//         alert("First Letter in name should be uppercase!")
//         reg.name.focus();
//         return false;
//     }
//     re = /[0-9]/;
//     if(!re.test(reg.password.value)) {
//     alert("Error: password must contain at least one number (0-9)!");
//     reg.password.focus();
//     return false;
//     }
//     re = /[a-z]/;
//     if(!re.test(reg.password.value)) {
//     alert("Error: password must contain at least one lowercase letter (a-z)!");
//     reg.password.focus();
//     return false;
//     }
//     re = /[A-Z]/;
//     if(!re.test(reg.password.value)) {
//     alert("Error: password must contain at least one uppercase letter (A-Z)!");
//     reg.password.focus();
//     return false;
//     }
//     if(document.reg.age.value < 0){
//         alert("Age cannot be negative!")
//         reg.age.focus();
//         return false;
//     }

//     document.cookie = "name=" + document.reg.name.value;
//     document.cookie = "phone=" + document.reg.phone.value;
// }

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