<?php
include 'config.php';
$id_to_be_deleted = $_GET["id"];

$query = "DELETE FROM students WHERE id = $id_to_be_deleted";
$res = mysqli_query($connection, $query);

if($res){
    header("location: show.php?message=Student Deleted Successfully");
} else {
    echo "<script>alert('Error in Deletion')</script>";
}
?>