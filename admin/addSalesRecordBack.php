<?php

include "./partials/conn.php";
$boolFormSubmit = false;

session_start();

// sleep(2);

if($_SERVER["REQUEST_METHOD"]=="POST"){

    // // extra security
    $sessionUsername = $_SESSION["admin"];
    $boolLoggedin = true;

    $sql = "SELECT * FROM `admin` WHERE `username` = '$sessionUsername'";
    $res = $conn->query($sql);
    $aff = $conn->affected_rows;
    if ($aff < 1) {
        exit;
    }
    $data = $res->fetch_object();
    $adminId = $data->{"adminid"};


    $username = $_POST["username"];
    $amount = $_POST["amount"];
    $remark = $_POST["remark"];
    $points = $amount/1000;
    $points = number_format((float)$points, 1, '.', ''); 
    $tier = "" ;

    if($points<50)
        {
            $tier = "---" ;
        }
    else if($points>=50 && $points<600)
        {
            $tier = "Silver" ;
        }
    else if($points>=600 && $points<1400)
        {
            $tier = "Gold" ;
        }
    else if($points>=1400 && $points<2001)
        {
            $tier = "Platinum" ;
        }
    else   
        {
            $tier = "Platinum+" ;
        }

    

    $sql = "SELECT * FROM `user_profile` where `username` = '$username'";
    $res = $conn->query($sql);
    $aff = $conn->affected_rows;
    if($aff > 0){
        $data = $res->fetch_object();
        $userid = $data->{"userid"};

        $sql = "INSERT INTO `sales_record` (`userid`, `username`, `amount`, `points`, `tier`,`remarks`, `addedbySno`, `addedby`) 
                VALUES ('$userid', '$username', '$amount', '$points', '$tier', '$remark', '$adminId', '$sessionUsername')";
        $res = $conn->query($sql);
        $aff = $conn->affected_rows;
        if($aff > 0){
            echo "Success";
        }else{
            // echo mysqli_error($conn);
            echo "Error";
        }

    }else{
        echo "Error";
    }

    // echo "Success";

}

if(isset($_GET) and isset($_GET["tableData"])){
    $username = $_GET["tableData"];
    // $sql = "DELETE from `admin` where `username` = '$username'";
    // $res = $conn->query($sql);
    
    $sql = "SELECT * FROM `sales_record` where `username` = '$username'";
    $res = $conn->query($sql);
    $aff = $conn->affected_rows;
    
    $allrows = "";
    
    if($aff > 0){
        $count = 1;
        while($data=$res->fetch_object()){
        // $username = $data->{"username"}

            $amount = $data->{"amount"};
            $points = $data->{"points"};
            $remarks = $data->{"remarks"};
            $addedby = $data->{"addedby"};
            $dop = $data->{"dop"};
            
            $allrows .= "
            <tr>
            <td>$count</td>
            <td>$dop</td>
            <td>$amount</td>
            <td>$points</td>
            <td>$remarks</td>
            <td>$addedby</td>
            </tr>";

            $count = $count + 1;
        }

        echo $allrows;

    }else{
        echo "<td class='dataTables-empty' colspan='6'>No entries found</td>";
    }


}


?>