<?php session_start();
include_once('../partials/conn.php');

$boolLoggedin = false;
if (isset($_SESSION) and isset($_SESSION["admin"])) {
    $sessionUsername = $_SESSION["admin"];
    $boolLoggedin = true;

    $sql = "SELECT * FROM `admin` WHERE `username` = '$sessionUsername' ";
    $conn->query($sql);

    $sql1 = "SELECT `superadmin` FROM `admin` WHERE `username` = '$sessionUsername'";
    $res = $conn->query($sql1);
    $data = $res->fetch_object();
    $superadmin = $data->{"superadmin"};

    $aff = $conn->affected_rows;

    if ($aff < 1) {
        header("location: ../dashboard.php");
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
    <title>B/w Dates Report Result </title>
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
                    <h1 class="mt-4">B/w Dates Report Result</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">B/w Dates Report Result</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header" align="center" style="font-size:20px;">
                            <i class="fas fa-table me-1"></i>
                            <?php
                            $fdate = $_POST['fromdate'];
                            $tdate = $_POST['todate'];

                            ?>

                            B/w Dates Report Result from <?php echo date("d-m-Y", strtotime($fdate)); ?> to <?php echo date("d-m-Y", strtotime($tdate)); ?>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                            <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Full Name</th>
                                        <th>Username</th>
                                        <th>Phone Number</th>
                                        <th>Last Purchase Date</th>
                                        <th>Total Points</th>
                                        <th>Tier</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $ret = mysqli_query($conn, "Select *
                                                                      From sales_record, user_profile
                                                                      Where sales_record.username = user_profile.username
                                                                      and date(dop) between '$fdate' and '$tdate'");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($ret)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['phoneno']; ?></td>
                                            <td><?php echo $row['dop']; ?></td>
                                            <td><?php echo $row['points']; ?></td>
                                            <td><?php echo $row['tier']; ?></td>

                                            <td>
                                                <a class="editUser  d-flex justify-content-center" href="../user_profile.php?username=<?php echo $row['username']; ?>"><i class="fa fa-eye"></i></a>

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
