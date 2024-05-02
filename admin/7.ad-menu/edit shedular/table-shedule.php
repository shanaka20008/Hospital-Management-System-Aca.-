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
                        <h4>Shedule Details
                            <a href="edit shedule.php"class="btn btn-primary float-end">Enter Shedule Details</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S_ID</th>
                                    <th>Reson</th>
                                    <th>Room NO</th>
                                    <th>Time Period</th>
                                    <th>R_ID</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                              <?php
                              
                              $query="SELECT * FROM shedular";
                              $query_run= mysqli_query($connection,$query);

                              if(mysqli_num_rows($query_run)>0)
                              {
                                foreach($query_run as $shedular){
                                  

                                  ?>
                                  <tr>
                                    <td><?= $shedular['S_ID'];?></td>
                                    <td><?= $shedular['reson'];?></td>
                                    <td><?= $shedular['room_no'];?></td>
                                    <td><?= $shedular['time_period'];?></td>
                                    <td><?= $shedular['R_ID'];?></td>
                                    <td>
                                      <a href="update-shedule.php"name="update"class="btn btn-success btn-sm">Update</a>
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