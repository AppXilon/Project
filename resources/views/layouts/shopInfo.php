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
                            <h4 class="page-title pull-left">Shop Information</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Shop Information</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Salim Kasim<i
                                    class="fa fa-angle-down"></i></h4>
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
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                            <label class="col-form-label">Shop Industry Category</label>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Restaurant</option>
                                                <option>Chain Mart</option>
                                                <option>OffShore</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername">Shop Name:</label>
                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Product Name" aria-describedby="inputGroupPrepend" name="P_Name" Required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Shop
                                                Description</label>
                                            <input class="form-control" type="text" placeholder="Enter Shop Description"
                                                id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <h4 class="header-title">Functionality</h4>
                                            <label for="example-text-input" class="col-form-label">Dine In
                                                Booking:  </label><br>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label></br>
                                            <label for="example-text-input" class="col-form-label">Delivery:</label><br>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label></br>
                                            <label for="example-text-input" class="col-form-label">Take Away:</label><br>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label></br>
                                            
                                        </div>
                                        <button type="button" class="btn btn-success mb-3"
                                            style="float: right;">Update</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Textual inputs end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
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