<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Staff</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card header bg-light ">
                        <h4 class="text-success ">Staff Details</h4>
                    </div>
                <div class="card-body">
                <form action="inserthandler.php"  method="POST">
                    <div class="mb-3 ">
                        <label>St_ID</label>
                        <input type="text" name="ID"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>unit</label>
                        <input type="text" name="unit"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Salary</label>
                        <input type="text" name="sal"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Experience</label>
                        <input type="text" name="exp"class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label>Job Title</label>
                        <input type="text" name="jb"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Shift</label>
                        <input type="time" name="shift"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Room NO</label>
                        <input type="text" name="RNO"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Pa_ID</label>
                        <input type="text" name="PID"class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit"name="upRmD"class="btn btn-primary">Update Staff Details</button>

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