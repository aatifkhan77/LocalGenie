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
    <title> Add Sales Record </title>
    <?php
    include "./partials/metaAndLinks.php";
    ?>
</head>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<style>
    #myModal {
        width: auto;
        margin-left: 10rem;
        margin-right: 10rem;
        padding: 0.25rem;

        color: white;
    }

    #myModal::backdrop {
        background-color: black;
        opacity: 0.7;
    }
</style>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- For Spinner -->
        <?php include "./partials/spinner.php"; ?>

        <!-- For Modal -->
        <dialog id="myModal">
            <div class="container-fluid">
                <div class="row g-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Search User</h6>
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


            <!-- Edi User Form -->
            <div class="container-fluid pt-4 px-4" id="upperForm">
                <div class="row g-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Add Sales Record</h6>
                        <form id="editForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" aria-describedby="username" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="varchar" class="form-control" id="name" name="name" aria-describedby="name" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="email" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="phoneno" class="form-label">Phone Number</label>
                                <input type="varchar" class="form-control" id="phoneno" name="phoneno" minlength="10" maxlength="11" aria-describedby="phoneno" disabled>
                            </div>
                            <button id="addSalesRecordBtn" type="button" class="btn btn-success btn-circle btn-sm mt-3" style="width: 40px; height: 40px; padding: 6px 0px; border-radius: 30px; text-align: center; font-size: 16px; line-height: 1.42857;">
                                <i class="fa fa-plus" style="font-size:18px;color:white"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container-fluid p-3 mt-5 mb-3" >
                <h4 class="mb-4 text-center">Records logs</h4>
                <div id = "tableMain">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Sno.</th>
                            <th>Date of Purchase</th>
                            <th>Amout</th>
                            <th>Points</th>
                            <th>Remarks</th>
                            <th>Added by</th>
                        </tr>
                    </thead>

                    <tbody id= "tableBody">
                        
                    </tbody>
                </table>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

    <!-- javascript for form -->
    <script src="./js/addSalesrecord.js"></script>
    <script src="./js/scripts.js"></script>
    <script src="./js/datatables-simple-demo.js"></script>
</body>

</html>