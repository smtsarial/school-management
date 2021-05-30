<?php
require_once('config.php');
session_start();
// Connect to database
$conn = mysqli_connect($server, $user, $password, $database);
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $styled_radio = $_POST['styled_radio'];

    if (!$conn) {
        die("Connection failed " . mysqli_connect_error());
    } else {
        $sql = "SELECT * FROM `" . $styled_radio . "`";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['username'] == $username && $row['password'] == $password) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_name'] = $row['name'];
                    $_SESSION['user_surname'] = $row['surname'];
                    $_SESSION['username'] = $username;
                    $_SESSION['user_type'] = $styled_radio;

                    if ($styled_radio == "student") {
                        header("Location:Student/index.php");
                    } else if ($styled_radio == "instructor") {
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['user_name'] = $row['instructor_name'];
                        $_SESSION['user_surname'] = $row['instructor_surname'];
                        $_SESSION['username'] = $username;
                        header("Location:Instructor/instructor.php");
                    } else if ($styled_radio == "secretary") {
                        header("Location:Secretary/secretary.php");
                    }
                } else {
                    echo '<div class="alert alert-warning" role="alert">Invalid User Infos</div>';
                }
            }
        } else {
            echo "No results";
        }

        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SEE - School Management System</title>

    <link href="app/files/css/external.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="app/files/css/style.min.css" rel="stylesheet">
</head>
<style>
    .alert-success {
        color: #00654c;
        background-color: #ccf3e9;
        border-color: #b8eee0;
        position: fixed;
        right: 0;
        bottom: 0;
    }

    .alert-warning {
        position: fixed;
        right: 0;
        bottom: 0;
    }
</style>

<body class="skin-default-dark card-no-border">
    <section id="wrapper">
        <div class="login-register">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="login.php" method="post">
                        <h3 class="box-title m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <form name="login">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" required="" name="password" placeholder="Password">
                                </div>


                        </div>

                        <div class="form-group">
                            <h5>Who Are You ? <span class="text-danger">*</span></h5>
                            <div class="custom-control custom-radio">
                                <input type="radio" value="instructor" name="styled_radio" required id="styled_radio1" class="custom-control-input">
                                <label class="custom-control-label" for="styled_radio1">Instructor</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" value="student" name="styled_radio" id="styled_radio2" class="custom-control-input">
                                <label class="custom-control-label" for="styled_radio2">Student</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" value="secretary" name="styled_radio" id="styled_radio3" class="custom-control-input">
                                <label class="custom-control-label" for="styled_radio3">Secretary</label>
                            </div>


                        </div>

                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-info btn-rounded" type="submit" name="login">Log In</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Don't have an account? <a href="register.php" class="text-info m-l-5"><b>Sign Up</b></a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>