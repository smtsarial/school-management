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
    <link rel="icon" type="image/png" sizes="16x16" href="../files/images/favicon.png">
    <title>MEBIS - School Management System</title>
    <!-- Custom CSS -->
    <link href="../files/css/style.min.css" rel="stylesheet">

</head>

<body class="skin-default-dark fixed-layout">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../Instructor/instructor.php">
                        <b>
                            <img src="../files/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="../files/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                            <img src="../files/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <img src="../files/images/logo-light-text.png" class="light-logo" alt="homepage" />
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
                        <li class="nav-item right-side-toggle"> <a class="nav-link" href="../../login.php"><i class="fa fa-power-off"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="../files/images/users/1.jpg" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="u-dropdown link hide-menu" role="button" aria-haspopup="true" aria-expanded="false"><?php echo (ucfirst($_SESSION['user_name']) . ' ' . ucfirst($_SESSION['user_surname'])) ?></a>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Course
                                    Page
                                    <span class="badge badge-pill badge-cyan ml-auto">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../instructor-pages/Course-1.php">Courses</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">Research Group Page
                                </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../instructor-pages/Research-group-page.php">Research Group Informations</a></li>
                                <li><a href="../instructor-pages/approveReject.php">Approve/Reject Groups</a></li>

                            </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
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
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Instructor Page</h4>
                    </div>
                </div>
                <!-- ============================================================== -->
                <?php
                require_once('../../config.php');
                $conn = mysqli_connect($server, $user, $password, $database);
                if (isset($_POST['create'])) {
                    $name = $_POST['name'];
                    $area = $_POST['area'];

                    if (!$conn) {
                        die("Connection failed " . mysqli_connect_error());
                    } else {

                        $sql = ("INSERT INTO research_groups (research_name, research_area, instructor_id) VALUES ('".$name."','".$area."', '".$_SESSION['user_id']."')");
                        if ($conn->query($sql) === TRUE) {
                            echo '<div class="alert alert-success col-md-2" role="alert">Research Group created successfully !!</div>';
                        } else {
                            echo '<div class="alert alert-warning" role="alert">You Already Created One</div>';
                        }
                    }
                    $conn->close();
                }
                ?>
                <div class="column">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create Research Groups</h4>
                                <div class="table-responsive m-t-40">
                                    <form method="post" class="form-horizontal form-material" id="loginform" action="Research-group-page.php">
                                        <form>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" placeholder="Research Name" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" placeholder="Research Area" name="area">
                                                </div>
                                            </div>


                                            <div class="form-group text-center p-b-20">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit" name="create">Create New Research Group</button>
                                                </div>
                                            </div>
                                        </form>



                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Research Groups</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Students Name</th>
                                                <th>Students Surname</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php
                                            require_once('../../config.php');
                                            $conn = mysqli_connect($server, $user, $password, $database);
                                            if (!$conn) {
                                                die("Connection failed " . mysqli_connect_error());
                                            } else {
                                                $sql = "SELECT * FROM `reserach_group_members` INNER JOIN student ON student_id=student.id WHERE research_id=" . $_SESSION['user_id'];
                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo ('<tr>
                                                        <td>' . $row['student_id'] . '</td>
                                                        <td>' . ucfirst($row['name']) .'</td>
                                                        <td>' . ucfirst($row['surname']) . '</td>
                                                        <td>' . ucfirst($row['username']) . '</td>
                                                    </tr>');
                                                    }
                                                } else {
                                                    echo "NO ACTIVE INSTRUCTOR FOUND";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <style>
            .column {
                display: flex;
            }
        </style>






        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap popper Core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../files/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Menu sidebar -->
        <script src="../files/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../files/js/custom.min.js"></script>
        <!-- This is data table -->

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
        <!-- start - This is for export functionality only -->
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <!-- end - This is for export functionality only -->