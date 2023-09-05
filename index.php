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
                            <button type="button" class="btn btn-outline-primary"> <a href="add.php">Add new </a> </button>                            <table class="table">
                                <thead> 
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">name</th>
                                    <th scope="col">address</th>
                                    <th scope="col">mobile </th>
                                    <th scope="col">option</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                   
                                    $connection = mysqli_connect("localhost","root","","client");
                                    $sqlq ="SELECT * FROM student";
                                    $run = mysqli_query($connection,$sqlq);
                                    // $data_row = mysqli_num_rows($run);
                                    
                                    $id = 1;
                                    // if($data_row > 0){}
                                    while ($get = mysqli_fetch_array($run)){
                                       $uid =$get['id'];
                                       $name = $get['name'];
                                       $address = $get['address'];
                                       $mobile = $get['mobile'];
                                                                                                                                                                                              
                                   ?>
                                   <tr>
                                    <td> <?php echo $id ?> </td>
                                    <td> <?php echo $name ?> </td>
                                    <td> <?php echo $address ?> </td>
                                    <td> <?php echo $mobile ?> </td>

                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                           <button class="btn btn-primary"> <a href ='edit.php?edit=<?php echo $uid ?>' type="button" class="text-light">Edit </a> </button>
                                           <button class="btn btn-danger"> <a href='delete.php?delete=<?php echo $uid?>' type="button" class="text-light">Delete</a></button>
                                        </div>
                                    </td>
                                   </tr>
                                    <?php $id++;  } ?>
                                </tbody>
                              </table>  
                          </div>
                      </div>
                </div>
            </div>
        </div>

</body>

</html>