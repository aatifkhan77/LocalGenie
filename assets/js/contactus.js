// let addUserBtn = document.getElementById("addAdminBtn");
let contactForm = document.getElementById("contactForm");


contactForm.addEventListener("submit",(e)=>{
    e.preventDefault();

    console.log(`form submit krna hai`);
    
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let subject = document.getElementById("subject");
    let message = document.getElementById("message");


    if(name.value == "" || name.value == null){
        alert("Name cannot be empty");   
        return;     
    }

    if(email.value == "" || email.value == null){
        alert("email cannot be empty");   
        return;     
    }

    if(subject.value == "" || subject.value == null){
        alert("subject cannot be empty");   
        return;     
    }

    if(message.value == "" || message.value == null){
        alert("content message cannot be empty");   
        return;     
    }



    let form = new FormData();
    form.append("name",name.value);
    form.append("email",email.value);
    form.append("subject",subject.value);
    form.append("message",message.value);

    let url = "./contact.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);


    xhr.onload = ()=>{
        let data = xhr.responseText;
        // console.log(data);
        
        if(data=="success"){
            alert(`We will revert back to you shortly!!!`);
            location.reload();
            
        }else{
            alert(`${data}!!! Please try again`);
        }        
    }

    xhr.send(form);

})
