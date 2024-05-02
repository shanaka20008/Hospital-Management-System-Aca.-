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

    <title>Waiting List</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-hearder">
                        <h4 >Waiting List</h4>
                    </div>
                    <div class="card-body">
                        <div class="raw">
                            <div class="col-md-7">
                                <form action="" method="GET">
                                
                                
                                    <div class="input-group mb-3">
                                    <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Enter Your ID" >
                                    <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                            </form>

                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md-12">

            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table bordered">
                        <thead>
                            <tr>
                                <th>W_ID</th>
                                <th>type</th>
                                <th>allocate time</th>
                                <th>reson</th>
                                <th>shedular name</th>
                                <th>intensive status</th>
                                <th>Pa_ID</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            
                            if(isset($_GET['search']))
                            {
                                $search = $_GET['search'];
                                $query = "SELECT * FROM waiting_list WHERE Pa_ID = '$search' ";
                                $query_run = mysqli_query($connection, $query);

                                if(mysqli_num_rows($query_run)>0)
                                {
                                    foreach($query_run as $waiting_list)
                                    {
                                        ?>
                                         <tr>
                                        <td><?=$waiting_list['W_ID'];?></td>
                                        <td><?=$waiting_list['type'];?></td>
                                        <td><?=$waiting_list['allocate_time'];?></td>
                                        <td><?=$waiting_list['reson'];?></td>
                                        <td><?=$waiting_list['shedular_name'];?></td>
                                        <td><?=$waiting_list['intensive_status'];?></td>
                                        <td><?=$waiting_list['Pa_ID'];?></td>


                                        </tr>

                                        <?php
                                    }
                                }

                                else{
                                    ?>
                                     <tr>
                                        <td colspan="7">NO Records</td>


                                     </tr>

                                    <?php
                                }



                            }


                            ?>
                            <tr>
                                <td></td>


                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>



        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>