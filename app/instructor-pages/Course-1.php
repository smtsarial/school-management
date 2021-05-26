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
                                href="../../login.php"><i class="fa fa-power-off"></i></a></li>
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
                            <a href="javascript:void(0)" class="u-dropdown link hide-menu" role="button" aria-haspopup="true" aria-expanded="false">Erdal Yaprak</a>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Course
                                    Page
                                    <span class="badge badge-pill badge-cyan ml-auto">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../instructor-pages/Course-1.php">Web Programming Project 1</a></li>
                                <li><a href="../instructor-pages/Course-2.php">Web Programming Project 2</a></li>
                                <li><a href="../instructor-pages/Course-3.php">Web Programming Project 3</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">Research Group Page
                            </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="../instructor-pages/Research-group-page.php">Research Group Informations</a></li>
                            <li><a href="../instructor-pages/Approve-Reject Groups.php">Approve/Reject Groups</a></li>
                         
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
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Web Programming Project 1</h4>
                                <h6 class="card-subtitle">Export data to Excel, PDF </h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Course ID</th>
                                                <th>Course Name</th>
                                                <th>Student Name</th>
                                                <th>Student Department</th>
                                                <th>Course Type</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>11111</td>
                                                <td>Web Programming Project 1</td>
                                                <td>Name1 Surname1</td>
                                                <td>COE</td>
                                                <td>Mandatory</td>
                                            </tr>
                                            <tr>
                                                <td>11111</td>
                                                <td>Web Programming Project 1</td>
                                                <td>Name2 Surname2</td>
                                                <td>COE</td>
                                                <td>Mandatory</td>
                                            </tr>
                                            <tr>
                                                <td>11111</td>
                                                <td>Web Programming Project 1</td>
                                                <td>Name3 Surname3</td>
                                                <td>COE</td>
                                                <td>Mandatory</td>
                                            </tr>
                                            <tr>
                                                <td>11111</td>
                                                <td>Web Programming Project 1</td>
                                                <td>Name4 Surname4</td>
                                                <td>COE</td>
                                                <td>Mandatory</td>
                                            </tr>
                                            <tr>
                                                <td>11111</td>
                                                <td>Web Programming Project 1</td>
                                                <td>Name5 Surname5</td>
                                                <td>COE</td>
                                                <td>Mandatory</td>
                                            </tr>
                                            <tr>
                                                <td>11111</td>
                                                <td>Web Programming Project 1</td>
                                                <td>Name6 Surname6</td>
                                                <td>COE</td>
                                                <td>Mandatory</td>
                                            </tr>
                                            <tr>
                                                <td>11111</td>
                                                <td>Web Programming Project 1</td>
                                                <td>Name7 Surname7</td>
                                                <td>COE</td>
                                                <td>Mandatory</td>
                                            </tr>
                                            <tr>
                                                <td>11111</td>
                                                <td>Web Programming Project 1</td>
                                                <td>Name8 Surname8</td>
                                                <td>COE</td>
                                                <td>Mandatory</td>
                                            </tr>
                                            

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
            form{text-align: center; }
            p{text-align: center;}
        </style>
        
        <p>Click on the "Choose File" button to upload a class material:</p>
        <form action="/action_page.php">
            <input type="file" id="myFile" name="filename">
            <input type="submit">
          </form>


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
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../files/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Menu sidebar -->
        <script src="../files/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../files/js/custom.min.js"></script>
        <!-- This is data table -->

        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
        <!-- start - This is for export functionality only -->
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <!-- end - This is for export functionality only -->

        <script>
            $(document).ready(function () {
                $('#myTable').DataTable();
                $(document).ready(function () {
                    var table = $('#example').DataTable({
                        "columnDefs": [{
                            "visible": false,
                            "targets": 2
                        }],
                        "order": [
                            [2, 'asc']
                        ],
                        "displayLength": 25,
                        "drawCallback": function (settings) {
                            var api = this.api();
                            var rows = api.rows({
                                page: 'current'
                            }).nodes();
                            var last = null;
                            api.column(2, {
                                page: 'current'
                            }).data().each(function (group, i) {
                                if (last !== group) {
                                    $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                    last = group;
                                }
                            });
                        }
                    });
                    // Order by the grouping
                    $('#example tbody').on('click', 'tr.group', function () {
                        var currentOrder = table.order()[0];
                        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                            table.order([2, 'desc']).draw();
                        } else {
                            table.order([2, 'asc']).draw();
                        }
                    });
                });
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv','pdf', 'print'
                ]
            });
        </script>
</body>
</html>