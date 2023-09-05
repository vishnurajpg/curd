<?php 
    error_reporting(0);
    $con_edit =mysqli_connect("localhost","root","","client");

    $delete =$_GET['delete'];

    $sql = "delete from student where id ='$delete'";

    $query = mysqli_query($con_edit,$sql);

    if($query){
        echo '<script> location.replace("index.php") </script>';
    }else {
       echo "keep going".$con->error;
    }
   
?>

