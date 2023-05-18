let signInBtn = document.getElementById("signInBtn");
// let spinner = document.getElementById("spinner");

signInBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    
    let formData = new FormData();
    let useremail = document.getElementById("useremail");
    let password = document.getElementById("pass");
    if(useremail.value == "" || password.value == ""){
        alert("Fields cannot be Empty.");
        return;
    }

    formData.append("useremail",useremail.value)
    formData.append("password",password.value)

    let url = "../../../Local Genie/userLoginBack.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);

    // spinner.classList.add("show");

    xhr.onload = ()=>{
        let data = xhr.responseText;
        // console.log(data);
            alert(`${data}!! Please try again`);

        // spinner.classList.remove("show");
        
    }

    xhr.send(formData);


})