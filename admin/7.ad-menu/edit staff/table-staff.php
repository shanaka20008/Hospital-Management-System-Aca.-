<?php

include_once('connect.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Shedule</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Staff Details
                            <a href="edit staff.php" name="uprm"class="btn btn-primary float-end">Enter Staff Details</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>St_ID</th>
                                    <th>unit</th>
                                    <th>Salary</th>
                                    <th>Experience</th>
                                    <th>Job Title</th>
                                    <th>Shift</th>
                                    <th>Room NO</th>
                                    <th>Pa_ID</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                              <?php
                              
                              $query="SELECT * FROM staff";
                              $query_run= mysqli_query($connection,$query);

                              if(mysqli_num_rows($query_run)>0)
                              {
                                foreach($query_run as $staff){
                                  

                                  ?>
                                  <tr>
                                    <td><?= $staff['St_ID'];?></td>
                                    <td><?= $staff['unit'];?></td>
                                    <td><?= $staff['salary'];?></td>
                                    <td><?= $staff['experience'];?></td>
                                    <td><?= $staff['job_title'];?></td>
                                    <td><?= $staff['shift'];?></td>
                                    <td><?= $staff['room_no'];?></td>
                                    <td><?= $staff['Pa_ID'];?></td>
                                    <td>
                                      <a href="updatestaff.php"name="update"class="btn btn-success btn-sm">Update</a>
                                      <a href="deletehandler.php"name="delete" class="btn btn-danger btn-sm">Delete</a>
                                      

                                </td>
                                </tr>

                                  <?php
                                }
 
                              }
                              else{
                                echo"<h5> No Record Found </h5>";
                              }

                              ?>

                               
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    
  </body>
</html>