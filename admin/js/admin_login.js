let signInBtn = document.getElementById("signInBtn");
let spinner = document.getElementById("spinner");

signInBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    
    let formData = new FormData();
    let username = document.getElementById("username");
    let password = document.getElementById("adminPassword");
    if(username.value == "" || password.value == ""){
        alert("Fields cannot be empty");
        return;
    }

    formData.append("username",username.value)
    formData.append("password",password.value)

    let url = "./adminSigninBack.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);

    spinner.classList.add("show");

    xhr.onload = ()=>{
        let data = xhr.responseText;
        // console.log(data);
        
        if(data=="success"){
            window.location = "./dashboard.php";
            
        }else{
            alert(`${data}!! Please try again`);
        }

        spinner.classList.remove("show");
        
    }

    xhr.send(formData);


})