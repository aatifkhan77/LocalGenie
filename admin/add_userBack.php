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
    $password = $_POST["password"];
    $password = $conn->real_escape_string($password);
    $passwordHash = password_hash($password,PASSWORD_DEFAULT);

    $phoneno = $_POST["phoneno"];
    $phoneno = $conn->real_escape_string($phoneno);
    $occupation = $_POST["occupation"];
    $occupation = $conn->real_escape_string($occupation);
    $address = $_POST["address"];
    $address = $conn->real_escape_string($address);
    $gender = $_POST["gender"];

    // $photo = $_POST["uploadDp"];

    $sql = "SELECT * FROM `user_profile` WHERE `username` = '$username'";
    $conn->query($sql) ;
    $aff = $conn->affected_rows;
    if($aff > 0){
        echo "Username Already Exist";
        return;
    }

    $sql = "SELECT * FROM `user_profile` WHERE `email` = '$email'";
    $conn->query($sql) ;
    $aff = $conn->affected_rows;
    if($aff > 0){
        echo "Email Already Exist";
        return;
    }

    $sql = "SELECT * FROM `user_profile` WHERE `phoneno` = '$phoneno'";
    $conn->query($sql) ;
    $aff = $conn->affected_rows;
    if($aff > 0){
        echo "Phone Number Already Exist";
        return;
    }


    $imgName = $_FILES["uploadDp"]["name"];
    $imgType = $_FILES["uploadDp"]["type"];
    $tmpName = $_FILES["uploadDp"]["tmp_name"];

    if($imgName == NULL || $imgName == "" || $imgType == NULL || $imgType == ""){

        $sql = "INSERT INTO `user_profile` (`name`,`username`,`email`,`password`,`phoneno`,`occupation` ,`address`,`profilepic`,`gender`) 
        VALUES ('$name','$username','$email','$passwordHash','$phoneno','$occupation','$address','noDP.jpg','$gender');" ;


        $conn->query($sql) ;

    }else{

        $imgExplode = explode('.',$imgName);
        $imgExt = end($imgExplode);
        
        
        $validExtension = ["png","jpg","jpeg","bmp"];

        if(in_array($imgExt,$validExtension)){
            // for image
            $time = time();
            $time = hash('sha256',$time);
            $newImgName = $username . $time . ".$imgExt";
    
    
            move_uploaded_file($tmpName,"./user_image/".$newImgName);
       
    
            $sql = "INSERT INTO `user_profile` (`name`,`username`,`email`,`password`,`phoneno`,`address`,`profilepic`,`gender`) 
                    VALUES ('$name','$username','$email','$passwordHash','$phoneno','$address','$newImgName','$gender');" ;
    
    
            $conn->query($sql) ;
    

            
        }else{
            echo "Failed";
        }
    }


    $aff = $conn->affected_rows;
        
    if($aff > 0){
        echo "Success";
    }else{
        echo "Failed";
    }






    // echo mysqli_error($conn) ;

}