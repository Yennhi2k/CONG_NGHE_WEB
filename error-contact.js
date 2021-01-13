var ten = document.forms['form']['name'];
var tieude = document.forms['form']['title'];
var email = document.forms['form']['email'];
var thongdiep = document.forms['form']['message'];


var ten_error = document.getElementById('ten_error');
var tieude_error = document.getElementById('tieude_error');
var email_error = document.getElementById('email_error');
var thongdiep_error = document.getElementById('thongdiep_error');

ten.addEventListener('textInput',ten_Verify);
tieude.addEventListener('textInput',tieude_Verify);
email.addEventListener('textInput',email_Verify);
thongdiep.addEventListener('textInput',thongdiep_Verify);

function validated(){
    if(ten.value.length < 1)
    {
        ten.style.border = "1px solid red";
        ten_error.style.display ="block";
        ten.focus();
        return false;
    }
    if(tieude.value.length < 10)
    {
        tieude.style.border = "1px solid red";
        tieude_error.style.display ="block";
        tieude.focus();
        return false;
    }
    if(email.value.length < 9)
    {
        email.style.border = "1px solid red";
        email_error.style.display ="block";
        email.focus();
        return false;
    }
    if(thongdiep.value.length < 10)
    {
        thongdiep.style.border = "1px solid red";
        thongdiep_error.style.display ="block";
        thongdiep.focus();
        return false;
    }
}
function ten_Verify(){
    if(ten.value.length >= 1)
    {
        ten.style.border = "1px solid silver";
        ten_error.style.display ="none";
        return true;
    }
}
function tieude_Verify(){
    if(tieude.value.length >= 9)
    {
        tieude.style.border = "1px solid silver";
        tieude_error.style.display ="none";
        return true;
    }
}
function email_Verify(){
    if(email.value.length >= 9)
    {
        email.style.border = "1px solid silver";
        email_error.style.display ="none";
        return true;
    }
}
function thongdiep_Verify(){
    if(thongdiep.value.length >= 10)
    {
        thongdiep.style.border = "1px solid silver";
        thongdiep_error.style.display ="none";
        return true;
    }
}