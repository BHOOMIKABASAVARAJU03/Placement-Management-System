<?php
include 'config.php';
    $id=$_GET['id'];
    $query="DELETE FROM placements WHERE id=$id";
    
    if($conn->query($query)){
       echo "<script>alert('Deleted Succesfully')</script>";
       echo "<meta http-equiv='refresh' content='0;viewjob.php'/>";
    }else{
        echo "<script>alert('Error')</script>";
       echo "<meta http-equiv='refresh'content='0;viewjob.php'/>";
    }
?>