

const x = document.querySelectorAll(".signup");
let count;


function checkFname(event){

 let fname = event.target.value;

    if (fname.length > 1 && fname.match( /^[A-Za-z]+$/)){

        event.target.style.border = "1px solid green"  ;
    }
    else  event.target.style.border = "1px solid red ";

}

function checkLname(event){


 let lname = event.target.value;

    if (lname.length > 1 && lname.match( /^[A-Za-z]+$/)){

        event.target.style.border = "1px solid green"  ;
    }
    else  event.target.style.border = "1px solid red ";
   }

function checkDob(event){
    let dob =event.target.value;
      
    var optimizedBirthday = dob.replace(/-/g, "/");

	//set date based on birthday at 01:00:00 hours GMT+0100 (CET)
	var myBirthday = new Date(optimizedBirthday);

	// set current day on 01:00:00 hours GMT+0100 (CET)
	var currentDate = new Date().toJSON().slice(0,10)+' 01:00:00';

	// calculate age comparing current date and birthday
	var myAge = ~~((Date.now(currentDate) - myBirthday) / (31557600000));

	if(myAge < 18) {
        event.target.style.border = "1px solid red"  ;
    }
    else   event.target.style.border = "1px solid green ";

   
   }

function checkAddress(event){

    console.log(event.target.value);
       if (event.target.value.length <5){
           event.target.style.border = "1px solid red "  ;
       }else  event.target.style.border = "1px solid green ";
   
   
   }

function checkMobileNo(event){

    let mobile = event.target.value;

       if (mobile.match(/^[0]{1}[1]{1}[0-9]{9}$/)){
   
   
           console.log();
           event.target.style.border = "1px solid green "  ;
       }else  event.target.style.border = "1px solid red ";
   
   
   }


function checkEmail(event){

    var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if(event.target.value.match(mailFormat))
        {

         event.target.style.border = "1px solid green "  ;
        }
        else  event.target.style.border = "1px solid red ";
       
}


function checkPassword(event){
       
    // It must not contain any whitespace.
    // It must contain at least one uppercase, one lowercase and one numeric character.
    // It must contain at least one special character. [~`!@#$%^&*()--+={}[]|\:;"'<>,.?/_₹]
    // Length must be between 10 to 16 characters.

    var passFormate = /^(\S)(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹])[a-zA-Z0-9~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹]{8,50}$/;

    if(event.target.value.match(passFormate))
    {

     event.target.style.border = "1px solid green "  ;
    }
    else  event.target.style.border = "1px solid red ";
    
    }
               

function xyz(event){

    const dataSetName= event.target.dataset.name;

    switch(dataSetName){
       
        case "fname":
                    checkFname(event);
                    break;
        case "lname":
                    checkLname(event);
                    break;
        case "dob":
                    checkDob(event);
                    break;        
        case "address":
                    checkAddress(event);
                    break; 
        case "email":
                    checkEmail(event);
                    break; 
        case "mobileNo":
                    checkMobileNo(event);
                    break; 
        case "password":
                    checkPassword(event);
                    break;
        default : return;  
    }
  console.log(event.target.dataset.name);
}




x.forEach((x_event)=>{
    x_event.addEventListener('focusout',xyz)
})
