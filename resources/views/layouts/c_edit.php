<?php
require 'include/conn.php'; // Using database connection file here
$P_Id = $_GET['P_Id'];

if (!isset($_GET['P_Id'])) {
    $_SESSION['error'] = "Missing P_Id";
    header('Location: Catalogue.php');
    return;
}
if (isset($_SESSION['error'])) {
    echo '<p style="color:red">' . $_SESSION['error'] . "</p>\n";
    unset($_SESSION['error']);
}
if (isset($_FILES['uploadfile'])) {
    $filename = addslashes(file_get_contents($_FILES['uploadfile']['tmp_name']));
}

$P_Id = $_REQUEST['P_Id']; // get id through query string

$query = "SELECT * FROM product WHERE P_Id='$P_Id'";

$result = mysqli_query($db, $query); // select query

$data = mysqli_fetch_assoc($result); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
    $P_Name = $_POST["P_Name"];
    $P_Price = $_POST["P_Price"];
    $P_Desc = $_POST["P_Desc"];
    $P_Disc_Price = $_POST["P_Disc_Price"];
    $P_Availability = $_POST["P_Availability"];
    $PC_Category = $_POST["PC_Category"];
    $filename = addslashes(file_get_contents($_FILES['uploadfile']['tmp_name']));

    $edit = mysqli_query($db, "UPDATE product SET P_Name='$P_Name', P_Price='$P_Price', P_Desc='$P_Desc', P_Disc_Price='$P_Disc_Price', `P_Image`='$filename' , `PC_Category`='$PC_Category'
    , `P_Availability`='$P_Availability' WHERE P_Id='$P_Id'");

    if ($edit) {
        mysqli_close($db); // Close connection
        header("location:Catalogue.php"); // redirects to all records page
        exit;
    } else {
        echo mysqli_error($db);
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

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
                                        <form method="POST" enctype="multipart/form-data">
                                            <h4 class="header-title">Update Product</h4>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Product Name:</label>
                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Product Name" aria-describedby="inputGroupPrepend" name="P_Name" value="<?php echo $data['P_Name'] ?>" Required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Price:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">RM</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Price" aria-describedby="inputGroupPrepend" name="P_Price" value="<?php echo number_format((float)$data['P_Price'], 2, '.', '') ?>" Required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Discount Price (optional):</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">RM</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Discount Price" aria-describedby="inputGroupPrepend" name="P_Disc_Price" value="<?php echo number_format((float)$data['P_Disc_Price'], 2, '.', '') ?>">
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Cooking Time:</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Cooking Time" aria-describedby="inputGroupPrepend" name="P_Desc" value="<?php echo $data['P_Desc'] ?>" Required>
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">Minutes</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label for="validationCustomUsername">Image:</label><br>
                                            <input type="file" name="uploadfile" required/><br>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Availability:</label><br>
                                                <label class="switch">
                                                    <input type="checkbox" name="P_Availability" value="1" <?php if ($data['P_Availability'] == '1') {
                                                                                                                echo 'checked';
                                                                                                            } else {
                                                                                                                echo '';
                                                                                                            } ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <label for="example-text-input" class="col-form-label">Category:</label><br>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <select class="form-control" name="PC_Category">
                                                        <?php
                                                        // Check records found or not
                                                        $q = "SELECT * FROM product_category";
                                                        $row = mysqli_query($db, $q);

                                                        if (mysqli_num_rows($row) > 0) {
                                                            while ($fetch = mysqli_fetch_assoc($row)) {
                                                                $PC_Category = $fetch["PC_Category"]; ?>
                                                                <option value="<?php echo '' . $PC_Category . '' ?>" <?php if ($PC_Category == $data['PC_Category']) {
                                                                                                                        echo 'selected';
                                                                                                                    } ?>><?php echo '' . $PC_Category . '' ?></option><?php
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                } ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <button type="submit" style="float: right;" class="btn btn-success mb-3" name="update">Update</button>

                                        </form>

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
            <div class="footer-area">
                </p>
            </div>
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