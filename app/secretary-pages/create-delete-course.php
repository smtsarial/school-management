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
                    <a class="navbar-brand" href="../../Secretary/secretary.php">
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
                        <div><img src="../files/images/users/3.jpg" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="u-dropdown link hide-menu" role="button"
                                aria-haspopup="true" aria-expanded="false">Emre Erkan</a>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Course
                                    Page
                                </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../secretary-pages/create-delete-course.php">Create&Delete a Course</a>
                                </li>
                                <li><a href="../secretary-pages/all-courses.php">All Courses</a></li>
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
                        <h4 class="text-themecolor">Secretary Page</h4>
                    </div>
                </div>
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Course List</h4>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list"
                                        data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Course ID</th>
                                                <th>Course Name</th>
                                                <th>Instructor Name</th>
                                                <th>Start Date</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1111</td>
                                                <td>Ders 1</td>
                                                <td>Hoca 1</td>
                                                <td>Date 1</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="fa fa-times-circle" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>1112</td>
                                                <td>Ders 2</td>
                                                <td>Hoca 2</td>
                                                <td>Date 2</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="fa fa-times-circle" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>1113</td>

                                                <td>Ders 3</td>
                                                <td>Hoca 3</td>
                                                <td>Date 3</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="fa fa-times-circle" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>1114</td>

                                                <td>Ders 4</td>
                                                <td>Hoca 4</td>
                                                <td>Date 4</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="fa fa-times-circle" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-info btn-rounded"
                                                        data-toggle="modal" data-target="#add-contact">Add
                                                        Course</button>
                                                </td>
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel"
                                                                    style="color:#303641">Add New
                                                                    Course</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Course ID">
                                                                        </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Course Name">
                                                                        </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <select
                                                                                class="select2 form-control custom-select"
                                                                                style="color:black"
                                                                                placeholder="Select Instructor">
                                                                                <option value="SS">Instructor 1</option>
                                                                                <option value="EE">Instructor 12
                                                                                </option>
                                                                                <option value="EY">Instructor 13
                                                                                </option>
                                                                                <option value="SS">Instructor 14
                                                                                </option>
                                                                                <option value="EE">Instructor 15
                                                                                </option>

                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">

                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" value="Mandatory"
                                                                                    name="styled_radio" required
                                                                                    id="styled_radio1"
                                                                                    class="custom-control-input">
                                                                                <label class="custom-control-label"
                                                                                    for="styled_radio1"
                                                                                    style=" color:#303641">Mandatory</label>
                                                                            </div>

                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" value="Elective"
                                                                                    name="styled_radio"
                                                                                    id="styled_radio2"
                                                                                    class="custom-control-input">
                                                                                <label class="custom-control-label"
                                                                                    for="styled_radio2"
                                                                                    style=" color:#303641">Elective</label>
                                                                            </div>



                                                                        </div>

                                                                        <div class="col-md-12 m-b-20"
                                                                            style="display: inline-block;">
                                                                            <label for="coursetime"
                                                                                style="color:#303641">Start - Finish
                                                                                Time
                                                                                :</label>

                                                                            <input type="date" id="CourseDate"
                                                                                name="CourseDate">

                                                                            <input type="time" id="coursetime"
                                                                                name="coursetime" min="09:00"
                                                                                max="18:00" required>

                                                                            <input type="time" id="coursetime"
                                                                                name="coursetime" min="09:00"
                                                                                max="18:00" required>

                                                                        </div>
                                                                    </div>
                                                                </from>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect"
                                                                    data-dismiss="modal">Save</button>
                                                                <button type="button"
                                                                    class="btn btn-default waves-effect"
                                                                    data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../files/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Menu sidebar -->
        <script src="../files/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../files/js/custom.min.js"></script>
        <!-- This is data table -->

        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>


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
                    'copy', 'csv', 'pdf', 'print'
                ]
            });
        </script>
</body>

</html>