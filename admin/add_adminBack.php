<?php

include "./partials/conn.php";
$boolFormSubmit = false;

sleep(2);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $boolFormSubmit = true;

    $name = $_POST["name"];
    $name = $conn->real_escape_string($name);
    $username = $_POST["username"];
    $username = $conn->real_escape_string($username);
    $email = $_POST["email"];
    $email = $conn->real_escape_string($email);
    $phoneno = $_POST["phoneno"];
    $phoneno = $conn->real_escape_string($phoneno);
    $password = $_POST["password"];
    $password = $conn->real_escape_string($password);
    $passwordHash = password_hash($password,PASSWORD_DEFAULT);

    $superadmin = $_POST["superadmin"];

    $imgName = $_FILES["uploadDp"]["name"];
    $imgType = $_FILES["uploadDp"]["type"];
    $tmpName = $_FILES["uploadDp"]["tmp_name"];

    $imgExplode = explode('.',$imgName);
    $imgExt = end($imgExplode);


    $validExtension = ["png","jpg","jpeg","bmp"];


    $sql = "SELECT * FROM `admin` WHERE `username` = '$username'";
    $conn->query($sql) ;
    $aff = $conn->affected_rows;
    if($aff > 0){
        echo "Username Already Exist";
        return;
    }

    $sql = "SELECT * FROM `admin` WHERE `email` = '$email'";
    $conn->query($sql) ;
    $aff = $conn->affected_rows;
    if($aff > 0){
        echo "Email Already Exist";
        return;
    }

    if(in_array($imgExt,$validExtension)){
        // for image
        $time = time();
        $time = hash('sha256',$time);
        $newImgName = $username . $time . ".$imgExt";


        move_uploaded_file($tmpName,"./admin_image/".$newImgName);

        $sql = "INSERT INTO `admin` (`name`,`username`,`email`,`password`,`phoneno`,`adminpic`, `superadmin`) 
                VALUES ('$name','$username','$email','$passwordHash','$phoneno','$newImgName','$superadmin');" ;


        $conn->query($sql) ;

        $aff = $conn->affected_rows;

        if($aff > 0){
            echo "Success";
        }else{
            echo "Failed";
        }
    }else{
        echo "Failed";
    }

    


    // echo mysqli_error($conn) ;

}