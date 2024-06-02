<?php
        $connection =mysqli_connect("localhost","root","","crud");
        $edit =$_GET['edit'];
        $query ="select * from company where id='$edit'";
        $merge = mysqli_query($connection,$query);
        while($getdata=mysqli_fetch_array($merge)){
            $name = $getdata['name'];
            $address = $getdata['address'] ;
            $mobile = $getdata['mobile'];
            
        }
?>













<?php
    $connection =mysqli_connect("localhost","root","","crud");
    
    if(isset($_POST['submit'])){
        $edit =$_GET['edit'];
        $name =$_POST['name'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $query="update company set name ='$name' address='$address' mobile =$mobile where id='$edit'";
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
                            <input type="text" class="form-control" name="name" value= <?php echo $name ;?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">address</label>
                            <input type="text" class="form-control" name="address" value= <?php echo $address ;?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">mobile</label>
                            <input type="text" class="form-control" name="mobile" value= <?php echo $mobile ;?>>
                        </div>
  
  
                        <button type="submit" class="btn btn-primary" name="submit">Its done</button>
</form>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>