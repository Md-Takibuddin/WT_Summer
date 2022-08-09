const editButton=document.querySelector(".edit")
const inputfilds=document.querySelectorAll(".select") 
const saveAndCancel = document.querySelector("#saveShow")
const cancelBtn = document.querySelector("#cancelBtn")

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


editButton.addEventListener("click",editClick)
cancelBtn.addEventListener("click",cancelClick)
