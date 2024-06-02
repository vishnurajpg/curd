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
                        student application
                    </h1>
                        </div>
                        <div class="card-body">
                        <button type="button" class="btn btn-danger" > <a href="add.php" class="text-light" style="text-decoration:none">New User</a> </button>

                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">address</th>
                            <th scope="col">mobile</th>
                            <th scope="col">option</th>

                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    $connection =mysqli_connect("localhost","root","","crud");

                                    $query ="select * from company";
                                    
                                    $id =1;

                                    $merge =mysqli_query($connection,$query);
                                   // print_r($merge);
                                    while($getdata=mysqli_fetch_array($merge)){
                                        $uid =$getdata['id'];
                                        $name = $getdata['name'];
                                        $address = $getdata['address'];
                                        $mobile = $getdata['mobile'];
                                        
                                    
                                ?>
                                        <tr>
                                            <td><?php echo $id ?></td>
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $address ?></td>
                                            <td><?php echo $mobile ?></td>
                                            <td>
                                            <button type="button" class="btn btn-success"><a href="edit.php?edit=<?php echo $uid;?>" style="text-decoration:none"  class="text-light" >edit</a></button>
                                            <button type="button" class="btn btn-dark"> <a href="delete.php?delete=<?php echo $uid;?>" style="text-decoration:none" class="text-light" >delete</a></button>
                                            </td>
                                        </tr>
                                    <?php $id++; }?>
                        </tbody>
                        </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>