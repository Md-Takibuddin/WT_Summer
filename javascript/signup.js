const x = document.querySelectorAll(".signup");
const resetBtn=document.querySelector("#reset");
let arrayName= Array.from({length:x.length},()=>false) ;
let t;


function reset(){
    sessionStorage.clear();
}


function checkFname(event,index){
let fname = event.target.value;
    if (fname.length > 1 && fname.match( /^[A-Za-z]+$/)){
        event.target.style.border = "1px solid green";
        sessionStorage.setItem('fname',fname);
        arrayName[index]=true;
    }
    else{ 
        event.target.style.border = "1px solid red ";
        arrayName[index]=false;
    }
}


function checkLname(event,index){
 let lname = event.target.value;
    if (lname.length > 1 && lname.match( /^[A-Za-z]+$/)){
        event.target.style.border = "1px solid green";
        sessionStorage.setItem('lname',lname);
        arrayName[index]=true;

    }
    else{
        event.target.style.border = "1px solid red ";
        arrayName[index]=false;
    }
}

function checkDob(event,index){
    let dob =event.target.value;     
    var optimizedBirthday = dob.replace(/-/g, "/");
	//set date based on birthday at 01:00:00 hours GMT+0100 (CET)
	var myBirthday = new Date(optimizedBirthday);
	// set current day on 01:00:00 hours GMT+0100 (CET)
	var currentDate = new Date().toJSON().slice(0,10)+' 01:00:00';
	// calculate age comparing current date and birthday
	var myAge = ~~((Date.now(currentDate) - myBirthday) / (31557600000));
	if(myAge < 18){
        event.target.style.border = "1px solid red";
        arrayName[index]=false;
    }
    else{
        event.target.style.border = "1px solid green";
        sessionStorage.setItem('dob',dob);
        arrayName[index]=true;
    }

   
}


function checkAddress(event,index){
        if (event.target.value.length <5){
            event.target.style.border = "1px solid red ";
            arrayName[index]=false;
        }
        else{ 
            event.target.style.border = "1px solid green "; 
            sessionStorage.setItem('address',event.target.value);
            arrayName[index]=true;
        }
   
   }


function checkMobileNo(event,index){
    let mobile = event.target.value;
        if (mobile.match(/^[0]{1}[1]{1}[0-9]{9}$/)){
            var mobileXHttp = new XMLHttpRequest();
            mobileXHttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    if(this.responseText== 'ok'){
                        event.target.style.border = "1px solid green ";
                        sessionStorage.setItem('mobileNo',mobile);
                        arrayName[index]=true;
                    }
                    else{
                        event.target.style.border = "1px solid red ";
                        arrayName[index]=false;
                    }
                    
                    document.getElementById("mobile_available").innerHTML=this.responseText;
                }
            }
            mobileXHttp.open("GET", "https://localhost/Bank%20System/control/AjAx/checkMobileNo.php?n="+mobile, true);
            mobileXHttp.setRequestHeader("Content-type","application/x-www-from-urlencoded");
            mobileXHttp.send();                     
        }
        else{
        
        event.target.style.border = "1px solid red ";
        arrayName[index]=false;
        }
}


function checkEmail(event,index){
    var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var mail = event.target.value;
        if(mail.match(mailFormat)){
            var mailXHttp = new XMLHttpRequest();
            mailXHttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    if(this.responseText== 'ok'){
                        event.target.style.border = "1px solid green ";
                        sessionStorage.setItem('email',mail);
                        arrayName[index]=true;
                    }
                    else{
                        event.target.style.border = "1px solid red ";
                        arrayName[index]=false;
                    }                  
                    document.getElementById("mobile_available").innerHTML=this.responseText;  
                }
            }
            mailXHttp.open("GET", "https://localhost/Bank%20System/control/AjAx/checkEmail.php?q="+mail, true);
            mailXHttp.setRequestHeader("Content-type","application/x-www-from-urlencoded");
            mailXHttp.send();        
        }
        else{
       
        event.target.style.border = "1px solid red ";
        arrayName[index]=false;
        }
}



function ChangeText(oFileInput, sTargetID) {
    document.getElementById(sTargetID).value = oFileInput.value;
}



function checkAdminKey(event,index){
    var key = event.target.value;
    var keyXHttp = new XMLHttpRequest();
    keyXHttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            if(this.responseText== 'ok'){
                event.target.style.border = "1px solid green ";
                 arrayName[index]=true;
            }
            else{
                event.target.style.border = "1px solid red ";
                arrayName[index]=false;

            }
            document.getElementById("key_available").innerHTML=this.responseText;  

        }
    }
    keyXHttp.open("GET", "https://localhost/Bank%20System/control/AjAx/checkAdminKey.php?k="+key, true);
    keyXHttp.setRequestHeader("Content-type","application/x-www-from-urlencoded");
    keyXHttp.send();

}


function checkPassword(event,index){   
    // It must not contain any whitespace.
    // It must contain at least one uppercase, one lowercase and one numeric character.
    // It must contain at least one special character. [~`!@#$%^&*()--+={}[]|\:;"'<>,.?/_₹]
    // Length must be between 10 to 16 characters.
        var passFormate = /^(\S)(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹])[a-zA-Z0-9~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹]{8,50}$/;
        if(event.target.value.match(passFormate)){
        event.target.style.border = "1px solid green ";
        arrayName[index]=true;
        }
        else {       
            event.target.style.border = "1px solid red ";
            arrayName[index]=false;
        }
}


function xyz(event,index){
    const dataSetName= event.target.dataset.name;
    switch(dataSetName){      
        case "fname":
                    checkFname(event,index);
                    break;
        case "lname":
                    checkLname(event,index);
                    break;
        case "dob":
                    checkDob(event,index);
                    break;
        case "address":
                    checkAddress(event,index);
                    break; 
        case "email":
                    checkEmail(event,index);
                    break; 
        case "mobileNo":
                    checkMobileNo(event,index);
                    break; 
        case "password":
                    checkPassword(event,index);
                    break;
        case "key":
                      checkAdminKey(event,index);
                    break;
        default : return;  
    }
}





x.forEach((x_event,index)=>{
    x_event.addEventListener('focusout',(event)=>{
        xyz(event,index)
    })
    
})


resetBtn.addEventListener("click",reset)

// function test(){
//     if(checkFname()==true){
//         return true;
//     }else return false;
// }
let checker = arr => arr.every(v => v === true);
function submitBtn(){

    return checker(arrayName);
}



const submitBtn1 = document.getElementById("submit")
submitBtn1.addEventListener('click',submitBtn)

// checkFname()==true && checkLname()==true && checkDob()==true && checkAddress()==true
//     && checkMobileNo()==true && checkEmail()==true && checkAdminKey()==true && checkPassword()==true