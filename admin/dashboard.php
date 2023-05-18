<?php

session_start();
include "./partials/conn.php";

$boolLoggedin = false;
if (isset($_SESSION) and isset($_SESSION["admin"])) {
    $sessionUsername = $_SESSION["admin"];
    $boolLoggedin = true;
} else {
    header("location: ./adminSignin.php");
}


// if($boolLoggedin){
//   echo "logged in";
// }else{
//   echo "not logged in";
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <?php
    include "./partials/metaAndLinks.php";
    ?>
    <!-- For Dashboard CSS -->
    <link href='./css/styles.css' rel='stylesheet'>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- For Spinner -->
        <?php include "./partials/spinner.php"; ?>

        <!-- For Sidebar Section  -->
        <?php include "./partials/sidebar.php"; ?>

        <!-- Content Start -->
        <div class="content">

            <!-- For Navbar Section  -->
            <?php include "./partials/navbar.php"; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 mb-4">Dashboard</h1>

                        <div class="mt-3 mb-4"> Admin  Section</div>

                        <!-- For Admin -->
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "select adminid from admin");
                            $totaladmins = mysqli_num_rows($query);
                            ?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body" style="color: white;">Total Registered Admins &nbsp; -- &nbsp;
                                        <span style="font-size:22px;"> <?php echo $totaladmins; ?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="./ReportBlock/total-admin.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mb-4"> Genie Section</div>
                        <!-- For User -->
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "select userid from user_profile");
                            $totalusers = mysqli_num_rows($query);
                            ?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body" style="color: white;">Total Registered Customers &nbsp; -- &nbsp;
                                        <span style="font-size:22px;"> <?php echo $totalusers ; ?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="./ReportBlock/total-user.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mb-4"> Contact Us Section </div>
                        <!-- For User -->
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "select userid from user_profile");
                            $totalusers = mysqli_num_rows($query);
                            ?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body" style="color: white;"> User's Queries  &nbsp; -- &nbsp;
                                        <span style="font-size:22px;"> <?php echo $totalusers ; ?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="./CutomerQueries/total-user.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>
            </div>



            <!-- For Footer Section  -->
            <?php include './partials/footer.php' ?>

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- For javascrip Libraries -->
    <?php include './partials/javascript.php' ?>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>