<?php
session_start();
include "./assets/partials/conn.php";
$sessionUsername = "";
$boolLoggedin = false;
if (isset($_SESSION) and isset($_SESSION["user"])) {
    $sessionUsername = $_SESSION["user"];
    $boolLoggedin = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Genie Information</title>

  <?php
  include "./assets/partials/links.php";
  ?>


</head>

<body>

  <!-- ======= Header ======= -->

  <?php include "./assets/partials/navbar.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Genie Details</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut
                a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum
                dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="./index.php">Home</a></li>
            <li>Genie Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <div class="genie-card">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="./assets/css/portfolio.css">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 1</h5>
                  <p class="m-0">Job Profile</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="237342564f644c5a4657574663444e424a4f0d404c4e">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 2</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="6d3d0c18012a0214081919082d0a000c0401430e0200">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 3</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="1a4a7b6f765d75637f6e6e7f5a7d777b737634797577">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 4</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="fcac9d8990bb938599888899bc9b919d9590d29f9391">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 5</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="1a4a7b6f765d75637f6e6e7f5a7d777b737634797577">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 6</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="1a4a7b6f765d75637f6e6e7f5a7d777b737634797577">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 7</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="1a4a7b6f765d75637f6e6e7f5a7d777b737634797577">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 8</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="1a4a7b6f765d75637f6e6e7f5a7d777b737634797577">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 9</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="1a4a7b6f765d75637f6e6e7f5a7d777b737634797577">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 10</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="1a4a7b6f765d75637f6e6e7f5a7d777b737634797577">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 11</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="1a4a7b6f765d75637f6e6e7f5a7d777b737634797577">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
              <div class="card-body row">
                <div class="col-6">
                  <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-fluid rounded-circle w-60"></a>
                </div>
                <div class="col-6 card-title align-self-center mb-0">
                  <h5>Genie 12</h5>
                  <p class="m-0">Job Role</p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a href="#"><span class="__cf_email__" data-cfemail="1a4a7b6f765d75637f6e6e7f5a7d777b737634797577">[email&#160;protected]</span></a>
                </li>
                <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
              </ul>
              <div class="card-body">
                <div class="float-right btn-group btn-group-sm">
                  <a href="./userLogin.php" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Appointment"><i class="fa fa-phone"></i> </a>
                  <a href="./profile.php" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Profile Visit"><i class="fa fa-external-link"></i></a>
                </div>
                <ul class="social-links list-inline mb-0">
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
        $(function() {
          $('[data-toggle="tooltip"]').tooltip()
        })
      </script>
    </div>
</body>

</main><!-- End #main -->

<!-- ======= Footer ======= -->

<?php include "./assets/partials/footer.php"; ?>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<?php include "./assets/partials/js.php"; ?>

</body>

</html>