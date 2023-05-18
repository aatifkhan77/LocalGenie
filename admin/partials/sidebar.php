<?php

$boolLoggedIn = false;

if (!isset($_SESSION)) {
    session_start();    
}

$username = "";
$image = "";
$level = "Admin";

if(isset($_SESSION) and isset($_SESSION["admin"])){
    $boolLoggedIn = true;
    $username = $_SESSION["admin"];
    $sql = "SELECT * FROM `admin` WHERE `username` = '$username'";
    $result = $conn->query($sql) ;
    $data=$result->fetch_object();
    $image = $data->{"adminpic"};

    
}

$image = "<img class='rounded-circle' src='admin_image/$image' alt='' style='width: 40px; height: 40px;'>";

$isSuperAdmin = "";

if($boolLoggedIn){

    $sql = "SELECT * FROM `admin` WHERE `username` = '$username';";
    $result = $conn->query($sql);
    $data = $result->fetch_object();
    $isSuperAdmin = $data->{"superadmin"};

    if($isSuperAdmin == "yes"){
        $level = "Super Admin";
    }


}

$detail = 
"
<h6 class='mb-0'>$username</h6>
<span>$level</span>
";

$dashboard = 
"<a href='dashboard.php' class='nav-item nav-link'><i class='fa fa-tachometer-alt me-2'></i>Dashboard</a>";

$addAdmin = "
<a href='add_admin.php' class='nav-item nav-link'><i class='fas fa-user-lock me-2'></i>Add Admin</a>
";

$manageAdmin = "
<a href='manage_admin.php' class='nav-item nav-link'><i class='fas fa-user-cog me-2'></i>Manage Admin</a>
";

$addUser = "
<a href='add_user.php' class='nav-item nav-link'><i class='fas fa-user-plus me-2'></i>Add Genie</a>
";

$editUser = "
<a href='edit_user.php' class='nav-item nav-link'><i class='fas fa-user-edit me-2'></i>Manage Genie</a>
";

$userProfile = "
<a href='user_profile.php' class='nav-item nav-link'><i class='far fa-address-book me-2'></i>Genii Profile</a>";

$logout = "
<a href='./logout.php' class='nav-item nav-link'><i class='fa fa-sign-out-alt me-2'></i>Log Out</a>
";

if($isSuperAdmin != "yes"){
    $addAdmin = "";
    $manageAdmin = "";
    $addUser = "";
    $editUser = "";  
    $userProfile = "";
}

$sidebar = "

<!-- Sidebar Start -->
<div class='sidebar pe-4 pb-3'>
    <nav class='navbar bg-secondary navbar-dark'>
        <a href='./dashboard.php' class='navbar-brand mx-4 mb-3'>
            <h3 class='text-primary'><i class='fas fa-user-shield me-2'></i>Admin Panel</h3>
        </a>
        <div class='d-flex align-items-center ms-4 mb-4'>
            <div class='position-relative'>
                $image
                <div class='bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1'></div>
            </div>
            <div class='ms-3'>
                $detail
            </div>
        </div>
        <div class='navbar-nav w-100'>
            $dashboard
            $addAdmin
            $manageAdmin
            $addUser
            $editUser
            $userProfile
            $logout
        </div>
    </nav>
</div>
<!-- Sidebar End -->





";

echo $sidebar;

?>