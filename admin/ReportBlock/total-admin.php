<?php session_start();
include_once('../partials/conn.php');

$boolLoggedin = false;
if (isset($_SESSION) and isset($_SESSION["admin"])) {
    $sessionUsername = $_SESSION["admin"];
    $boolLoggedin = true;

    $sql = "SELECT * FROM `admin` WHERE `username` = '$sessionUsername' and `superadmin` = 'yes' ";
    $conn->query($sql);

    $aff = $conn->affected_rows;

    if ($aff < 1) {
        header("location: ../dashboard.php");
    }else{
            // for deleting user
        if (isset($_GET['id'])) {
            $adminid = $_GET['id'];
            $sql2 = "DELETE FROM `admin` where adminid='$adminid'" ;
            $msg = $conn->query($sql2);
            if ($msg && $msg != null) {
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
    <title> All Registered Admins </title>
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
                    <h1 class="mt-4">All Registered Admins</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">All Registered Admins</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            All Admins Details
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
                                        <th>Super Admin</th>
                                        <th>Reg. Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $ret = mysqli_query($conn, "select * from admin");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($ret)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phoneno']; ?></td>
                                            <td><?php echo $row['superadmin']; ?></td>
                                            <td><?php echo $row['datetime']; ?></td>
                                            <td>
                                                <a class="editUser" href="../manage_admin.php?username=<?php echo $row['username']; ?>"><i class="fas fa-edit"></i></a>
                                                
                                                <a href="total-admin.php?id=<?php echo $row['adminid']; ?>" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></a>

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
