<?php
    session_start();
    function logout(){
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        
        echo 'You have cleaned session';
        header('Location: ../login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>SEE - School Management System</title>
    <!-- Custom CSS -->
    <link href="../app/files/css/style.min.css" rel="stylesheet">

</head>

<body class="skin-default-dark fixed-layout">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="../app/files/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <img src="../app/files/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                            <img src="../app/files/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <img src="../app/files/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                </div>

                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light"
                        href="../login.php"><i class="fa fa-power-off"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="../app/files/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                        <a href="javascript:void(0)" class="u-dropdown link hide-menu" role="button"
                            aria-haspopup="true" aria-expanded="false">Samet SARIAL </a>
                    </div>
                </div>

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Course
                                    Page
                                    <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../app/offeredCourses.php">Offered Courses</a></li>
                                <li><a href="../app/takenCourses.php">Taken Courses</a></li>
                                <li><a href="../app/addCourse.php">Add/Drop a Course</a></li>
                                <li><a href="../app/courseFiles.php">Files</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">Research Group Page
                                </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../app/joinResearch.php">Join a Research</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Student Page</h4>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-screen-desktop"></i></h3>
                                            <p class="text-muted">REGISTRED COURSES</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-primary">5</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-doc"></i></h3>
                                            <p class="text-muted">Files</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-purple">20</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar"
                                            style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Page Content-->
                </div>
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="col-6">
                                    
                                    <h3 class="font-light m-t-0">Registered Courses</h3>
                                </div>
                               
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">COURSE ID</th>
                                        <th>NAME</th>
                                        <th>STATUS</th>
                                        <th>DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">INTRODUCTION TO DEEP LEARNING</td>
                                        <td><span class="badge badge-success badge-pill">SUCCESS</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">INTRODUCTION TO DEEP LEARNING</td>
                                        <td><span class="badge badge-success badge-pill">SUCCESS</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">INTRODUCTION TO DEEP LEARNING</td>
                                        <td><span class="badge badge-success badge-pill">SUCCESS</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">INTRODUCTION TO DEEP LEARNING</td>
                                        <td><span class="badge badge-success badge-pill">SUCCESS</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">INTRODUCTION TO DEEP LEARNING</td>
                                        <td><span class="badge badge-success badge-pill">SUCCESS</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">INTRODUCTION TO DEEP LEARNING</td>
                                        <td><span class="badge badge-success badge-pill">SUCCESS</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">INTRODUCTION TO DEEP LEARNING</td>
                                        <td><span class="badge badge-success badge-pill">SUCCESS</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">INTRODUCTION TO DEEP LEARNING</td>
                                        <td><span class="badge badge-success badge-pill">SUCCESS</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">INTRODUCTION TO DEEP LEARNING</td>
                                        <td><span class="badge badge-success badge-pill">SUCCESS</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!--Menu sidebar -->
    <script src="../app/files/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../app/files/js/custom.min.js"></script>
    <script src="files/js/perfect-scrollbar.jquery.min.js"></script>
</body>

</html>