<?php

include "./partials/conn.php";
$boolFormSubmit = false;

sleep(2);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $boolFormSubmit = true;

    $username = $_POST["username"];
    $username = $conn->real_escape_string($username);

    $password = $_POST["password"];
    $password = $conn->real_escape_string($password);

    $sql = "SELECT * FROM `admin` WHERE `username` = '$username';";
    $result = $conn->query($sql);
    $aff = $conn->affected_rows;

    if($aff==1){
        $data = $result->fetch_object();

        $passwordInDatabase = $data->{"password"};
        if(password_verify($password,$passwordInDatabase)){
            echo "success";

            session_start();
            $_SESSION["admin"] = $username;
            $_SESSION["loggedIn"] = "true";

        }
        else{
            echo "Invalid Password";
        }

    }
    else{
        echo "Invalid Username";
    }


}

?>