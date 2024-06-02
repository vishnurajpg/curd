<?php
    $connection =mysqli_connect("localhost","root","","crud");
    
    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $query="insert into company (name,address,mobile) values('$name','$address','$mobile')";
        $merge =mysqli_query($connection,$query);
        
        if($merge){
            header("location:index.php");
        }else{
            echo "check your data ";
        }
    }
    
?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud_app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>
                        new user login form
                    </h1>
                </div>
                <div class="card-body">
                <form method ="POST" action="add.php">
                        <div class="mb-3">
                            <label class="form-label">name</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">mobile</label>
                            <input type="text" class="form-control" name="mobile">
                        </div>
  
  
                        <button type="submit" class="btn btn-primary" name="submit">Your Added</button>
</form>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>