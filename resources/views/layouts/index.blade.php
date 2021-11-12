 @include('include.header') 

<body>

    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">

        <!-- sidebar menu area start -->
        @include('include.sidebar') 
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">

            <!-- header area start -->
            @include('include.header_area') 
            <!-- header area end -->

            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Dashboard</span></li>
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

            <!-- main content inner start -->
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area sales-style-two">
                    <div class="row">
                        <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Orders</div>
                                            <h2>10</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Dine-In</div>
                                            <h2>2</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Booking</div>
                                            <h2>3</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Delivery</div>
                                            <h2>5</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <!-- Statistics area start -->
                <div class="col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">User Statistics</h4>
                                <div id="user-statistics"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Statistics area end -->
                    <!-- sentiment analysis area start -->
                    <div class="col-lg-4 mt-5">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="header-title">Sentiment Analysis</h4>
                                <canvas id="sent_analysis" width="450" height="233"></canvas>
                                <h4></h4>
                            </div>
                        </div>
                    </div>
                    <!-- sentiment analysis area end -->
                </div>

                <div class="row">
                    <!-- product sold area start -->
                    <div class="col-xl-8 col-lg-7 col-md-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-4">
                                    <h4 class="header-title mb-0">Recent Order List</h4>
                                    <a class="btn btn-primary mb-3" href="Order.php" role="button">View Details</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class="text-uppercase bg-secondary">
                                            <tr class="text-white">
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Order Time</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>John</td>
                                                <td>27-08-2018 01:22:12</td>
                                                <td>RM 10</td>
                                                <td style="color:#00D905;">New</td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Ali</td>
                                                <td>27-08-2018 01:22:12</td>
                                                <td>RM 11</td>
                                                <td style="color:#00D905;">New</td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Mahmud</td>
                                                <td>27-08-2018 01:22:12</td>
                                                <td>RM 18</td>
                                                <td style="color:#00D905;">New</td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Sulaiman</td>
                                                <td>27-08-2018 01:22:12</td>
                                                <td>RM 17</td>
                                                <td style="color:#00D905;">New</td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Kamaruzzaman</td>
                                                <td>27-08-2018 01:22:12</td>
                                                <td>RM 13</td>
                                                <td style="color:#00D905;">New</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="pagination_area pull-right mt-5">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                        </ul><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product sold area end -->
                    <!-- team member area start -->
                    <div class="col-xl-4 col-lg-5 col-md-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex flex-wrap justify-content-between mb-4 align-items-center">
                                    <h4 class="header-title mb-0">Product Rating</h4>
                                </div>
                                <div class="member-box">
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <div class="media-body ml-5">
                                                <p>Nasi Lemak</p><span>Main Dish</span>
                                            </div>
                                            <div class="tm-social">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <div class="media-body ml-5">
                                                <p>Nasi Goreng</p><span>Main Dish</span>
                                            </div>
                                            <div class="tm-social">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <div class="media-body ml-5">
                                                <p>Mee Goreng</p><span>Main Dish</span>
                                            </div>
                                            <div class="tm-social">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <div class="media-body ml-5">
                                                <p>Iced Tea</p><span>Beverage</span>
                                            </div>
                                            <div class="tm-social">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination_area pull-right mt-5">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- team member area end -->
                </div>
                <!-- sales report area end -->

            </div>
        </div>
        <!-- main content area end -->
    </div>
    <!-- container content area end -->

    <!-- footer area start-->
    @include('include.footer') 
    <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- offset area start -->
    @include('include.offset')
    <!-- offset area end -->

    @include('include.script')
   

</body>

</html>