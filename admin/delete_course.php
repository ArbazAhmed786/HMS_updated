<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from courses where id ='$nid'");

header('location:index.php?page=manage_course');

?>
