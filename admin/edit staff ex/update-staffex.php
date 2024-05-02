<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Staff Experience</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card header bg-light ">
                        <h4 class="text-success ">Staff Experience</h4>
                    </div>
                <div class="card-body">
                <form action="inserthandler.php"  method="POST">
                    <div class="mb-3 ">
                        <label>Specialist Areas</label>
                        <input type="text" name="SP_A"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>St_ID</label>
                        <input type="text" name="st_idex"class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit"name="up_stff"class="btn btn-primary">Update Staff Ex</button>

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