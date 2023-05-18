<?php
session_start();
include "./assets/partials/conn.php";

$boolLoggedin = false;
if (isset($_SESSION) and isset($_SESSION["user"])) {
    $sessionUsername = $_SESSION["user"];
    $boolLoggedin = true;
    header("location: index.php");

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login/Signup</title>

    <!-- For CSS -->
    <link rel="stylesheet" href="./assets/css/userLogin.css">

</head>

<body>
    <br>
    <br>
    <div class="cont">
        <!-- Login Form -->
        <div class="form sign-in">
            <h2>Welcome</h2>
            <label for="useremail">
                <span>Email</span>
                <input type="email" id="useremail" required>
            </label>
            <label for="pass">
                <span>Password</span>
                <input type="password" id="pass" required>
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="submit" id="signInBtn" class="submit1">Sign In</button>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">

                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">

                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>

            <!-- SignUp Form -->
            <div class="form sign-up">
                <h2>Create your Account</h2>
                <form id="addForm">
                    <label>
                        <span>Name</span>
                        <input type="text" id="name" required>
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" id="emailSignup" required>
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" id="password" required>
                    </label>
                    <label for="inputState">
                        <span>State</span>
                        <select class="form-control" id="inputState" required>
                            <option value="SelectState">Select State</option>
                            <option value="Andra Pradesh">Andra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madya Pradesh">Madya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Orissa">Orissa</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttaranchal">Uttaranchal</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="West Bengal">West Bengal</option>
                            <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadeep">Lakshadeep</option>
                            <option value="Pondicherry">Pondicherry</option>
                        </select>
                    </label>
                    <label for="inputDistrict">
                        <span>District</span>
                        <select class="form-control" id="inputDistrict">
                            <option value=""> -- select one -- </option>
                        </select>
                    </label>
                    <button type="submit" id="signUpBtn" class="submit1">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <!-- For JavaScript -->

    <script src="./assets/js/userLogin.js"></script>
    <script src="./assets/js/userLoginBack.js"></script>
    <script src="./assets/js/userSignup.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


</body>

</html>