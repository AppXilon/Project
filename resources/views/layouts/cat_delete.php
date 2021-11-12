<?php
require 'include/conn.php';
$id=$_GET['PC_Category'];
$del = mysqli_query($db,"DELETE from product_category WHERE PC_Category = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    echo '<script>alert("Category Deleted")</script>';
    echo "<script>window.location.href='Catalogue.php';</script>";
    exit;	
}
else
{
    echo '<script>alert("Unable to delete")</script>'; // display error message if not delete
}
?>