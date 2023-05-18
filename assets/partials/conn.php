<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "local_genie";

$conn = new mysqli($servername,$username,$password,$database);

// $passwordHash = password_hash("abc",PASSWORD_DEFAULT);


// $sql = "INSERT INTO `admin` (`name`,`username`,`email`,`password`,`phoneno`,`adminpic`,`superadmin`) VALUES 
// ('shrey','shrey','shrey@gmal.com','$passwordHash','1234567890','shrey.jpg','yes')";

// $conn->query($sql);

// echo ("Success") ;
// echo mysqli_error($conn);

?>