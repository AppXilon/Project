<?php include('include/header.php'); ?>

<body>
    
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include('include/sidebar.php'); ?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php include 'include/header_area.php' ?>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Business Hour</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Businesshour</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Kasim<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <!-- *************************************************************************************************************************-->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-light">
                                                <tr>
                                                    <th scope="col">Day of Week</th>
                                                    <th scope="col">Start Time</th>
                                                    <th scope="col">End Time</th>
                                                    <th scope="col">is Day off</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Monday</th>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tuesday</th>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Wednesday</th>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Thursday</th>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Friday</th>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Saturday</th>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sunday</th>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><input type="time" placeholder=".col-sm-3"></td>
                                                    <td><label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="submit" style="float: right; margin-right: 10px" class="btn btn-success mb-3" name="upload">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table primary start -->

                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- *************************************************************************************************************************-->

        <!-- footer area start-->
        <?php include('include/footer.php'); ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>