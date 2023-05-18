// let addUserBtn = document.getElementById("addAdminBtn");
let form = document.getElementById("addForm");


form.addEventListener("submit",(e)=>{
    e.preventDefault();

    let addForm = document.getElementById("addForm");

    let formData = new FormData(addForm);

    let url = "./add_adminBack.php";
    let xhr = new XMLHttpRequest();

    xhr.open("POST",url,true);

    spinner.classList.add("show");

    xhr.onload = ()=>{
        let data = xhr.responseText;
        // console.log(data);
        
        if(data=="Success"){
            location.reload();
            
        }else{
            alert(`${data}!!! Please try again`);
        }

        spinner.classList.remove("show");
        
    }

    xhr.send(formData);

})
