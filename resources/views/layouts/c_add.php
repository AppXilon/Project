<?php include 'include/header.php'; ?>


<body>
    
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">

        <!-- sidebar menu area start -->
        <?php include 'include/sidebar.php'; ?>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php include 'include/header_area.php'?> 
            <!-- header area end -->
            
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
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
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        error_reporting(0);
                                        // define variables and set to empty values
                                        $P_Id = $P_Name = $P_Price = $P_Desc = $uploadfile = $P_Discount = $P_Disc_Price = $PC_Category = ""; 

                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            $P_Id = test_input($_POST["P_Id"]);
                                            $P_Name = test_input($_POST["P_Name"]);
                                            $P_Price = test_input($_POST["P_Price"]);
                                            $P_Desc = test_input($_POST["P_Desc"]);
                                            $PC_Category = test_input($_POST["PC_Category"]);
                                            $P_Availability = test_input($_POST["P_Availability"]);
                                            $P_Disc_Price = test_input($_POST["P_Disc_Price"]);
                                        }

                                        function test_input($data)
                                        {
                                            $data = trim($data);
                                            $data = stripslashes($data);
                                            $data = htmlspecialchars($data);
                                            return $data;
                                        }
                                        ?>

                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " enctype="multipart/form-data">
                                            <h4 class="header-title">Add Product</h4>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Product Id:</label>
                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Product Id" aria-describedby="inputGroupPrepend" name="P_Id" Required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Product Name:</label>
                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Product Name" aria-describedby="inputGroupPrepend" name="P_Name" Required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Price:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">RM</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Price" aria-describedby="inputGroupPrepend" name="P_Price" Required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Discount Price (optional):</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">RM</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Discount Price" aria-describedby="inputGroupPrepend" name="P_Disc_Price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Cooking Time:</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Cooking Time" aria-describedby="inputGroupPrepend" name="P_Desc">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">Minutes</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label for="validationCustomUsername">Image:</label><br>
                                            <input type="file" name="uploadfile" value="" required/><br>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Availability:</label><br>
                                                <label class="switch">
                                                    <input type="checkbox" name="P_Availability" value="1" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>

                                            <label for="example-text-input" class="col-form-label">Category:</label><br>
                                            <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                            <select class="form-control" name = "PC_Category" >
                                                <option disabled selected>Select One</option>
                                                <?php
                                                // Check records found or not
                                                $query = "SELECT * FROM product_category";
                                                $row = mysqli_query($db, $query);
                                                if (mysqli_num_rows($row) > 0) {
                                                    while ($fetch = mysqli_fetch_assoc($row)) {
                                                        $PC_Category = $fetch["PC_Category"]; ?>
                                                        <option  value="<?php echo ''.$PC_Category.'' ?>"><?php echo ''.$PC_Category.''?></option><?php
                                                    }
                                                } ?>
                                            </select>

                                            </div>
                                            </div>

                                            <button type="submit" style="float: right; margin-right: 10px" class="btn btn-success mb-3" name="upload">Add</button>
                                            <button type="submit" style="float: right; margin-right: 10px" class="btn btn-danger mb-3" onClick="document.location.href='Catalogue.php';">Cancel</button>
                                        </form>


                                        <?php
                                        $P_Id = $P_Name = $P_Price = $P_Desc = $uploadfile = $P_Discount = $P_Disc_Price =  $msg = "";

                                        // If upload button is clicked ...
                                        if (isset($_POST['upload'])) {
                                            $P_Id = $_POST["P_Id"];
                                            $P_Name = $_POST["P_Name"];
                                            $P_Price = $_POST["P_Price"];
                                            $P_Desc = $_POST["P_Desc"];
                                            $PC_Category = $_POST["PC_Category"];
                                            $P_Disc_Price = $_POST["P_Disc_Price"];
                                            $P_Availability = $_POST["P_Availability"];
                                            $filename = addslashes(file_get_contents($_FILES['uploadfile']['tmp_name']));
                                            $tempname = $_FILES["uploadfile"]["tmp_name"];

                                            // Get all the submitted data from the form
                                            $sql = "INSERT INTO product (`P_Id`, `P_Name`,`P_Price`,`P_Desc`,`P_Disc_Price`, `P_Image`, `P_Availability`, `PC_Category`) VALUES 
                                            ('$P_Id', '$P_Name','$P_Price','$P_Desc','$P_Disc_Price','$filename','$P_Availability','$PC_Category')";

                                            // Execute query
                                            if (mysqli_query($db, $sql)) {
                                                mysqli_close($db); // Close connection
                                                echo "<script>window.location.href='Catalogue.php';</script>"; // redirects to all records page
                                                exit;
                                            } else {

                                                echo '<script>alert("' ?><?php echo mysqli_error($db); ?><?php echo '")</script>';
                                                                                                        }
                                                                                                    }
                                                                                                            ?>

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
        <footer>
        <?php include('include/footer.php'); ?>
        </footer>
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