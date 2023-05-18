let myModal = document.getElementById("myModal");

const url = new URL(window.location.href);
const searchParams = url.searchParams;
let query = searchParams.get("username")

// if(query != "" && query != null){
//     // console.log(query);
//     let modalUsername = document.getElementById("modalUsername");
//     modalUsername.value = query;

    
//     let type = "username";  
//     let value = modalUsername.value; 

//     let url = "./manageSalesBack.php";
//     let formData = new FormData();

//     formData.append("value",value);
//     formData.append("type",type);
//     formData.append("req","get");

//     let xhr = new XMLHttpRequest();
//     xhr.open("POST",url,true);

//     xhr.onload = ()=>{
//         let data = xhr.responseText;
//         data = JSON.parse(data);
//         // console.log(data);

//         if(data["isSuccess"] == "success"){
//             myModal.close();
//             let username = document.getElementById("username");
//             let deleteUserBtn = document.getElementById("deleteUserBtn");
//             let name = document.getElementById("name");
//             let email = document.getElementById("email");
//             let phoneno = document.getElementById("phoneno");

//             username.value = data["username"];
//             name.value = data["name"];
//             email.value = data["email"];
//             phoneno.value = data["phoneno"];

//             deleteUserBtn.setAttribute("data-user",username.innerHTML);

//             // gender.value = 

//         }else{
//             alert(`${data["isSuccess"]}`);
//         }
        
//     }

//     xhr.send(formData)


// }


let cancelModal = document.getElementById("cancelModal");
let editUserBtn = document.getElementById("editUserBtn");

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


        let url = "./manageSalesBack.php";
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
                // let deleteUserBtn = document.getElementById("deleteUserBtn");
                let username = document.getElementById("username");
                let name = document.getElementById("name");
                let email = document.getElementById("email");
                let phoneno = document.getElementById("phoneno");

                username.value = data["username"];
                name.value = data["name"];
                email.value = data["email"];
                phoneno.value = data["phoneno"];

                populateTable(data["username"]);

                // deleteUserBtn.setAttribute("data-user",username.innerHTML);

                // gender.value = 

            }else{
                alert(`${data["isSuccess"]}`);
            }
            
        }

        xhr.send(formData)



    }
})


function populateTable(username){
    let tableBody = document.getElementById("tableBody");
    let urlInside = `./addSalesRecordBack.php?tableData=${username}`;
    let xhrInside = new XMLHttpRequest();
    xhrInside.open("GET",urlInside,true);
    xhrInside.onload = ()=>{
        let data = xhrInside.responseText;
        tableBody.innerHTML = data;
        
    }
    xhrInside.send();
}



let addSalesRecordBtn = document.getElementById("addSalesRecordBtn");
let upperForm = document.getElementById("upperForm");

addSalesRecordBtn.addEventListener("click",(e)=>{
    let div = document.createElement("div");
    div.setAttribute("class","container-fluid pt-4 px-4");
    div.setAttribute("id","amountDivContainer");
    div.innerHTML = `
    <div class="row g-4">
    <div class="bg-secondary rounded h-100 p-4">
        <form id="amountForm">
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" aria-describedby="amount">
                </div>
                <div class="mb-3">
                    <label for="remark" class="form-label">Remarks*</label>
                    <input type="text" class="form-control" id="remark" name="remark" aria-describedby="remark">
                </div>
            <button type="button" id="addAmountBtn" class="btn btn-success">Add Record</button>
        </form>
    </div>
    </div>
    `;

    let check = document.getElementById("amountDivContainer");
    if(check == null){
        upperForm.appendChild(div);
        addAmountFunc();
    }
})

function addAmountFunc(){
    let addAmountBtn = document.getElementById("addAmountBtn");
    let amount = document.getElementById("amount");
    let remark = document.getElementById("remark");
    let username = document.getElementById("username");
    addAmountBtn.addEventListener("click",(e)=>{
        if(amount.value != "" && amount.value != null){
            
            let url = "./addSalesRecordBack.php";
            let formData = new FormData();

            formData.append("username",username.value);
            formData.append("amount",amount.value);
            formData.append("remark",remark.value);

            let xhr = new XMLHttpRequest();
            xhr.open("POST",url,true);

            spinner.classList.add("show");
            
            xhr.onload = ()=>{
                let data = xhr.responseText;
                // console.log(data);

                if(data == "Success"){
                    // console.log(`run this`);
                    amount.value = "";
                    remark.value = "";
                    populateTable(username.value);
                }else{
                    alert(`${data}`);
                }

                spinner.classList.remove("show");
                
            }

            xhr.send(formData)


        }else{
            alert("Fields cannot be left empty!!!");
        }

        
    })
}




