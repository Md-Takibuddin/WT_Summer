const editButton=document.querySelector(".editBtn")
const inputfilds=document.querySelectorAll(".select") 
const saveShow = document.querySelector("#saveShow")
const cancelBtn = document.querySelector("#cancelBtn")
const changePassword = document.querySelector("#changePassword")
const deleteBtn = document.querySelector(".deleteBtn")

function editClick(e){
    e.preventDefault();
    inputfilds.forEach((xyz)=>{
       xyz.classList.toggle("hide");
       if(xyz.classList.contains("hide")){
        xyz.readOnly=true;
       }
       else {
        xyz.style.background = "rgba(47, 128, 237, 0.1)";
        xyz.style.padding = "5px 15px";
        xyz.readOnly=false;
       }
    })

    saveShow.style.display = "block";
    editButton.style.display="none";
}

function cancelClick(){
    saveShow.style.display = "none";
    editButton.style.display="block";

    inputfilds.forEach((xyz)=>{
        xyz.classList.toggle("hide");
        if(xyz.classList.contains("hide")){
         xyz.readOnly=true;
        }
        else xyz.readOnly=false;
     })

}
function changePass(event){
    event.preventDefault()
    window.location = "changePassword.php";
}

function deleteAccount(event){
    event.preventDefault()
    if (confirm("Are you sure that you want to delete your account?")){
       window.location = "deleteAccount.php";
    }
    else{
        console.log("DIDNT WORKED");
    }
}


editButton.addEventListener("click",editClick)
cancelBtn.addEventListener("click",cancelClick)
changePassword.addEventListener("click",changePass)
deleteBtn.addEventListener("click",deleteAccount)