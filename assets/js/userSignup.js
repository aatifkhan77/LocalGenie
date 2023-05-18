// let addUserBtn = document.getElementById("addAdminBtn");
let form = document.getElementById("addForm");

let emailSignup = document.getElementById("emailSignup");
emailSignup.addEventListener("input",(e)=>{


    // let url = "../../../Local Genie/userSignupBack.php?checkEmail=${emailSignup.value}";
    let url = `./userSignupBack.php?checkEmail=${emailSignup.value}`;
    let xhr = new XMLHttpRequest();

    xhr.open("GET",url,true);


    xhr.onload = ()=>{
        let data = xhr.responseText;
        
        if(data=="fail"){
            alert("Email already exists.");    
            emailSignup.value = "";        
        }
        
    }

    xhr.send();

    
})



form.addEventListener("submit",(e)=>{
    e.preventDefault();

    // console.log(`form submit krna hai`);
    
    let name = document.getElementById("name");
    let emailSignup = document.getElementById("emailSignup");
    let password = document.getElementById("password");
    let inputState = document.getElementById("inputState");
    let inputDistrict = document.getElementById("inputDistrict");


    if(name.value == "" || name.value == null){
        alert("Name cannot be empty");   
        return;     
    }

    if(emailSignup.value == "" || emailSignup.value == null){
        alert("Name cannot be empty");   
        return;     
    }

    if(password.value == "" || password.value == null){
        alert("Name cannot be empty");   
        return;     
    }

    if(inputState.value == "" || inputState.value == null){
        alert("State cannot be empty");   
        return;     
    }

    if(inputDistrict.value == "" || inputDistrict.value == null){
        alert("State cannot be empty");   
        return;     
    }



    let form = new FormData();
    form.append("name",name.value);
    form.append("email",emailSignup.value);
    form.append("password",password.value);
    form.append("inputState",inputState.value);
    form.append("inputDistrict",inputDistrict.value);

    let url = "./userSignupBack.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);


    xhr.onload = ()=>{
        let data = xhr.responseText;
        // console.log(data);
        
        if(data=="Success"){
            location.reload();
            
        }else{
            alert(`${data}!!! Please try again`);
        }        
    }

    xhr.send(form);

})
