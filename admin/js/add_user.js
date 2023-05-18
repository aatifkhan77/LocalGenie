let addUserBtn = document.getElementById("addUserBtn");
let form = document.getElementById("addForm");


form.addEventListener("submit",(e)=>{
    e.preventDefault();

    let addForm = document.getElementById("addForm");

    let formData = new FormData(addForm);

    let url = "./add_userBack.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);

    spinner.classList.add("show");

    xhr.onload = ()=>{
        let data = xhr.responseText;
        // console.log(data);
        
        if(data=="Success"){
            window.location = "./dashboard.php";
            
        }else{
            alert(`${data}!!! Please try again`);
        }

        spinner.classList.remove("show");
        
    }

    xhr.send(formData);

})
