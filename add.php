<?php 

$con =mysqli_connect("localhost","root","","client");

if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $address = $_POST['address'];
     $mobile = $_POST['mobile'];
     $sql = "INSERT INTO student(name,address,mobile) values('$name','$address','$mobile')";
     $query = mysqli_query($con,$sql);
      
     if($query){
         echo '<script> location.replace("index.php") </script>';
     }else {
        echo "keep going".$con->error;
     }
 
}













?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud_application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    </head>

<body>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card" >
                        <div class="card-header">
                          <h1 class="text-center">Student application</h1>
                        </div>
                        <div class="card-body">
                        <form method ="post" action ="add.php ">
                        <div class="form-group">
                            <label for="">name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name">

                        </div>
                        <div class="form-group">
                            <label for="">address</label>
                            <input type="text" name ="address" class="form-control" placeholder="Enter address">

                        </div>
                        <div class="form-group">
                            <label for="">mobile</label>
                            <input type="text" name ="mobile" class="form-control" placeholder="enter mobile">

                        </div> <br>
                        <input type="submit" name ="submit" class="btn btn-primary" value = "register">
                        </form>
                        </div>
                </div>
            </div>
        </div>

</body>

</html>