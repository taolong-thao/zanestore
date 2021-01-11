function datetime(){
    var select=document.getElementById('subject'); 
    for(var i=1;i<32;i++)
    {
        var opt=document.createElement('option');
        opt.value=i;
        opt.innerHTML=i;
        select.appendChild(opt);
    }
}
function monthtime(){
    var select=document.getElementById('subject_month'); 
    for(var i=1;i<13;i++)
    {
        var opt=document.createElement('option');
        opt.value=i;
        opt.innerHTML=i;
        select.appendChild(opt);
    }
    this.remove(select);
}
function yeartime(){
    var select=document.getElementById('subject_year'); 
    for(var i=1950;i<2003;i++)
    {
        var opt=document.createElement('option');
        opt.value=i;
        opt.innerHTML=i;
        select.appendChild(opt);
    }
}
function CheckPassword(inputtxt) 
{ 
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
var a=document.getElementById('ps1').value;
var b=document.getElementById('ps2').value;
if(inputtxt.value.match(passw)) 
{ 
    document.getElementById('checkpass').innerHTML="Tốt";
checkpass2(a,b);
return true;
}
else
{ 
    document.getElementById('checkpass').innerHTML="Mật khẩu phải từ 6-20 ký tự bao gồm chữ hoa chữ thường và chữ số.";
return false;
}
    
}
function checkpass2(a,b){
    if(a==b){
        return true;
    }
    else{
        document.getElementById('checkpass2').innerHTML="Mật khẩu không trùng khớp";
        return false;
    }
}
$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });