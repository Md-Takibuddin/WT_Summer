const email = document.getElementById("LoginEmail")
const password = document.getElementById("LoginPassword")

function loginBtn(){
if(email.value.length && password.value.length){
        return true;
}
else return false;
}
const login = document.getElementById("Admin_login_submit")
login.addEventListener('click',loginBtn)
