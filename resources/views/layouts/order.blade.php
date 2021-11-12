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
                            <h4 class="page-title pull-left">Order</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Order</span></li>
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

            <div class="main-content-inner">
                <div class="row">
                    <!-- Buttons Items start -->
                    <div class="col-lg-4 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">New</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Preparing</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Completed</a>
                                    </div>
                                </nav>
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="list-group">
                                            <button type="button" class="list-group-item list-group-item-action">
                                                O1
                                            </button><br>
                                            <button type="button" class="list-group-item list-group-item-action">
                                                O2
                                            </button><br>
                                            <button type="button" class="list-group-item list-group-item-action">
                                                O3
                                            </button><br>
                                            <button type="button" class="list-group-item list-group-item-action">
                                                O4
                                            </button><br>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="list-group">
                                            <div class="list-group">
                                                <button type="button" class="list-group-item list-group-item-action">
                                                    O7
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="list-group">
                                            <div class="list-group">
                                                <button type="button" class="list-group-item list-group-item-action">
                                                    O6
                                                </button><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ********************* -->
                    <div class="col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Order Info: O1</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase">
                                                <tr class>
                                                    <th colspan="2" style="text-align:center">DINE-IN</th>
                                                    <th colspan="2" style="text-align:center">John / 0123456789</th>
                                                </tr>
                                            </thead>
                                            <thead class="text-uppercase bg-light">
                                                <tr class>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Notes</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nasi Lemak</td>
                                                    <td>2</td>
                                                    <td>No anchovies</td>
                                                    <td>RM 2.40</td>
                                                </tr>
                                                <tr>
                                                    <td>Mee Goreng</td>
                                                    <td>1</td>
                                                    <td></td>
                                                    <td>RM 5.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <input type="button" value="Start Preparing" class="button1" style="float: right">
                            </div>
                        </div>
                    </div>
                    <!-- Striped table end -->
                </div>
            </div>
        </div>
    </div>
    <!-- main content area end -->

    <!-- footer area start-->
    @include('include.footer') 
    <!-- footer area end-->
    </div>
    <!-- page container area end -->

    @include('include.script') 
    
</body>

</html>