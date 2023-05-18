<?php

include "./assets/partials/conn.php";
$boolFormSubmit = false;

// sleep(2);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $boolFormSubmit = true;

    $name = $_POST["name"];
    $name = $conn->real_escape_string($name);

    $email = $_POST["email"];
    $email = $conn->real_escape_string($email);

    $subject = $_POST["subject"];
    $subject = $conn->real_escape_string($subject);
    
    $message = $_POST["message"];
    $message = $conn->real_escape_string($message);



    $sql = "INSERT INTO `contactus` (`name`,`email`,`subject`,`message`) 
    VALUES ('$name','$email','$subject','$message');" ;


    $conn->query($sql) ;

    $aff = $conn->affected_rows;

    if($aff > 0){
        echo "success";
    }else{
        echo "failed";
    }


}

?>