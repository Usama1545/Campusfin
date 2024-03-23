<!DOCTYPE html>
<html lang="en">

<head>
@include("dashboard_layouts.css_link");
<title>Add Project</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include("dashboard_layouts.sidebar")
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include("dashboard_layouts.top_navbar")
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Create New Project</div>

                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

                <div class="card-body">
                <form method="POST" action="{{ url('project_store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Project Name -->
                        <div class="form-group ">
                            <label for="project_name">Project Name</label>
                            <input type="text" id="project_name" name="project_name" class="form-control" required>
                        </div>

                        <!-- Project Logo -->
                        <div class="form-group ">
                            <label for="project_logo">Project Logo</label>
                            <input type="file" id="project_logo" name="project_logo" class="form-control-file">
                        </div>

                        <!-- Project Symbol -->
                        <div class="form-group">
                            <label for="project_symbol">Project Symbol</label>
                            <input type="text" id="project_symbol" name="project_symbol" class="form-control">
                        </div>

                        <!-- Project Type -->
                        <div class="form-group">
                            <label for="project_type">Project Type</label>
                            <input type="text" id="project_type" name="project_type" class="form-control">
                        </div>

                        <!-- Project Domain -->
                        <div class="form-group">
                            <label for="project_domain">Project Domain</label>
                            <input type="text" id="project_domain" name="project_domain" class="form-control">
                        </div>

                        <!-- Project Category -->
                        <div class="form-group">
                            <label for="project_category">Project Category</label>
                            <input type="text" id="project_category" name="project_category" class="form-control">
                        </div>

                        <!-- Project Launch Date -->
                        <div class="form-group">
                            <label for="project_launch_date">Project Launch Date</label>
                            <input type="date" id="project_launch_date" name="project_launch_date" class="form-control">
                        </div>

                        <!-- Project Audits -->
                        <div class="form-group">
                            <label for="project_audits">Project Audits</label>
                            <input type="text" id="project_audits" name="project_audits" class="form-control">
                        </div>

                        <!-- Token Standard -->
                        <div class="form-group">
                            <label for="token_standard">Token Standard</label>
                            <input type="text" id="token_standard" name="token_standard" class="form-control">
                        </div>

                        <!-- Blockchain Platform -->
                        <div class="form-group">
                            <label for="blockchain_platform">Blockchain Platform</label>
                            <input type="text" id="blockchain_platform" name="blockchain_platform" class="form-control">
                        </div>

                        <!-- Project Website -->
                        <div class="form-group">
                            <label for="project_website">Project Website</label>
                            <input type="url" id="project_website" name="project_website" class="form-control">
                        </div>

                        <!-- Project GitHub Link -->
                        <div class="form-group">
                            <label for="project_github_link">Project GitHub Link</label>
                            <input type="url" id="project_github_link" name="project_github_link" class="form-control">
                        </div>

                        <!-- Project Whitepaper -->
                        <div class="form-group">
                            <label for="project_whitepaper">Project Whitepaper</label>
                            <input type="url" id="project_whitepaper" name="project_whitepaper" class="form-control">
                        </div>

                        <!-- Project Comment -->
                        <div class="form-group">
                            <label for="project_comment">Project Comment</label>
                            <textarea id="project_comment" name="project_comment" class="form-control" rows="3"></textarea>
                        </div>

                        <!-- Developer ID -->
                        <div class="form-group">
                            <label for="developer_id">Developer ID</label>
                            <input type="number" id="developer_id" name="developer_id" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                    </dev>
                    <!-- Content Row -->



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin_dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="admin_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin_dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin_dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin_dashboard/js/demo/chart-area-demo.js"></script>
    <script src="admin_dashboard/js/demo/chart-pie-demo.js"></script>

</body>

</html>
