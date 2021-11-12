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
                            <h4 class="page-title pull-left">Catalogue</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.html">Home</a></li>
                                <li><span>Catalogue</span></li>
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
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="search-box pull-left">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search..." style="margin: 25px;" required>
                                </form>
                            </div>
                            <div class="card-body">
                                <input type="button" id="myBtn" value="Edit Category" class="button1">
                                <a href="c_add.php"><input type="button" value="Add Product" class="button1"></a>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" >Main Dish</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Beverage</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Dessert</a>
                                    </div>
                                </nav>
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Discount Price</th>
                                                    <th scope="col">Cooking Time</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Availability</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT * FROM product";
                                                $row = mysqli_query($db, $query);

                                                // Check records found or not
                                                if (mysqli_num_rows($row) > 0) {
                                                    while ($fetch = mysqli_fetch_assoc($row)) {
                                                        $P_Id = $fetch["P_Id"];
                                                        $P_Name = $fetch["P_Name"];
                                                        $P_Price = $fetch["P_Price"];
                                                        $P_Disc_Price = $fetch["P_Disc_Price"];
                                                        $P_Availability = $fetch["P_Availability"];
                                                        $P_Desc = $fetch["P_Desc"];
                                                        $P_Image = $fetch["P_Image"];

                                                        echo '<tr> 
                                                          <td>' . $P_Id . '</td>
                                                          <td>' . $P_Name . '</td>
                                                          <td>RM ' . number_format((float)$P_Price, 2, '.', '') . '</td>'; ?>
                                                        <td>
                                                            <?php
                                                            if (!$P_Disc_Price == 0) {
                                                                echo 'RM ' . number_format((float)$P_Disc_Price, 2, '.', '') . '';
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>
                                                        </td>
                                                        <?php
                                                        echo '<td>' . $P_Desc . ' Minutes</td>'; ?>
                                                        <td><img src="data:assets/images//jpg;charset=utf8;base64,<?php echo base64_encode($fetch['P_Image']); ?>" alt="" border=3 height=70 width=70></td>
                                                        <td><?php
                                                        if ($P_Availability == '1') {
                                                            echo '<label class="switch">
                                                           <input type="checkbox" checked onclick="return false;">
                                                           <span class="slider round"></span>
                                                           </label>';
                                                        } else {
                                                            echo '<label class="switch">
                                                        <input type="checkbox" onclick="return false;">
                                                        <span class="slider round"></span>
                                                        </label>';
                                                        }?></td>
                                                        <td>
                                                            <a href="c_edit.php?P_Id=<?php echo $fetch['P_Id']; ?>"><i class="fa fa-edit fa-2x" style="color:#4CAF50"></i></a>
                                                            <a href="c_delete.php?P_Id=<?php echo $fetch['P_Id']; ?>"><i class="fa fa-trash fa-2x" style="color:#f44336; padding: 3px 8px;"></i></a>
                                                        </td>
                                                        </tr> <?php
                                                            }
                                                        } else {
                                                            echo "<tr>";
                                                            echo "<td colspan='4'>No product found.</td>";
                                                            echo "</tr>";
                                                        } ?>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Discount Price</th>
                                                    <th scope="col">Cooking Time</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Availability</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Teh Ais</td>
                                                    <td>RM 2.00</td>
                                                    <td></td>
                                                    <td>2 Minutes</td>
                                                    <td><img src="assets/images/tehais.jpg" alt="" border=3 height=50 width=50></img></td>
                                                    <td><label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label></td>
                                                    <td><i class="fa fa-edit" style="color:#4CAF50; font-size: 25px;"></i><i class="fa fa-trash" style="color:#f44336; padding: 3px 8px; font-size: 25px;"></i></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Discount Price</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Availability</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Pudding</td>
                                                    <td>RM 4.00</td>
                                                    <td></td>
                                                    <td>5 Minutes</td>
                                                    <td><img src="assets/images/pudding.jpg" alt="" border=3 height=50 width=50></img></td>
                                                    <td><label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label></td>
                                                    <td><i class="fa fa-edit" style="color:#4CAF50; font-size: 25px;"></i><i class="fa fa-trash" style="color:#f44336; padding: 3px 8px; font-size: 25px;"></i></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table primary start -->
                    </div>
                    <?php include 'add_Cat.php'; ?>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- *************************************************************************************************************************-->
        

        <!-- footer area start-->
        @include('include.footer') 

        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- offset area start -->
    @include('include.offset') 

    <!-- offset area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>