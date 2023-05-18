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

//   if($boolLoggedin){
//     echo "logged in";
//   }else{
//     echo "not logged in";
//   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Genie</title>
    <?php
    include "./partials/metaAndLinks.php";
    ?>
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


            <!-- Add User Form -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Add Genie</h6>
                        <form id="addForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" aria-describedby="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="passsword" required>
                            </div>
                            <div class="mb-3">
                                <label for="phoneno" class="form-label">Phone Number</label>
                                <input type="varchar" class="form-control" id="phoneno" name="phoneno" aria-describedby="phoneno" minlength="10" maxlength="11" required>
                            </div>
                            <div class="mb-3">
                                <label for="occupation" class="form-label">occupation</label>
                                <input type="text" class="form-control" id="occupation" name="occupation" aria-describedby="occupation" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" aria-describedby="address" required>
                            </div>
                            <div class="mb-3">
                                <label for="uploadDp" class="form-label">Upload Photo</label>
                                <input class="form-control bg-dark" type="file" id="uploadDp" name="uploadDp" accept=".jpg, .png, .jpeg, .bmp">
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
                                        <label class="form-check-label" for="gender">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                                        <label class="form-check-label" for="gender">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div>
                                <button id="addUserBtn" type="submit" class="btn btn-primary">Add User</button>
                            </div>
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

    <!-- For Form -->
    <script src="./js/add_user.js"></script>
</body>

</html>