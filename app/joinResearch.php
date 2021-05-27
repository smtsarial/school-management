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
                        <div><img src="files/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="u-dropdown link hide-menu" role="button"
                                aria-haspopup="true" aria-expanded="false"><?php echo(ucfirst($_SESSION['user_name']).' '.ucfirst($_SESSION['user_surname'])) ?></a>
                        </div>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Course
                                    Page
                                    <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="offeredCourses.php">Offered Courses</a></li>
                                
                                <li><a href="courseFiles.php">Files</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">Research Group
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
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Student Page</h4>
                    </div>
                </div>
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Join Request Page Form</h4>
                        <div class="table-responsive">
                            <table class="table m-t-30 table-hover" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Research Area</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Genelia Deshmukh</td>
                                        <td>genelia@gmail.com</td>
                                        <td>Computer Vision</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Genelia Deshmukh</td>
                                        <td>genelia@gmail.com</td>
                                        <td>Computer Vision</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Genelia Deshmukh</td>
                                        <td>genelia@gmail.com</td>
                                        <td>Computer Vision</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Genelia Deshmukh</td>
                                        <td>genelia@gmail.com</td>
                                        <td>Computer Vision</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Genelia Deshmukh</td>
                                        <td>genelia@gmail.com</td>
                                        <td>Computer Vision</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Genelia Deshmukh</td>
                                        <td>genelia@gmail.com</td>
                                        <td>Computer Vision</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Genelia Deshmukh</td>
                                        <td>genelia@gmail.com</td>
                                        <td>Computer Vision</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Genelia Deshmukh</td>
                                        <td>genelia@gmail.com</td>
                                        <td>Computer Vision</td>
                                    </tr>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <button type="button" class="btn btn-info btn-rounded" data-toggle="modal"
                                                data-target="#add-contact">Join Request Form</button>
                                        </td>
                                        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel" style="color:black">
                                                            Join Request Form</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <from class="form-horizontal form-material">
                                                            <div class="col-md-12 m-b-20">
                                                                <select class="select2 form-control custom-select"
                                                                    style="color:black">
                                                                    <option value="SS">Samet Sarıal</option>
                                                                    <option value="EE">Emre Erkan</option>
                                                                    <option value="EY">Erdal Yaprak</option>
                                                                    <option value="SS">Samet Sarıal</option>
                                                                    <option value="EE">Emre Erkan</option>
                                                                    <option value="EY">Erdal Yaprak</option>
                                                                    <option value="SS">Samet Sarıal</option>
                                                                    <option value="EE">Emre Erkan</option>
                                                                    <option value="EY">Erdal Yaprak</option>
                                                                    <option value="SS">Samet Sarıal</option>
                                                                    <option value="EE">Emre Erkan</option>
                                                                    <option value="EY">Erdal Yaprak</option>
                                                                    <option value="SS">Samet Sarıal</option>
                                                                    <option value="EE">Emre Erkan</option>
                                                                    <option value="EY">Erdal Yaprak</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Name Surname">
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Email">
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="textarea" class="form-control"
                                                                    placeholder="Note *Optional">
                                                            </div>
                                                            <div class="fileupload btn btn-danger btn-rounded">

                                                                <span><i class="ion-upload m-r-5"></i>Attachment</span>
                                                                <input type="file" class="upload">
                                                            </div>
                                                        </from>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal"
                                                            onClick="alert('REQUEST APPLIED')">Request</button>
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                </tfoot>
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
    <script src="files/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="files/js/custom.min.js"></script>

</body>

</html>