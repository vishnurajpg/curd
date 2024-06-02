<?php 
        $connection =mysqli_connect("localhost","root","","crud");
        $delete = $_GET['delete'];
        $query ="delete from company where id ='$delete'";
        $merge = mysqli_query($connection,$query);
        if($merge){
            header("location:index.php");
        }else{
            echo "check query";
        }
?>