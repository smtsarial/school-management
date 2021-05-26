<?php
require_once('config.php');
$conn = mysqli_connect($server, $user, $password, $database);
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $styled_radio = $_POST['styled_radio'];

    if (!$conn) {
        die("Connection failed " . mysqli_connect_error());
    } else {
        $sql = ("INSERT INTO `" . $styled_radio . "` (`username`, `password`, `name`, `surname`) VALUES ('" . $username . "', '" . $password . "', '" . $name . "', '" . $surname . "')");
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success col-md-2" role="alert">Account created successfully !!</div>';
        } else {
            echo '<div class="alert alert-warning" role="alert">'. $conn->error .'</div>';
        }
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MEBIS - School Management System</title>

    <!-- page css -->
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



                    <form method="post" class="form-horizontal form-material" id="loginform" action="register.php">
                        <h3 class="box-title m-b-20">Sign Up</h3>
                        <form>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" required="" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" required="" placeholder="Surname" name="surname">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" required="" placeholder="Username" name="username">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="col-md-6">
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
                            </div>
                            <div class="form-group text-center p-b-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit" name="create">Sign Up</button>
                                </div>
                            </div>
                        </form>



                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="login.php" class="text-info m-l-5"><b>Sign In</b></a>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </section>
</body>

</html>