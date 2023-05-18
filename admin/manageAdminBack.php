<?php

include "./partials/conn.php";
$boolFormSubmit = false;

// extra security
// if (isset($_SESSION) and isset($_SESSION["admin"])) {
//     $sessionUsername = $_SESSION["admin"];
//     $boolLoggedin = true;

//     $sql = "SELECT * FROM `admin` WHERE `username` = '$sessionUsername' and `superadmin` = 'yes'";
//     $conn->query($sql);
//     $aff = $conn->affected_rows;

//     if ($aff < 1) {
//         exit;
//     }
// } else {
//     exit;
// }

// sleep(2);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $req = $_POST["req"];
    if($req == "get"){
        // for getting user values
        $type = $_POST["type"];
        $value = $_POST["value"];

        $sql = "SELECT * FROM `admin` where `$type` = '$value'";

        $result = $conn->query($sql);
        $aff = $conn->affected_rows;

        if($aff > 0){

            $data = $result->fetch_object();
            $username = $data->{"username"};
            $name = $data->{"name"};
            $email = $data->{"email"};
            $phoneno = $data->{"phoneno"};
            $superadmin = $data->{"superadmin"};

            $arr=array("isSuccess"=>"success","username"=>$username, "name"=>$name, "email"=>$email,"phoneno"=>$phoneno,"superadmin"=>$superadmin);
            echo json_encode($arr);        
            // echo "success";



        }else{
            echo json_encode(array("isSuccess"=>"No user Found"));

        }
    }else{
        // for updating user values
        
        $boolFormSubmit = true;
    
        $name = $_POST["name"];
        $name = $conn->real_escape_string($name);
        $username = $_POST["username"];
        $username = $conn->real_escape_string($username);
        $email = $_POST["email"];
        $email = $conn->real_escape_string($email);
        // $password = $_POST["password"];
        // $password = $conn->real_escape_string($password);
        // $passwordHash = password_hash($password,PASSWORD_DEFAULT);
    
        $phoneno = $_POST["phoneno"];
        $phoneno = $conn->real_escape_string($phoneno);
        $superadmin = $_POST["superadmin"];
    
        // $photo = $_POST["uploadDp"];
    
        $imgName = $_FILES["uploadDp"]["name"];
        $imgType = $_FILES["uploadDp"]["type"];
        $tmpName = $_FILES["uploadDp"]["tmp_name"];

        if($imgName == NULL || $imgName == "" || $imgType == NULL || $imgType == ""){

            $sql = "UPDATE `admin` set `name` = '$name', `email` = '$email',`phoneno` = '$phoneno',`superadmin` = '$superadmin' where `username` = '$username'";
    
            $conn->query($sql) ;
    

        }else{

            $sql = "SELECT `adminpic` FROM `admin` where `username` = '$username'";
            $res = $conn->query($sql);
            $data = $res->fetch_object();
            $oldProfilePic = $data->{"adminpic"};
            unlink("./admin_image/$oldProfilePic");

            $imgExplode = explode('.',$imgName);
            $imgExt = end($imgExplode);
            
        
            $validExtension = ["png","jpg","jpeg","bmp"];

            if(in_array($imgExt,$validExtension)){
                // for image
                $time = time();
                $time = hash('sha256',$time);
                $newImgName = $username . $time . ".$imgExt";
        
        
                move_uploaded_file($tmpName,"./admin_image/".$newImgName);
            }else{
                echo "Failed";
            }
        
            $sql = "UPDATE `admin` set `name` = '$name', `email` = '$email',`phoneno` = '$phoneno',`adminpic` = '$newImgName',`superadmin` = '$superadmin' where `username` = '$username'";
    
            $conn->query($sql) ;
    
                
        }

        $aff = $conn->affected_rows;
    
        if($aff > 0){
            echo "Success";
        }else{
            echo "Failed";
        }



    
        echo mysqli_error($conn) ;
        
        
    }
}

if(isset($_GET) and isset($_GET["deleteAdmin"])){
    $username = $_GET["deleteAdmin"];
    $sql = "DELETE from `admin` where `username` = '$username'";
    $res = $conn->query($sql);
    $aff = $conn->affected_rows;

    if($aff > 0){
        echo "Success";
    }else{
        echo "Unable to Delete ";
    }

}

?>