<?php

include "./assets/partials/conn.php";
$boolFormSubmit = false;

// sleep(2);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $boolFormSubmit = true;

    $useremail = $_POST["useremail"];
    $useremail = $conn->real_escape_string($useremail);

    $password = $_POST["password"];
    $password = $conn->real_escape_string($password);

    $sql = "SELECT * FROM `userlogin` WHERE `email` = '$useremail';";
    $result = $conn->query($sql);
    $aff = $conn->affected_rows;

    if($aff==1){
        $data = $result->fetch_object();

        $passwordInDatabase = $data->{"password"};
        if(password_verify($password,$passwordInDatabase)){             // password verify
            echo "success";

            session_start();
            $_SESSION["user"] = $useremail;
            $_SESSION["loggedIn"] = "true";

        }
        else{
            echo "Invalid Password";
        }

    }
    else{
        echo "Invalid Email Id";
    }


}

?>