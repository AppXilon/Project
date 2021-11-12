<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add Category</h4>

                <?php
                error_reporting(0);
                
                $PC_Category = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $PC_Category = test_input($_POST["PC_Category"]);
                }

                function test_input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>

                <div class="form-group">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input class="form-control" name="PC_Category" type="text" placeholder="Category Name" id="example-text-input">
                </div>
                <button type="submit" style="float: right; margin-right: 10px" class="btn btn-success mb-3" name="upload">Add</button>
                </form>

                <?php
                $PC_Category = "";

                // If upload button is clicked ...
                if (isset($_POST['upload'])) {
                    $PC_Category = $_POST["PC_Category"];

                    // Get all the submitted data from the form
                    $sql = "INSERT INTO product_category (`PC_Category`) VALUES ('$PC_Category')";

                    // Execute query
                    if (mysqli_query($db, $sql)) {
                        mysqli_close($db); // Close connection
                        echo '<script>alert("Category Added Successfully")</script>';
                        echo "<script>window.location.href='Catalogue.php';</script>"; // redirects to all records page
                        exit;
                    } else {

                        echo '<script>alert("Duplicate Category")</script>';
                    }
                }

                ?>

                <table class="table text-center">
                    <thead class="text-uppercase bg-light">
                        <tr>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM product_category LIMIT 6";
                        $row = mysqli_query($db, $query);

                        // Check records found or not
                        if (mysqli_num_rows($row) > 0) {
                            while ($fetch = mysqli_fetch_assoc($row)) {
                                $PC_Category = $fetch["PC_Category"];

                                echo '<tr> 
                                 <td>' . $PC_Category . '</td>' ?>
                                <td><a href="cat_delete.php?PC_Category=<?php echo $fetch['PC_Category']; ?>" onclick="myFunction()"><i class="fa fa-trash" style="color:#f44336; padding: 3px 8px; font-size: 25px;"></i></a></td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr>";
                            echo "<td colspan='4'>No category found.</td>";
                            echo "</tr>";
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function myFunction() {
  confirm("Confirm Delete? All product in the category will be deleted");
}
</script>