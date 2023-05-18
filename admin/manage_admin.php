<?php

session_start();
include "./partials/conn.php";

$boolLoggedin = false;
if (isset($_SESSION) and isset($_SESSION["admin"])) {
    $sessionUsername = $_SESSION["admin"];
    $boolLoggedin = true;

    $sql = "SELECT * FROM `admin` WHERE `username` = '$sessionUsername' and `superadmin` = 'yes'";
    $conn->query($sql);
    $aff = $conn->affected_rows;

    if ($aff < 1) {
        header("location: ./dashboard.php");
    }
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
    <title> Manage Admin </title>
    <?php
    include "./partials/metaAndLinks.php";
    ?>
</head>

<style>
    #myAdminModal {
        width: auto;
        margin-left: 10rem;
        margin-right: 10rem;
        padding: 0.25rem;

        color: white;
    }

    #myAdminModal::backdrop {
        background-color: black;
        opacity: 0.7;
    }
</style>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- For Spinner -->
        <?php include "./partials/spinner.php"; ?>

        <!-- For Modal -->
        <dialog id="myAdminModal">
            <div class="container-fluid">
                <div class="row g-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Search Admin</h6>
                        <form>
                            <div class="mb-3">
                                <label for="modalUsername" class="form-label">Username</label>
                                <input type="text" class="form-control" id="modalUsername" name="modalUsername" aria-describedby="modalUsername">
                            </div>
                            <div class="mb-3 mt-3 d-flex justify-content-center">
                                <label for="modalUsername" class="form-label">OR</label>
                            </div>
                            <div class="mb-3">
                                <label for="modalEmail" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="modalEmail" name="modalEmail" aria-describedby="modalEmail">
                            </div>
                            <div class="mb-3">
                                <button type="submit" id="submitModal" class="btn btn-primary">Search</button>
                                <button id="cancelModal" class="btn btn-warning">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </dialog>

        <!-- For Sidebar Section  -->
        <?php include "./partials/sidebar.php"; ?>


        <!-- Content Start -->
        <div class="content">

            <!-- For Navbar Section  -->
            <?php include "./partials/navbar.php"; ?>

            <!-- Edit Admin Form -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Manage Admin</h6>
                        <form id="editForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div type="text" class="form-control bg-dark" id="username" name="username" aria-describedby="username">dummy</div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="passsword">
                            </div> -->
                            <div class="mb-3">
                                <label for="phoneno" class="form-label">Phone Number</label>
                                <input type="varchar" class="form-control" id="phoneno" name="phoneno" aria-describedby="phoneno" minlength="10" maxlength="11">
                            </div>
                            <div class="mb-3">
                                <label for="uploadDp" class="form-label">Upload Photo</label>
                                <input class="form-control bg-dark" type="file" id="uploadDp" name="uploadDp" accept=".jpg, .png, .jpeg, .bmp">
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Super Admin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="superadmin" id="yes" value="yes">
                                        <label class="form-check-label" for="superadmin">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="superadmin" id="no" value="no" checked>
                                        <label class="form-check-label" for="superadmin">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <button id="editAdminBtn" type="submit" class="btn btn-primary">Update</button>
                            <button id="deleteAdminBtn" data-user="" class="btn btn-warning">Delete</button>
                        </form>
                    </div>
                </div>
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

    <!-- For Modal -->
    <script src="./js/edit_admin.js"></script>
</body>

</html>