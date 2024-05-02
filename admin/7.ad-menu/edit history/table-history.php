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

    <title>History</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>History
                            <a href="edit-history.php"class="btn btn-primary float-end">History input</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>H_ID</th>
                                    <th>Description</th>
                                    <th>Past Illnesses</th>
                                    <th>Past Treatment</th>
                                    <th>Past Hospitalized dates</th>
                                    <th>Past Dr</th>
                                    <th>Pa_ID</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                             
                              <?php
                              /* data getting to tabel */
                              $query="SELECT * FROM history";
                              $query_run= mysqli_query($connection,$query);

                              if(mysqli_num_rows($query_run)>0)
                              {
                                foreach($query_run as $history){

                                  ?>
                                  <tr>
                                    <td><?= $history['H_ID'];?></td>
                                    <td><?= $history['description'];?></td>
                                    <td><?= $history['past_illnesses'];?></td>
                                    <td><?= $history['past_treatments'];?></td>
                                    <td><?= $history['past_hospitalized_dt'];?></td>
                                    <td><?= $history['past_channeled_dr'];?></td>
                                    <td><?= $history['Pa_ID'];?></td>
                                    <td>
                                      <a href="updateHistory.php" name="update" class="btn btn-success btn-sm">Update</a>
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