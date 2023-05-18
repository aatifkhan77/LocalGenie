<?php

include "./assets/partials/conn.php";
$boolFormSubmit = false;

// sleep(2);


if(isset($_GET) and isset($_GET["checkEmail"])){
    $email = $_GET["checkEmail"];

    $sql = "SELECT * FROM `userlogin` WHERE `email` = '$email'";
    $conn->query($sql) ;
    $aff = $conn->affected_rows;
    if($aff > 0){
        echo "fail";
        return;
    }else{
        echo "success";
    }




}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $boolFormSubmit = true;

    $name = $_POST["name"];
    $name = $conn->real_escape_string($name);
    $email = $_POST["email"];
    $email = $conn->real_escape_string($email);
    $inputState = $_POST["inputState"];
    $inputState = $conn->real_escape_string($inputState);
    $inputDistrict = $_POST["inputDistrict"];
    $inputDistrict = $conn->real_escape_string($inputDistrict);
    // $district = $_POST["inputDistrict"];
    // $district = $conn->real_escape_string($district);
    $password = $_POST["password"];
    $password = $conn->real_escape_string($password);
    $passwordHash = password_hash($password,PASSWORD_DEFAULT);


    // $imgName = $_FILES["uploadDp"]["name"];
    // $imgType = $_FILES["uploadDp"]["type"];
    // $tmpName = $_FILES["uploadDp"]["tmp_name"];

    // $imgExplode = explode('.',$imgName);
    // $imgExt = end($imgExplode);


    // $validExtension = ["png","jpg","jpeg","bmp"];


    $sql = "SELECT * FROM `userlogin` WHERE `email` = '$email'";
    $conn->query($sql) ;
    $aff = $conn->affected_rows;
    if($aff > 0){
        echo "Email Already Exist";
        return;
    }

    // if(in_array($imgExt,$validExtension)){
    //     // for image
    //     $time = time();
    //     $time = hash('sha256',$time);
    //     $newImgName = $username . $time . ".$imgExt";


        // move_uploaded_file($tmpName,"./user_image/".$newImgName);

        // $sql = "INSERT INTO `userlogin` (`name`,`email`,`password`,`state`,`district`,`userpic`) 
        //         VALUES ('$name','$email','$passwordHash','$state','$district','$newImgName');" ;
        $sql = "INSERT INTO `userlogin` (`name`,`email`,`password`,`state`,`district`) 
                VALUES ('$name','$email','$passwordHash','$inputState','$inputDistrict');" ;


        $conn->query($sql) ;

        $aff = $conn->affected_rows;

        if($aff > 0){
            echo "Success";
        }else{
            echo "Failed";
        }
}

    


    // echo mysqli_error($conn) ;



?>