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
                            <h4 class="page-title pull-left">Booking List</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Booking List</span></li>
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
            <!-- *************************************************************************************************************************-->
           
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="search-box pull-left">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search..." style="margin: 25px;"
                                        required>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-info">
                                                <tr class="text-white">
                                                    <th scope="col">DateTime</th>
                                                    <th scope="col">Pax</th>
                                                    <th scope="col">Table</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>24.09.2021, 15:00</td>
                                                    <td>4</td>
                                                    <td>5</td>
                                                    <td>Alfreda Parrish</td>
                                                    <td>ube@gmail.com</td>
                                                    <td><a class="btn btn-primary mb-3" href="#" role="button">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>24.09.2021, 15:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Adele Bradshaw</td>
                                                    <td>dudyxyhy@gmail.com</td>
                                                    <td><a class="btn btn-primary mb-3" href="#" role="button">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>24.09.2021, 15:00</td>
                                                    <td>3</td>
                                                    <td>6</td>
                                                    <td>Ali</td>
                                                    <td>ali@gmail.com</td>
                                                    <td><a class="btn btn-primary mb-3" href="#" role="button">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>24.09.2021, 15:00</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>Seman</td>
                                                    <td>semanxseman@gmail.com</td>
                                                    <td><a class="btn btn-primary mb-3" href="#" role="button">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Booking Details</h4>
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Product Name"
                                                    id="example-text-input">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">RM</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationCustomUsername"
                                                        placeholder="0.00" aria-describedby="inputGroupPrepend" required="">
                                                </div>
                                            </div>
    
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationCustomUsername"
                                                        placeholder="00" aria-describedby="inputGroupPrepend" required="">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">Minutes</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02">Choose
                                                        Image</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Availability</label>
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
    
                                            <label for="example-text-input" class="col-form-label">Category</label>
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                data-toggle="dropdown">
                                                Select One
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Breakfast</a>
                                                <a class="dropdown-item" href="#">Lunch</a>
                                                <a class="dropdown-item" href="#">Dinner</a>
                                            </div>
                                            <button type="button" class="btn btn-success mb-3"
                                                style="float: right;">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table primary start -->
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