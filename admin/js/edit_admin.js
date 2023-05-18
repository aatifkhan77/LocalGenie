let myModal = document.getElementById("myAdminModal");

const url = new URL(window.location.href);
const searchParams = url.searchParams;
let query = searchParams.get("username")
if(query != "" && query != null){
    // console.log(query);
    let modalUsername = document.getElementById("modalUsername");
    modalUsername.value = query;

    
    let type = "username";  
    let value = modalUsername.value; 

    let url = "./manageAdminBack.php";
    let formData = new FormData();

    formData.append("value",value);
    formData.append("type",type);
    formData.append("req","get");

    let xhr = new XMLHttpRequest();
    xhr.open("POST",url,true);

    xhr.onload = ()=>{
        let data = xhr.responseText;
        data = JSON.parse(data);
        // console.log(data);

        if(data["isSuccess"] == "success"){
            myModal.close();
            let username = document.getElementById("username");
            let deleteAdminBtn = document.getElementById("deleteAdminBtn");
            let name = document.getElementById("name");
            let email = document.getElementById("email");
            let phoneno = document.getElementById("phoneno");
            let yes = document.getElementById("yes");
            let no = document.getElementById("no");

            username.innerHTML = data["username"];
            name.value = data["name"];
            email.value = data["email"];
            phoneno.value = data["phoneno"];
            if(data["superadmin"] == "yes"){
                yes.checked = true;
                no.checked = false;
            }else{
                yes.checked = false;
                no.checked = true; 
            }
            deleteAdminBtn.setAttribute("data-user",username.innerHTML);


        }else{
            alert(`${data["isSuccess"]}`);
        }
        
    }

    xhr.send(formData)


}

let cancelModal = document.getElementById("cancelModal");
let editAdminBtn = document.getElementById("editAdminBtn");

myModal.showModal();

myModal.addEventListener("cancel",(e)=>{
    e.preventDefault();
})


cancelModal.addEventListener("click",(e)=>{
    e.preventDefault();
    window.location.href = "./dashboard.php";
})


let modalUsername = document.getElementById("modalUsername");
let modalEmail = document.getElementById("modalEmail");
let submitModal = document.getElementById("submitModal");


// modalUsername.addEventListener("input",(e)=>{
//     modalEmail.value = "";
// })

// modalEmail.addEventListener("input",(e)=>{
//     modalUsername.value = "";
// })


submitModal.addEventListener("click",(e)=>{
    e.preventDefault();
    if(modalEmail.value != "" && modalUsername.value != ""){
        alert("Alert!!! Kindly Enter anyone Value.");
    }else{

        let type = "";  
        let value = "";      
        if(modalEmail.value == "" || modalEmail.value == null){
            type = "username";
            value = modalUsername.value;
        }else{
            type = "email";
            value = modalEmail.value;
        }


        let url = "./manageAdminBack.php";
        let formData = new FormData();

        formData.append("value",value);
        formData.append("type",type);
        formData.append("req","get");

        let xhr = new XMLHttpRequest();
        xhr.open("POST",url,true);

        xhr.onload = ()=>{
            let data = xhr.responseText;
            data = JSON.parse(data);
            // console.log(data);

            if(data["isSuccess"] == "success"){
                myModal.close();
                let username = document.getElementById("username");
                let deleteAdminBtn = document.getElementById("deleteAdminBtn");
                let name = document.getElementById("name");
                let email = document.getElementById("email");
                let phoneno = document.getElementById("phoneno");
                let yes = document.getElementById("yes");
                let no = document.getElementById("no");

                username.innerHTML = data["username"];
                name.value = data["name"];
                email.value = data["email"];
                phoneno.value = data["phoneno"];
                if(data["superadmin"] == "yes"){
                    yes.checked = true;
                    no.checked = false;
                }else{
                    yes.checked = false;
                    no.checked = true; 
                }

                deleteAdminBtn.setAttribute("data-user",username.innerHTML);

            }else{
                alert(`${data["isSuccess"]}`);
            }
            
        }

        xhr.send(formData)



    }
})

// For Editing Admin

editAdminBtn.addEventListener("click",(e)=>{
    e.preventDefault();


    let editForm = document.getElementById("editForm");
    let username = document.getElementById("username");

    let formData = new FormData(editForm);
    formData.append("req","post");
    formData.delete("username");
    formData.append("username",username.innerHTML);

    // console.log(formData);
    

    let url = "./manageAdminBack.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);

    spinner.classList.add("show");

    xhr.onload = ()=>{
        let data = xhr.responseText;
        // console.log(data);
        
        if(data=="Success"){
            alert("Record has been Successfully Updated.");
            location.reload();
            
        }else{
            alert(`${data}!!! Please try again`);
        }

        spinner.classList.remove("show");
        
    }

    xhr.send(formData);



})

// For Deleting Admin

let deleteAdminBtn = document.getElementById("deleteAdminBtn");
deleteAdminBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    let cnfrm = confirm("Do you really want to Delete? ");

    if(cnfrm){
        let username = e.target.getAttribute("data-user");

        let url = `./manageAdminBack.php?deleteAdmin=${username}`;
        let xhr = new XMLHttpRequest();

        xhr.open("GET",url,true);

        spinner.classList.add("show");

        xhr.onload = ()=>{
            let data = xhr.responseText;
            console.log(data);
            
            if(data=="Success"){
                alert("Record has been Successfully Deleted.");
                location.reload();
                
            }else{
                alert(`${data}!!! Please try again`);
            }

            spinner.classList.remove("show");
            
        }

        xhr.send();
    }

})
