
function validate()
{
let a=document.forms["myform"]["name"].value;
let b=document.forms["myform"]["tele"].value;
let c=document.forms["myform"]["password"].value;
let d=document.forms["myform"]["cfpassword"].value;

if(a=="")
{
alert("Enter your name");
return false;
}
if(b.length!=10)
{
alert("Phone number must be 10 digits");
return false;
}
var mob=/^[1-9]{1}[0-9]{9}$/;
if(mob.test(b)==False)
{
alert("Please enter valid mobile number.");
return false;
}
if(c.length<8)
{
alert("Password must atleast be 8 characters");
return false;
}
if(c!=d)
{
alert("Password should be same");
return false;
}
}


