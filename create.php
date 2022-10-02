<?php
session_start();
include "connect.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Image-CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>PHP Image-CRUD</h4>
                    </div>
                    <div class="card-body">
                    <!-- <?php
                    // if();
                    // ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> -->
                        <form action="add.php" method="POST" enctype="multipart/form-data">
                            <!-- <input type="hidden" name="stud_id"> -->
                            <div class="form-group">
                                <label for="">Student Name</label>
                                <input type="text" name="name" required class="form-control" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="">Student Class</label>
                                <input type="text" name="class" required class="form-control" placeholder="Enter class">
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" name="phonenum" required class="form-control" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label for="">Student Image</label>
                                <input type="file" name="studimage" class="form-control">
                                <!-- <input type="hidden" name="studimageold" value="<?php echo $row['studimage']?>"> -->
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="Save" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </form>
                     
                    
</div>
                </div>
            </div>
        </div>
    </div>
    
  </body>

</html>
                    