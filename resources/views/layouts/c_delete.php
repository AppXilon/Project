<?php
require 'include/conn.php';
$id=$_GET['P_Id'];
$del = mysqli_query($db,"DELETE from product WHERE P_Id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:Catalogue.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Unable to delete"; // display error message if not delete
}
?>