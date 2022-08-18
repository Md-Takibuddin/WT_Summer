const editButton=document.querySelector(".edit")
const inputfilds=document.querySelectorAll(".select") 
const saveAndCancel = document.querySelector("#saveShow")
const cancelBtn = document.querySelector("#cancelBtn")
const changePassword = document.querySelector("#changePassword")
const deleteAccount = document.querySelector("#delete")



function editClick(){
    inputfilds.forEach((xyz)=>{
    
       xyz.classList.toggle("hide");
    
       if(xyz.classList.contains("hide")){
        xyz.readOnly=true;
       }
       else xyz.readOnly=false;
    })
    saveAndCancel.id="";
    editButton.style.display="none";
}

function cancelClick(){

    saveAndCancel.id="saveShow";
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

function deleteA(event){
    event.preventDefault();
    if (confirm("Are you sure that you want to delete your account?")){
    window.location = "deleteAccount.php";
    }
    else{

    }
}


editButton.addEventListener("click",editClick)
cancelBtn.addEventListener("click",cancelClick)
changePassword.addEventListener("click",changePass)
deleteAccount.addEventListener("click",deleteA)