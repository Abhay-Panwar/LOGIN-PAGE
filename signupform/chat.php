<?php
$invalid = 0;
$login = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'conn.php';
    
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    $sql = "SELECT * FROM `registration` WHERE `Username`='$username'";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            $login = 1;
        } else {
            $sqlInsert = "INSERT INTO `registration` (Username, Password) VALUES ('$username', '$password')";
            $resultInsert = mysqli_query($con, $sqlInsert);

            if ($resultInsert) {
                $invalid = 1;
            } else {
                die(mysqli_error($con));
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="login.php" method="POST">
                    <span class="login100-form-title"> Log In </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input class="input100" type="text" name="username" placeholder="Username" />
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input class="input100" type="password" name="password" placeholder="Password" />
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                        <span class="txt1"> Forgot </span>
                        <a href="#" class="txt2"> Username / Password? </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">Login</button>
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9"> Don’t have an account? </span>
                        <a href="sign.php" class="txt3"> Sign up now </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php if ($login) : ?>
        <div class="alert alert-success" role="alert">
            The User Login successfully.
        </div>
    <?php endif; ?>

    <?php if ($invalid) : ?>
        <div class="alert alert-danger" role="alert">
            Invalid user Information
        </div>
    <?php endif; ?>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>

</html>
