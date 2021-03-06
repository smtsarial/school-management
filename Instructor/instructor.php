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
    <title>MEBIS - School Management System</title>
    <!-- Custom CSS -->
    <link href="../app/files/css/style.min.css" rel="stylesheet">


</head>

<body class="skin-default-dark fixed-layout">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../Instructor/instructor.php">
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
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
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
                        <div><img src="../app/files/images/users/1.jpg" alt="user-img" class="img-circle"></div>
                        <a href="javascript:void(0)" class="u-dropdown link hide-menu" role="button" aria-haspopup="true" aria-expanded="false"><?php echo (ucfirst($_SESSION['user_name']) . ' ' . ucfirst($_SESSION['user_surname'])) ?> </a>
                    </div>
                </div>

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Course
                                    Page
                                    <span class="badge badge-pill badge-cyan ml-auto">3</span></span></a>
                            
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../app/instructor-pages/Course-1.php">Courses</a></li>
                                
                            </ul>
                               

                          
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">Research Group
                                    Page
                                </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../app/instructor-pages/Research-group-page.php">Research Group
                                        Informations</a></li>
                                <li><a href="../app/instructor-pages/approveReject.php">Approve/Reject
                                        Groups</a></li>
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
                        <h4 class="text-themecolor">Instructor Page</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="col-6">
                                    <h3>2020-2021</h3>
                                    <h5 class="font-light m-t-0">Assigned Courses</h5>
                                </div>
                                <div class="col-6 align-self-center display-6 text-right">
                                    <h2 class="text-success">3</h2>
                                </div>
                            </div>
                        </div>
                        <style>
                .alert-success {
                    color: #00654c;
                    background-color: #ccf3e9;
                    border-color: #b8eee0;
                    position: fixed;
                    right: 0;
                    bottom: 0;
                    z-index: 999;
                }

                .alert-warning {
                    position: fixed;
                    right: 0;
                    bottom: 0;
                    z-index: 999;
                }
            </style>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Course Code</th>
                                        <th>Course Name</th>
                                        <th>Course Type</th>
                                        <th>Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                            require_once('../config.php');

                                            $conn = mysqli_connect($server, $user, $password, $database);

                                            if (!$conn) {
                                                die("Connection failed " . mysqli_connect_error());
                                            }

                                            $sql = "SELECT * FROM `courses` WHERE instructor_id =" . $_SESSION['user_id'];
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    
                                                    echo('<tr>
                                                    <td class="text-center">' . $row['id'] . '</td>
                                                    <td class="txt-oflo">' . ucfirst($row['course_name']) . '</td>
                                                    <td class="txt-oflo">' . ucfirst($row['type']) . '</td>
                                                    <td class="txt-oflo">' . $row['day'] .' | '.$row['start_time'].'-'.$row['stop_time']. '</td>
                                                </tr>');
                                                }
                                            } else {
                                                echo "NO ACTIVE INSTRUCTOR FOUND";
                                            }
                                            mysqli_close($conn);
                                            ?>
                                    
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Menu sidebar -->
    <script src="../app/files/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../app/files/js/custom.min.js"></script>

</body>

</html>