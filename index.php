<?php 

include "connect.php";

$query = "SELECT * FROM `image`";

$sql = mysqli_query($con, $query);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>id</th>

        <th>name</th>

        <th>class</th>

        <th>phonenum</th>

        <th>image</th>

        <th>edit</th>

        <th>delete</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if (mysqli_num_rows($sql)> 0) {

                while ($row=mysqli_fetch_assoc($sql)) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['class']; ?></td>

                    <td><?php echo $row['phonenum']; ?></td>

                    <td><?php echo $row['studimage']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>


























