<?php session_start();
include_once('../partials/conn.php');

$boolLoggedin = false;
if (isset($_SESSION) and isset($_SESSION["admin"])) {
    $sessionUsername = $_SESSION["admin"];
    $boolLoggedin = true;

    $sql = "SELECT * FROM `admin` WHERE `username` = '$sessionUsername' ";
    $conn->query($sql);

    $aff = $conn->affected_rows;

    if ($aff < 1) {
        header("location: ../dashboard.php");
    } else {
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
    <title>Between Dates Report - Date Selection </title>
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


                    <h1 class="mt-4">B/w Dates Report Date Selection</h1>
                    <div class="card mb-4">
                        <form method="post" name="bwdatesreport" action="bwdates-report-result.php">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>From Date</th>
                                        <td><input class="form-control" id="fromdate" name="fromdate" type="date" value="" required /></td>
                                    </tr>
                                    <tr>
                                        <th>To Date</th>
                                        <td><input class="form-control" id="todate" name="todate" type="date" value="" required /></td>
                                    </tr>


                                    <tr>
                                        <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button></td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>


                </div>
            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

    <script src="../js/scripts.js"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>
