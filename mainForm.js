function validationMainForm(){
    var username = document.getElementById("userName").Value;
    var emailid = document.getElementById("emailId").Value;
    var mobilenumber = document.getElementById("mobilenumber").Value;
    var roadname = document.getElementById("roadname").Value;
    var selectstate = document.getElementById("selectstate").Value;
    var selectDistrict = document.getElementById("selectDistrict").Value;
    var roadSeverity = document.getElementById("roadSeverity").Value;
    
    if(username == '' || username== null)
    {
var usernameError = document.getElementById("usernameError");
usernameError.innerHTML = 'Please enter username';

    }
}