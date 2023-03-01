
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/webisme_db.php');
session_start();
error_reporting(0);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;


    if (empty($username)) {
        // echo "<script>alert('Please Enter Username')</script>";
        echo "<script>
                        $(document).ready(function() {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top',
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                  toast.addEventListener('mouseenter', Swal.stopTimer)
                                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                            Toast.fire({
                                icon: 'error',
                                title: 'Please Enter Username'
                              })
                        })
                        </script>";
    } else if (empty($password)) {
        // echo "<script>alert('Please Enter Password')</script>";
        echo "<script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
            Toast.fire({
                icon: 'error',
                title: 'Please Enter Password'
              })
        })
        </script>";
    } else {
        try {
            $check_data = $conn->prepare("SELECT * FROM admin WHERE username = :username");
            $check_data->bindParam(":username", $username);
            $check_data->execute();
            $row = $check_data->fetch(PDO::FETCH_ASSOC);

            if ($check_data->rowCount() > 0) {
                if ($username == $row['username']) {
                    if (password_verify($password, $row['password'])) {
                        $_SESSION['admin_login'] = $row['id'];
                        // header("location: home");

                        echo "<script>
                        $(document).ready(function() {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top',
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                  toast.addEventListener('mouseenter', Swal.stopTimer)
                                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                            Toast.fire({
                                icon: 'success',
                                title: 'Login successfully, please wait a moment...'
                              })
                        })
                        </script>";
                        echo "<meta http-equiv='refresh' content='1.5;url=home'>";
                    } else {
                        echo "<script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
            Toast.fire({
                icon: 'error',
                title: 'The password is incorrect. Please look again.'
              })
        })
        </script>";
                    }
                } else {
                    // echo '<div class="alert alert-danger text-center">The username is incorrect. Please look again.</div>';
                    echo "<script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
            Toast.fire({
                icon: 'error',
                title: 'The username is incorrect. Please look again'
              })
        })
        </script>";
                }
            } else {
                echo "<script>
                $(document).ready(function() {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                    Toast.fire({
                        icon: 'error',
                        title: 'The username or password is incorrect. Please look again.'
                      })
                })
                </script>";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WEBISME</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/shared/iconly.css">
    <link rel="shortcut icon" href="../images/favicon.ico">
</head>

<body class="bg-animation">
    <ul class="bg-animation-box">
        <li class="circle-box"></li>
        <li class="corners-box-20"></li>
        <li class="circle-box"></li>
        <li class="corners-box-20"></li>
        <li></li>
        <li class="corners-box-35"></li>
        <li class="circle-box"></li>
        <li></li>


    </ul>
    <div class="login-app">
        <div class="box-login">
            <div class="header-img">

                <!-- <span style="color: #fff; font-size: 36px; ">ACE LOGISTICS</span> -->
                <br><img src="../images/logo.png" width="30%" alt="">

            </div>
            <form method="post">
                <div class="box-sub">
                    <div class="box-input">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" class="form-control">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="btn-login">
                        <button type="submit" name="submit" class="btn btn-submit">Login</button>
                    </div>
                </div>
            </form>
        </div>

    </div>




</body>

</html>