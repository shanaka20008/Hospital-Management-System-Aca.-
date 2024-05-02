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

    <title>Payments</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Payment Details
                            <a href="ad-payment.php"class="btn btn-primary float-end">Enter Payments</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>P_ID</th>
                                    <th>Date</th>
                                    <th>Cashier's name</th>
                                    <th>Amount</th>
                                    <th>Pa_ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                              <?php
                              
                              $query="SELECT * FROM payment";
                              $query_run= mysqli_query($connection,$query);

                              if(mysqli_num_rows($query_run)>0)
                              {
                                foreach($query_run as $payment){
                                  

                                  ?>
                                  <tr>
                                    <td><?= $payment['P_ID'];?></td>
                                    <td><?= $payment['date'];?></td>
                                    <td><?= $payment['cashiers_name'];?></td>
                                    <td><?= $payment['amount'];?></td>
                                    <td><?= $payment['Pa_ID'];?></td>
                                    <td>
                                      <a href="update-payments.php?id=<?=$payment['P_ID'];?>" class="btn btn-success btn-sm">Update</a>
                                      

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