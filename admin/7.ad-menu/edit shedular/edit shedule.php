<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Room Shedule</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card header bg-light ">
                        <h4 class="text-success ">Room Shedule</h4>
                    </div>
                <div class="card-body">
                <form action="inserthandler.php"  method="POST">
                    <div class="mb-3 ">
                        <label>S_ID</label>
                        <input type="text" name="ID"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Reson</label>
                        <input type="text" name="reso"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Room NO</label>
                        <input type="text" name="rno"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Time Period</label>
                        <input type="time" name="time-pe"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>R_ID</label>
                        <input type="text" name="RID"class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit"name="upsh"class="btn btn-primary">Update Shedule details</button>

                    </div>

                </form>
                </div>

                </div>
            </div>
        </div>
    </div>
    

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>