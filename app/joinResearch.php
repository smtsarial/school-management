<?php
session_start();

require_once('../config.php');
// Connect to database
$conn = mysqli_connect($server, $user, $password, $database);

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
    <title>MEBIS - School Management System</title>
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
                            <a href="javascript:void(0)" class="u-dropdown link hide-menu" role="button" aria-haspopup="true" aria-expanded="false"><?php echo (ucfirst($_SESSION['user_name']) . ' ' . ucfirst($_SESSION['user_surname'])) ?></a>
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
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">Research Group
                                    Page
                                </span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="joinResearch.php">Join a Research</a></li>
                            </ul>
                        </li>
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
                }

                .alert-warning {
                    position: fixed;
                    right: 0;
                    bottom: 0;
                }
            </style>
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Student Page</h4>
                    </div>
                </div>
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <?php
                        require_once('../config.php');
                        $conn = mysqli_connect($server, $user, $password, $database);
                        if (isset($_POST['request'])) {
                            // File upload path
                            $targetDir = "uploads/";
                            $fileName = basename($_FILES["file"]["name"]);
                            $targetFilePath = $targetDir . $fileName;
                            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                            if (!$conn) {
                                die("Connection failed " . mysqli_connect_error());
                            } else {
                                $sql = "INSERT INTO research_requests (instructor_id, student_id, note, file) VALUES (" . $_POST["instructor_id"] . ", " . $_SESSION["user_id"] . ", '" . $_POST['note'] . "', NULL);";
                                // Allow certain file formats
                                $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','zip','rar');
                                if (in_array($fileType, $allowTypes)) {
                                    // Upload file to server
                                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                                        // Insert image file name into database
                                        $insert = $conn->query("INSERT INTO research_requests (instructor_id, student_id, note, file) VALUES (" . $_POST["instructor_id"] . ", " . $_SESSION["user_id"] . ", '" . $_POST['note'] . "', '" . $fileName . "');");
                                        if ($insert) {
                                            echo '<div class="alert alert-success col-md-2" role="alert">The file ' . $fileName . ' has been uploaded successfully.</div>';
                                        } else {
                                            echo '<div class="alert alert-warning col-md-2" role="alert">File upload failed, please try again.</div>';
                                        }
                                    } else {
                                        echo '<div class="alert alert-warning col-md-2" role="alert">Sorry, there was an error uploading your file.</div>';
                                    }
                                } else {
                                    $insert = $conn->query($sql);
                                    if ($insert === TRUE) {
                                        echo '<div class="alert alert-success col-md-2" role="alert">Successfully Added without resume !!</div>';
                                    } else {
                                        echo '<div class="alert alert-warning" role="alert">Request has been sent !!</div>';
                                    }
                                }
                            }
                        }
                        ?>
                        <form method="post" class="form-horizontal form-material" id="joinrequest" action="joinResearch.php" enctype="multipart/form-data">
                            <h3 class="box-title m-b-20">Join Request</h3>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <select class="select2 form-control custom-select" name="instructor_id" style="color:black">
                                        <option value="">---------</option>
                                        <?php
                                        require_once('../config.php');

                                        $conn = mysqli_connect($server, $user, $password, $database);

                                        if (!$conn) {
                                            die("Connection failed " . mysqli_connect_error());
                                        }

                                        $sql = " SELECT research_groups.id,research_name,research_area,instructor_id,instructor_name,instructor_surname,instructor_email FROM research_groups INNER JOIN instructor ON instructor_id=instructor.id ";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['instructor_id'] . '">' . $row['instructor_name'] . '</option>';
                                            }
                                        } else {
                                            echo "NO ACTIVE INSTRUCTOR FOUND";
                                        }
                                        mysqli_close($conn);
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" required="" placeholder="Note *Optional" name="note">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <div class="fileupload btn btn-danger btn-rounded">
                                        <span><i class="ion-upload m-r-5"></i>Attachment</span>
                                        <input type="file" class="file" name="file">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group text-center p-b-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit" name="request">Join Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Join Request Page Form</h4>
                        <div class="table-responsive">
                            <table class="table m-t-30 table-hover" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Instructor Name</th>
                                        <th>Instructor Email</th>
                                        <th>Research Area</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once('../config.php');

                                    $conn = mysqli_connect($server, $user, $password, $database);

                                    if (!$conn) {
                                        die("Connection failed " . mysqli_connect_error());
                                    }

                                    $sql = " SELECT research_groups.id,research_name,research_area,instructor_id,instructor_name,instructor_surname,instructor_email FROM research_groups INNER JOIN instructor ON instructor_id=instructor.id ";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>" .
                                                "<td>" . ucfirst($row['id']) . "</td>" .
                                                "<td>" . ucfirst($row['instructor_name']) . "</td>" .
                                                "<td>" . ucfirst($row['instructor_email']) . "</td>" .
                                                "<td>" . ucfirst($row['research_area']) . "</td>" .
                                                "</tr>";
                                        }
                                        echo "</table>";
                                    } else {
                                        echo "NO ACTIVE RESEARCH FOUND";
                                    }
                                    mysqli_close($conn);
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>


                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <style>
        .modal-footer {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 1rem;
            border-top: 0;
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
    <!--Menu sidebar -->
    <script src="files/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="files/js/custom.min.js"></script>

</body>

</html>