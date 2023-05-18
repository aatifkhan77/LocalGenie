<?php session_start();
include_once('../partials/conn.php');

$boolLoggedin = false;
if (isset($_SESSION) and isset($_SESSION["admin"])) {
    $sessionUsername = $_SESSION["admin"];
    $boolLoggedin = true;

    $sql = "SELECT * FROM `admin` WHERE `username` = '$sessionUsername' ";
    $conn->query($sql);

    $sql1 = "SELECT `superadmin` FROM `admin` WHERE `username` = '$sessionUsername'" ;
    $res = $conn->query($sql1);
    $data = $res->fetch_object();
    $superadmin = $data->{"superadmin"};

    $aff = $conn->affected_rows;

    if ($aff < 1) {
        header("location: ../dashboard.php");
    }else{
            // for deleting user
        if (isset($_GET['id'])) {
            $adminid = $_GET['id'];
            $msg = mysqli_query($conn, "delete from user_profile where userid='$adminid'");
            $aff = $conn->affected_rows;
            if($aff > 0){
                echo "<script>alert('Data deleted');</script>";
            }
        }
    
    }
} else {
    header("location: ../adminSignin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registered Genii in Last 30 Days </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <link href="../css/reportblock.css" rel="stylesheet" />

</head>

<body class="sb-nav-fixed">
    <?php include_once('includes/navbar.php'); ?>
    <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Registered Genii in Last 30 Days </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Registered Genii in Last 30 Days </li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Registered Genii in Last 30 Days Details
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Full Name</th>
                                        <th>Username</th>
                                        <th>Email Id</th>
                                        <th>Phone Number</th>
                                        <th>Occupation</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Reg. Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $ret = mysqli_query($conn, "select * from user_profile where date(datetime)>=CURRENT_DATE()-30");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($ret)) {

                                        ?>
                                            <tr>
                                                <td><?php echo $cnt; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phoneno']; ?></td>
                                                <td><?php echo $row['occupation']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['gender']; ?></td>
                                                <td><?php echo $row['datetime']; ?></td>
                                                <td>

                                                <a class="editUser" href="../edit_user.php?username=<?php echo $row['username']; ?>"><i class="fas fa-edit"></i></a>

                                                <?php
                                                if ($superadmin == 'yes') { ?>
                                                    <a href="lastthirtydays-reg-users.php?id=<?php echo $row['userid']; ?>" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                <?php } else { ?>
                                                    <a href="lastthirtydays-reg-users.php" onClick="return confirm('Sorry!!! You are Not Authorised to Modify.');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                <?php  } ?>
                                            </td>
                                        </tr>
                                    <?php $cnt = $cnt + 1;
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

    <script src="../js/scripts.js"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>
