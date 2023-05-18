<?php

include "./partials/conn.php";
$boolFormSubmit = false;

// sleep(2);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $req = $_POST["req"];
    if($req == "get"){

        // for getting user values
        $type = $_POST["type"];
        $value = $_POST["value"];

        $sql = "SELECT * FROM `user_profile` where `$type` = '$value'";

        $result = $conn->query($sql);
        $aff = $conn->affected_rows;

        if($aff > 0){

            $data = $result->fetch_object();
            $username = $data->{"username"};
            $name = $data->{"name"};
            $email = $data->{"email"};
            $phoneno = $data->{"phoneno"};

            $arr=array("isSuccess"=>"success","username"=>$username, "name"=>$name, "email"=>$email,"phoneno"=>$phoneno);
            echo json_encode($arr);   
                 
            // echo "success";



        }else{
            echo json_encode(array("isSuccess"=>"No user Found"));

        }
    }
}

if(isset($_GET) and isset($_GET["deleteUser"])){
    $username = $_GET["deleteUser"];
    $sql = "DELETE from `user_profile` where `username` = '$username'";
    $res = $conn->query($sql);
    $aff = $conn->affected_rows;

    if($aff > 0){
        echo "Success";
    }else{
        echo "Unable to Delete ";
    }

}

?>