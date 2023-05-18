<?php
  session_start();
  include "./partials/conn.php";

  $boolLoggedin = false;
  if(isset($_SESSION) and isset($_SESSION["admin"]) ){
    $sessionUsername = $_SESSION["admin"];
    $boolLoggedin = true;
  
  }else{
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
    <title>Add Record</title>
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