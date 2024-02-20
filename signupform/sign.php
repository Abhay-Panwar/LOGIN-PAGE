<?php
$success = 0;
$user = 0;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  include 'conn.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT*FROM `registration` WHERE `Username`='$username'";
  $result = mysqli_query($con, $sql);
  if ($result) {
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      // echo "Username is already Exist";
      $user = 1;
    } else {
      $sql = "insert into `registration` (Username,Password) values('$username','$password')";
      $result = mysqli_query($con, $sql);
      // echo"$result";
      if ($result) {
        $success = 1;
        // echo "Data Inserted successfully";
        echo "<br>";
      } else {
        die(mysqli_error($con));

      }
    }
  }
}
?>
<?php if ($user): ?>
  <div class="alert alert-danger" role="alert">
    The User is Already Exists.</div>
<?php endif; ?>
<?php if ($success): ?>

  <div class="alert alert-success" role="alert">
    The User Register successfully.</div>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Signup</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <!--===============================================================================================-->
</head>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="sign.php" method="POST">
          <span class="login100-form-title"> Sign up </span>

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
            <button class="login100-form-btn">Sign in</button>
          </div>

          <div class="flex-col-c p-t-170 p-b-40">
            <span class="txt1 p-b-9"> Already have an Account!</span>

            <a href="login.php" class="txt3"> sign in/login up here </a>
          </div>
        </form>
      </div>
    </div>
  </div>

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