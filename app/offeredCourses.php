<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="files/images/favicon.png">
    <title>SEE - School Management System</title>
    <!-- Custom CSS -->
    <link href="files/css/style.min.css" rel="stylesheet">


</head>

<body class="skin-default-dark fixed-layout">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../Student/index.php">
                        <b>
                            <img src="files/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="files/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                            <img src="files/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <img src="files/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="../login.php"><i class="fa fa-power-off"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="files/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="u-dropdown link hide-menu" role="button" aria-haspopup="true" aria-expanded="false"><?php echo(ucfirst($_SESSION['user_name']).' '.ucfirst($_SESSION['user_surname'])) ?></a>
                        </div>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Course
                                    Page
                                    <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="offeredCourses.php">Offered Courses</a></li>
                                <li><a href="../Student/index.php">Taken Courses</a></li>
                                
                                <li><a href="courseFiles.php">Files</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">Research Group Page
                                </span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="joinResearch.php">Join a Research</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
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
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Student Page</h4>
                    </div>
                </div>
                <div class="row">
                    <?php
                    
                    include('../database/student.php');
                    
                    require_once('../config.php');
                    $conn = mysqli_connect($server, $user, $password, $database);

                    if (isset($_POST['register'])) {
                        registerCourse($_SESSION['user_id'],$_POST['register']);
                    }



                    if (!$conn) {
                        die("Connection failed " . mysqli_connect_error());
                    } else {
                        $sql = "SELECT courses.id,course_name,course_description,instructor_id,type,username,instructor_name,instructor_surname FROM courses INNER JOIN instructor ON courses.instructor_id = instructor.id";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo'<div class="col-md-6 col-lg-6 col-xlg-4">' .
                                    '<div class="card card-body">' .
                                    '<div class="row align-items-center">' .
                                    ' <div class="col-md-4 col-lg-3 text-center">' .
                                    ' <a href="app-contact-detail.php"><img src="files/images/users/1.jpg" alt="user" class="img-circle img-fluid"></a>' .
                                    ' </div>' .
                                    '<div class="col-md-8 col-lg-9">' .
                                    '<h3 class="box-title m-b-0">'.ucfirst($row['course_name']) .' -> '. $row['id']. '</h3><small>' .ucfirst($row['instructor_name']). ' '.ucfirst($row['instructor_surname']) .'  '. '</small>' .
                                    '<span class="badge badge-pill badge-danger">' . ucfirst($row['type']) . '</span>' .
                                    '<p>' . $row['course_description'] .
                                    ' </p>' .
                                    '<form method="POST"><button type="submit" class="btn btn-rounded btn-success" name="register" value="'.$row['id'].'">Register</button> </form>'.
                                    ' </div>' .
                                    '</div>' .
                                    '</div>' .
                                    '</div>';
                            }
                        } else {
                            echo "No results";
                        }
                        mysqli_close($conn);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Menu sidebar -->
    <script src="files/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="files/js/custom.min.js"></script>

</body>

</html>